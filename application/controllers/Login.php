<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('auth/login');
	}
 
	function login_aksi(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);

		// $this->form_validation->set_rules('username', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		// if ($this->form_validation->run() !=FALSE) {
		// 	$where = array(
		// 		'username' => $user,
		// 		'password' => $pass
		// 	);

		// 	$cekLogin = $this->M_login->cek_login($where)->num_rows();

		// 	if ($cekLogin > 0) {
		// 		$sess_data = array(
		// 			'username' => $user,
		// 			'login' => 'OK'
		// 		);

		// 		$this->session->set_userdata($sess_data);
		// 		redirect(base_url());
		// 	} else {
		// 		redirect(base_url('login'));
		// 	}
		// }else {
		// 	$this->load->view('auth/login');
		// }
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login('users',$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url('users'));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}