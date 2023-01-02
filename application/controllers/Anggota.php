<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Anggota');

        if ($this->session->userdata('authenticated') != true) {
			redirect(base_url("auth"));
		}
    }
    public function index()
    {
        //mengambil data
        $query = $this->M_Anggota->get_anggota();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('anggota', $data);
        $this->load->view('layout/footer');
    }

    //update
    public function edit($id_anggota)
    {
        $where = array(
            'id_buku' => $id_anggota
        );
        $query = $this->M_anggota->edit_data($where, 'anggota')->result();
        $data = array('data' => $query);
        $this->load->view('update/anggota', $data);
    }

    //insert
    public function insert_anggota()
    {
        $nama_anggota = $this->input->post('nama_anggota');
        $tanggal_gabung = $this->input->post('tanggal_gabung');
        $status = $this->input->post('status');
        $jabatan = $this->input->post('jabatan');
        $data = array(
            'nama_anggota' => $nama_anggota,
            'tanggal_gabung' => $tanggal_gabung,
            'status' => $status,
            'jabatan' => $jabatan,
        );
        $this->M_Anggota->insert_anggota($data, 'anggota');
        redirect('Anggota');
    }

    //update
    public function update_anggota($data, $id_anggota)
    {
        $this->db->set($data);
        $this->db->where('id_anggota', $id_anggota);
        $this->db->update('anggota');
    
        return $this->db->affected_rows();
    }

    //delete
    public function delete_anggota($id_anggota)
    {
        $this->M_Anggota->delete_anggota($id_anggota);
        redirect('Anggota');
    }
}