<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use Dompdf\Dompdf;
class MyPdfLib {
		
	
	public function __construct() {
		require_once APPPATH.'third_party/dompdf/autoload.inc.php';

		$CI =& get_instance();
	}
	
	
	public function getPdf($html,$pdf_name) {
		$pdf = new Dompdf();
		$pdf->load_html($html);
		$pdf->render();
		$pdf = $pdf->output();
		$file_location = FCPATH."assets/invoices/".$pdf_name;
		file_put_contents($file_location,$pdf);
		return "assets/invoices/".$pdf_name;
	}
}

