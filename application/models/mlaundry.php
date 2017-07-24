<?php
class Mlaundry extends CI_Model {
 
    var $tabel = 'tb_laundry';
 
    function __construct() {
        parent::__construct();
    }
    function get_alllaundry() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    function get_laundry_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('kode_laundry', $id);
 
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function get_update($id,$data) {
 
        $this->db->where('kode_laundry', $id);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
    function del_laundry($id) {
        $this->db->where('kode_laundry', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
}
?>