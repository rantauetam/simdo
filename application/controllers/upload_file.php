<?php

class Upload_file extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index(){
		$this->load->view('form_upload', array('error' => ' ' ));

	}

	function do_upload(){
		$config['upload_path'] = 'gambar/slide/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '1080';
		$config['max_height']  = '1080';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('form_upload', $error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());

			$this->load->database();//memanggil pengaturan database dan mengaktifkannya
			$this->load->model('m_slide');//memanggil model m_data_produk.php
			$upload_data = $this->upload->data();
			// $file_array = $this->upload->data('file_name');

			$param = array(
						// 'NIDN' => $this->input->post('nidn'),

						// 'FOTO' => $this->input->post('userfile'),
						'slide' => $upload_data['file_name'],

						);


		 			$this->m_slide->input($param);
					$this->load->view('sukses', $data);
		}
	}
}
?>
