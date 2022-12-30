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

    //insert
    public function insert_telur($data)
    {
        $this->db->insert('telur',$data);
    }

    public function getAmbilTelur()
    {
        $query = $this->db->get('ambil_telur');
        return $query->result();

    }

    public function simpan_telur($tanggal,$sumber,$id)
    {

        $hasil = $this->db->query("INSERT INTO telur (tanggal,sumber,id) VALUES ('$tanggal','$sumber','$id')");
        return $hasil; 
    }
}