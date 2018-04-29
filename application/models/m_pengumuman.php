<?php
class M_pengumuman extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
      }

    function list_data(){
        $query = $this->db->get('pengumuman');// mengambil semua data dari tabel database data_dosen

        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
      }

    function input($param){
        $this->db->insert('pengumuman',$param);
        return true;
      }

    function getEdit($id){
        $this->db->where('ID_PENGUMUMAN',$id);
        $query = $this->db->get('pengumuman');

        return $query->result();
     }

    function edit($param,$id){
       $this->db->where('ID_PENGUMUMAN',$id);
       $this->db->update('pengumuman',$param);
       return true;
    }

  function delete($id){
    $this->db->where('ID_PENGUMUMAN',$id);
    $this->db->delete('pengumuman');
    }

}
