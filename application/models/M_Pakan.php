<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Pakan extends CI_Model
{

    //get

    public function getPakan()
    {
        $query = $this->db->get('data_pakan');
        return $query->result();
    }
    public function getambilPakan()
    {
        $query = $this->db->get('data_pakan');
        return $query->result();
    }

}