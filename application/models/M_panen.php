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
    public function update($id,$data)
    {
        $this->db->where('id',$id);
        $this->update('panen',$this);   
    }

    public function simpan_update($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update_panen('panen',$data);
    }

    //delete
    public function delete_panen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('panen');
    }
}
