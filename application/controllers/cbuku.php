<?php 

class Cbuku extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mbuku');
        $this->load->helper('form','url');  
    }

    public function index() {
        $data['title'] = "Data Buku";
        $data['qbuku'] = $this->mbuku->get_allbuku();
        $this->load->view('header');
        $this->load->view('vbuku',$data);
        $this->load->view('footer');
    }

    public function form() {
        $to = $this->uri->segment(3);
        $id = $this->uri->segment(4);
        
        $data['qrak'] = $this->mbuku->get_allrak();
        $buku_id = addslashes($this->input->post('buku_id'));
        $kode_buku = addslashes($this->input->post('kode_buku'));
        $judul = addslashes($this->input->post('judul'));
        $penerbit = addslashes($this->input->post('penerbit'));
        $pengarang = addslashes($this->input->post('pengarang'));
        $th_terbit = addslashes($this->input->post('th_terbit'));
        $jumlah = addslashes($this->input->post('jumlah'));
        $rak = addslashes($this->input->post('rak_id'));
        $ket = addslashes($this->input->post('ket'));
        
        if($to=="add") {
            $data['title'] = "Tambah Buku";
            $data['act'] = "add_save";
            $this->load->view('header');
            $this->load->view('vbuku_form',$data);
            $this->load->view('footer');
        }elseif ($to=="add_save") {
            $data=array(
                'kode_buku'=>$kode_buku,
                'judul'=>$judul,
                'penerbit'=>$penerbit,
                'pengarang'=>$pengarang,
                'th_terbit'=>$th_terbit,
                'jumlah'=>$jumlah,
                'rak_id'=>$rak,
                'ket'=>$ket
            );
            $this->mbuku->ins($data);
            redirect('cbuku');
        }elseif ($to=="upd") {
            $data['title'] = "Ubah Buku";
            $data['act'] = "upd_save";
            $data['qdetbuku'] = $this->mbuku->get_byid($id);
            $this->load->view('header');
            $this->load->view('vbuku_form',$data);
            $this->load->view('footer');
        }elseif ($to=="upd_save") {
            $data=array(
                'kode_buku'=>$kode_buku,
                'judul'=>$judul,
                'penerbit'=>$penerbit,
                'pengarang'=>$pengarang,
                'th_terbit'=>$th_terbit,
                'jumlah'=>$jumlah,
                'rak_id'=>$rak,
                'ket'=>$ket
            );
            $this->mbuku->upd($id,$data);
            redirect('cbuku');
        }
    }
    
    function del($id) {
        $this->mbuku->del($id);
        redirect('cbuku');
    }

    function cetak() {
        $data['qbuku'] = $this->mbuku->get_allbuku();
        $this->load->view('vbuku_preview',$data);
        $this->load->view('footer');
    }

    function detail_buku() {
        $id = $this->uri->segment(3);
        $data['qbuku'] = $this->mbuku->get_byid($id);
        $this->load->view('header');
        $this->load->view('vbuku_detail', $data);
        $this->load->view('footer');
    }
    function pdf() {
        
        // $this->load->view('vbuku_preview',$data);
        
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'LAPORAN BUKU',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'PERPUSTAKAAN MHANKSTAP',0,1,'C');
        $pdf->Cell(190,7,'Edisi : '.date("d-m-Y"),0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Kode Buku',1,0);
        $pdf->Cell(40,6,'Judul Buku',1,0);
        $pdf->Cell(27,6,'Penerbit',1,0);
        $pdf->Cell(25,6,'Pengarang',1,0);
        $pdf->Cell(23,6,'Tahun Terbit',1,0);
        $pdf->Cell(25,6,'Jumlah Buku',1,1);
        $pdf->SetFont('Arial','',10);
        $qbuku = $this->mbuku->get_allbuku();
        foreach ($qbuku as $row){
            $pdf->Cell(20,6,$row->kode_buku,1,0);
            $pdf->Cell(40,6,$row->judul,1,0);
            $pdf->Cell(27,6,$row->penerbit,1,0);
            $pdf->Cell(25,6,$row->pengarang,1,0); 
            $pdf->Cell(23,6,$row->th_terbit,1,0); 
            $pdf->Cell(25,6,$row->jumlah,1,1); 
        }
        $pdf->Output();
    }
}

?>