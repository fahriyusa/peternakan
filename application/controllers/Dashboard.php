<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		// if ($this->session->userdata('authenticated') != true) {
		// 	redirect(base_url("auth"));
		// }
	}
	public function index()
	{
		$anggota = $this->db->count_all_results('anggota');
		$data = array('data' => $anggota);
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('layout/footer');

	}

	public function jumlah()
	{
		
	}
}