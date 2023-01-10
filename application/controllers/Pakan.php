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
         $query = $this->M_Pakan->join_team_pakan();
         $data = array (
            'data' => $query,
            'team' =>  $this->M_Pakan->get_team()
        );
        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('pakan', $data);
        $this->load->view('layout/footer');
	}

      
       //menyimpan datababse data pakan
    public function insert_datapakan()
    { 
        
        $id_team = $this->input->post('id_team');
        $tgl_produksi_pakan = $this->input->post('tgl_produksi_pakan');
        $jumlah = $this->input->post('jumlah');
        
        $data = array(
            'id_team' => $id_team,
            'tgl_produksi_pakan' => $tgl_produksi_pakan,
            'jumlah' => $jumlah
        );
        $this->M_Pakan->insert_datapakan($data, 'data_pakan');
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Pakan');
    }

    //get data team by id
    public function get_team_by_id()
    {
        $id = $this->input->post('id');
        $data = $this->M_Pakan->get_team_by_id($id)->result();
       foreach ($data as $result) {
        $value[] = (float) $result->id_team;
        }
     echo json_encode($value);
    }
    
    //mengarahkan ke view edit data pakan
    public function edit_data($id_team)
    {
        $data = [];
        $data['row']=$this->M_Pakan->edit_data($id_team,'data_pakan')->row_array();
        $data['team']= $this->M_Pakan->get_team();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/pakan', $data);
        $this->load->view('layout/footer');
    }

    //menyimpan ke db update data_pakan
    public function update_dataPakan()
   
    {
        $id = $this->input->post('id');
        $id_team = $this->input->post('id_team');
        $tgl_produksi_pakan = $this->input->post('tgl_produksi_pakan');
        $jumlah = $this->input->post('jumlah');
        
        $data = array(
            'id_team' => $id_team,
            'tgl_produksi_pakan' => $tgl_produksi_pakan,
            'jumlah' => $jumlah
        );
        $where = array(
            'id' => $id
        );

        $this->M_Pakan->update_dataPakan($where,$data,'data_pakan');
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Pakan');
    }  
    
    //delete
    public function delete_pakan($id)
    {
        $this->M_Pakan->delete_pakan($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Pakan');
    }

        //Ambil Pakan
        public function ambil_pakan()
        {
            //mengambil pakan
            $query = $this->M_Pakan->join_anggota_pakan();
            $data = array (
                'data' => $query,
                'anggota' =>  $this->M_Pakan->get_anggota()
            );
            
              //menampilkan view
              $this->load->view('layout/header');                           
              $this->load->view('layout/sidebar');
              $this->load->view('ambil_pakan', $data);
              $this->load->view('layout/footer');
        }

        //untuk menyimpan database ambil pakan
    public function simpan_ambilPakan()
    {
        $id_anggota = $this->input->post('id_anggota');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'id_anggota' => $id_anggota,
            'tanggal' => $tanggal,
            'jumlah' => $jumlah
        );
        $this->M_Pakan->simpan_ambilPakan($data,'ambil_pakan');
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Pakan');
    }
    
    public function delete_ambilPakan($id)
    {
        $this->M_Pakan->delete_ambilPakan($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Pakan');
    }

    //edit ambil pakan
    public function update_ambilPakan()
    {
        $id =  $this->input->post('id');
        $id_anggota = $this->input->post('id_anggota');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'id_anggota' => $id_anggota,
            'tanggal' => $tanggal,
            'jumlah' => $jumlah
        );
        $where = array(
            'id' => $id
        );
        $this->M_Pakan->update_ambilPakan($where,$data,'ambil_pakan');
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Pakan');
    } 
    //mengarahkan ke view edit ambil pakan
     public function edit_ambilPakan($id_anggota)
    {
        
        $data = [];
        $data['row']=$this->M_Pakan->edit_ambilPakan($id_anggota,'ambil_pakan')->row_array();
        $data['anggota'] = $this->M_Pakan->get_anggota();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/ambil_pakan', $data);
        $this->load->view('layout/footer');
    }

    

}