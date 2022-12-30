<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('M_jadwal');
    }
	public function index()
	{
        //mengambil data
       $data['team '] = $this->M_jadwal->get_team();
       $data['jadwal'] = $this->M_jadwal->get_jadwal();
        //menampilkan view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('jadwal', $data);
        $this->load->view('layout/footer');
	}
     //insert
     public function insert()
     {
         $team = $this->input->post('team',TRUE);
         $jadwal = $this->input->post('jadwal',TRUE);
         $this->M_jadwal->create_jadwal($team,$jadwal);
         //redirect('jadwal');
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
    $jadwal = $this->input->post('jadwal_edit',TRUE);

    $this->M_jadwal->update_jadwal($id,$team,$jadwal);
    redirect('jadwal');
    }

    public function delete(){
        $id = $this->input->post('delete_id',TRUE);
        $this->M_jadwal->delete_jadwal($id);
        redirect('jadwal');
    }

}


<<<<<<< HEAD
    
=======
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
        }
    }
>>>>>>> c54117997eabbe12e2b3ee1897e118137b46cb04
