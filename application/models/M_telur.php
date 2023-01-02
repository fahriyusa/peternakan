<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_telur extends CI_Model
{
    //get
    public function getTelur()
    {
        $query = $this->db->get('telur');
        return $query->result();
    }

    //insert
    public function insert_telur($data)
    {
        $this->db->insert('telur',$data);
    }

    public function getAmbilTelur()
    {
        $query = $this->db->get('ambil_telur');
        return $query->result();

    }

   public function delete_data($id)
   {
        $this->db->where('id', $id);
        $this->db->delete('telur');
   }




}