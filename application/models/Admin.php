<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
	
	function verify()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$arr['username'] = $username;
		$arr['password'] = $password;

		return $this->db->get_where('admins',$arr)->row_array();
	}
}