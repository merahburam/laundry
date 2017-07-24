<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function check_user($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query = $this->db->get('user');
		
		if($query->num_rows('user') > 0)
		{
			$row = $query->row();
			return $row;
		}
		else
		{
			return FALSE;
		}
	}

}