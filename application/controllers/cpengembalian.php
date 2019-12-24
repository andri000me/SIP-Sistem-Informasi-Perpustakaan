<?php 

class Cpengembalian extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mpeminjaman');
    }

    public function index() {

        $data['qpengembalian'] = $this->mpeminjaman->get_allpengembalian();
        $this->load->view('header');
        $this->load->view('vpengembalian',$data);
        $this->load->view('footer');
    }


}


?>