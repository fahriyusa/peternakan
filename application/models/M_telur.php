<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_telur extends CI_Model
{

    public function getTelur()
    {
        $query = $this->db->get('telur');
        return $query->result();
    }

    public function save()
    {
        $data = array(
            "tanggal_ambil" => $this->input->post('tanggal_ambil'),
            "sumber" => $this->input->post('sumber')
        );
        return $this->db->insert($this->table, $data);
    }

}