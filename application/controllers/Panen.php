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
        $query = $this->M_panen->join_anggota_panen();
        $data = array(
            'data' => $query,
            'anggota' =>  $this->M_panen->get_anggota(),
        
        );

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('panen', $data) ;
        $this->load->view('layout/footer');
    }

    public function insert_panen()
    { 
        $tanggal = $this->input->post('tanggal');
        $id_anggota = $this->input->post('id_anggota');
        $buyer = $this->input->post('buyer');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $total = $this->input->post('total');
             $data = array(
                'tanggal' => $tanggal,
                'id_anggota' => $id_anggota,
                'buyer' => $buyer,
                'jumlah' => $jumlah,
                'harga' => $harga,
                'total' => $total,
            );
         
         $this->M_panen->insert_panen($data, 'panen');
        redirect('panen');
       
    }
    //get data anggota by id
    public function get_anggota_by_id()
    {
        $id = $this->input->post('id');
        $data  = $this->M_team->get_anggota_by_id($id)->result();
        foreach ($data as $result){
            $value[] = (float) $result->id_anggota;
        }
        echo json_encode($value);
    }

    //update
    public function edit($id)
    {
        $where = array(
            'id' => $id
        );
        $query = $this->M_panen->update_panen($where, 'panen')->row();
        $data = array('data' => $query);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/panen', $data);
        $this->load->view('layout/footer');
    }
    // Update Telur 
    public function update()
    {
        $tanggal = $this->input->post('tanggal');
        $id_anggota = $this->input->post('id_anggota');
        $buyer = $this->input->post('buyer');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $total = $this->input->post('total');
             $data = array(
                'tanggal' => $tanggal,
                'id_anggota' => $id_anggota,
                'buyer' => $buyer,
                'jumlah' => $jumlah,
                'harga' => $harga,
                'total' => $total,
            );

        $where = array(
            'id' => $id
        );      
        
        $this->M_panen->update_data($where,$data,'panen');
        redirect('panen');
    }
    //delete
    public function delete_panen($id)
    {
        $this->M_panen->delete_panen($id);
        redirect('Panen');
    }
}