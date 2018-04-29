<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      class Upload_Img extends CI_Controller {
          var $gallery_path;
          var $gallery_path_url;
          public function __construct() {
               parent::__construct();
               $this->gallery_path = realpath(APPPATH . '../assets/uploads/img/');
               $this->gallery_path_url = base_url() . 'assets/uploads/img/';

  $this->load->helper(array('url','html','form'));

   }

   function upload() {
                if($this->input->post('upload')) {
                $config = array(
                         'allowed_types' => 'jpg|jpeg|gif|png',
                         'upload_path' => $this->gallery_path,
                         'max_size' => 2000,
                         'file_name' => url_title($this->input->post('file_upload'))
                );

                $this->load->library('upload', $config);
                $this->upload->do_upload();

                //////// START ,Sintak untuk menyimpan data hasil upload ke database mysql
                $file = $this->upload->file_name;
                // $ket = $this->input->post('ket');
                // $tgl = date('Y-m-d H:i:s');

  $this->db->insert('dosen',array(
                        'FOTO' => $file
                        // 'ket' => $ket,
                        // 'tgl' => $tgl,
                ));
                ///////// END

           redirect ('upload_img');

         }
        }

    }

?>
