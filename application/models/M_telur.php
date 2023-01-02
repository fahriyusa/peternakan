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
        $query = $this->db->get('anggota')->result();
        return $query;
    }

    //insert
    public function insert_telur($data)
    {
        $this->db->insert('telur',$data);
    }

   public function delete_data($id)
   {
        $this->db->where('id', $id);
        $this->db->delete('telur');
   }




<<<<<<< HEAD
=======
        $hasil = $this->db->query("INSERT INTO telur (tanggal,sumber,id) VALUES ('$tanggal','$sumber','$id')");
        return $hasil; 
    }

    // // Hitung Jumlah Ammbil Telur
    // public function hitungTelur($jumlah)
    // {
    //     $this->db->select_sum('harga');
    //     $this->db->where('jumlah',$jumlah);
    //     $query = $this->db->get('total');
    //     return $query->result();
    // }

>>>>>>> 707aa10bbf69f6d5293917ef8fb3dc478773be8c
}