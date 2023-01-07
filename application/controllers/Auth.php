<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('dashboard'); // Redirect ke page dashboard
        $this->load->view('auth/login'); // Load view login.php
    }

    public function login()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
        $password = md5($this->input->post('password'));
        // Ambil isi dari inputan password pada form login dan encrypt dengan md5

        
        $username = $this->M_auth->get($username); // Panggil fungsi get yang ada di UserModel.php
        
        if (empty($username)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
            redirect('auth'); // Redirect ke halaman login
        } else {
            if ($password == $username->password) { // Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => true,
                    // Buat session authenticated dengan value true
                    'username' => $username->username
                    // Buat session username
                    // 'nama' => $user->nama // Buat session authenticated
                );
                $this->session->set_userdata($session); // Buat session sesuai $session
                redirect('dashboard'); // Redirect ke halaman dashboard
            } else {
                $this->session->set_flashdata('message','Password e Salah Bolo'); // Buat session flashdata
                redirect('auth'); // Redirect ke halaman login
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect ('Auth');

    }

    
}
