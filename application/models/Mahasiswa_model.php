<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('mahasiswa')->result();
	}

	public function create($object)
	{
		return $this->db->insert('mahasiswa', $object);
	}

	public function remove($id)
	{
		$this->db->where('nim', $id);
		return $this->db->delete('mahasiswa');
	}

	public function get_id($id)
	{
		//select from mahasiswa where nim = 'parameter'
		$this->db->where('nim', $id);
		return $this->db->get('mahasiswa')->row();
	}

	public function update($id, $object)
	{
		$this->db->where('nim', $id);
		return $this->db->update('mahasiswa', $object);
	}

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */