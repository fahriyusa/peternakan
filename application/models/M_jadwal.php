<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_jadwal extends CI_Model
{

    public function get_team()
    { 
      $query = $this->db->get('team');
      return $query;
    }
    
    public function  get_team_by_jadwal($id_team)
    {
        $this->db->select('*');
        $this->db->from('team');
        $this->db_join('jadwal','jadwal.id_team = team.id_team');
        $query = $this->db->get();    
        return $query->result();
  }
 
    //read
    function get_jadwal() {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('team','team.id_team = jadwal.id_team');
        $query = $this->db->get();    
        return $query->result();
    }
//create
public function create_jadwal($jadwal,$team) {
    $this->db->trans_start();
    //INSERT 
    $data = array(
        'status' => $status
    );
    $this->db->insert('jadwal', $data);
    $team = $this->input->post('team');
    //GED id 
    $id_jadwal= $this->db->insert_id();
    $result = array();
    foreach($team AS $key => $val){
        $result[] = array(
            'id_jadwal'   => $id_jadwal,
            'id_team' => $_POST['team'][$key]
           );                                
}
    //MULTIPLE INSERT TO DETAIL TABLE
    $this->db->insert_batch('team', $result);
    $this->db->trans_complete();
}
// DELETE
function delete_jadwal($id){
    $this->db->trans_start();
        $this->db->delete('jadwal', array('id_jadwal' => $id));
    $this->db->trans_complete();
}
}