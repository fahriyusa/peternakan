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

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga'),
            'total' => $this->input->post('total'),
            'buyer' => $this->input->post('buyer'),
        );
            $this->db->insert('panen',$data);
            $anggota = $this->input->post('anggota');
		//mendapatkan id anggota
		$id = $this->db->insert_id();
		foreach($anggota as $row){
			$data = array(
				  'id' => $id,
				  'id_anggota' => $row
				);
			$this->db->insert('panen',$data);
		}
		redirect('panen');
        
        $this->M_panen->insert_panen($data, 'panen');
        redirect('Panen');
    }
    //get data anggota by id
    public function get_anggota_by_id()
    {
        $id = $this->input->post('id');
        $data  = $this->M_panen->get_anggota_by_id($id)->result();
        foreach ($data as $result){
            $value[] = (float) $result->id_anggota;
        }
        echo json_encode($value);
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
    //update
    public function edit($id)
    {
        $where = array(
            'id' => $id
        );
        $query = $this->M_panen->update_panen($where, 'panen')->result();
        $data = array('data' => $query);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/panen', $data);
        $this->load->view('layout/footer');
    }
    //delete
    public function delete_panen($id)
    {
        $this->M_panen->delete_panen($id);
        redirect('Panen');
    }
}