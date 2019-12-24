<?php 
class Mbuku extends CI_Model {
    var $tabel = 'buku';
    function __construct() {
        parent:: __construct();
    }

    function get_allbuku() {
        $this->db->select('*');
        $this->db->from($this->tabel);
        $this->db->join('rak', 'rak.rak_id = buku.rak_id');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allrak() {
        $this->db->from('rak');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function ins($data) {
        $this->db->insert($this->tabel,$data);
        return TRUE;
    }

    function upd($id,$data) {
        $this->db->where('buku_id',$id);
        $this->db->update($this->tabel,$data);

        return TRUE;
    }
    // function detail_buku($id) {
    //     $this->db->from($this->tabel);
    //     $this->db->where('buku_id',$id);
       
    //     $query = $this->db->get();

    //     if($query->num_rows() > 0) {
    //         return $query->result();
    //     }
    // }

    function del($id) {
        $this->db->where('buku_id',$id);
        $this->db->delete($this->tabel);

        if($this->db->affected_rows() == 1) {
            return TRUE;   
        }
        return FALSE;
        
    }

    function get_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('buku_id',$id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}

?>