<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_Pakan');
    }
	public function index()
	{
        //mengambil data
        $query = $this->M_Pakan->getAnggota();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		    $this->load->view('pakan', $data);
        $this->load->view('layout/footer');
	}
}