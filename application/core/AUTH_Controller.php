<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AUTH_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_auth');

        $this->userdata = $this->M_auth->loginadmin1($this->session->userdata('userdata')['email'], $this->session->userdata('userdata')['pass']);
        
        if ($this->session->userdata('status') == '') {
            $this->functions->error('Username / Password Salah', 'logintokobos');
		}
    }
}