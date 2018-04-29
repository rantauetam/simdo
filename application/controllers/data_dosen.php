<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen extends CI_Controller {

      function __construct(){
            parent::__construct();
            $this->load->helper(array('form','url'));
            $this->load->model('m_login');
            $this->load->library('session');
      }

      public function index()
      {
        $data1 = array(
          'USERNAME' => $this->session->userdata('USERNAME')
        );
           $this->load->helper('url');
           $this->load->database();//memanggil pengaturan database dan mengaktifkannya
           $this->load->model('m_data_dosen');//memanggil model m_data_produk
           $data['data_dosen'] = $this->m_data_dosen->list_data();//memanggil fungsi model dan melempar ke view_data_dosen foreach bla2
           $this->load->view('admin/header1',$data1);

           $this->load->view('exadmin/v_data_dosen',$data);//memanggil view yang nanti kita akan buat dan memasukan $data dari model tadi
           $this->load->view('admin/footer1');

       }

       public function Input()
         {
           $data1 = array(
             'USERNAME' => $this->session->userdata('USERNAME')
           );
          $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php
          $data['type']="INPUT";// definisi type, karena nanti juga ada edit
          $this->load->view('admin/header1',$data1);
          $this->load->view('exadmin/v_input_dosen',$data);// memanggil view v_input_produk.php
           $this->load->view('admin/footer1');
         }

         public function Edit()
        {
          $data1 = array(
            'USERNAME' => $this->session->userdata('USERNAME')
          );
              $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php

              $this->load->database();//memanggil pengaturan database dan mengaktifkannya
              $this->load->model('m_data_dosen');//memanggil model m_data_produk.php

              $nidn = $this->input->get('dosen');//mengambil param produk dari get
              $data['dosen'] = $this->m_data_dosen->getEdit($nidn);

              $data['type']="EDIT";// definisi type, karena nanti juga ada edit
              $this->load->view('admin/header1',$data1);
              $this->load->view('exadmin/v_edit_dosen',$data);// memanggil view v_input_produk.php
               $this->load->view('admin/footer1');
            }

            public function Edit1()
           {
             $data1 = array(
               'USERNAME' => $this->session->userdata('USERNAME')
             );
                 $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php

                 $this->load->database();//memanggil pengaturan database dan mengaktifkannya
                 $this->load->model('m_data_dosen');//memanggil model m_data_produk.php

                 $nidn = $this->input->get('dosen');//mengambil param produk dari get
                 $data['dosen'] = $this->m_data_dosen->getEdit($nidn);

                 $data['type']="EDIT";// definisi type, karena nanti juga ada edit
                 $this->load->view('admin/header1',$data1);
                 $this->load->view('exadmin/v_edit_foto_dosen',$data);// memanggil view v_input_produk.php
                  $this->load->view('admin/footer1');
               }


            function do_upload(){
          		$config['upload_path'] = 'gambar/';
          		$config['allowed_types'] = 'gif|jpg|png';
          		$config['max_size']	= '1000';
          		$config['max_width']  = '1024';
          		$config['max_height']  = '768';

          		$this->load->library('upload', $config);

          		if (  !$this->upload->do_upload()){
          			$error = array('error' => $this->upload->display_errors());

          			$this->load->view('form_upload', $error);
          		}
          		else{
          			$data = array('upload_data' => $this->upload->data());

          			$this->load->database();//memanggil pengaturan database dan mengaktifkannya
          			$this->load->model('m_data_dosen');//memanggil model m_data_dosen.php

          			$upload_data = $this->upload->data();

          			// $file_array = $this->upload->data('file_name');

          			$param = array(

          						'NIDN' => $this->input->post('nidn'),
          						'NAMA_DOSEN' => $this->input->post('nama'),
          						'NO_HP_DOSEN' => $this->input->post('no_hp'),
          						'FOTO' => $upload_data['file_name'],
                      'status' => $this->input->post('status'),
          						'RFID'=> $this->input->post('rfid')
          						);

                     if($this->input->post('simpan')=="INPUT"){
                          $this->m_data_dosen->input($param);

                     }else if($this->input->post('simpan')=="EDIT"){
                            $nidn= $this->input->post('NIDN');
                           $this->m_data_dosen->edit($param,$nidn);
                          }

                          $this->load->helper('url');
                          redirect('data_dosen','refresh');
          		}
          	}

            function do_upload1(){
              $config['upload_path'] = 'gambar/';
              $config['allowed_types'] = 'gif|jpg|png';
              $config['max_size']	= '1000';
              $config['max_width']  = '1024';
              $config['max_height']  = '768';

              $this->load->library('upload', $config);

              if (  !$this->upload->do_upload()){
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('form_upload', $error);
              }
              else{
                $data = array('upload_data' => $this->upload->data());

                $this->load->database();//memanggil pengaturan database dan mengaktifkannya
                $this->load->model('m_data_dosen');//memanggil model m_data_dosen.php

                $upload_data = $this->upload->data();

                // $file_array = $this->upload->data('file_name');

                $param = array(
                      'FOTO' => $upload_data['file_name']
                      );
                          $nidn= $this->input->post('NIDN');
                          $this->m_data_dosen->edit($param,$nidn);
                          $this->load->helper('url');
                          redirect('data_dosen','refresh');
              }
            }

            public function Post(){
            $this->load->database();//memanggil pengaturan database dan mengaktifkannya
            $this->load->model('m_data_dosen');//memanggil model m_data_produk.php

            //mengambil data dari post memasukan ke array agar lebih mudah
            $param = array(
                  'NIDN' => $this->input->post('nidn'),
                  'NAMA_DOSEN' => $this->input->post('nama'),
                  'NO_HP_DOSEN' => $this->input->post('no_hp'),
                  // 'FOTO' => $this->input->post('foto'),
                  'status' => $this->input->post('status'),
                  'RFID'=> $this->input->post('rfid')
                  );
            //jika simpan == input
          if($this->input->post('simpan')=="INPUT"){
               $this->m_data_dosen->input($param);
          }else
           if($this->input->post('simpan')=="EDIT"){
                 $nidn= $this->input->post('NIDN');
                $this->m_data_dosen->edit($param,$nidn);
               }
               $this->load->helper('url');
               //mengalihkan ke list data produk setelah input atau edit selesai
              redirect('data_dosen','refresh');

            }



            public function Delete(){
               $this->load->database();//memanggil pengaturan database dan mengaktifkannya
               $this->load->model('m_data_dosen');//memanggil model m_data_produk.php
               $nidn = $this->input->get('dosen');
               $this->m_data_dosen->delete($nidn);
               $this->load->helper('url');
               redirect('data_dosen','refresh');
             }

}
