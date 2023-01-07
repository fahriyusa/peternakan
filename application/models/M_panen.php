<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_panen extends CI_Model
{

    

    //get semua anggota
    public function get_anggota()
    {
        $query = $this->db->get('anggota');
        return $query;
    }

    //select * FROM ambil_telur JOIN anggota ON anggota.id_anggota = ambil_telur.id_anggota;
    // Ambil Telur
    public function join_anggota_panen()
    {
        $this->db->select('*');
        $this->db->from('panen');
        $this->db->join('anggota', 'panen.id_anggota = anggota.id_anggota', 'LEFT');
        $query = $this->db->get();
        return $query->result();
    }
    
    //insert
    public function insert_panen($data)
    {
        $this->db->insert('panen',$data);
    }

    //mengambil data berdasar data id
    public function getById($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('panen');
        return $query->row();
    }
    //update
    public function update_panen($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where,$data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    //delete
    public function delete_panen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('panen');
    }
}
