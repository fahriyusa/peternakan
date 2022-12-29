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
        $data['anggota'] = $this->M_team->data_anggota();
        $data['team'] = $this->M_team->data_team();
        $data['join2table'] = $this->M_team->join2table()->result();
        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('team', $data);
        $this->load->view('layout/footer');
	}

    //insert
    public function insert()
    {
        $anggota = $this->input->post('anggota',TRUE);
        $team = $this->input->post('team',TRUE);
        $this->M_team->insert_team($anggota,$team);
        redirect('team');
    }

    //get data anggota by id
    public function get_anggota_by_id()
    {
        $id_team = $this->input->post('id_team');
        $data  = $this->M_team->get_anggota_by_id($id_team)->result();
        foreach ($data as $result){
            $value[] = (float) $result->id_anggota;
        }
        echo json_encode($value);
    }

    //update
    public function update(){
    $id = $this->input->post('edit_id',TRUE);
    $team = $this->input->post('team_edit',TRUE);
    $anggota = $this->input->post('anggota_edit',TRUE);
    $this->M_team->update_team($id,$team,$anggota);
    redirect('team');
    }

    public function delete(){
        $id = $this->input->post('delete_id',TRUE);
        $this->M_team->delete_team($id);
        redirect('team');
    }
}