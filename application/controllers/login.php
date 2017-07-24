<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin','ml');
		$this->load->library('session');
		$this->load->helper(array('form'));
	}
	
	public function index()
	{
		$this->load->view('vlogin');
	}
	
	public function process_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
			
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if($this->form_validation->run() == TRUE)
		{
			if($detail = $this->ml->check_user($username,$password)){
				if($detail->id_posisi == '1')
				{
					$data= array('username' => $username,'login' => TRUE,'detail'=>$detail);
					$this->session->set_userdata($data);
					redirect('admin/home');
				}
				
			}
			else{
				$this->session->set_flashdata('msg','Sorry, your username or password is not match');
				$this->session->set_flashdata('username', $username);

				redirect('login','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('msg','Fill the field full');
			$this->session->set_flashdata('username', $username);

			redirect('login','refresh');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}