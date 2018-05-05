<?php

class Battery extends CI_Model
{
	
	function getAll()
	{
		return $this->db->get('batteries')->result();
	}

	function getById($id)
	{
		$arr['id'] = $id;
		return $this->db->get_where('batteries',$arr)->row();
	}

	function save()
	{
		return $this->db->insert('batteries',$this->input->post());
	}

	function update($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->update('batteries',$this->input->post());
	}

	function delete($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('batteries');
	}
}
?>