<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Pakan extends CI_Model
{

    //get

    public function getAnggota()
    {
        $query = $this->db->get('data_pakan');
        return $query->result();
    }

}