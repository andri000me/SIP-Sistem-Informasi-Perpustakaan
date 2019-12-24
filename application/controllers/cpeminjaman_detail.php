<?php 

class Cpeminjaman_detail extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mpeminjaman_detail');
        $this->load->helper('form','url');  
    }

    public function index() {
        $data['title'] = "Data Peminjaman";
        $data['qpeminjaman_detail'] = $this->mpeminjaman_detail->get_allpeminjamandetail();
        $this->load->view('header');
        $this->load->view('vpeminjaman_detail',$data);
        $this->load->view('footer');
    }

    // public function form() {
    //     $to = $this->uri->segment(3);
    //     $id = $this->uri->segment(4);

    //     $peminjaman_id = addslashes($this->input->post('peminjaman_id'));
    //     $tgl_pinjam = addslashes($this->input->post('tgl_pinjam'));
    //     $ket = addslashes($this->input->post('ket'));
        
    //     if($to=="add") {
    //         $data['title'] = "Create a new record";
    //         $data['act'] = "add_save";
    //         $this->load->view('header');
    //         $this->load->view('vpeminjaman_form',$data);
    //         $this->load->view('footer');
    //     }elseif ($to=="add_save") {
    //         $data=array(
    //             'peminjaman_id'=>$peminjaman_id,
    //             'tgl_pinjam'=>$tgl_pinjam,
    //             'ket'=>$ket
    //         );
    //         $this->mpeminjaman->ins($data);
    //         redirect('cpeminjaman');
    //     }elseif ($to=="upd") {
    //         $data['title'] = "Update record";
    //         $data['act'] = "upd_save";
    //         $data['qdetpeminjaman'] = $this->mpeminjaman->get_byid($id);
    //         $this->load->view('header');
    //         $this->load->view('vpeminjaman_form',$data);
    //         $this->load->view('footer');
    //     }elseif ($to=="upd_save") {
    //         $data=array(
    //             'peminjaman_id'=>$peminjaman_id,
    //             'tgl_pinjam'=>$tgl_pinjam,
    //             'ket'=>$ket
    //         );
    //         $this->mpeminjaman->upd($id,$data);
    //         redirect('cpeminjaman');
    //     }
    // }

    // function del($id) {
    //     $this->mpeminjaman->del($id);
    //     redirect('cpeminjaman');
    // }

    function cetak() {
        $data['qpeminjaman_detail'] = $this->mpeminjaman_detail->get_allpeminjaman_detail();
        $this->load->view('vpeminjaman_detail_preview',$data);
        $this->load->view('footer');
    }
}

?>