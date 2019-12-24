<?php 
class Mpeminjaman_detail extends CI_Model {
    var $tabel = 'peminjaman_detail';
    var $tabelp = 'peminjaman';
    function __construct() {
        parent:: __construct();
    }

    function get_allpeminjamandetail() {
        $this->db->from($this->tabel);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function get_allpeminjaman() {
        $this->db->from($this->tabelp);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    // function ins($data) {
    //     $this->db->insert($this->tabel,$data);
    //     return TRUE;
    // }

    // function upd($id,$data) {
    //     $this->db->where('peminjaman_id',$id);
    //     $this->db->update($this->tabel,$data);

    //     return TRUE;
    // }

    // function del($id) {
    //     $this->db->where('peminjaman_id',$id);
    //     $this->db->delete($this->tabel);

    //     if($this->db->affected_rows() == 1) {
    //         return TRUE;   
    //     }
    //     return FALSE;
        
    // }

    // function get_byid($id) {
    //     $this->db->from($this->tabel);
    //     $this->db->where('peminjaman_id',$id);

    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     }
    // }
}

?>