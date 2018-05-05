<?php

class Dashboard extends CI_Controller
{
	
	/*function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login');
		}
		
	}
*/
	function index()
	{
		$this->load->view('admin/dashboard/index');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}	