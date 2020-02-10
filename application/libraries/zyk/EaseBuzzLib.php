<?php
require APPPATH.'third_party/easebuzz-lib/easebuzz_payment_gateway.php';
class EaseBuzzLib {
	
	public function __construct(){
		$this->CI =& get_instance();
	}

	public function createEaseBuzzTransaction($params) {

		//$MERCHANT_KEY = "2PBP7IABZ2";
	    //$SALT = "DAH88E3UWQ";
	    $MERCHANT_KEY = "FPWE0KPDJ9";
	    $SALT = "R4YT2W0H5D";       
	    $ENV = "prod";   // set enviroment name

	    $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);

	    try{
		     $postData = array ( 
		        "txnid" => rand($params['orderid'],date('Ymd')), 
		        "amount" => $params['amount'].".0", 
		        "firstname" => $params['name'], 
		        "email" => $params['email'], 
		        "phone" => $params['mobile'], 
		        "productinfo" => "Laptop", 
		        "surl" => base_url()."admin/payment_response", 
		        "furl" => base_url()."admin/payment_response", 
		        "udf1" => "aaaa", 
		        "udf2" => "aaaa", 
		        "udf3" => "aaaa", 
		        "udf4" => "aaaa", 
		        "udf5" => "aaaa", 
		        "address1" => "aaaa", 
		        "address2" => "aaaa", 
		        "city" => "aaaa", 
		        "state" => "aaaa", 
		        "country" => "aaaa", 
		        "zipcode" => "123123" 
		    );

		    $response = $easebuzzObj->initiatePaymentAPI($postData); 
		    $data = json_encode($response);
			error_log($data,0);
			$obj = json_decode($data);
			$data['status'] = 1;
			$msg['msg'] = "Payment request sent successfully.";
	    } catch (Exception $e) {
			$msg['status'] = 0;
			$msg['msg'] = "Failed to sent payment request.";
			error_log('Exception',0);
		}
	  return $data;
	}
}