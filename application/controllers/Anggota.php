<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Anggota');

        // if ($this->session->userdata('authenticated') != true) {
        // 	redirect(base_url("auth"));
        // }
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

    public function edit($id_anggota)
    {
        $where = array(
            'id_anggota' => $id_anggota
        );
        $query = $this->M_Anggota->update_anggota($where, 'anggota')->row();
        $data = array('data' => $query);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/anggota', $data);
        $this->load->view('layout/footer');
    }

    //insert
    public function insert_anggota()
    {
        $nama_anggota = $this->input->post('nama_anggota');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $tanggal_gabung = $this->input->post('tanggal_gabung');
        $status = $this->input->post('status');
        $jabatan = $this->input->post('jabatan');
        $data = array(
            'nama_anggota' => $nama_anggota,
            'username' => $username,
            'password' => $password,
            'tanggal_gabung' => $tanggal_gabung,
            'status' => $status,
            'jabatan' => $jabatan,
        );
        $this->M_Anggota->insert_anggota($data, 'anggota');
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Anggota');
    }

    //update
    public function update_anggota()
    {
        $id_anggota = $this->input->post('id_anggota');
        $nama_anggota = $this->input->post('nama_anggota');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $tanggal_gabung = $this->input->post('tanggal_gabung');
        $status = $this->input->post('status');
        $jabatan = $this->input->post('jabatan');

        $data = array(
            'nama_anggota' => $nama_anggota,
            'username' => $username,
            'password' => $password,
            'tanggal_gabung' => $tanggal_gabung,
            'status' => $status,
            'jabatan' => $jabatan
        );
        $where = array(
            'id_anggota' => $id_anggota
        );
        $this->M_Anggota->update_data($data, $where);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Anggota');
    }

    //delete
    public function delete_anggota($id_anggota)
    {
        $this->M_Anggota->delete_anggota($id_anggota);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Anggota');
    }
}