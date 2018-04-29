<?php
class M_data_admin extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
      }

    function list_data(){
        $query = $this->db->get('admin');// mengambil semua data dari tabel database data_dosen

        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
      }

    function input($param){
        $this->db->insert('admin',$param);
        return true;
      }

    function getEdit($id){
        $this->db->where('ID_ADMIN',$id);
        $query = $this->db->get('admin');

        return $query->result();
     }

    function edit($param,$id){
       $this->db->where('ID_ADMIN',$id);
       $this->db->update('admin',$param);
       return true;
    }

  function delete($id){
    $this->db->where('ID_ADMIN',$id);
    $this->db->delete('admin');
    }

}
