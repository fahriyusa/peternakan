<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Anggota extends CI_Model
{

    //get

    public function getAnggota()
    {
        $query = $this->db->get('anggota');
        return $query->result();
    }

}