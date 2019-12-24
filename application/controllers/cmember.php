<?php 

class Cmember extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('member');
        $this->load->helper('form','url');  
    }

    public function index() {
        $data['title'] = "Data Member";
        $data['qmember'] = $this->member->get_allmember();
        $data['qpinjam'] = $this->member->get_idpeminjaman();
        $this->load->view('header');
        $this->load->view('vmember',$data);
        $this->load->view('footer');
    }

    public function form() {
        $to = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $member_id = addslashes($this->input->post('member_id'));
        $kode_member = addslashes($this->input->post('kode_member'));
        $nama = addslashes($this->input->post('nama'));
        $alamat = addslashes($this->input->post('alamat'));
        $no_identitas = addslashes($this->input->post('no_identitas'));
        
        if($to=="add") {
            $data['title'] = "Tambah Member";
            $data['act'] = "add_save";
            $this->load->view('header');
            $this->load->view('vmember_form',$data);
            $this->load->view('footer');
        }elseif ($to=="add_save") {
            $data=array(
                
                'kode_member'=>$kode_member,
                'nama'=>$nama,
                'alamat'=>$alamat,
                'no_identitas'=>$no_identitas
            );
            $this->member->ins($data);
            redirect('cmember');
        }elseif ($to=="upd") {
            $data['title'] = "Ubah Member";
            $data['act'] = "upd_save";
            $data['qdetmember'] = $this->member->get_byid($id);
            $this->load->view('header');
            $this->load->view('vmember_form',$data);
            $this->load->view('footer');
        }elseif ($to=="upd_save") {
            $data=array(
                
                'kode_member'=>$kode_member,
                'nama'=>$nama,
                'alamat'=>$alamat,
                'no_identitas'=>$no_identitas
            );
            $this->member->upd($id,$data);
            redirect('cmember');
        }
    }

    function del($id) {
        $this->member->del($id);
        redirect('cmember');
    }

    function cetak() {
        $data['qmember'] = $this->member->get_allmember();
        $this->load->view('vmember_preview',$data);
        $this->load->view('footer');
    }
}

?>