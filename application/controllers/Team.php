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
        $data['anggota'] = $this->M_team->data_anggota()->result();
        $data['team'] = $this->M_team->data_team()->result();
        $data['join2table'] = $this->M_team->join2table()->result();
        $this->load->view('team',$data);
        $data['datateam'] = $this->M_team->getdata();

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('team', $data);
        $this->load->view('layout/footer');
	}
    
}