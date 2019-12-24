<?php 
class Chelloworld extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    function index() {
        $this->load->view('header');
        $this->load->view('vhelloworld');
        $this->load->view('footer');
    }
}

?>
