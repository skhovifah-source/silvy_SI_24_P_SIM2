<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class kategori extends CI_Controller{

    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Kategori_model');

    }
    public function index()
    {
        $data['kategori'] = $this->Kategori_model->get_all();
        $this->load->view('kategori/index', $data);

    }
    public function tambah()
    {
        $this->load->view('kategori/tambah');
    }
    {
        $data=[
            'nama_kategori'=>$this->input->post('nama_kategori')
        ];
        $thid->Kategori_model->insert($data);
        redirect('kategori')
    }
}