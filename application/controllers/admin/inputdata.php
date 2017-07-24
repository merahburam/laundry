<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Inputdata extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mlaundry');
        $this->load->helper('form','url');
		$this->load->library('session');
		
        

    }

    public function index()
    {
        $this->load->view('');
 
    }
 
    public function form(){

        $mau_ke                 = $this->uri->segment(4);
        $idu                    = $this->uri->segment(5);
          
        $id                     = addslashes($this->input->post('id'));
        $nama                   = addslashes($this->input->post('nama'));
        $nohp                   = addslashes($this->input->post('nohp'));
        $nim                    = addslashes($this->input->post('nim'));
        $gedung                 = addslashes($this->input->post('gedung'));
        $nolantai               = addslashes($this->input->post('nolantai'));
        $nokamar                = addslashes($this->input->post('nokamar'));
        $paket                  = addslashes($this->input->post('paket'));
		$bayar                  = addslashes($this->input->post('bayar'));
		$jumlah                 = addslashes($this->input->post('jumlah'));
		$metodebayar            = addslashes($this->input->post('metodebayar'));
 
        if ($mau_ke == "add") {
            $data['aksi'] = 'aksi_add';
            $this->load->view('admin/vformlaundry',$data);

        } else if ($mau_ke == "edit") {
            $data['qdata']  = $this->mlaundry->get_laundry_byid($idu);
            $data['aksi'] = 'aksi_edit';
            $this->load->view('admin/vformlaundryupdate',$data);

        } else if ($mau_ke == "aksi_add") {
            $data = array(
                'nama'	    	=> $nama,
                'nohp'      	=> $nohp,
                'nim'       	=> $nim,
                'gedung'    	=> $gedung,
                'nolantai'  	=> $nolantai,
                'nokamar'   	=> $nokamar,
                'bayar'   		=> $bayar,
                'jumlah'    	=> $jumlah,
                'metodebayar'   => $metodebayar,
                'paket'     	=> $paket
            );
            $this->mlaundry->get_insert($data);
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check fa-fw\"></i> Data mahasiswa berhasil ditambahkan</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('admin/home');

        } else if ($mau_ke == "aksi_edit") { 
          $data = array(
                'nama'	    	=> $nama,
                'nohp'      	=> $nohp,
                'nim'       	=> $nim,
                'gedung'    	=> $gedung,
                'nolantai'  	=> $nolantai,
                'nokamar'   	=> $nokamar,
                'bayar'   		=> $bayar,
                'jumlah'    	=> $jumlah,
                'metodebayar'   => $metodebayar,
                'paket'     	=> $paket
            );
            $this->mlaundry->get_update($id,$data);
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check fa-fw\"></i> Data mahasiswa berhasil diperbaharui</div>"); //pesan yang tampil setelah berhasil di update
            redirect('admin/home');
        }
 
    }

    public function hapus($gid){
 
        $this->mlaundry->del_laundry($gid);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check fa-fw\"></i> Data mahasiswa berhasil dihapus</div>");
        redirect('admin/home');
    }
}
