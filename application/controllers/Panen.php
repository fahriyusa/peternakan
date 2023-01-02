<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Panen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_panen');
    }
    public function index()
    {
        //mengambil data
        $query = $this->M_panen->get_panen();
        $data = array('data' => $query); 

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('panen', $data) ;
        $this->load->view('layout/footer');
    }
    public function insert_panen()
    {
        $tanggal = $this->input->post('tanggal');
        $anggota = $this->input->post('id_anggota');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $total = $this->input->post('total');
        $buyer = $this->input->post('buyer');

        $data = array(
            'tanggal' => $tanggal,
            'id_anggota' => $anggota,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'total' => $total,
            'buyer' => $buyer,

        );
        $this->M_panen->insert_panen($data, 'panen');
        redirect('Panen');
    }
    public function simpan_edit()
    {
            $id = $this->input->post('id');
            $tanggal = $this->input->post('tanggal');
            $anggota = $this->input->post('anggota');
            $jumlah = $this->input->post('jumlah');
            $harga = $this->input->post('harga');
            $total = $this->input->post('total');
            $buyer = $this->input->post('buyer');

            $data = array(
                'tanggal' => $tanggal,
                'id_anggota' => $anggota,
                'jumlah' => $jumlah,
                'harga' => $harga,
                'total' => $total,
                'buyer' => $buyer
    
            );
            $this->M_panen->update($id,$data);
            redirect('Panen');
    }
    public function edit()
    {
        $query = $this->M_panen->getById($id);
        $data = array ('panen'=>$query);
        $this->load->view('panen',$data);
    }
    public function delete_data($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('panen');
    }
}