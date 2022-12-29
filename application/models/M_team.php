<?php
defined('BASEPATH') or exit ('No Direct script access allowed');

class M_team extends CI_Model
{
    //get semua anggota
    public function get_anggota()
    {
        $query = $this->db->get('anggota');
        return $query;
    }

    //get anggota by team id
    public function get_anggota_by_team($id_team)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('team', 'team.id_anggota = anggota.id_anggota');
        $query = $this->db->get();
        return $query;
    }

    //READ
    function get_team(){
        $this->db->select('*');
        $this->db->from('team');
        $this->db->join('anggota','anggota.id_anggota = team.id_anggota');
        $query = $this->db->get();
        return $query->result();
    }

    // CREATE
    public function create_team($team,$anggota){
        $this->db->trans_start();
            //INSERT TO team
            $data  = array(
                'nama_team' => $team
            );
            $this->db->insert('team', $data);
            $anggota = $this->input->post('anggota');
            //GET ID team
            $id_team = $this->db->insert_id();
            $result = array();
                foreach($anggota AS $key => $val){
                     $result[] = array(
                      'id_team'   => $id_team,
                      'id_anggota' => $_POST['anggota'][$key]
                     );
                }      
            //MULTIPLE INSERT TO DETAIL TABLE
            $this->db->insert_batch('anggota', $result);
        $this->db->trans_complete();
    }
    // DELETE
    function delete_team($id){
        $this->db->trans_start();
            $this->db->delete('team', array('id_team' => $id));
        $this->db->trans_complete();
    }

}