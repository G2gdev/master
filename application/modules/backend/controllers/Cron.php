<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Cron extends MX_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->helper ( 'cookie' );
		$fb_config = parse_ini_file ( APPPATH . "config/APP.ini" );
		$this->load->library('zyk/RestaurantLib');
		$this->load->library('zyk/OrderLib');
	}
	
	function Assign()
	{
		$newvendors=array();
		$orders = $this->orderlib->getAllOrderDetails();
		foreach($orders as $order)
		{
			$newvendor=array();
			if(!empty($order['other_vendorid']))
			{
				$vendor_ids = explode(',',$order['other_vendorid']);
				$len=count($vendor_ids)-1;
				$newvendor['orderid']= $order['orderid'];;
				$newvendor['vendor_id']= $vendor_ids[0];
				$newvendor['updated_datetime']= date('Y-m-d H:i:s');
				$newvendor['vendor_response']= 0;
				if($len==0){
					$newvendor['other_vendorid']= '';
				}
				else {
					for($i=1 ; $i<=$len; $i++)
					{
						$newvendor['other_vendorid']= $vendor_ids[$i];
					}
				}
			}
			else 
			{	$newvendor['orderid']= $order['orderid'];
				$newvendor['vendor_id']= 1;
				$newvendor['updated_datetime']= date('Y-m-d H:i:s');
				$newvendor['vendor_response']= 1;
				$newvendor['other_vendorid']= '';
				$newvendor['accepted_by']= 1;
			}
			
			$newvendors[]=$newvendor;
		}
		
		print_r($newvendors);
		//$response = $this->orderlib->updateCrondetails($newvendors);
	}

}