<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class M_auth extends CI_Model
{
    // private $_table = "anggota";
    // const SESSION_KEY = "user_id";

    // public function rules()
    // {
    //     return [
    //         [
    //             'field' => 'username',
    //             'label' => 'Username',
    //             'rules' => 'required'
    //         ],
    //         [
    //             'field' => 'password',
    //             'label' => 'Password',
    //             'rules' => 'required|max_lenght[50]'

    //         ]
    //         ];
    // }

    // public function login($username,$password)
    // {
    //     $this->db->where('username', $ussername);
    //     $query = $this->db->get($this->_table);
    //     $user = $query->row();

    //     // cek apakah user sudah terdaftar
    //     if (!$user) {
    //         return FALSE;
    //     }

    //     //cek apakah passwordnya benar?
    //     if(!$password_verify($password, $user->password)) {
    //         return FALSE;
    //     }

    //     //membuat session
    //     $this->session->set_userdata([self::SESSION_KEY => $user->id_anggota]);
    //     $this->_update_last_login($user->id_anggota);

    //     return $this->session->has_userdata(self::SESSION_KEY);

    // }

    // public function current_user()
    // {
    //     if (!$this->session->has_userdata(self::SESSION_KEY)) {
    //         return null;
    //     }

    //     $user_id = $this->session->userdata(self::SESSION_KEY);
    //     $query = $this->db->get_where($this->_table,['id_anggota' => $user_id]);
    //     return $query->row();
    // }

    public function logout()
    {
        $this->session->unset_userdata($self::SESSION_KEY);
        return !$this->session->has_userdata($self::SESSION_KEY);
    }

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('anggota')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}