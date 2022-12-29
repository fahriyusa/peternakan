<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Anggota extends CI_Model
{
    //get
    public function get_anggota()
    {
    //SELECT *, CASE WHEN status = 'a' THEN 'Aktif' ELSE 'Nonaktif' END AS status_txt FROM anggota;
     $this->db->select('*,CASE WHEN status = 
                        "a" THEN "Aktif" 
                        ELSE "Nonaktif" 
                        END AS status_txt',false);
     $this->db->from('anggota');
     $query = $this->db->get();
     return $query->result();
    }

    //insert
    public function insert_anggota($data)
    {
        $this->db->insert('anggota',$data);
    }

    //update
    public function update_anggota()
    {
        //
    }

    //delete
    public function delete_anggota($id_anggota)
    {
        $this->db->where('id_anggota', $id_anggota);
        $this->db->delete('anggota');
    }
}