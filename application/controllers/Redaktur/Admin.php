<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends AUTH_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('Backend');
    }
    public function index(){
        $data = [
            'judulTab'  => 'Dashboard | Admin',
            'judulBesar'=> 'Dashboard',
            'judulKecil'=> 'Statistik Penjualan'
        ];
        $this->backend->display('admin/dashboard', $data);
    }  

}