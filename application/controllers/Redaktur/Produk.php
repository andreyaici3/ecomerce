<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends AUTH_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('Backend');
        $this->load->model('M_Product');
    }


    public function index(){
        $data = [
            'judulTab'  => 'Dashboard | Data Produk',
            'judulBesar'=> 'Data Produk',
            'judulKecil'=> 'Menampilkan Semua Produk',
            'produk'    => $this->M_Product->selects()
        ];
        $this->backend->display('produk/index', $data);
    }  

    public function add(){
        $data = [
            'judulTab'  => 'Dashboard | Tambah Data Produk',
            'judulBesar'=> '',
            'judulKecil'=> ''
        ];
        $this->backend->display('produk/add', $data);
    }



}