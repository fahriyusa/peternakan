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
	
    // view telur
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
            // 'team' => $this->M_telur->getAmbilTelur()

        );

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('ambil_telur', $data);
        $this->load->view('layout/footer');
	}
    
    // insert Telur
    public function insert_telur()
    {
        
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');
 
        $data = array(
            'tanggal' => $tanggal,
            'sumber' => $sumber,
        );
        $this->M_telur->insert_telur($data, 'telur');
        redirect('telur');
    }

    // Update Telur
    public function edit_data($id)
    {
        $where = array('id' => $id);
        $data['telur']=$this->M_telur->edit_data($where,'telur')->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/telur', $data);
        $this->load->view('layout/footer');
    }

    // Update Telur 
    public function update()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');

        $data = array(
            'tanggal' => $tanggal,
            'sumber' => $sumber
        );

        $where = array(
            'id' => $id
        );      
        
        $this->M_telur->update_data($where,$data,'telur');
        redirect('telur');
    }
    public function delete_data($id)
     {
        //lempar kedalam model untuk menyimpan database
        $this->M_telur->delete_data($id);
        redirect('Telur');
     }

     // untuk menyimpan ambil telur
     public function simpan_ambiltelur()
     {
        $id_anggota     =$this->input->post('id_anggota');
        $tanggal_ambil  =$this->input->post('tanggal_ambil');
        $jumlah         =$this->input->post('jumlah');
        $harga          =$this->input->post('harga');
        $total          =$this->input->post('total');

        $data = array(
            'id_anggota' => $id_anggota,
            'tanggal_ambil' => $tanggal_ambil,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'total' => $total
        );
        $this->M_telur->simpan_ambiltelur($data,'ambil_telur');
        redirect('ambiltelur');
     }

     public function delete_ambiltelur($id_anggota)
     {
        //lempar kedalam model untuk menyimpan database
        $this->M_telur->delete_ambiltelur($id_anggota);
        redirect('ambiltelur');
     }

     //mengarahkan ke view edit ambil telur
     public function edit_ambiltelur($id_anggota)
    {
        $where = array('id' => $id_anggota);
        $data['ambil_telur']=$this->M_telur->edit_ambiltelur($where,'ambil_telur')->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/ambiltelur', $data);
        $this->load->view('layout/footer');
    }
}