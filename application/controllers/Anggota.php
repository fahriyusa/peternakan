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
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->M_Anggota->get_data('anggota')->result();

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('v_anggota', $data);
        $this->load->view('layout/footer');
	}
}