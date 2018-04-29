<?php

class Slide extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_login');
		$this->load->library('session');
	}


	function index(){
		$data['type']="INPUT";// definisi type, karena nanti juga ada edit
		$this->load->view('exadmin/v_input_slide',$data, array('error' => ' ' ));
	}

	public function Edit()
		{
	 $data1 = array(
		 'USERNAME' => $this->session->userdata('USERNAME')
	 );
			 $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php

			 $this->load->database();//memanggil pengaturan database dan mengaktifkannya
			 $this->load->model('m_slide');//memanggil model m_data_produk.php

			 $id = $this->input->get('slide');//mengambil param produk dari get
			 $data['slide'] = $this->m_slide->getEdit($id);

			 $data['type']="EDIT";// definisi type, karena nanti juga ada edit
			 $this->load->view('admin/header1',$data1);
			 $this->load->view('exadmin/v_input_slide',$data);// memanggil view v_input_produk.php
			 $this->load->view('admin/footer1');
		 }

	function do_upload(){
		$this->load->database();//memanggil pengaturan database dan mengaktifkannya
		$this->load->model('m_slide');//memanggil model m_data_produk.php
		$config['upload_path'] = 'gambar/slide/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '1080';
		$config['max_height']  = '1080';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('exadmin/v_input_slide', $error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());


			$upload_data = $this->upload->data();

			// $file_array = $this->upload->data('file_name');

			$param = array(
						'gambar' => $upload_data['file_name']
						);
						
						 $id = $this->input->post('id');
						 $this->m_slide->edit($param,$id);
						 $this->load->helper('url');
						redirect('pengumuman','refresh');
		}
	}




  public function Delete(){
     $this->load->database();//memanggil pengaturan database dan mengaktifkannya
     $this->load->model('m_slide');//memanggil model m_data_produk.php
     $nidn = $this->input->get('slide');
     $this->m_data_dosen->delete($id);
     $this->load->helper('url');
     redirect('slide','refresh');
   }
}
?>
