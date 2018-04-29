<?php
class M_upload_foto extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
      }

    function list_data(){
        $query = $this->db->get('dosen');// mengambil semua data dari tabel database data_dosen

        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
      }

    function input($param){
        $this->db->insert('dosen',$param);
        return true;
      }

    function getEdit($nidn){
        $this->db->where('NIDN',$nidn);
        $query = $this->db->get('dosen');

        return $query->result();
     }

    function edit($param,$nidn){
       $this->db->where('NIDN',$nidn);
       $this->db->update('dosen',$param);
       return true;
    }

  function delete($nidn){
    $this->db->where('NIDN',$nidn);
    $this->db->delete('dosen');
    }

}
