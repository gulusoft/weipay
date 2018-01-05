<?php
ini_set('date.timezone','Asia/Shanghai');
date_default_timezone_set('PRC');
error_reporting(E_ERROR);
header("Content-type: text/html; charset=utf-8");   
$wxPayRoot = dirname(__FILE__) . "/../";
$egRoot = dirname(__FILE__) . "/";

require_once  $wxPayRoot . "lib/WxPay.Api.php";
require_once  $wxPayRoot . 'lib/WxPay.Notify.php';
require_once $egRoot . 'log.php';

//初始化日志
$logHandler= new CLogFileHandler( $wxPayRoot ."logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		Log::DEBUG("query:" . json_encode($result));
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
		Log::DEBUG("call back:" . json_encode($data));
		$notfiyOutput = array();
		
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}
        
        $outOrderNum = $data["out_trade_no"];
        $temp = explode("-",$outOrderNum);
        if(!isset($temp[1])) {
            return true;
        }
        $orderId = $temp[1];
        $cmsMember = new CmsMember();
        $cmsMember->load($orderId);
        if($cmsMember->getId()) {
            $cmsMember->setStatus(1);
            $cmsMember->save();
            
            $cmsId = $cmsMember->getCmsId();
            $cms = new Cms();
            $cms->load($cmsId);
            
            $memberId = $cmsMember->getMemberId();
            $member = new WeiXin_Member();
            $member->load($memberId);
            
            $client = WeiXin_Client::getInstance();
            $messageContent = "恭喜您,您已经成功购买: " . $cms->getTitle();
            $messageContent .= ", <a href='".$cms->getUrl()."'>点此查看</a>.";
            if($member->getId()) {
                $response = $client->sendCSRTextMessage($member->getOpenId(),$messageContent);
            }
            
        }
		return true;
	}
}

Log::DEBUG("begin notify");
$data = file_get_contents("php://input");
Log::DEBUG(var_export($data,true));
Log::DEBUG(var_export($_POST,true));
Log::DEBUG(var_export($_POST,true));
Log::DEBUG(var_export($_GET,true));
Log::DEBUG(var_export($_SERVER,true));
$notify = new PayNotifyCallBack();
$notify->Handle(false);
