<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_berjalan extends CI_Controller {

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
           $this->load->model('m_info_berjalan');//memanggil model m_data_produk
           $data['info_berjalan'] = $this->m_info_berjalan->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']
           $this->load->view('admin/header1',$data1);

           $this->load->view('exadmin/v_info_berjalan',$data);//memanggil view yang nanti kita akan buat dan memasukan $data dari model tadi
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
          $this->load->view('exadmin/v_input_info',$data);// memanggil view v_input_produk.php
          $this->load->view('admin/footer1');
         }

         public function Edit()
        {
          $data1 = array(
            'USERNAME' => $this->session->userdata('USERNAME')
          );
              $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php

              $this->load->database();//memanggil pengaturan database dan mengaktifkannya
              $this->load->model('m_info_berjalan');//memanggil model m_data_produk.php

              $id = $this->input->get('info_berjalan');//mengambil param produk dari get
              $data['info_berjalan'] = $this->m_info_berjalan->getEdit($id);
              $data['type']="EDIT";// definisi type, karena nanti juga ada edit
              $this->load->view('admin/header1',$data1);
              $this->load->view('exadmin/v_input_info',$data);// memanggil view v_input_produk.php
               $this->load->view('admin/footer1');
            }

            public function Post(){
            $this->load->database();//memanggil pengaturan database dan mengaktifkannya
            $this->load->model('m_info_berjalan');//memanggil model m_data_produk.php

            //mengambil data dari post memasukan ke array agar lebih mudah
            $param = array(

                  'ISI' => $this->input->post('isi'),
                
                  );
            //jika simpan == input
          if($this->input->post('simpan')=="INPUT"){
               $this->m_info_berjalan->input($param);
          }else
           if($this->input->post('simpan')=="EDIT"){
                 $id = $this->input->post('ID_INFO');
                $this->m_info_berjalan->edit($param,$id);
               }
               $this->load->helper('url');
               //mengalihkan ke list data produk setelah input atau edit selesai
               redirect('info_berjalan','refresh');
            }


            public function Delete(){
               $this->load->database();//memanggil pengaturan database dan mengaktifkannya
               $this->load->model('m_info_berjalan');//memanggil model m_data_produk.php
               $id = $this->input->get('info_berjalan');
               $this->m_info_berjalan->delete($id);

               $this->load->helper('url');
               redirect('info_berjalan','refresh');
             }

}
