<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telur extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_telur');

        // if ($this->session->userdata('authenticated') != true) {
		// 	redirect(base_url("auth"));
		// }
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
    
    // Ambil Telur
    public function ambilTelur()
	{
        //mengambil data
        $query = $this->M_telur->join_anggota_telur();
        $data = array(
            'data' => $query,
            'anggota' =>  $this->M_telur->get_anggota(),
            'team' => $this->M_telur->getAmbilTelur()

        );

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('ambil_telur', $data);
        $this->load->view('layout/footer');
	}
    
    // Telur
    public function insert_telur()
    {
        
        $tanggal = $this->
        input->post('tanggal');
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
        $id = $this->uri->segment(3);
        $data['id'] = $this->M_telur->getTelur_id($id);
        //gunakan var_dump untuk mengetahui apakah mendapatkan data/tidak
               //menampilkan view
               $this->load->view('layout/header');
               $this->load->view('layout/sidebar');
               $this->load->view('update/telur', $data);
               $this->load->view('layout/footer');
    }
    public function delete_data($id)
     {
        //lempar kedalam model untuk menyimpan database
        $this->M_telur->delete_data($id);
        redirect('Telur');
     }

}
