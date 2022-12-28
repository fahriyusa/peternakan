<?php
 class  jadwal_model extends CI_Model
 { 
   public function getTeam()
   {
     return $this->db->get('jadwal')->result();//tabel didalam database
   }
   public function insert($data)
   {
    $this->db->insert("jadwal",$data);
   }
   //mengambil data berdasar id
   public function getbyid($id_team)
   {
    $this->db->where('id_team',$id_team);
    $query = $this->db->get('jadwal');
    return $query->row();
   }
   public function update($id_team,$data)
   {
    $this->db->where('id_team',$id_team);
    $this->db->update('jadwal',$data);
   }
   //delete
   public function delete($id_team)
   {
    $this->db->where('id_team',$id_team);
    $this->db->delete('jadwal');
   }
 }
?>