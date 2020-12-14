<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}
        $this->load->model('M_order');
    }
	public function index(){
        $data = [ 
            'title' => "User Profile", 
            'page_header'   => 'Profil',
            'belum_bayar'   => $this->M_order->transaksi($this->session->userdata('userdata')['user_information']->id, 'unpaid'),
            'sudah_bayar'   => $this->M_order->transaksi($this->session->userdata('userdata')['user_information']->id, 'paid'),
            'menuAktif' => $this->session->userdata('userdata')['user_information']->name
        ];
        $this->fronted->view('profile', $data);
    }
}