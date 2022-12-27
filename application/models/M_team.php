<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_team extends CI_Model
{

    //get

    public function getAnggota()
    {
        $query = $this->db->get('team');
        return $query->result();
    }

}