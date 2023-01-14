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
        // var_dump($this->session->userdata('username'));
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
                    'username' => $user['username'],
                    'password' => $user['password']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class=" salah">'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="tidakada">'
            );
            redirect('auth');
        }
    }

    //logout
    public function logout()
    {
        $this->M_auth->logout();
        $this->session->sess_destroy();
        redirect(base_url('Auth'));
    }
}
