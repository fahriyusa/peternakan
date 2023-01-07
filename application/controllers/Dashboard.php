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
		$team = $this->db->count_all_results('team');
		$telur = $this->db->count_all_results('telur');
		$ambil_telur = $this->db->count_all_results('ambil_telur');
		$ambil_pakan = $this->db->count_all_results('ambil_pakan');
		$data_pakan = $this->db->count_all_results('data_pakan');
		$panen = $this->db->count_all_results('panen');
		$data = array('anggota' => $anggota,
					  'team' => $team,
					  'telur' => $telur,
					  'ambil_telur' => $ambil_telur,
					  'ambil_pakan' => $ambil_pakan,
					  'data_pakan' => $data_pakan,
					  'panen' => $panen);
	
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('layout/footer');

	}

	public function jumlah()
	{
		
	}
}