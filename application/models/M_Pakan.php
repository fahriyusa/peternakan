<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Pakan extends CI_Model
{

    //get 

    public function getPakan()
<<<<<<< HEAD
=======
    {
        $query = $this->db->get('data_pakan');
        return $query->result();
    }
    public function getambilPakan()
>>>>>>> ae6fd1621115c3419a222cefca3ad25fe09dc37d
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