<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{	
	/*function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin'))
		{
			redirect('admin/dashboard');
		}		
	}
*/
	function index()
	{
		$this->load->view('admin/login');
	}

	function verify()
	{
		$this->load->model('admin');
		$result = $this->admin->verify();

		if($result)
		{
			$this->session->set_userdata('admin',$result['username']);
			redirect('admin/dashboard');
		}

		else
		{
			redirect('admin/login');
		}

	}
}