<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_auth');
    }
    public function index(){
        $this->load->view('_backend/login');
    }

    public function authentication(){
        if (!$this->input->post()){
            $this->functions->error('Username / Password Salah', 'logintokobos');
        } else {
            $username = trim($this->input->post('email'));
            $password = trim($this->input->post('password'));

            $data = $this->M_auth->loginadmin($username, $password);
            if ($data == false) {
				$this->functions->error('Username / Password Salah', 'logintokobos');
            } 
            else {
				date_default_timezone_set('Asia/Jakarta');
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				
				$this->session->set_userdata('file_manager',true);
				$this->session->set_userdata($session);
				redirect('dashboard');
			}
        }
    }
    
    public function out(){
        $this->session->sess_destroy();
        $this->functions->error('Logout Berhasil', 'logintokobos');
    }
}
