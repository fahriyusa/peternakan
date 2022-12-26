<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
	public function index()
	{
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('anggota');
        $this->load->view('layout/footer');
	}
}