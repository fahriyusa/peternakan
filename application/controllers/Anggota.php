<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_Anggota');
    }
	public function index()
	{
        //mengambil data
        $query = $this->M_Anggota->getAnggota();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('anggota', $data);
        $this->load->view('layout/footer');
	}
    public function tambah_aksi()
    {
        $this->M_Anggota->insert_data($data, 'anggota');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('anggota');
    }
}