<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Telur extends CI_Controller
{
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
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('telur');
    }

    // Update Telur
    public function edit_data($id)
    {
        $where = array('id_telur' => $id);
        $data['telur'] = $this->M_telur->edit_data($where, 'telur')->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/telur', $data);
        $this->load->view('layout/footer');
    }
    // Update Telur 
    public function update()
    {
        $id = $this->input->post('id_telur');
        $tanggal = $this->input->post('tanggal');
        $sumber = $this->input->post('sumber');

        $data = array(
            'tanggal' => $tanggal,
            'sumber' => $sumber
        );

        $where = array(
            'id_telur' => $id
        );

        $this->M_telur->update_data($where, $data, 'telur');
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil Diupdate <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('telur');
    }
    public function delete_data($id)
    {
        //lempar kedalam model untuk menyimpan database
        $this->M_telur->delete_data($id);
        $this->session->set_flashdata('notif', '<div class="alert alert-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Telur');
    }


    // Ambil Telur
    public function ambilTelur()
    {
        //mengambil data
        $query = $this->M_telur->join_anggota_telur();
        $query = $this->M_telur->join_ambiltelur_telur();
        $data = array(
            'data' => $query,
            'anggota' => $this->M_telur->get_anggota(),
            'telur' => $this->M_telur->getTelur()
            // 'team' => $this->M_telur->getAmbilTelur()
        );


        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('ambil_telur', $data);
        $this->load->view('layout/footer');
    }

    // edit ambil telur
    public function update_telur()
    {
        $id = $this->input->post('id'); //+
        $id_anggota = $this->input->post('id_anggota');
        $id_telur = $this->input->post('id_telur');
        $tanggal_ambil = $this->input->post('tanggal_ambil');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');

        $data = array(
            'id_anggota' => $id_anggota,
            'id_telur' => $id_telur,
            'tanggal_ambil' => $tanggal_ambil,
            'jumlah' => $jumlah,
            'harga' => $harga
        );

        $where = array(
            'id' => $id //u
        );

        $this->M_telur->update_telur($where, $data, 'ambil_telur');
        redirect('ambiltelur');
        // var_dump($data);
    }

    // untuk menyimpan ambil telur
    public function simpan_ambiltelur()
    {
        // $this->form_validation->set_rules('id_anggota','Id_anggota','required|min_length[5]|max_length[255]');
        // $this->form_validation->set_rules('id_telur','Id_telur','required');
        // $this->form_validation->set_rules('tanggal_ambl','Tanggal_ambl','required');
        // $this->form_validation->set_rules('jumlah','Jumlah','required');
        // $this->form_validation->set_rules('harga','Harga','required');

        // if($this->form_validation->run() != false){
		// 	echo "Form validation oke";
        // {
        //     $data['id_anggota']      = $this->input-post('id_anggota');
        //     $data['id_telur']        = $this->input-post('id_telur');
        //     $data['tanggal_ambil']   = $this->input-post('tanggal_ambil');
        //     $data['jumlah']          = $this->input-post('jumlah');
        //     $data['harga']           = $this->input-post('harga');
        //     $this->load->view('ambil_telur',$data);
        // }
        // }else{
        //     $this->load->view('ambil_telur');
        // }


        $id_anggota = $this->input->post('id_anggota');
        $id_telur = $this->input->post('id_telur');
        $tanggal_ambil = $this->input->post('tanggal_ambil');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');

        $data = array(
            'id_anggota' => $id_anggota,
            'id_telur' => $id_telur,
            'tanggal_ambil' => $tanggal_ambil,
            'jumlah' => $jumlah,
            'harga' => $harga
        );
        $this->M_telur->simpan_ambiltelur($data, 'ambil_telur');
        redirect('ambiltelur');
        // $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        // redirect('ambiltelur');
    }

    public function delete_ambiltelur($id)
    {
        //lempar kedalam model untuk menyimpan database
        $this->M_telur->delete_ambiltelur($id);
        redirect('ambiltelur');
    }

    //mengarahkan ke view edit ambil telur
    public function edit_ambiltelur($id_anggota)
    {
        $data = [];
        $data['row'] = $this->M_telur->edit_ambiltelur($id_anggota, 'ambil_telur')->row_array();
        $data['anggota'] = $this->M_telur->get_anggota();
        $data['telur'] = $this->M_telur->getTelur();
        $data['id_anggota'] = $data['row']['id_anggota'];
        $data['id_telur'] = $data['row']['id_telur'];
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/ambiltelur', $data);
        $this->load->view('layout/footer');
    }
}
