<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Anggota extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

}