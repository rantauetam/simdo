<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rfid extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$rfid = $this->input->post('rfid');
		$this->load->view('exadmin/v_input_rfid');

	}

	public function Edit()
 	{
				 $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php
				 $this->load->database();//memanggil pengaturan database dan mengaktifkannya
				 $this->load->model('m_rfid');//memanggil model m_data_produk.php
				 $rfid = $this->input->post('rfid');
				//  echo "data dari rfid di edit = ";
				//  echo "$rfid";
				 $data['data_dosen'] = $this->m_rfid->get_dosen_rfid($rfid); //['data_dosen'] di gunakan untuk v_edit_rfid
				// $this->load->view('exadmin/v_edit_rfid', $data);

				 $row = $this->m_rfid->get_dosen_rfid($rfid); //memangil data dari database dari controler saja tidak di tampilkan di view
				//  if(isset($row)){
					//  echo $row['status'];
				//  }

			if ($status = 'ada' == $row['status']) {
					$tidak_ada ='tidak ada';
					$param = array(
								'status' => $tidak_ada
								);
					$rfid= $this->input->post('rfid');
					$this->m_rfid->edit($param,$rfid);

			} else {
					$ada ='ada';
					$param = array(
								'status' => $ada
								);
					$rfid= $this->input->post('rfid');
					$this->m_rfid->edit($param,$rfid);

			}
					$this->load->helper('url');

					//mengalihkan ke list data produk setelah input atau edit selesai
				 redirect('rfid','refresh');
				redirect($this->uri->uri_string());

	}

		 public function update($rfid){
			 $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php
			 $this->load->database();//memanggil pengaturan database dan mengaktifkannya
			 $this->load->model('m_rfid');//memanggil model m_data_produk.php
			 $this->m_rfid->update_dosen_rfid($rfid);
			 redirect('rfid','refresh');
		 }



}
