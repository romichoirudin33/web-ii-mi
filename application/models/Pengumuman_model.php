<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {

	public function all()
	{
		return $this->db->get('pengumuman')->result();
	}

	public function get()
	{
		# code...
	}

	public function create()
	{
		# code...
	}

	public function update()
	{
		# code...
	}

	public function remove()
	{
		# code...
	}

}

/* End of file Pengumuman_model.php */
/* Location: ./application/models/Pengumuman_model.php */