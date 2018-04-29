<?php
class M_login extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function m_aksi($data){
		$d = $this->db->get_where('admin',$data);
		return $d->num_rows();

	}
}
?>
