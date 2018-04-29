<?php
class M_info_berjalan extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
      }

    function list_data(){
        $query = $this->db->get('info_berjalan');// mengambil semua data dari tabel database data_dosen

        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
      }

    function input($param){
        $this->db->insert('info_berjalan',$param);
        return true;
      }

    function getEdit($id){
        $this->db->where('ID_INFO',$id);
        $query = $this->db->get('info_berjalan');

        return $query->result();
     }

    function edit($param,$id){
       $this->db->where('ID_INFO',$id);
       $this->db->update('info_berjalan',$param);
       return true;
    }

  function delete($id){
    $this->db->where('ID_INFO',$id);
    $this->db->delete('info_berjalan');
    }

}
