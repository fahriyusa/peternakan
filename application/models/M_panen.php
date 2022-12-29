<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_panen extends CI_Model
{

    //get

    public function getAnggota()
    {
        $query = $this->db->get('panen');
        return $query->result();
    }

}