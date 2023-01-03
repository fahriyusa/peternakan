<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_Pakan');

        // if ($this->session->userdata('authenticated') != true) {
	// 		redirect(base_url("auth"));
	// 	}
    }
	public function index()
	{
        //mengambil data
<<<<<<< HEAD
<<<<<<< HEAD
        $data['data'] = $this->db->get('data_pakan')->result();
=======
        $query = $this->M_Pakan->getPakan();
        $data = array('data' => $query);
>>>>>>> ae6fd1621115c3419a222cefca3ad25fe09dc37d

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('pakan', $data);
        $this->load->view('layout/footer');
	}
<<<<<<< HEAD
    
    public function insert_pakan()
    {
        $team = $this->input->post('team');
        $tgl_produksi_pakan = $this->input->post('tgl_produksi_pakan');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'team' => $team,
            'tgl_produksi_pakan' => $tgl_produksi_pakan,
            'jumlah' => $jumlah,
        );
        $this->db->insert('data_pakan', $data);
        redirect('pakan');
    }
   
=======

    public function ambil_pakan()
	{
        //mengambil data
        $query = $this->M_Pakan->getambilPakan();
=======
        $query = $this->M_Pakan->getPakan();
>>>>>>> ae6fd1621115c3419a222cefca3ad25fe09dc37d
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		    $this->load->view('ambil_pakan', $data);
        $this->load->view('layout/footer');
	}
<<<<<<< HEAD
>>>>>>> ae6fd1621115c3419a222cefca3ad25fe09dc37d
=======

    public function ambil_pakan()
	{
        //mengambil data
        $query = $this->M_Pakan->getambilPakan();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		    $this->load->view('ambil_pakan', $data);
        $this->load->view('layout/footer');
	}
>>>>>>> ae6fd1621115c3419a222cefca3ad25fe09dc37d
}