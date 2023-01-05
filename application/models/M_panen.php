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

    //get anggota by panen id
    public function get_anggota_by_panen($id)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('panen', 'panen.id_anggota = anggota.id_anggota');
        $query = $this->db->get();
        return $query;
    }
   
    //get
    public function get_panen()
    {
        $query = $this->db->get('panen');
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
    public function update_panen($where,$table)
    {
        return $this->db->get_where($table, $where);
    }

    //delete
    public function delete_panen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('panen');
    }
}
