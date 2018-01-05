<?php

namespace GuluSoft\WxPay;


/**
 * 
 * ���ݶ�������࣬�����ж������������������Ϊ��������
 * ����/����/��ȡǩ�������xml��ʽ�Ĳ�������xml��ȡ���ݶ����
 * @author widyhu
 *
 */
class WxPayDataBase
{
	protected $values = array();
	
	/**
	* ����ǩ�������ǩ�������㷨
	* @param string $value 
	**/
	public function SetSign()
	{
		$sign = $this->MakeSign();
		$this->values['sign'] = $sign;
		return $sign;
	}
	
	/**
	* ��ȡǩ�������ǩ�������㷨��ֵ
	* @return ֵ
	**/
	public function GetSign()
	{
		return $this->values['sign'];
	}
	
	/**
	* �ж�ǩ�������ǩ�������㷨�Ƿ����
	* @return true �� false
	**/
	public function IsSignSet()
	{
		return array_key_exists('sign', $this->values);
	}

	/**
	 * ���xml�ַ�
	 * @throws WxPayException
	**/
	public function ToXml()
	{
		if(!is_array($this->values) 
			|| count($this->values) <= 0)
		{
    		throw new WxPayException("���������쳣��");
    	}
    	
    	$xml = "<xml>";
    	foreach ($this->values as $key=>$val)
    	{
    		if (is_numeric($val)){
    			$xml.="<".$key.">".$val."</".$key.">";
    		}else{
    			$xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
    		}
        }
        $xml.="</xml>";
        return $xml; 
	}
	
    /**
     * ��xmlתΪarray
     * @param string $xml
     * @throws WxPayException
     */
	public function FromXml($xml)
	{	
		if(!$xml){
			throw new WxPayException("xml�����쳣��");
		}
        //��XMLתΪarray
        //��ֹ�����ⲿxmlʵ��
        libxml_disable_entity_loader(true);
        $this->values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);		
		return $this->values;
	}
	
	/**
	 * ��ʽ��������ʽ����url����
	 */
	public function ToUrlParams()
	{
		$buff = "";
		foreach ($this->values as $k => $v)
		{
			if($k != "sign" && $v != "" && !is_array($v)){
				$buff .= $k . "=" . $v . "&";
			}
		}
		
		$buff = trim($buff, "&");
		return $buff;
	}
	
	/**
	 * ����ǩ��
	 * @return ǩ����������������sign��Ա��������Ҫ����ǩ����Ҫ����SetSign������ֵ
	 */
	public function MakeSign()
	{
		//ǩ������һ�����ֵ����������
		ksort($this->values);
		$string = $this->ToUrlParams();
		//ǩ�����������string�����KEY
		$string = $string . "&key=".WxPayConfig::KEY;
		//ǩ����������MD5����
		$string = md5($string);
		//ǩ�������ģ������ַ�תΪ��д
		$result = strtoupper($string);
		return $result;
	}
	
	/**
	 * ��ȡ���õ�ֵ
	 */
	public function GetValues()
	{
		return $this->values;
	}
}

