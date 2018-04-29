<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_pkn extends CI_Controller {

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
           $this->load->model('m_jadwal_pkn');//memanggil model m_data_produk
           $data['jadwal_pkn'] = $this->m_jadwal_pkn->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']

           $this->load->view('admin/header1',$data1);
           $this->load->view('exadmin/v_jadwal_pkn',$data);//memanggil view yang nanti kita akan buat dan memasukan $data dari model tadi
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
          $this->load->view('exadmin/v_input_jadwal_pkn',$data);// memanggil view v_input_produk.php
           $this->load->view('admin/footer1');
         }

         public function Edit()
        {
          $data1 = array(
            'USERNAME' => $this->session->userdata('USERNAME')
          );
              $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php

              $this->load->database();//memanggil pengaturan database dan mengaktifkannya
              $this->load->model('m_jadwal_pkn');//memanggil model m_data_produk.php

              $id = $this->input->get('jadwal_pkn');//mengambil param produk dari get
              $data['jadwal_pkn'] = $this->m_jadwal_pkn->getEdit($id);
              $data['type']="EDIT";// definisi type, karena nanti juga ada edit
              $this->load->view('admin/header1',$data1);
              $this->load->view('exadmin/v_input_jadwal_pkn',$data);// memanggil view v_input_produk.php
               $this->load->view('admin/footer1');
            }

            public function Post(){
            $this->load->database();//memanggil pengaturan database dan mengaktifkannya
            $this->load->model('m_jadwal_pkn');//memanggil model m_data_produk.php

            //mengambil data dari post memasukan ke array agar lebih mudah
            $param = array(

                  'NAMA_KEGIATAN' => $this->input->post('kegiatan'),
                  'PENDAFTARAN' => $this->input->post('pendaftaran'),
                  'PELAKSANAAN'=> $this->input->post('pelaksanaan')

                  );
            //jika simpan == input
          if($this->input->post('simpan')=="INPUT"){
               $this->m_jadwal_pkn->input($param);
          }else
           if($this->input->post('simpan')=="EDIT"){
                 $id = $this->input->post('ID_PKN');
                $this->m_jadwal_pkn->edit($param,$id);
               }
               $this->load->helper('url');
               //mengalihkan ke list data produk setelah input atau edit selesai
               redirect('jadwal_pkn','refresh');
            }


            public function Delete(){
               $this->load->database();//memanggil pengaturan database dan mengaktifkannya
               $this->load->model('m_jadwal_pkn');//memanggil model m_data_produk.php
               $id = $this->input->get('jadwal_pkn');
               $this->m_jadwal_pkn->delete($id);

               $this->load->helper('url');
               redirect('jadwal_pkn','refresh');
             }

}
