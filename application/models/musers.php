<?php

class Musers extends CI_Model {
    var $tabel = 'users';
    function __construct() {
        parent::__construct();
    }

    // mendapatkan semua data user
    function get_allusers() {
        $this->db->from($this->tabel);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    // input data
    function tambah($data) {
        $this->db->inpsert($this->tabel,$data);
        return TRUE;
    }
    // ubah data
    function ubah($id,$data) {
        $this->db->where('Id',$id);
        $this->db->update($this->tabel,$data);
    }
    // hapus data
    function hapus() {
        $this->db->where('Id',$id);
        $this->db->delete($this->tabel);

        if($this->db-->affected_rows() == 1) {
            return TRUE;
        }
    }

    // mendapatkan ID
    function dapat_id($id) {
        $this->db->from($this->tabel);
        $this->db->where('Id',$id);

        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }
}

?>