<?php

namespace GuluSoft\WxPay;
/**
 * 
 * �رն����������
 * @author widyhu
 *
 */
class WxPayCloseOrder extends WxPayDataBase
{
	/**
	* ����΢�ŷ���Ĺ����˺�ID
	* @param string $value 
	**/
	public function SetAppid($value)
	{
		$this->values['appid'] = $value;
	}
	/**
	* ��ȡ΢�ŷ���Ĺ����˺�ID��ֵ
	* @return ֵ
	**/
	public function GetAppid()
	{
		return $this->values['appid'];
	}
	/**
	* �ж�΢�ŷ���Ĺ����˺�ID�Ƿ����
	* @return true �� false
	**/
	public function IsAppidSet()
	{
		return array_key_exists('appid', $this->values);
	}


	/**
	* ����΢��֧��������̻���
	* @param string $value 
	**/
	public function SetMch_id($value)
	{
		$this->values['mch_id'] = $value;
	}
	/**
	* ��ȡ΢��֧��������̻��ŵ�ֵ
	* @return ֵ
	**/
	public function GetMch_id()
	{
		return $this->values['mch_id'];
	}
	/**
	* �ж�΢��֧��������̻����Ƿ����
	* @return true �� false
	**/
	public function IsMch_idSet()
	{
		return array_key_exists('mch_id', $this->values);
	}


	/**
	* �����̻�ϵͳ�ڲ��Ķ�����
	* @param string $value 
	**/
	public function SetOut_trade_no($value)
	{
		$this->values['out_trade_no'] = $value;
	}
	/**
	* ��ȡ�̻�ϵͳ�ڲ��Ķ����ŵ�ֵ
	* @return ֵ
	**/
	public function GetOut_trade_no()
	{
		return $this->values['out_trade_no'];
	}
	/**
	* �ж��̻�ϵͳ�ڲ��Ķ������Ƿ����
	* @return true �� false
	**/
	public function IsOut_trade_noSet()
	{
		return array_key_exists('out_trade_no', $this->values);
	}


	/**
	* �����̻�ϵͳ�ڲ��Ķ�����,32���ַ��ڡ��ɰ�����ĸ, ����˵�����̻�������
	* @param string $value 
	**/
	public function SetNonce_str($value)
	{
		$this->values['nonce_str'] = $value;
	}
	/**
	* ��ȡ�̻�ϵͳ�ڲ��Ķ�����,32���ַ��ڡ��ɰ�����ĸ, ����˵�����̻������ŵ�ֵ
	* @return ֵ
	**/
	public function GetNonce_str()
	{
		return $this->values['nonce_str'];
	}
	/**
	* �ж��̻�ϵͳ�ڲ��Ķ�����,32���ַ��ڡ��ɰ�����ĸ, ����˵�����̻��������Ƿ����
	* @return true �� false
	**/
	public function IsNonce_strSet()
	{
		return array_key_exists('nonce_str', $this->values);
	}
}
