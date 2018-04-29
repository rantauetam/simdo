<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

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
           $this->load->model('m_pengumuman');//memanggil model m_data_produk
           $data['data_pengumuman'] = $this->m_pengumuman->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']

           $this->load->model('m_slide');//memanggil model m_data_produk
           $data['slide'] = $this->m_slide->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['data_produk']


           $this->load->view('admin/header1',$data1);
           $this->load->view('exadmin/v_data_pengumuman',$data);//memanggil view yang nanti kita akan buat dan memasukan $data dari model tadi
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
          $this->load->view('exadmin/v_input_pengumuman',$data);// memanggil view v_input_produk.php
           $this->load->view('admin/footer1');
         }

         public function Edit()
        {
          $data1 = array(
            'USERNAME' => $this->session->userdata('USERNAME')
          );
              $this->load->helper('form');//memanggil helper form nanti penggunaannya di v_input_produk.php

              $this->load->database();//memanggil pengaturan database dan mengaktifkannya
              $this->load->model('m_pengumuman');//memanggil model m_data_produk.php

              $id = $this->input->get('pengumuman');//mengambil param produk dari get untuk url di view
              $data['pengumuman'] = $this->m_pengumuman->getEdit($id);
              $data['type']="EDIT";// definisi type, karena nanti juga ada edit
              $this->load->view('admin/header1',$data1);
              $this->load->view('exadmin/v_input_pengumuman',$data);// memanggil view v_input_produk.php
               $this->load->view('admin/footer1');
            }



            public function Post(){
              $this->load->database();//memanggil pengaturan database dan mengaktifkannya
              $this->load->model('m_pengumuman');//memanggil model m_data_produk.php

              //mengambil data dari post memasukan ke array agar lebih mudah
              $param = array(
                //  'ID_PENGUMUMAN' => $this->input->post('id'),
                  'JUDUL' => $this->input->post('judul'),
                  'ISI' => $this->input->post('isi')

                  );
                //jika simpan == input
                if($this->input->post('simpan')=="INPUT"){
                  $this->m_pengumuman->input($param);
                }else
                if($this->input->post('simpan')=="EDIT"){
                  $id= $this->input->post('ID_PENGUMUMAN');
                  $this->m_pengumuman->edit($param,$id);
                }
                  $this->load->helper('url');
                  //mengalihkan ke list data produk setelah input atau edit selesai
                  redirect('pengumuman','refresh');
                }


            public function Delete(){
               $this->load->database();//memanggil pengaturan database dan mengaktifkannya
               $this->load->model('m_pengumuman');//memanggil model m_data_produk.php
               $id = $this->input->get('pengumuman');
               $this->m_pengumuman->delete($id);

               $this->load->helper('url');
               redirect('pengumuman','refresh');
             }

}
