<?php

/**
 *
 */
 class Jadwal_pkn_model extends CI_Model {

     public function __construct(){
         $this->load->database();
       }

      public function get_jadwal_pkn(){
        $query = $this->db->get('jadwal_pkn');
        return $query->result_array();
      }


    }
