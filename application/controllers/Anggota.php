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
		$this->load->view('v_anggota', $data);
        $this->load->view('layout/footer');
	}
}