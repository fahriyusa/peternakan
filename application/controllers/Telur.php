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
        
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');
 
        $data = array(
            'tanggal' => $tanggal,
            'sumber' => $sumber,
        );
        $this->M_telur->insert_telur($data, 'telur');
        redirect('Telur');


   }

   // Telur
    public function simpan_telur()
    {
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');
        $id = $this->input->post('id');
        $this->M_telur->simpan_telur($tanggal,$sumber);
        redirect('telur');
    }

    
    // Ambil Telur
    public function get_anggota_by_id()
    {
        $id_anggota = $this->input->post('id_anggota');
        $data  = $this->M_telur->get_anggota_by_id($id_anggota)->result();
        foreach ($data as $result){
            $value[] = (float) $result->id_anggota;
        }
        echo json_encode($value);
    }
}