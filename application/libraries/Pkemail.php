<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pkemail {

	private $client = null;
	public $config = array();
	public $attachment = 0;
	public $from = '';
	public $reply_to = '';
	public $to = '';
	public $headline = '';
	public $subject = '';
	public $file = '';
	public $bcc = 0;
	public $mctag = '';
	private $smtp = '';
	private $port = '';
	private $smtp_user = '';
	private $smtp_pass = '';
	private $CI;
	private $email_activation = true;


	function __construct() {
		unset($this->config);
		$this->CI =& get_instance();
		$fb_config = parse_ini_file(APPPATH."config/APP.ini");
		$this->email_activation = $fb_config['email_activate'];
	}

	/*function send_email( $message ) {
		//print_r($message);
                
		if($this->email_activation)
		{
                       $data = [
                            'email' => $this->to,
                            'subject' => $this->subject,
                            'message'   => $message,
                       ];
                        $CI = &get_instance();
                        $this->send_email_curl($data);
                        return true;
			$CI->load->library('email',$this->config);
			$CI->email->set_newline("\r\n");
			$CI->email->from($this->from, $this->headline);
			$CI->email->reply_to($this->reply_to, 'info@garage2ghar.com');
			if($this->bcc)
				$CI->email->bcc($this->to);
			else
				$CI->email->to($this->to);
			$CI->email->subject($this->subject);
			if($this->attachment == 1)
				$CI->email->attach($this->file);
			//if($this->mctag)
				//$CI->email->mctag($this->mctag);
			$CI->email->message($message);
		    if (!$CI->email->send()) 
		    {
		    	echo $CI->email->print_debugger();
			   	return false;
		    }
			else
			{
				$CI->email->clear(TRUE);
				return true;
			}
		}
	}*/
	
	function send_email( $message ) {
		if($this->email_activation)
		{
			try 
			{
				$CI = &get_instance();
				$CI->load->library('email',$this->config);
				$CI->email->set_newline("\r\n");
				$CI->email->from($this->from, $this->headline);
				$CI->email->reply_to($this->reply_to, 'info@garage2ghar.com');
				if($this->bcc)
					$CI->email->bcc($this->to);
				else
					$CI->email->to($this->to);
				$CI->email->subject($this->subject);
				if($this->attachment == 1)
					$CI->email->attach($this->file);
				//if($this->mctag)
					//$CI->email->mctag($this->mctag);
				$CI->email->message($message);
			    if (!$CI->email->send()) 
			    {
					echo $this->CI->email->print_debugger();
				   return false;
			    }
				else
				{
					$CI->email->clear(TRUE);
					return true;
				}
			} catch(Exception $e) {
				return false;
			}
		}
	}

	function load_system_config() {
		$this->config = array (
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.gmail.com',
			  //'smtp_host' => 'ssl://md5-in-53.webhostbox.net',
			  'smtp_port' => 465,
			  'smtp_user' => 'info@garage2ghar.com',
			  'smtp_pass' => 'Info@1234',
			  'mailtype'  => 'html',
			  'smtp_timeout' => 30,
			  'crlf' => "\r\n",
  			  'newline' => "\r\n");

		$this->config['mailtype'] = 'html';
		$this->config['charset'] = 'iso-8859-1';
		$this->config['wordwrap'] = TRUE;
		$this->from = 'info@garage2ghar.com';
		$this->headline = 'Garage2Ghar';
		$this->reply_to = 'info@garage2ghar.com';
	}
	
    /*function load_system_config() {
		$this->config = array (
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.gmail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'garage2gharpune@gmail.com',
			  'smtp_pass' => 'Garage2ghar@123',
			  'mailtype'  => 'html',
			  'smtp_timeout' => 30,
			  'crlf' => "\r\n",
  			  'newline' => "\r\n");

		$this->config['mailtype'] = 'html';
		$this->config['charset'] = 'iso-8859-1';
		$this->config['wordwrap'] = TRUE;
		$this->from = 'garage2gharpune@gmail.com';
		$this->headline = 'G2G';
		$this->reply_to = 'garage2gharpune@gmail.com';
	}*/
        public function send_email_curl($param) {
            $ch = curl_init('https://www.brandzgarage.com/assets/send_mail.php');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
            $response = curl_exec($ch);
            curl_close($ch);
        }	

}
