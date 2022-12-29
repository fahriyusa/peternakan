<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_team extends CI_Model
{
    //get semua anggota
    public function get_anggota()
    {
        $query = $this->db->get('anggota');
        return $query;
    }

    //get anggota by team id
    public function get_anggota_by_team($id_team)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('team', 'team.id_anggota = anggota.id_anggota');
        $query = $this->db->get();
        return $query;
    }



    public function data_anggota(){
        $this->db->select('*');
        $this->db->from('anggota');
        $query = $this->db->get();
        return $query;
    }
    public function data_team(){
        $this->db->select('*');
        $this->db->from('team');
        $this->db->join('anggota','anggota.id_anggota = team.id_anggota');
        $query = $this->db->get();
        return $query;
    }
    function join2table(){
        $this->db->select('*');
        $this->db->from('team');
        $this->db->join('anggota','anggota.id_anggota = team.id_anggota');
        $query = $this->db->get();
        return $query;
    }
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM anggota ORDER BY nama_anggota ASC");
        return $query->result();
    }
    public function proses_tambah_data()
    {
        $data = [
            "nama_team" => $this->input->post('nama_team'),
            "nama_anggota" => $this->input->post('nama_anggota')
        ];
        $this->db->insert('team', $data);
    }

}