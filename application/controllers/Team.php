<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_team');
    }
	public function index()
	{
        //mengambil data
        $query = $this->M_team->getAnggota();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('team', $data);
        $this->load->view('layout/footer');
	}
}