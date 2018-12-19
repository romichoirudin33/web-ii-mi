<?php

class Pengumuman extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengumuman_model'); //kenalan
		//Do your magic here
	}

    public function index()
    {
        $data['judul'] = 'Pengumuman';
        $data['sub_judul'] = 'Halaman Pengumuman';
        $data['halaman'] = 'admin/v_pengumuman'; //content

        //parsing data dari model ke view
        $data['isi_tabel'] = $this->Pengumuman_model->all();

        $this->load->view('admin/v_template', $data);
    }
}