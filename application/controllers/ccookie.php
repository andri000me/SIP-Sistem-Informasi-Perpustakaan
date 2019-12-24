<?php

class Cookie extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('header');
        $this->load->view('vcookie');
        $this->load->view('footer');
    }
}

?>