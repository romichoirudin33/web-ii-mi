<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin') != true) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['sub_judul'] = 'Halaman Utama';
        //lokasi content view yang di tampilkan
        $data['halaman'] = 'admin/v_index'; 

        $this->load->view('admin/v_template', $data);
    }

    public function coba()
    {
        $data['judul'] = 'Coba';
        $data['sub_judul'] = 'Halaman Coba';
        $data['halaman'] = 'admin/v_coba';

        $this->load->view('admin/v_template', $data);
    }
}