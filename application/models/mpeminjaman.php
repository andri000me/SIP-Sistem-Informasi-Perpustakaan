<?php 
class Mpeminjaman extends CI_Model {
    var $tabel = 'peminjaman';
    function __construct() {
        parent:: __construct();
    }

    function get_allpeminjaman() {
        $this->db->select('*');
        $this->db->from($this->tabel);
        $this->db->join('member', 'member.member_id = peminjaman.member_id');
        $this->db->join('buku', 'buku.buku_id = peminjaman.buku_id');
        $this->db->where('peminjaman.status = ','pinjam');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    

    function get_allpengembalian() {
        $this->db->select('*');
        $this->db->from($this->tabel);
        $this->db->join('member', 'member.member_id = peminjaman.member_id');
        $this->db->join('buku', 'buku.buku_id = peminjaman.buku_id');
        $this->db->where('peminjaman.status = ','kembali');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allmember() { 
        $this->db->from('member');
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allbuku() {
        $this->db->from('buku');
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
        $this->db->where('peminjaman_id',$id);
        $this->db->update($this->tabel,$data);

        return TRUE;
    }

    function del($id) {
        $this->db->where('peminjaman_id',$id);
        $this->db->delete($this->tabel);

        if($this->db->affected_rows() == 1) {
            return TRUE;   
        }
        return FALSE;
        
    }

    function get_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('peminjaman_id',$id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}

?>