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

        //get semua anggota
    public function get_anggota()
    {
        $query = $this->db->get('anggota');
        return $query;
    }

    //select * FROM ambil_telur JOIN anggota ON anggota.id_anggota = ambil_telur.id_anggota;
    // Ambil Telur
    public function join_anggota_telur()
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('ambil_telur', 'ambil_telur.id_anggota = anggota.id_anggota', 'LEFT');
        $query = $this->db->get();
        return $query->result();
    }

    // Ambil Telur
    public function getAmbilTelur()
    {
        $query = $this->db->get('ambil_telur');
        return $query->result();
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

   public function edit_data($where,$table)
   {
    return $this->db->get_where($table,$where);
   }

   public function update_data($where,$data,$table)
   {
    $this->db->where($where);
    $this->db->update($table,$data);
   }

  



    // // Hitung Jumlah Ambil Telur
    // public function hitungTelur($jumlah)
    // {
    //     $this->db->select_sum('harga');
    //     $this->db->where('jumlah',$jumlah);
    //     $query = $this->db->get('total');
    //     return $query->result();
    // }

    public function simpan_ambiltelur($data)
    {
       $query = $this->db->insert('ambil_telur',$data);
       return $query;
    }

    public function delete_ambiltelur($id_anggota)
    {
        $this->db->where('id_anggota', $id_anggota);
        $this->db->delete('ambil_telur');
        return $query;
    }

    public function edit_ambiltelur($where,$table)
   {
    return $this->db->get_where($table,['id' => $where]);
   }


}