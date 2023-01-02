<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telur extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_telur');
    }
	public function index()
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

    public function insert_telur()
    {
        
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');
 
        $data = array(
            'tanggal' => $tanggal,
            'sumber' => $sumber,
        );
        $this->M_telur->insert_telur($data, 'telur');
        redirect('Telur');
    }


    

    public function edit_data($id)
    {
        $data['data'] = $this->M_telur->getTelur_id($id);
        //gunakan var_dump untuk mengetahui apakah mendapatkan data/tidak
        var_dump($data);
    }
    public function delete_data($id)
     {
        //lempar kedalam model untuk menyimpan database
        $this->M_telur->delete_data($id);
        redirect('Telur');
     }
}