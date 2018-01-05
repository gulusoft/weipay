<?php 
ini_set('date.timezone','Asia/Shanghai');
date_default_timezone_set('PRC');

//error_reporting(E_ERROR);
header("Content-type: text/html; charset=utf-8");   
$wxPayRoot = dirname(__FILE__) . "/../";
$egRoot = dirname(__FILE__) . "/";

require_once  $wxPayRoot . "lib/WxPay.Api.php";
require_once $egRoot . "WxPay.JsApiPay.php";
require_once $egRoot . 'log.php';

//初始化日志
$logHandler= new CLogFileHandler( $wxPayRoot ."logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

//打印输出数组信息
function printf_info($data)
{
    foreach($data as $key=>$value){
       // echo "<font color='#00ff55;'>$key</font> : $value <br/>";
    }
}

//①、获取用户openid
$tools = new JsApiPay();
$openId = $member->getOpenId();

//②、统一下单
$input = new WxPayUnifiedOrder();
$input->SetBody($cms->getTitle());
$input->SetAttach($cms->getTitle());
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis") . "-" . $order->getId());
$input->SetTotal_fee($order->getPrice() * 100);
$input->SetTime_start(date("YmdHis",time()));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag($cms->getTitle());
$input->SetNotify_url( CoreConfig::getConfigValue("web/site_url")."home/WeiXin/notify");
$input->SetTrade_type("JSAPI");
$input->SetOpenid($openId);
$order = WxPayApi::unifiedOrder($input);
//echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
printf_info($order);
$jsApiParameters = $tools->GetJsApiParameters($order);

//获取共享收货地址js函数参数
$editAddress = $tools->GetEditAddressParameters();

//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
/**
 * 注意：
 * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
 * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
 * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
 */
?>

<script type="text/javascript">
//调用微信JS api 支付
var REFERER = "<?php 
echo $cms->getUrl();
//echo $_SERVER["HTTP_REFERER"];

?>";
function jsApiCall()
{
    WeixinJSBridge.invoke(
        'getBrandWCPayRequest',
        <?php echo $jsApiParameters; ?>,
        function(res){
            //WeixinJSBridge.log(res.err_msg);
            //alert(res.err_code + "|" +res.err_desc+ "|" +res.err_msg);
            
            if(res.err_msg == "get_brand_wcpay_request:ok") {
                //跳回referer页
                alert("付款成功");
                if(REFERER.indexOf("?") != -1) {
                    REFERER = REFERER + "&sp=" + (new Date());
                } else {
                    REFERER = REFERER + "?sp=" + (new Date());
                }
                location.href = REFERER;
            } else {
                alert(res.err_msg);
                location.href = REFERER;
            }
            
        }
    );
}

function callpay()
{
    if (typeof WeixinJSBridge == "undefined"){
        if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
        }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
            document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
        }
    }else{
        jsApiCall();
    }
}
</script>
<script type="text/javascript">
//获取共享地址
function editAddress()
{
    WeixinJSBridge.invoke(
        'editAddress',
        <?php echo $editAddress; ?>,
        function(res){
            var value1 = res.proviceFirstStageName;
            var value2 = res.addressCitySecondStageName;
            var value3 = res.addressCountiesThirdStageName;
            var value4 = res.addressDetailInfo;
            var tel = res.telNumber;
            
            //alert(value1 + value2 + value3 + value4 + ":" + tel);
        }
    );
}

window.onload = function(){
    if (typeof WeixinJSBridge == "undefined"){
        if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', editAddress, false);
        }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', editAddress); 
            document.attachEvent('onWeixinJSBridgeReady', editAddress);
        }
    }else{
        editAddress();
    }
};

</script>
<!--
<div align="center">
    <button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" >立即支付</button>
</div>
-->