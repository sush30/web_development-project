<?php
class Pdf_controller extends CI_Controller{
	public function construct(){
		parent::__construct();
		$this->load->library('Pdf_library');
		$this->load->model('Pdf_model');
	}
	public function gen_report(){
		$data['consumers']=$this->Pdf_model->select_stud();
		$this->load->view('stud_report',$data);
	}
	public function show_report(){
		$this->load->view('Pdf_view');
	}
	public function gen_report_inspection(){
		$data['consumers1']=$this->Pdf_model->select_stud_inspection();
		$this->load->view('stud_report_inspection',$data);
	}
	public function gen_report_transaction(){
		$data['consumers2']=$this->Pdf_model->select_stud_transaction();
		$this->load->view('stud_report_transaction',$data);
	}
}
?>