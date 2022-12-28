<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telur extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_telur');
    }
	public function telur()
	{
        //mengambil data
        $query = $this->M_telur->getTelur();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('telur', $data);
        $this->load->view('layout/footer');
	}
    
    public function ambilTelur()
	{
        //mengambil data
        $query = $this->M_telur->getAmbilTelur();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('ambil_telur', $data);
        $this->load->view('layout/footer');
	}
    public function addTelur()
    {
        $telur = $this->M_telur;
        $validation = $this->form_validation;
        $validation->set_rules($telur->rules());

        if ($validation->run()) {
            $telur->save();
        }
        $data["title"] = "Tambah Telur";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('telur', $data);
        $this->load->view('layout/footer');
    }
}