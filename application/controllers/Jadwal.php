<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_jadwal');
        
        // if ($this->session->userdata('authenticated') != true) {
		// 	redirect(base_url("auth"));
		// }
    }
    
    
    public function index()
    {
        //mengambil data
        $data['team '] = $this->M_jadwal->get_team();
        $data['jadwal'] = $this->M_jadwal->get_jadwal();
        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jadwal', $data);
        $this->load->view('layout/footer');
    }
    //insert
    public function insert()
    {
        $team = $this->input->post('team', TRUE);
        $jadwal = $this->input->post('jadwal', TRUE);
        $this->M_jadwal->create_jadwal($team, $jadwal);
        //redirect('jadwal');
    }

    //get data anggota by id
    public function get_anggota_by_id()
    {
        $id_team = $this->input->post('id_team');
        $data = $this->M_team->get_anggota_by_id($id_team)->result();
        foreach ($data as $result) {
            $value[] = (float) $result->id_anggota;
        }
        echo json_encode($value);
    }

    //update
    public function update()
    {
        $id = $this->input->post('edit_id', TRUE);
        $team = $this->input->post('team_edit', TRUE);
        $jadwal = $this->input->post('jadwal_edit', TRUE);

        $this->M_jadwal->update_jadwal($id, $team, $jadwal);
        redirect('jadwal');
    }

    public function delete()
    {
        $id = $this->input->post('delete_id', TRUE);
        $this->M_jadwal->delete_jadwal($id);
        redirect('jadwal');
    }
}