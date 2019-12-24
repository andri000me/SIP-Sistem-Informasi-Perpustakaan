<?php 

class Cpeminjaman extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mpeminjaman');
        $this->load->helper('form','url');  
    }

    public function index() {
        $data['title'] = "Data Peminjaman";
        $data['qpeminjaman'] = $this->mpeminjaman->get_allpeminjaman();
        $this->load->view('header');
        $this->load->view('vpeminjaman',$data);
        $this->load->view('footer');
    }

    public function form() {
        $to = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $data['qmember'] = $this->mpeminjaman->get_allmember();
        $data['qbuku'] = $this->mpeminjaman->get_allbuku();

        $member_id = addslashes($this->input->post('member_id'));
        $buku_id = addslashes($this->input->post('buku_id'));
        $tgl_pinjam = date('Y-m-d');
        // set 7 hari
        $date = strtotime("+7 day");
        $t = date('Y-m-d', $date);

        $tgl_kembali = $t;
        $jumlah = addslashes($this->input->post('jumlah_pinjam'));
        $status = addslashes($this->input->post('status'));
        $ket_pinjam = addslashes($this->input->post('ket_pinjam'));
        
        if($to=="add") {
            $data['title'] = "Tambah Peminjaman";
            $data['act'] = "add_save";
            $this->load->view('header');
            $this->load->view('vpeminjaman_form',$data);
            $this->load->view('session/vhome',$data);
            $this->load->view('footer');
        }elseif ($to=="add_save") {
            $data=array(
               
                'member_id'=>$member_id,
                'buku_id'=>$buku_id,
                'tgl_pinjam'=>$tgl_pinjam,
                'tgl_kembali'=>$tgl_kembali,
                'jumlah_pinjam'=>$jumlah,
                'status'=>$status,
                'ket_pinjam'=>$ket_pinjam
            );
            $this->mpeminjaman->ins($data);
            redirect('cpeminjaman');
        }elseif ($to=="upd") {
            $data['title'] = "Ubah Peminjaman";
            $data['act'] = "upd_save";
            $data['qdetpeminjaman'] = $this->mpeminjaman->get_byid($id);
            $this->load->view('header');
            $this->load->view('vpeminjaman_form',$data);
            $this->load->view('footer');
        }elseif ($to=="upd_save") {
            $data=array(
                
                'member_id'=>$member_id,
                'buku_id'=>$buku_id,
                'tgl_pinjam'=>$tgl_pinjam,
                'tgl_kembali'=>$tgl_kembali,
                'jumlah_pinjam'=>$jumlah,
                'status'=>$status,
                'ket_pinjam'=>$ket_pinjam
            );
            $this->mpeminjaman->upd($id,$data);
            redirect('cpeminjaman');
        }
    }

    function del($id) {
        $this->mpeminjaman->del($id);
        redirect('cpeminjaman');
    }

    function cetak() {
        $data['qpeminjaman'] = $this->mpeminjaman->get_allpeminjaman();
        $this->load->view('vpeminjaman_preview',$data);
        $this->load->view('footer');
    }

    
}

?>