<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Anggota extends CI_Model
{
    //get
    public function get_anggota()
    {
        $query = $this->db->get('anggota');
        return $query->result();
    }

    //insert
    public function insert_anggota($data)
    {
        $this->db->insert('anggota',$data);
    }
}