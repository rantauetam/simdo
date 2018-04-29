<?php
class M_data_dosen extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
      }

    function list_data(){
        $query = $this->db->get('dosen');// mengambil semua data dari tabel database data_dosen

        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
      }

    function ada(){
        $adaaja =$this->db->get_where('dosen', array('status'=>'ada'));
        return $adaaja->result();
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

     function getRfid($rfid){
         $this->db->where('RFID',$rfid);
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

    function edit_data($where){
	       return $this->db->get_where('dosen',$where);
    }

    function update_data($where,$data,$table){
    		$this->db->where($where);
    		$this->db->update($table,$data);
	  }

}
