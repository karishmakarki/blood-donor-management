<?php

class Batteries extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('battery');
	}

	function index()
	{
		$data['model'] = $this->battery->getAll();
		$this->load->view('admin/battery/index',$data);
	}

	function add()
	{
		$this->load->view('admin/battery/add');
	}

	function save()
	{
		$this->battery->save();
		redirect('admin/batteries');
	}

	function edit($id)
	{
		$data['model'] = $this->battery->getById($id);
		$this->load->view('admin/battery/edit',$data);
	}

	function update($id)
	{
		$this->battery->update($id);
		redirect('admin/batteries');
	}

	function delete($id)
	{
		$this->battery->delete($id);
		redirect('admin/batteries');
	}

	function view($id)
	{
		$data['model'] = $this->battery->getById($id);
		$this->load->view('admin/battery/view',$data);
	}
}
?>