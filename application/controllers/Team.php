<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
	public function index()
	{
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('team');
        $this->load->view('layout/footer');
	}
}