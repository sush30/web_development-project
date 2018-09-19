<?php
class Pdf_model extends CI_Model{
	public function select_stud(){
		return $this->db->get('property_details')->result();
	}
	public function select_stud_inspection(){
		return $this->db->get('inspection')->result();
	}
	public function select_stud_transaction(){
		return $this->db->get('transaction')->result();
	}
}
?>