<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('mlaundry'); 
		$this->load->library('session');
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}else if($this->session->userdata('detail')->id_posisi != '1'){
			redirect('login');
		}
	}
	
	public function index()
	{
		$data['qlaundry'] = $this->mlaundry->get_alllaundry();
		$this->load->view('admin/vhome',$data);
	}
}