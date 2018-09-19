<?php
require_once dirname(__file__).'/tcpdf/tcpdf.php';

class Pdf_library extends TCPDF{
	public function construct(){
		parent::__construct();
	}
}
?>