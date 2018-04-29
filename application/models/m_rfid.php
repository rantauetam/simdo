<?php

  /**
   *
   */
  class M_rfid extends CI_Model{

    function __construct(){
      # code...
      $this->load->database();
    }

    public function get_dosen_rfid($rfid = false){
      $query = $this->db->get_where('dosen', array('RFID'=>$rfid));
      return $query->row_array();
    }

    public function update_dosen_rfid($rfid){
      $this->load->helper('url');

      $data = array(
        'status' => $this->input->post('status')
      );
      $this->db->where('RFID', $rfid);
      return $this->db->update('dosen', $data);
    }

    function edit($param,$rfid){
       $this->db->where('RFID',$rfid);
       $this->db->update('dosen',$param);
       return true;
    }


  }

 ?>
