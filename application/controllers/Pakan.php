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
        $data['data'] = $this->db->get('data_pakan')->result();

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('pakan', $data);
        $this->load->view('layout/footer');
	}
    
    public function insert_pakan()
    {
        $team = $this->input->post('team');
        $tgl_produksi_pakan = $this->input->post('tgl_produksi_pakan');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'team' => $team,
            'tgl_produksi_pakan' => $tgl_produksi_pakan,
            'jumlah' => $jumlah
        );
        // var_dump($data);
        $this->db->insert('data_pakan', $data);
        redirect('pakan');
    }
    //delete
    public function delete_pakan($id)
    {
        $this->M_Pakan->delete_pakan($id);
        redirect('Pakan');
    }
   
}