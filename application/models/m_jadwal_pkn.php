<?php
class M_jadwal_pkn extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
      }

    function list_data(){
        $query = $this->db->get('jadwal_pkn');// mengambil semua data dari tabel database data_dosen

        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
      }

    function input($param){
        $this->db->insert('jadwal_pkn',$param);
        return true;
      }

    function getEdit($id){
        $this->db->where('ID_PKN',$id);
        $query = $this->db->get('jadwal_pkn');

        return $query->result();
     }

    function edit($param,$id){
       $this->db->where('ID_PKN',$id);
       $this->db->update('jadwal_pkn',$param);
       return true;
    }

  function delete($id){
    $this->db->where('ID_PKN',$id);
    $this->db->delete('jadwal_pkn');
    }

}
