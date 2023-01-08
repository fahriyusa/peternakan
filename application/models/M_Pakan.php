<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_Pakan extends CI_Model
{
    //get
    public function getPakan()
    {
        $query = $this->db->get('data_pakan');
        return $query->result();
    }

    //get semua team
    public function get_team()
    {
        $this->db->group_by('nama_team');
        return $this->db->get('team')->result();

    }
    public function join_team_pakan()
    {
        $this->db->select('*');
        $this->db->from('data_pakan');
        $this->db->join('team', 'data_pakan.id_team = team.id_team');
        $query = $this->db->get();
        return $query->result();
    }

    //READ
   // public function get_datapakan()
    //{
     //   $this->db->select('*');
       // $this->db->from('data_pakan');
       // $this->db->join('team','team.id_team = data_pakan.id_team');
      //  $query = $this->db->get();
      //  return $query->result();
   // }

     //insert
     public function insert_datapakan($data)
     {
       $query = $this->db->insert('data_pakan',$data);
       return $query;
     }
 
    //mengambil data berdasarkan id   
    public function getById($id)
    {
         $this->db->get_where("id", $id);
        $query = $this->db->get('data_pakan');
        return $query->row();
            }

    //update 
    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,['id' => $where]);
    }

    public function update_dataPakan($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }


     //delete
    public function delete_pakan($id)
    {
     $this->db->where('id', $id);
     $this->db->delete('data_pakan');
    }

    
    





    
    //select *from ambil_pakan JOIN anggota ON anggota.id_anggota = ambil_pakan.id_anggota;
    //Ambil Pakan
    public function join_anggota_pakan()
    { 
        $this->db->select('*');
        $this->db->from('ambil_pakan');
        $this->db->join('anggota', 'anggota.id_anggota = ambil_pakan.id_anggota');
        $query = $this->db->get();
        return $query->result();
    }

    //Ambil Pakan
    // public function getAmbilPakan()
    // {
    //     $query = $this->db->get('ambil_pakan');
    //     return $query->result();
    // }

    public function get_anggota()
    {
        $query = $this->db->get('anggota')->result();
        return $query;
    }

    public function edit_ambilPakan($where,$table)
    {
     return $this->db->get_where($table,['id' => $where]);
    }

    public function update_ambilPakan($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function simpan_ambilPakan($data)
    {
        $query = $this->db->insert('ambil_pakan',$data);
        return $query;
    }

    public function delete_ambilPakan($id)
   {
        $this->db->where('id', $id);
        $this->db->delete('ambil_pakan');
        return $query;  
   }
    
    
    

    
    


}