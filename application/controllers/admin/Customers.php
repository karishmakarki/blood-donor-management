<?php

class Customers extends CI_Controller
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
	function list()
	{

		$arr['model'] = $this->battery->getAll($id);
		$this->load->view('admin/customers/list',$arr);
	}

	function add()
	{
		
		$this->load->view('admin/customers/add');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}	