<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {

        function __construct(){
                  parent::__construct();
                  $this->load->helper(array('form','url'));
                  $this->load->model('m_login');
                  $this->load->library('session');
                  $data1 = array(
                    'USERNAME' => $this->session->userdata('USERNAME')
                  );
        }

      public function index()
      {
        $data1 = array(
          'USERNAME' => $this->session->userdata('USERNAME')
        );
           $this->load->helper('url');
           $this->load->database();//memanggil pengaturan database dan mengaktifkannya
           $this->load->model('m_data_admin');//memanggil model m_data_produk
           $data['data_admin'] = $this->m_data_admin->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']
           $this->load->view('admin/header1',$data1);

           $this->load->view('exadmin/v_data_admin',$data);//memanggil view yang nanti kita akan buat dan memasukan $data dari model tadi
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
          $this->load->view('exadmin/v_input_admin',$data);// memanggil view v_input_produk.php
           $this->load->view('admin/footer1');
         }

         public function Edit()
          {
            $data1 = array(
              'USERNAME' => $this->session->userdata('USERNAME')
            );

              $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php

              $this->load->database();//memanggil pengaturan database dan mengaktifkannya
              $this->load->model('m_data_admin');//memanggil model m_data_produk.php

              $id = $this->input->get('admin');//mengambil param produk dari get
              $data['admin'] = $this->m_data_admin->getEdit($id);
              $data['type']="EDIT";// definisi type, karena nanti juga ada edit
              $this->load->view('admin/header1',$data1);
              $this->load->view('exadmin/v_input_admin',$data);// memanggil view v_input_produk.php
               $this->load->view('admin/footer1');
            }

            public function Post(){
            $this->load->database();//memanggil pengaturan database dan mengaktifkannya
            $this->load->model('m_data_admin');//memanggil model m_data_produk.php

            //mengambil data dari post memasukan ke array agar lebih mudah
            $param = array(
                  'NAMA' => $this->input->post('nama'),
                  'USERNAME' => $this->input->post('user'),
                  'PASSWORD' => $this->input->post('pass'),
                
                  );
            //jika simpan == input
          if($this->input->post('simpan')=="INPUT"){
               $this->m_data_admin->input($param);
          }else
           if($this->input->post('simpan')=="EDIT"){
                 $id= $this->input->post('ID_ADMIN');
                $this->m_data_admin->edit($param,$id);
               }
               $this->load->helper('url');
               //mengalihkan ke list data produk setelah input atau edit selesai
               redirect('data_admin','refresh');
            }


            public function Delete(){
               $this->load->database();//memanggil pengaturan database dan mengaktifkannya
               $this->load->model('m_data_admin');//memanggil model m_data_produk.php
               $id = $this->input->get('admin');
               $this->m_data_admin->delete($id);

               $this->load->helper('url');
               redirect('data_admin','refresh');
             }

}
