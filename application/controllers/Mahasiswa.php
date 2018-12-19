<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function index()
    {
        echo "ini controller mahasiswa";
    }

    public function get_semester()
    {
        echo "Semester : 3";
    }


    public function profil()
    {
        echo "Nama  : Ni Putu Ratna Dewisri <br>";
        echo "Nim   : 1700320019 <br>";
        echo "Email : puturatnadewisri@gmail.com <br>";

    }

    public function dosen($param1 = '')
    {
        echo "Nama Dosen : " . $param1;
    }


    public function krs($semester = '', $matkul = '')
    {
        echo "Semester Ke" . $semester . " Saya mengambil " . $matkul;
    }

}