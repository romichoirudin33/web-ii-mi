<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('admin') == true) {
			redirect('admin/home','refresh');
		}
		$this->load->view('v_login');
	}

	public function cek_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// cek dengan yang ada di database
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$user = $this->db->get('users')->row();

		if (!empty($user)) {
			$data = array(
				'admin' => true,
				'nama_user' => $user->nama
			);
			$this->session->set_userdata( $data );
			redirect('admin/home','refresh');
		}else{
			//set flashdata;
			$this->session->set_flashdata('info', 'User tidak ditemukan');
			redirect('login','refresh');
		}
	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */