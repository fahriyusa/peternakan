<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_jadwal extends CI_Model
{

    public function getTeam()
    {
        $query = $this->db->get('jadwal');
        return $query->result();
    }
}