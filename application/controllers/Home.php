<?php

class Home extends CI_controller{
    public function index($nama=' ')
    {
        $data['judul']= 'Halaman home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}  