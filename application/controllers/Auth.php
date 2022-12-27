<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        $this->load->view('auth/login');
    }

    public function registrasi(){
        $this->load->view('auth/registrasi');
    }
}
