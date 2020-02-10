<?php
require APPPATH.'third_party/Instamojo.php';
class PaymentLib {
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getPaymentUrl($params) {
		//$msg = array('status'=>1,'msg'=>'Payment request sent successfully.');
		$instamojo = new Instamojo('af946740ad4853874798abd8eeeb70d2','aa858bff752968630808dc34cb7dfcc4');
		//$instamojo = new Instamojo('8e6de222b29df5688e9ae263d97ec68f','eeac5ad6aae1d8d764c44d17361121ca');
		try {
			$response = $instamojo->paymentRequestCreate(array(
					"purpose" => "Garage2Ghar payment",
					"buyer_name" => $params['name'],
					"amount" => $params['amount'],     
					"send_email" => true,
					"send_sms" => true,
					"email" => $params['email'],
					"phone" => $params['mobile'],
					"webhook" =>base_url()."admin/payment_response",
					"redirect_url" => base_url(),
					"allow_repeated_payments" => true
			));
			$data = json_encode($response);
			error_log($data,0);
			$obj = json_decode($data);
			$id = $obj->{'id'};
			$url=$obj->{'longurl'};
			if(!empty($obj->{'longurl'})) {
				$payment = array();
				$payment['orderid'] = $params['orderid'];
				$payment['transactionid'] = $id;
				$payment['longurl'] = $obj->{'longurl'};
				$payment['email'] = $params['email'];
				$payment['amount'] = $params['amount'];
				$payment['phone'] = $params['mobile'];
				$payment['shorturl'] ='';
				$payment['status'] =$obj->{'status'};
				$this->CI->load->model ( 'v3/users/User_model','user');
				$respurl=$this->CI->user->addPaymentDetail($payment);
				$msg['status'] = 1;
				$msg['msg'] = "Payment request sent successfully.";
				
			} else {
				$msg['status'] = 0;
				$msg['msg'] = "Failed to sent payment request.";
			}
		} catch (Exception $e) {
			$msg['status'] = 0;
			$msg['msg'] = "Failed to sent payment request.";
			error_log('Exception',0);
		}
		return $url;
	}
	
	public function updatePayment($params) {
		//echo "inside updatepayment";
		$this->CI->load->model ( 'v3/users/User_model','user');
		$flag = $this->CI->user->updatePaymentDetail($params);
	/*	if($params['status'] == 'Credit') {
			$pay_details = $this->CI->user->getPaymentByTransId($params['transactionid']);
			$orderid = $pay_details[0]['orderid'];
			$umap = array();
			$umap['id'] = $orderid;
			$umap['amount'] = $params['amount'];
			$this->CI->user->updateForm($umap);
			
		} */
		return $flag;
	}
	
	public function createInstaTransaction($params) {
		//echo "inside payment";
		//print_r($params);
		$msg = array();
		$instamojo = new Instamojo('af946740ad4853874798abd8eeeb70d2','aa858bff752968630808dc34cb7dfcc4');
		//$instamojo = new Instamojo('8e6de222b29df5688e9ae263d97ec68f','eeac5ad6aae1d8d764c44d17361121ca');
		try {
			$response = $instamojo->paymentRequestCreate(array(
					"purpose" => "Garage2Ghar payment",
					"buyer_name" => $params['name'],
					"amount" => $params['amount'],
					"send_email" => true,
					"send_sms" => true,
					"email" => $params['email'],
					"phone" => $params['mobile'],
					"webhook" =>base_url()."crm/payment_response",
					"redirect_url" => base_url(),
					"allow_repeated_payments" => true
			));
			$data = json_encode($response);
			error_log($data,0);
			//print_r($data);
			$obj = json_decode($data);
			$id = $obj->{'id'};
			if(!empty($obj->{'longurl'})) {
				$payment = array();
				$payment['orderid'] = $params['orderid'];
				$payment['transactionid'] = $id;
				$payment['longurl'] = $obj->{'longurl'};
				$payment['email'] = $params['email'];
				$payment['amount'] = $params['amount'];
				$payment['phone'] = $params['mobile'];
				$payment['shorturl'] ='';
				$payment['status'] =$obj->{'status'};
				$this->CI->load->model ( 'v3/users/User_model','user');
				$respurl=$this->CI->user->addPaymentDetail($payment);
				$msg['status'] = 1;
				$msg['msg'] = "Payment request sent successfully.";
				$msg['url'] = $obj->{'longurl'};
			} else {
				$msg['status'] = 0;
				$msg['msg'] = "Failed to sent payment request.";
			}
		} catch (Exception $e) {
			$msg['status'] = 0;
			$msg['msg'] = "Failed to sent payment request.";
			error_log('Exception',0);
		}
		return $msg;
	}
	
	public function createSimpleTransaction($data) {
		$this->CI->load->library('mylib/OrderLib');
		$orders = $this->CI->orderlib->getOrderDetails($data['orderid']);
		$items = $this->CI->orderlib->getOrderItems($data['orderid']);
		$url = $this->simpl_base_url.'api/v1/transactions';
		$params = array();
		$params['transaction_token'] = $data['transaction_token'];
		$params['amount_in_paise'] = $orders[0]['grand_total']*100;
		$params['order_id'] = $data['orderid'];
		$params['shipping_amount_in_paise'] = $orders[0]['delivery_charge']*100;
		$params['discount_in_paise'] = $orders[0]['discount']*100;
		$newitems = array();
		foreach ($items as $item) {
			$newitem = array();
			$newitem['sku'] = $item['item_id'];
			if($item['cat_id'] == 2) {
				$newitem['quantity'] = $item['weight'];
			} else {
				$newitem['quantity'] = $item['quantity'];
			}
			$newitem['unit_price_in_paise'] = $item['item_price']*100;
			$newitem['display_name'] = $item['item_name'];
			$newitems[] = $newitem;
		}
		$params['items'] = $newitems;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization:dd7fa9c9ca35f01ed9ced4a4ef6af2a2','Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($params));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec ($ch);
		error_log($result,0);
		curl_close ($ch);
		$response = json_decode($result,true);
		$resp = array();
		if($response['success']) {
			if($response['data']['transaction']['status'] == 'CHARGED' || $response['data']['transaction']['status'] == 'CLAIMED') {
				$payment = array();
				$payment['orderid'] = $data['orderid'];
				$payment['transactionid'] = $response['data']['transaction']['transaction_id'];
				$payment['longurl'] = '';
				$payment['email'] = $orders[0]['email'];
				$payment['amount'] = $orders[0]['grand_total'];
				$payment['phone'] = $orders[0]['mobile'];
				$payment['shorturl'] = '';
				$payment['status'] = 'Credit';
				$payment['gateway'] = 'simpl';
				$payment['payment_date'] = date('Y-m-d H:i:s');
				$this->CI->load->model ( 'v3/adminusers/User_model','adminuser');
				$this->CI->adminuser->updatePayment($payment);
				$this->load->library('mylib/OrderLib');
				$this->orderlib->sendPaymentSuccesfullEmail($data,$orders[0]['invoice_url']);
				$resp['status'] = 1;
				$resp['msg'] = 'Payment Successful.';
			} else {
				$resp['status'] = 0;
				$resp['msg'] = 'Payment Failed.';
			}
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'Payment Failed.';
		}
	
		return $resp;
	}
	
	
}
