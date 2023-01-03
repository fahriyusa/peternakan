<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Pakan extends CI_Model
{

    

    //insert
    public function insert_pakan($data)
    {
        $this->db->insert('data_pakan',$data);
    }
    //delete
    public function delete_pakan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_pakan');
    }
    
    
    


}