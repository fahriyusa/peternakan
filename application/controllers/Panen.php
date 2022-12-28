<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_panen');
    }
	public function index()
	{
        //mengambil data
        $query = $this->M_panen->getAnggota();
        $data = array('data' => $query);

        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('panen', $data);
        $this->load->view('layout/footer');
	}
    public function data_panen() 
    {
        $data['panen'] = $this->M_panen->data_panen->result();
        $data['anggota'] = $this->M_anggota->data_anggota->result();
        $data['join_panen_anggota'] = $this->M_panen->data_join2table->result();
        $this->load->view('Panen/panen',$data);
    }
    public function tambah()
    {
        $this->load->view('panen');
    }

    //menyimpan data
    public function simpan() 
    {
        $tanggal = $this->input->post('tanggal');
        $i_anggota = $this->input->post('id_anggota');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $total = $this->input->post('total');
        $buyer = $this->input->post('buyer');

        $Arrinsert = array(
            'tanggal'=>$tanggal,
            'id_anggota'=>$id_anggota,
            'jumlah'=>$jumlah,
            'harga'=>$harga,
            'total'=>$total,
            'buyer'=>$buyer,
        );
        $this->panen->insert($Arrinsert);
        redirect('Panen');
    }

    //Halaman edit
    public function edit($id)
    {
        $query = $this->panen->getbyid($id);
        $data = array ('panen'=>$query);
        $this->load->view('panen',$data);
    }

    //menyimpan halaman edit
    public function simpan_edit()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $id_anggota = $this->input->post('id_anggota');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $total = $this->input->post('total');
        $buyer = $this->input->post('buyer');

        $Arrupdate = array(
            'id'=>$id,
            'tanggal'=>$tanggal,
            'id_anggota'=>$id_anggota,
            'jumlah'=>$jumlah,
            'harga'=>$harga,
            'total'=>$total,
            'buyer'=>$buyer,
            );
    $this->panen->update($id,$Arrupdate);
    redirect('panen');
    }

    //hapus
    public function delete($id)
    {
        $this->panen->delete($id);
        redirect('panen');
    }
}