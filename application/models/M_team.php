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

    //READ
    function get_team(){
        $this->db->select('*');
        $this->db->from('team');
        $this->db->join('anggota','anggota.id_anggota = team.id_anggota');
        $query = $this->db->get();
        return $query->result();
    }
    //insert
    public function insert_team($data)
    {
        $this->db->insert('team',$data);
    }

    // DELETE
    public function delete_team($id_team)
    {
        $this->db->where('id_team', $id_team);
        $this->db->delete('team');
        var_dump($id_team);
    }

}