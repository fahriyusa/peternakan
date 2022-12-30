<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_telur extends CI_Model
{
    //get
    public function getTelur()
    {
        $query = $this->db->get('telur');
        return $query->result();
    }

    //select * FROM ambil_telur JOIN anggota ON anggota.id_anggota = ambil_telur.id_anggota;
    // Ambil Telur
    public function join_anggota_telur()
    {
        $this->db->select('*');
        $this->db->from('ambil_telur');
        $this->db->join('anggota', 'anggota.id_anggota = ambil_telur.id_anggota');
        $query = $this->db->get();
        return $query->result();
    }

    // Ambil Telur
    public function getAmbilTelur()
    {
        $query = $this->db->get('ambil_telur');
        return $query->result();
    }
    
    public function get_anggota()
    {
        $query = $this->db->get('anggota');
        return $query;
    }

    //insert
    public function insert_telur($data)
    {
        $this->db->insert('telur',$data);
    }

    public function simpan_telur($tanggal,$sumber,$id)
    {

        $hasil = $this->db->query("INSERT INTO telur (tanggal,sumber,id) VALUES ('$tanggal','$sumber','$id')");
        return $hasil; 
    }

}