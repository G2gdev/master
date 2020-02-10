<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pksms {

	var $CI;
	private $sms_activation = true;
	function __construct() {
		$this->CI =& get_instance();
		$tk_config = parse_ini_file(APPPATH."config/APP.ini");
		$this->sms_activation = $tk_config['sms_activate'];
	}

	public function sendSms(  $smsMap ) {
	//	print_r($smsMap);
		if($this->sms_activation)
		{
			$this->sendTempSms($smsMap);
		}
	}
	
	public function sendTempSms( $smsMap ) {
		//echo $smsMap['mobile'];
		
		//$message =urlencode('Hi '.$fullname.', Thank you! We have received your order. The Moustache Man will be at your doorstep at the scheduled time and place. Regards, The Moustache Laundry');
		//$url = "http://203.129.203.243/blank/sms/user/urlsmstemp.php?username=tmlaun&pass=123456789&senderid=TMLAUN&dest_mobileno='$mobile'&message=$message&response=Y";
		//http://110.173.182.98/API/WebSMS/Http/v1.0a/index.php?username=Garage2ghar&password=Your+Password&sender=my+senderID&to=my+recipient&message=Hello+Test+Message&reqid=1&format={json|text}&route_id=route+id&callback=Any+Callback+URL&unique=0&sendondate=06-10-2017T03:03:06
		$ch = curl_init();
		$smsUrl = "http://123.108.46.12/API/WebSMS/Http/v1.0a/index.php";
		$user="Garage2ghar";
		$senderID="GARAGE";
		$map = array();
		$map['username'] = $user;
		$map['password'] = "U7bnTji$";
		$map['sender'] = $senderID;
		$map['to'] = $smsMap['mobile'];
		$map['message'] = $smsMap['message'];
		//$map['response'] = "Y";
		$postdata = http_build_query($map);
		$smsUrl = $smsUrl."?".$postdata;
		//echo $smsUrl;
		curl_setopt($ch,CURLOPT_URL,  $smsUrl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$buffer = curl_exec($ch);
		if(empty ($buffer))
		{ return false; }
		else
		{ return true; }
		curl_close($ch);
	}

}
