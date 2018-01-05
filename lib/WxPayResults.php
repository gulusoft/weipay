<?php

namespace GuluSoft\WxPay;


/**
 * 
 * �ӿڵ��ý����
 * @author widyhu
 *
 */
class WxPayResults extends WxPayDataBase
{
	/**
	 * 
	 * ���ǩ��
	 */
	public function CheckSign()
	{
        return true;
		//fix�쳣
		if(!$this->IsSignSet()){
			throw new WxPayException("ǩ������");
		}
		
		$sign = $this->MakeSign();
		if($this->GetSign() == $sign){
			return true;
		}
		throw new WxPayException("ǩ������");
	}
	
	/**
	 * 
	 * ʹ�������ʼ��
	 * @param array $array
	 */
	public function FromArray($array)
	{
		$this->values = $array;
	}
	
	/**
	 * 
	 * ʹ�������ʼ������
	 * @param array $array
	 * @param �Ƿ���ǩ�� $noCheckSign
	 */
	public static function InitFromArray($array, $noCheckSign = false)
	{
		$obj = new self();
		$obj->FromArray($array);
		if($noCheckSign == false){
			$obj->CheckSign();
		}
        return $obj;
	}
	
	/**
	 * 
	 * ���ò���
	 * @param string $key
	 * @param string $value
	 */
	public function SetData($key, $value)
	{
		$this->values[$key] = $value;
	}
	
    /**
     * ��xmlתΪarray
     * @param string $xml
     * @throws WxPayException
     */
	public static function Init($xml)
	{	
		$obj = new self();
		$obj->FromXml($xml);
		//fix bug 2015-06-29
		if($obj->values['return_code'] != 'SUCCESS'){
			 return $obj->GetValues();
		}
		$obj->CheckSign();
        return $obj->GetValues();
	}
}

