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
        var_dump($this->session->userdata('username'));
        $this->load->view('auth/login');
    }

    public function login()
    {
        // $this->load->model('M_auth');
        // $this->load->library('form_validation');

        // $rules = $this->M_auth->rules();
        // $this->form_validation->set_rules($rules);

        // if ($this->form_validation->run() == FALSE) {
        //     return $this->load->view('auth/login');
        // }
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $user = $this->M_auth->selectuser($username);
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username'=> $user['username'],               
                    'password'=> $user['password']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            }else {
                $this->session->set_flashdata(
                    'message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Salah</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
                    </div>'
                );
                redirect('auth');
            }
        }else {
            $this->session->set_flashdata(
                'message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Username Tidak Terdaftar</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
                    </div>'
            );
            redirect('auth');
        }
        // if ($this->M_auth->login($username,$password)) {
        //     redirect('dashboard');
        // }else {
        //     $this->session->set_flashdata('message_login_error', 'Login Gagal');
        // }

        // $this->load->view('auth/login');
        // cek username 
        // if($cek->num_rows() > 0)
        // {
            // kita ambil isi dari record
            // $hasil = $cek->row();
            // if(password_verify($password, $hasil->password))
            // {
            //     // membuat session
        //         $this->session->set_userdata('id_anggota', $hasil->id_anggota);
        //         $this->session->set_userdata('is_login', TRUE);

        //         // redirect ke admin
        //         redirect(base_url('Dashboard'));
        //     }else{

        //         // jika password salah
        //         $this->session->set_flashdata('failed','Password salah !');
        //         redirect(base_url('Auth/login'));
        //     }

        // }else{

        //     // jika username salah
        //     $this->session->set_flashdata('failed','Username tidak Tersedia !');
        //     redirect(base_url('Auth/login'));
        // }
    }

    
    public function logout()
    {
        $this->M_auth->logout();
        $this->session->sess_destroy();
        redirect(base_url('Auth'));
    }
    
}
