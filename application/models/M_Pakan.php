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
        $query = $this->db->get('team')->result();
        return $query;
    }
    public function join_team_pakan()
    {
        $this->db->select('*');
        $this->db->from('data_pakan');
        $this->db->join('team', 'team.id_team = data_pakan.id_team');
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
 
    //delete
    public function delete_pakan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_pakan');
    }

    
    public function getPakan_id($id)
    {
         $this->db->get_where("data_pakan", ['id'=> $id])->row();
    }


    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function updatedataPakan($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }



    
    
    
    


}