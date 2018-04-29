<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

	function __construct(){
	 					parent::__construct();
	 					$this->load->helper(array('form','url'));
	 					$this->load->model('m_login');
	 					$this->load->library('session');
	}


	public function index()
	{
		$data = array(
			'USERNAME' => $this->session->userdata('USERNAME')
		);
     $this->load->helper('url');
    $this->load->view('admin/header1',$data);
		$this->load->view('exadmin/dashbord');
     $this->load->view('admin/footer1');
	}
}
