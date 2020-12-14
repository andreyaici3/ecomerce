<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_auth');
	}
	public function index()
	{
		$session = $this->session->userdata('status');

		if ($session == ''){
			$data = [ 'title' => "Masuk",
					  'menuAktif' => 'login',
					  'menuAktif2' => 'login',
					  'page_header'	=> "Masuk"
					];
			$this->fronted->view('login', $data);
		} else {
			redirect('Home');
		}
		
	}

	public function authentication(){
		$this->form_validation->set_rules('name','name','required');
		if ($this->form_validation->run() != true){
			$this->session->set_flashdata('loginPopUp', '<div class="alert alert-danger text-center" style="margin-top: -90px;">Login Gagal</div>');
			redirect('auth');	
		} else {
			$username = $this->db->escape_str(trim($this->input->post('name')));
			$password = $this->db->escape_str(trim($this->input->post('password')));
            $data = $this->M_auth->login($username, $password);
			if ($data == false){
				$this->session->set_flashdata('loginPopUp', '<div class="alert alert-danger text-center" style="margin-top: -90px;">Username / Password Salah</div>');
				redirect('auth');	
			} else {
				$session = [
					'userdata' => ['user_information' => $data],
					'status' => "Loged in"
				];
				$this->session->set_userdata('file_manager',true);
				$this->session->set_userdata($session);
				redirect('Home');
			}
		}

	}

	public function daftar(){
		if ($this->form_validation->run() == false) {
			$data = [ 'title' => "Daftar",
					  'menuAktif' => 'login',
					  'menuAktif2' => 'login',
					  'page_header'	=> "Daftar"
					];
			$this->fronted->view('daftar', $data);
		} else {
			// $this->auth->login();
		}
	}

	public function keluar(){
		$this->session->sess_destroy();
		// $this->session->unset_userdata('login');
		$this->session->set_flashdata('loginPopUp', '<div class="alert alert-success text-center" style="margin-top: -90px;">Logout Berhasil</div>');
		redirect('auth');
	}
}
