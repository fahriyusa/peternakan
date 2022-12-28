<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('jadwal_model');
    }
	public function index()
	{
        //mengambil data
        $query = $this->jadwal_model->getTeam();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('jadwal', $data);
        $this->load->view('layout/footer');
	}
        //tambah data
        public function tambah()
{
    $this->load->view('jadwal');
}

    //simpan data
    public function simpan()
    {
        $team = $this->input->post('team');
        $status = $this->input->post('status');

        $Arrinsert = array(
            'team'=>$team,
            'status'=>$status,
        );
        $this->jadwal_model->insert($Arrinsert);
        redirect('Jadwal');
    }
    //halaman edit
    public function edit($id_team)
    {
        $query = $this->jadwal_model->getbyid($id);
        $data = array ('jadwal'=>$query);
        $this->load->view('jadwal',$data);
    }
        //simpan edit
        public function simpan_edit()
        {
            $id_team = $this->input->post('id_team');
            $team = $this->input->post('team');
            $status = $this->input->post('status');

            $Arraupdate = array(
                'id_team'=>$id,
                'team'=>$team,
                'status'=>$status
            );
            $this->jadwal_model->update($id_team,$Arraupdate);
        redirect('Jadwal');
            }
    //hapus
    public function delete($id_team)
        {
            $this->jadwal_model->delete($id_team);
            redirect('buku');
        }}