<?php

namespace GuluSoft\WxPay;


/**
 * 
 * �ύ�˿��������
 * @author widyhu
 *
 */
class WxPayRefund extends WxPayDataBase
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
	* ����΢��֧��������ն��豸�ţ����µ�һ��
	* @param string $value 
	**/
	public function SetDevice_info($value)
	{
		$this->values['device_info'] = $value;
	}
	/**
	* ��ȡ΢��֧��������ն��豸�ţ����µ�һ�µ�ֵ
	* @return ֵ
	**/
	public function GetDevice_info()
	{
		return $this->values['device_info'];
	}
	/**
	* �ж�΢��֧��������ն��豸�ţ����µ�һ���Ƿ����
	* @return true �� false
	**/
	public function IsDevice_infoSet()
	{
		return array_key_exists('device_info', $this->values);
	}


	/**
	* ��������ַ�����������32λ���Ƽ�����������㷨
	* @param string $value 
	**/
	public function SetNonce_str($value)
	{
		$this->values['nonce_str'] = $value;
	}
	/**
	* ��ȡ����ַ�����������32λ���Ƽ�����������㷨��ֵ
	* @return ֵ
	**/
	public function GetNonce_str()
	{
		return $this->values['nonce_str'];
	}
	/**
	* �ж�����ַ�����������32λ���Ƽ�����������㷨�Ƿ����
	* @return true �� false
	**/
	public function IsNonce_strSet()
	{
		return array_key_exists('nonce_str', $this->values);
	}

	/**
	* ����΢�Ŷ�����
	* @param string $value 
	**/
	public function SetTransaction_id($value)
	{
		$this->values['transaction_id'] = $value;
	}
	/**
	* ��ȡ΢�Ŷ����ŵ�ֵ
	* @return ֵ
	**/
	public function GetTransaction_id()
	{
		return $this->values['transaction_id'];
	}
	/**
	* �ж�΢�Ŷ������Ƿ����
	* @return true �� false
	**/
	public function IsTransaction_idSet()
	{
		return array_key_exists('transaction_id', $this->values);
	}


	/**
	* �����̻�ϵͳ�ڲ��Ķ�����,transaction_id��out_trade_no��ѡһ�����ͬʱ�������ȼ���transaction_id> out_trade_no
	* @param string $value 
	**/
	public function SetOut_trade_no($value)
	{
		$this->values['out_trade_no'] = $value;
	}
	/**
	* ��ȡ�̻�ϵͳ�ڲ��Ķ�����,transaction_id��out_trade_no��ѡһ�����ͬʱ�������ȼ���transaction_id> out_trade_no��ֵ
	* @return ֵ
	**/
	public function GetOut_trade_no()
	{
		return $this->values['out_trade_no'];
	}
	/**
	* �ж��̻�ϵͳ�ڲ��Ķ�����,transaction_id��out_trade_no��ѡһ�����ͬʱ�������ȼ���transaction_id> out_trade_no�Ƿ����
	* @return true �� false
	**/
	public function IsOut_trade_noSet()
	{
		return array_key_exists('out_trade_no', $this->values);
	}


	/**
	* �����̻�ϵͳ�ڲ����˿�ţ��̻�ϵͳ�ڲ�Ψһ��ͬһ�˿�Ŷ������ֻ��һ��
	* @param string $value 
	**/
	public function SetOut_refund_no($value)
	{
		$this->values['out_refund_no'] = $value;
	}
	/**
	* ��ȡ�̻�ϵͳ�ڲ����˿�ţ��̻�ϵͳ�ڲ�Ψһ��ͬһ�˿�Ŷ������ֻ��һ�ʵ�ֵ
	* @return ֵ
	**/
	public function GetOut_refund_no()
	{
		return $this->values['out_refund_no'];
	}
	/**
	* �ж��̻�ϵͳ�ڲ����˿�ţ��̻�ϵͳ�ڲ�Ψһ��ͬһ�˿�Ŷ������ֻ��һ���Ƿ����
	* @return true �� false
	**/
	public function IsOut_refund_noSet()
	{
		return array_key_exists('out_refund_no', $this->values);
	}


	/**
	* ���ö����ܽ���λΪ�֣�ֻ��Ϊ���������֧�����
	* @param string $value 
	**/
	public function SetTotal_fee($value)
	{
		$this->values['total_fee'] = $value;
	}
	/**
	* ��ȡ�����ܽ���λΪ�֣�ֻ��Ϊ���������֧������ֵ
	* @return ֵ
	**/
	public function GetTotal_fee()
	{
		return $this->values['total_fee'];
	}
	/**
	* �ж϶����ܽ���λΪ�֣�ֻ��Ϊ���������֧������Ƿ����
	* @return true �� false
	**/
	public function IsTotal_feeSet()
	{
		return array_key_exists('total_fee', $this->values);
	}


	/**
	* �����˿��ܽ������ܽ���λΪ�֣�ֻ��Ϊ���������֧�����
	* @param string $value 
	**/
	public function SetRefund_fee($value)
	{
		$this->values['refund_fee'] = $value;
	}
	/**
	* ��ȡ�˿��ܽ������ܽ���λΪ�֣�ֻ��Ϊ���������֧������ֵ
	* @return ֵ
	**/
	public function GetRefund_fee()
	{
		return $this->values['refund_fee'];
	}
	/**
	* �ж��˿��ܽ������ܽ���λΪ�֣�ֻ��Ϊ���������֧������Ƿ����
	* @return true �� false
	**/
	public function IsRefund_feeSet()
	{
		return array_key_exists('refund_fee', $this->values);
	}


	/**
	* ���û������ͣ�����ISO 4217��׼����λ��ĸ���룬Ĭ������ң�CNY������ֵ�б������������
	* @param string $value 
	**/
	public function SetRefund_fee_type($value)
	{
		$this->values['refund_fee_type'] = $value;
	}
	/**
	* ��ȡ�������ͣ�����ISO 4217��׼����λ��ĸ���룬Ĭ������ң�CNY������ֵ�б�����������͵�ֵ
	* @return ֵ
	**/
	public function GetRefund_fee_type()
	{
		return $this->values['refund_fee_type'];
	}
	/**
	* �жϻ������ͣ�����ISO 4217��׼����λ��ĸ���룬Ĭ������ң�CNY������ֵ�б�������������Ƿ����
	* @return true �� false
	**/
	public function IsRefund_fee_typeSet()
	{
		return array_key_exists('refund_fee_type', $this->values);
	}


	/**
	* ���ò���Ա�ʺ�, Ĭ��Ϊ�̻���
	* @param string $value 
	**/
	public function SetOp_user_id($value)
	{
		$this->values['op_user_id'] = $value;
	}
	/**
	* ��ȡ����Ա�ʺ�, Ĭ��Ϊ�̻��ŵ�ֵ
	* @return ֵ
	**/
	public function GetOp_user_id()
	{
		return $this->values['op_user_id'];
	}
	/**
	* �жϲ���Ա�ʺ�, Ĭ��Ϊ�̻����Ƿ����
	* @return true �� false
	**/
	public function IsOp_user_idSet()
	{
		return array_key_exists('op_user_id', $this->values);
	}
}

/**
 * 
 * �˿��ѯ�������
 * @author widyhu
 *
 */
class WxPayRefundQuery extends WxPayDataBase
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
	* ����΢��֧��������ն��豸��
	* @param string $value 
	**/
	public function SetDevice_info($value)
	{
		$this->values['device_info'] = $value;
	}
	/**
	* ��ȡ΢��֧��������ն��豸�ŵ�ֵ
	* @return ֵ
	**/
	public function GetDevice_info()
	{
		return $this->values['device_info'];
	}
	/**
	* �ж�΢��֧��������ն��豸���Ƿ����
	* @return true �� false
	**/
	public function IsDevice_infoSet()
	{
		return array_key_exists('device_info', $this->values);
	}


	/**
	* ��������ַ�����������32λ���Ƽ�����������㷨
	* @param string $value 
	**/
	public function SetNonce_str($value)
	{
		$this->values['nonce_str'] = $value;
	}
	/**
	* ��ȡ����ַ�����������32λ���Ƽ�����������㷨��ֵ
	* @return ֵ
	**/
	public function GetNonce_str()
	{
		return $this->values['nonce_str'];
	}
	/**
	* �ж�����ַ�����������32λ���Ƽ�����������㷨�Ƿ����
	* @return true �� false
	**/
	public function IsNonce_strSet()
	{
		return array_key_exists('nonce_str', $this->values);
	}

	/**
	* ����΢�Ŷ�����
	* @param string $value 
	**/
	public function SetTransaction_id($value)
	{
		$this->values['transaction_id'] = $value;
	}
	/**
	* ��ȡ΢�Ŷ����ŵ�ֵ
	* @return ֵ
	**/
	public function GetTransaction_id()
	{
		return $this->values['transaction_id'];
	}
	/**
	* �ж�΢�Ŷ������Ƿ����
	* @return true �� false
	**/
	public function IsTransaction_idSet()
	{
		return array_key_exists('transaction_id', $this->values);
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
	* �����̻��˿��
	* @param string $value 
	**/
	public function SetOut_refund_no($value)
	{
		$this->values['out_refund_no'] = $value;
	}
	/**
	* ��ȡ�̻��˿�ŵ�ֵ
	* @return ֵ
	**/
	public function GetOut_refund_no()
	{
		return $this->values['out_refund_no'];
	}
	/**
	* �ж��̻��˿���Ƿ����
	* @return true �� false
	**/
	public function IsOut_refund_noSet()
	{
		return array_key_exists('out_refund_no', $this->values);
	}


	/**
	* ����΢���˿��refund_id��out_refund_no��out_trade_no��transaction_id�ĸ���������һ�������ͬʱ�������ȼ�Ϊ��refund_id>out_refund_no>transaction_id>out_trade_no
	* @param string $value 
	**/
	public function SetRefund_id($value)
	{
		$this->values['refund_id'] = $value;
	}
	/**
	* ��ȡ΢���˿��refund_id��out_refund_no��out_trade_no��transaction_id�ĸ���������һ�������ͬʱ�������ȼ�Ϊ��refund_id>out_refund_no>transaction_id>out_trade_no��ֵ
	* @return ֵ
	**/
	public function GetRefund_id()
	{
		return $this->values['refund_id'];
	}
	/**
	* �ж�΢���˿��refund_id��out_refund_no��out_trade_no��transaction_id�ĸ���������һ�������ͬʱ�������ȼ�Ϊ��refund_id>out_refund_no>transaction_id>out_trade_no�Ƿ����
	* @return true �� false
	**/
	public function IsRefund_idSet()
	{
		return array_key_exists('refund_id', $this->values);
	}
}

/**
 * 
 * ���ض��˵��������
 * @author widyhu
 *
 */
class WxPayDownloadBill extends WxPayDataBase
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
	* ����΢��֧��������ն��豸�ţ���д���ֶΣ�ֻ���ظ��豸�ŵĶ��˵�
	* @param string $value 
	**/
	public function SetDevice_info($value)
	{
		$this->values['device_info'] = $value;
	}
	/**
	* ��ȡ΢��֧��������ն��豸�ţ���д���ֶΣ�ֻ���ظ��豸�ŵĶ��˵���ֵ
	* @return ֵ
	**/
	public function GetDevice_info()
	{
		return $this->values['device_info'];
	}
	/**
	* �ж�΢��֧��������ն��豸�ţ���д���ֶΣ�ֻ���ظ��豸�ŵĶ��˵��Ƿ����
	* @return true �� false
	**/
	public function IsDevice_infoSet()
	{
		return array_key_exists('device_info', $this->values);
	}


	/**
	* ��������ַ�����������32λ���Ƽ�����������㷨
	* @param string $value 
	**/
	public function SetNonce_str($value)
	{
		$this->values['nonce_str'] = $value;
	}
	/**
	* ��ȡ����ַ�����������32λ���Ƽ�����������㷨��ֵ
	* @return ֵ
	**/
	public function GetNonce_str()
	{
		return $this->values['nonce_str'];
	}
	/**
	* �ж�����ַ�����������32λ���Ƽ�����������㷨�Ƿ����
	* @return true �� false
	**/
	public function IsNonce_strSet()
	{
		return array_key_exists('nonce_str', $this->values);
	}

	/**
	* �������ض��˵������ڣ���ʽ��20140603
	* @param string $value 
	**/
	public function SetBill_date($value)
	{
		$this->values['bill_date'] = $value;
	}
	/**
	* ��ȡ���ض��˵������ڣ���ʽ��20140603��ֵ
	* @return ֵ
	**/
	public function GetBill_date()
	{
		return $this->values['bill_date'];
	}
	/**
	* �ж����ض��˵������ڣ���ʽ��20140603�Ƿ����
	* @return true �� false
	**/
	public function IsBill_dateSet()
	{
		return array_key_exists('bill_date', $this->values);
	}


	/**
	* ����ALL�����ص������ж�����Ϣ��Ĭ��ֵSUCCESS�����ص��ճɹ�֧���Ķ���REFUND�����ص����˿��REVOKED���ѳ����Ķ���
	* @param string $value 
	**/
	public function SetBill_type($value)
	{
		$this->values['bill_type'] = $value;
	}
	/**
	* ��ȡALL�����ص������ж�����Ϣ��Ĭ��ֵSUCCESS�����ص��ճɹ�֧���Ķ���REFUND�����ص����˿��REVOKED���ѳ����Ķ�����ֵ
	* @return ֵ
	**/
	public function GetBill_type()
	{
		return $this->values['bill_type'];
	}
	/**
	* �ж�ALL�����ص������ж�����Ϣ��Ĭ��ֵSUCCESS�����ص��ճɹ�֧���Ķ���REFUND�����ص����˿��REVOKED���ѳ����Ķ����Ƿ����
	* @return true �� false
	**/
	public function IsBill_typeSet()
	{
		return array_key_exists('bill_type', $this->values);
	}
}

/**
 * 
 * �����ϱ��������
 * @author widyhu
 *
 */
class WxPayReport extends WxPayDataBase
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
	* ����΢��֧��������ն��豸�ţ��̻��Զ���
	* @param string $value 
	**/
	public function SetDevice_info($value)
	{
		$this->values['device_info'] = $value;
	}
	/**
	* ��ȡ΢��֧��������ն��豸�ţ��̻��Զ����ֵ
	* @return ֵ
	**/
	public function GetDevice_info()
	{
		return $this->values['device_info'];
	}
	/**
	* �ж�΢��֧��������ն��豸�ţ��̻��Զ����Ƿ����
	* @return true �� false
	**/
	public function IsDevice_infoSet()
	{
		return array_key_exists('device_info', $this->values);
	}


	/**
	* ��������ַ�����������32λ���Ƽ�����������㷨
	* @param string $value 
	**/
	public function SetNonce_str($value)
	{
		$this->values['nonce_str'] = $value;
	}
	/**
	* ��ȡ����ַ�����������32λ���Ƽ�����������㷨��ֵ
	* @return ֵ
	**/
	public function GetNonce_str()
	{
		return $this->values['nonce_str'];
	}
	/**
	* �ж�����ַ�����������32λ���Ƽ�����������㷨�Ƿ����
	* @return true �� false
	**/
	public function IsNonce_strSet()
	{
		return array_key_exists('nonce_str', $this->values);
	}


	/**
	* �����ϱ���Ӧ�Ľӿڵ�����URL�����ƣ�https://api.mch.weixin.qq.com/pay/unifiedorder���ڱ�ɨ֧����Ϊ���õĺ��̻���ͬ����һ��ҵ����Ϊ�������ʱ������������ֽ���ģʽ���붼���ŵ���һ�α�ɨ��Ϊ����һ�ε����������ϱ����ϱ�URLָ��Ϊ��https://api.mch.weixin.qq.com/pay/micropay/total�������ֽ���ģʽ����ɲο����ĵ��½ڣ���ɨ֧���̻�����ģʽ�����ӿڵ�����Ȼ���յ���һ�Σ��ϱ�һ�������С�
	* @param string $value 
	**/
	public function SetInterface_url($value)
	{
		$this->values['interface_url'] = $value;
	}
	/**
	* ��ȡ�ϱ���Ӧ�Ľӿڵ�����URL�����ƣ�https://api.mch.weixin.qq.com/pay/unifiedorder���ڱ�ɨ֧����Ϊ���õĺ��̻���ͬ����һ��ҵ����Ϊ�������ʱ������������ֽ���ģʽ���붼���ŵ���һ�α�ɨ��Ϊ����һ�ε����������ϱ����ϱ�URLָ��Ϊ��https://api.mch.weixin.qq.com/pay/micropay/total�������ֽ���ģʽ����ɲο����ĵ��½ڣ���ɨ֧���̻�����ģʽ�����ӿڵ�����Ȼ���յ���һ�Σ��ϱ�һ�������С���ֵ
	* @return ֵ
	**/
	public function GetInterface_url()
	{
		return $this->values['interface_url'];
	}
	/**
	* �ж��ϱ���Ӧ�Ľӿڵ�����URL�����ƣ�https://api.mch.weixin.qq.com/pay/unifiedorder���ڱ�ɨ֧����Ϊ���õĺ��̻���ͬ����һ��ҵ����Ϊ�������ʱ������������ֽ���ģʽ���붼���ŵ���һ�α�ɨ��Ϊ����һ�ε����������ϱ����ϱ�URLָ��Ϊ��https://api.mch.weixin.qq.com/pay/micropay/total�������ֽ���ģʽ����ɲο����ĵ��½ڣ���ɨ֧���̻�����ģʽ�����ӿڵ�����Ȼ���յ���һ�Σ��ϱ�һ�������С��Ƿ����
	* @return true �� false
	**/
	public function IsInterface_urlSet()
	{
		return array_key_exists('interface_url', $this->values);
	}


	/**
	* ���ýӿں�ʱ�������λΪ����
	* @param string $value 
	**/
	public function SetExecute_time_($value)
	{
		$this->values['execute_time_'] = $value;
	}
	/**
	* ��ȡ�ӿں�ʱ�������λΪ�����ֵ
	* @return ֵ
	**/
	public function GetExecute_time_()
	{
		return $this->values['execute_time_'];
	}
	/**
	* �жϽӿں�ʱ�������λΪ�����Ƿ����
	* @return true �� false
	**/
	public function IsExecute_time_Set()
	{
		return array_key_exists('execute_time_', $this->values);
	}


	/**
	* ����SUCCESS/FAIL���ֶ���ͨ�ű�ʶ���ǽ��ױ�ʶ�������Ƿ�ɹ���Ҫ�鿴trade_state���ж�
	* @param string $value 
	**/
	public function SetReturn_code($value)
	{
		$this->values['return_code'] = $value;
	}
	/**
	* ��ȡSUCCESS/FAIL���ֶ���ͨ�ű�ʶ���ǽ��ױ�ʶ�������Ƿ�ɹ���Ҫ�鿴trade_state���жϵ�ֵ
	* @return ֵ
	**/
	public function GetReturn_code()
	{
		return $this->values['return_code'];
	}
	/**
	* �ж�SUCCESS/FAIL���ֶ���ͨ�ű�ʶ���ǽ��ױ�ʶ�������Ƿ�ɹ���Ҫ�鿴trade_state���ж��Ƿ����
	* @return true �� false
	**/
	public function IsReturn_codeSet()
	{
		return array_key_exists('return_code', $this->values);
	}


	/**
	* ���÷�����Ϣ����ǿգ�Ϊ����ԭ��ǩ��ʧ�ܲ�����ʽУ�����
	* @param string $value 
	**/
	public function SetReturn_msg($value)
	{
		$this->values['return_msg'] = $value;
	}
	/**
	* ��ȡ������Ϣ����ǿգ�Ϊ����ԭ��ǩ��ʧ�ܲ�����ʽУ������ֵ
	* @return ֵ
	**/
	public function GetReturn_msg()
	{
		return $this->values['return_msg'];
	}
	/**
	* �жϷ�����Ϣ����ǿգ�Ϊ����ԭ��ǩ��ʧ�ܲ�����ʽУ������Ƿ����
	* @return true �� false
	**/
	public function IsReturn_msgSet()
	{
		return array_key_exists('return_msg', $this->values);
	}


	/**
	* ����SUCCESS/FAIL
	* @param string $value 
	**/
	public function SetResult_code($value)
	{
		$this->values['result_code'] = $value;
	}
	/**
	* ��ȡSUCCESS/FAIL��ֵ
	* @return ֵ
	**/
	public function GetResult_code()
	{
		return $this->values['result_code'];
	}
	/**
	* �ж�SUCCESS/FAIL�Ƿ����
	* @return true �� false
	**/
	public function IsResult_codeSet()
	{
		return array_key_exists('result_code', $this->values);
	}


	/**
	* ����ORDERNOTEXIST������������SYSTEMERROR��ϵͳ����
	* @param string $value 
	**/
	public function SetErr_code($value)
	{
		$this->values['err_code'] = $value;
	}
	/**
	* ��ȡORDERNOTEXIST������������SYSTEMERROR��ϵͳ�����ֵ
	* @return ֵ
	**/
	public function GetErr_code()
	{
		return $this->values['err_code'];
	}
	/**
	* �ж�ORDERNOTEXIST������������SYSTEMERROR��ϵͳ�����Ƿ����
	* @return true �� false
	**/
	public function IsErr_codeSet()
	{
		return array_key_exists('err_code', $this->values);
	}


	/**
	* ���ý����Ϣ����
	* @param string $value 
	**/
	public function SetErr_code_des($value)
	{
		$this->values['err_code_des'] = $value;
	}
	/**
	* ��ȡ�����Ϣ������ֵ
	* @return ֵ
	**/
	public function GetErr_code_des()
	{
		return $this->values['err_code_des'];
	}
	/**
	* �жϽ����Ϣ�����Ƿ����
	* @return true �� false
	**/
	public function IsErr_code_desSet()
	{
		return array_key_exists('err_code_des', $this->values);
	}


	/**
	* �����̻�ϵͳ�ڲ��Ķ�����,�̻��������ϱ�ʱ�ṩ����̻������ŷ���΢��֧�����õ���߷��������� 
	* @param string $value 
	**/
	public function SetOut_trade_no($value)
	{
		$this->values['out_trade_no'] = $value;
	}
	/**
	* ��ȡ�̻�ϵͳ�ڲ��Ķ�����,�̻��������ϱ�ʱ�ṩ����̻������ŷ���΢��֧�����õ���߷��������� ��ֵ
	* @return ֵ
	**/
	public function GetOut_trade_no()
	{
		return $this->values['out_trade_no'];
	}
	/**
	* �ж��̻�ϵͳ�ڲ��Ķ�����,�̻��������ϱ�ʱ�ṩ����̻������ŷ���΢��֧�����õ���߷��������� �Ƿ����
	* @return true �� false
	**/
	public function IsOut_trade_noSet()
	{
		return array_key_exists('out_trade_no', $this->values);
	}


	/**
	* ���÷���ӿڵ���ʱ�Ļ���IP 
	* @param string $value 
	**/
	public function SetUser_ip($value)
	{
		$this->values['user_ip'] = $value;
	}
	/**
	* ��ȡ����ӿڵ���ʱ�Ļ���IP ��ֵ
	* @return ֵ
	**/
	public function GetUser_ip()
	{
		return $this->values['user_ip'];
	}
	/**
	* �жϷ���ӿڵ���ʱ�Ļ���IP �Ƿ����
	* @return true �� false
	**/
	public function IsUser_ipSet()
	{
		return array_key_exists('user_ip', $this->values);
	}


	/**
	* ����ϵͳʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��27��9��10��10���ʾΪ20091227091010���������ʱ�����
	* @param string $value 
	**/
	public function SetTime($value)
	{
		$this->values['time'] = $value;
	}
	/**
	* ��ȡϵͳʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��27��9��10��10���ʾΪ20091227091010���������ʱ������ֵ
	* @return ֵ
	**/
	public function GetTime()
	{
		return $this->values['time'];
	}
	/**
	* �ж�ϵͳʱ�䣬��ʽΪyyyyMMddHHmmss����2009��12��27��9��10��10���ʾΪ20091227091010���������ʱ������Ƿ����
	* @return true �� false
	**/
	public function IsTimeSet()
	{
		return array_key_exists('time', $this->values);
	}
}

