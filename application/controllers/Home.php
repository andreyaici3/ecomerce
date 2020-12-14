<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Product');
	}

	public function index(){
        
		$data = [ 
			'title' => "Andrey Store", 
			'menuAktif' => "Home",
			'product' => $this->M_Product->latestProduct(8,0),
			'new_product' => $this->M_Product->latestProduct(3,0)
		];
		$this->fronted->view('master_index', $data);
	}
	
}
