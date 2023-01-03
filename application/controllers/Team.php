<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_team');

        // if ($this->session->userdata('authenticated') != true) {
		// 	redirect(base_url("auth"));
		// }
    }
	public function index()
	{
        //mengambil data
        $data['anggota'] = $this->M_team->get_anggota();
        $data['team'] = $this->M_team->get_team();
        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('team', $data);
        $this->load->view('layout/footer');
	}

    //insert
    public function insert_team()
	{
		$data = array(
		  'nama_team' => $this->input->post('nama_team'),
		);
		$this->db->insert('team',$data);

		$anggota = $this->input->post('anggota');
		//mendapatkan id anggota
		$id_team = $this->db->insert_id();
		foreach($anggota as $row){
			$data = array(
				  'id_team' => $id_team,
				  'id_anggota' => $row
				);
			$this->db->insert('team',$data);
		}
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