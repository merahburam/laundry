<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Registrasi extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mlaundry');
        $this->load->helper('form','url');
        

    }

    public function index()
    {
        $this->load->view('index.html'); 
 
    }
 
    public function form(){

        $mau_ke                 = $this->uri->segment(3);
        $idu                    = $this->uri->segment(4);
        
        $id                     = addslashes($this->input->post('id'));
        $nama                   = addslashes($this->input->post('nama'));
        $nohp                   = addslashes($this->input->post('nohp'));
        $nim                    = addslashes($this->input->post('nim'));
        $gedung                 = addslashes($this->input->post('gedung'));
        $noLantai               = addslashes($this->input->post('noLantai'));
        $noKamar                = addslashes($this->input->post('noKamar'));
        $paket                  = addslashes($this->input->post('paket'));
		$bayar                  = addslashes($this->input->post('bayar'));
		$jumlah                 = addslashes($this->input->post('jumlah'));
		$metodebayar            = addslashes($this->input->post('metodebayar'));
        
        


        if ($mau_ke == "add") {
            $data['aksi'] = 'aksi_add';
            $this->load->view('mahasiswa/vformlaundry',$data);

        } else if ($mau_ke == "edit") {
            $data['qdata']  = $this->mlaundry->get_laundry_byid($idu);
             $data['aksi'] = 'aksi_edit';
            $this->load->view('vformbarang',$data);
            
        } else if ($mau_ke == "aksi_add") {
            $data = array(
                'nama'	    	=> $nama,
                'nohp'   	    => $nohp,
                'nim'       	=> $nim,
                'gedung'    	=> $gedung,
                'noLantai'  	=> $noLantai,
                'noKamar'   	=> $noKamar,
                'bayar'   		=> $bayar,
                'jumlah'    	=> $jumlah,
                'metodebayar'   => $metodebayar,
                'paket'     	=> $paket
            );
            $this->mlaundry->get_insert($data); 
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('terdaftar');
        } 
 
    }

    public function hapus($gid){
 
        $this->mlaundry->del_laundry($gid);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check fa-fw\"></i> Mahasiswa berhasil dihapus</div>");
        redirect('admin/home');
    }
}
