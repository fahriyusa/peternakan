<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Pakan extends CI_Model
{

    //get 

    public function getPakan()
    {
        $this->db->from('data_pakan');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAmbilPakan()
    {
        $query = $this->db->get('ambil_pakan');
        return $query->result();
    }

    //insert
    public function insert_pakan($data)
    {
        $this->db->insert('data_pakan',$data);
    }
    
    public function simpan_panen()
    {
        $hasil = $this->db->query("INSERT INTO pakan (tanggal_produksi,jumlah') VALUE ('$tanggal','$jumlah')");
        return $hasil;
    }
    


}