<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_Pakan');

        // if ($this->session->userdata('authenticated') != true) {
	// 		redirect(base_url("auth"));
	// 	}
    }
	public function index()
	{
         //mengambil data
         $query = $this->M_Pakan->join_team_pakan();
         $data = array (
            'data' => $query,
            'team' =>  $this->M_Pakan->get_team()
        );
        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('pakan', $data);
        $this->load->view('layout/footer');
	}

        //data pakan
        public function data_pakan()
        {
        //mengambil data
        $query = $this->M_Pakan->join_team_pakan();
        $data = array (
            'data' => $query,
            'team' =>  $this->M_Pakan->get_team()
    );
         //menampilkan view
         $this->load->view('layout/header');
         $this->load->view('layout/sidebar');
         $this->load->view('pakan', $data);
         $this->load->view('layout/footer');
     }

       //menyimpan datababse data pakan
    public function insert_datapakan()
    { 
        $id_team = $this->input->post('id_team');
        $tgl_produksi_pakan = $this->input->post('tgl_produksi_pakan');
        $jumlah = $this->input->post('jumlah');
 
        $data = array(
            'id_team' => $id_team,
            'tgl_produksi_pakan' => $tgl_produksi_pakan,
            'jumlah' => $jumlah
        );
        $this->M_Pakan->insert_datapakan($data, 'data_pakan');
        redirect('pakan');
    }

    //get data team by id
    public function get_team_by_id()
    {
        $id = $this->input->post('id');
        $data = $this->M_Pakan->get_team_by_id($id)->result();
        foreach ($data as $result) {
            $value[] = (float) $result->id_team;
        }
     echo json_encode($value);
    }
    
    //edit data_pakan
    public function edit_data($id)
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $data['data_pakan']=$this->M_Pakan->edit_data($where,'data_pakan')->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('update/pakan', $data);
        $this->load->view('layout/footer');
    }

    //update data_pakan
    public function update_dataPakan()
   
    {
        $id_team = $this->input->post('id_team');
        $tgl_produksi_pakan = $this->input->post('tgl_produksi_pakan');
        $jumlah = $this->input->post('jumlah');
        
        $data = array(
            'id_team' => $id_team,
            'tgl_produksi_pakan' => $tgl_produksi_pakan,
            'jumlah' => $jumlah
        );
        $where = array(
            'id' => $id
        );

        $this->M_Pakan->update_dataPakan($where,$data,'data_pakan');
        redirect('update/pakan');
    }  
    
    //delete
    public function delete_pakan($id)
    {
        $this->M_Pakan->delete_pakan($id);
        redirect('Pakan');
    }

}