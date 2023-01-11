<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_telur extends CI_Model
{
    //Get Telur
    public function getTelur()
    {
        $query = $this->db->get('telur');
        return $query->result();
    }

    //simpan telur
    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
     //insert telur
    public function insert_telur($data)
    {
        $this->db->insert('telur',$data);
    } 

    //update TELUR
    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }
    public function update($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //delete telur
    public function delete_data($id)
    {
            $this->db->where('id', $id);
            $this->db->delete('telur');
    }

    // Function ambil telur-----------------------------------------------------------------------------------------------------------------------

    //Get Ambil Telur
    public function join_anggota_telur()
    {
        $this->db->select('*,(jumlah*harga)AS total');
        $this->db->from('ambil_telur');
        $this->db->join('anggota', 'anggota.id_anggota = ambil_telur.id_anggota');
        $query = $this->db->get();
        return $query->result();
    }
    public function join_ambiltelur_telur()
    {
        $this->db->select('*,(jumlah*harga)AS total');
        $this->db->from('ambil_telur');
        $this->db->join('telur', 'telur.id_telur = ambil_telur.id_telur');
        $this->db->join('anggota', 'anggota.id_anggota = ambil_telur.id_anggota');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_anggota()
    {
    return $this->db->get('anggota');
    }

    //insert ambil telur
    public function simpan_ambiltelur($data)
    {
       $query = $this->db->insert('ambil_telur',$data);
       return $query;
    }

 
    public function edit_ambiltelur($where,$table)
    {
        return $this->db->get_where($table,['id_anggota' => $where]); //u
    }
    public function update_telur($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

   //delete ambil telur
    public function delete_ambiltelur($id_anggota)
    {
        $this->db->where('id_anggota', $id_anggota); //u
        $this->db->delete('ambil_telur');
        return $query;
    }


}