<?php
class Cusers extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('musers');
        $this->load->helper('form','url');
    }

    function index() {
        $data['title'] = "Data Users";
        $data['qusers'] = $this->musers->get_allusers();
        $this->load->view('header');
        $this->load->view('vusers',$data);
        $this->load->view('footer');
    }

    public function form() {
        $to = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $id = addslashes($this->input->post('Id'));
        
    }
}

?>