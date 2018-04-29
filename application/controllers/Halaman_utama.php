<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

		public function index()
				{
		         $this->load->helper('url');
		         $this->load->database();//memanggil pengaturan database dan mengaktifkannya


					 		$this->load->helper('form');
					 		$rfid = $this->input->post('rfid');


		           $this->load->model('m_jadwal_ta');//memanggil model m_data_produk
		           $data['jadwal_ta'] = $this->m_jadwal_ta->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']

							 //memangil model m_jadwal pkn untuk di tampilkan di index1
							 $this->load->model('m_jadwal_pkn');//memanggil model m_data_produk
							 $data['jadwal_pkn'] = $this->m_jadwal_pkn->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']

							 //memangil model m_info_berjalan untuk di tampilkan di index1
							 $this->load->model('m_info_berjalan');//memanggil model m_data_produk
							 $data['info_berjalan'] = $this->m_info_berjalan->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']

							 //memangil model m_data dosen untuk di tampilkan di index1
							 $this->load->model('m_data_dosen');//memanggil model m_data_produk
		           $data['data_dosen'] = $this->m_data_dosen->ada();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']

							 $this->load->model('m_slide');//memanggil model m_data_produk
								$data['slide'] = $this->m_slide->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']


							 $this->load->view('index2',$data);
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
							 redirect('Halaman_utama','refresh');
				}



}
