<?php
class M_slide extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
      }

    function list_data(){
        $query = $this->db->get('slide');// mengambil semua data dari tabel database data_dosen
        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
      }

    function input($param){
        $this->db->insert('slide',$param);
        return true;
      }

    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('slide');
    }

    function getEdit($id){
        $this->db->where('id' ,$id);
        $query = $this->db->get('slide');
        return $query->result();
     }

     function edit($param,$id){
        $this->db->where('id' ,$id);
        $this->db->update('slide',$param);
        return true;
     }

}
