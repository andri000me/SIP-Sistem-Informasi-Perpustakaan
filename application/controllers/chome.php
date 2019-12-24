<?php
class Chome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mhome');
        $this->load->model('mpeminjaman');
        $this->load->helper('form','url'); 
        
    }
    
    function index() {
        $data['qmember'] = $this->mpeminjaman->get_allmember();
        $data['qbuku'] = $this->mpeminjaman->get_allbuku();
        $data['hmember'] = $this->mhome->hitung_member();
        $data['hbuku'] = $this->mhome->hitung_buku();
        $data['hpeminjaman'] = $this->mhome->hitung_tpeminjaman();
        $data['hpengembalian'] = $this->mhome->hitung_tpengembalian();
        $data['qpopuler'] = $this->mpeminjaman->get_bukuPopuler();
        $this->load->view('header');
        $this->load->view('session/vhome',$data);
        $this->load->view('footer');

    }
}
