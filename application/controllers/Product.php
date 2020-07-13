<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Product');
		$this->load->library('pagination');
	}
	public function index()
	{
		
		$data = [
			'title' 		=> "Produk",
			'menuAktif' 	=> "Category",
			'page_header'	=> "Product Page",
			'category'		=> $this->M_Product->getCategory(),
			'start'			=> $this->uri->segment(3),
			'p'				=> $this->M_Product->getPer(),
			'page'			=> $this->M_Product->paginationConf()
		];
		

		$data['product'] = $this->M_Product->getProduct($data['p'],$data['start']);	
		
		$this->fronted->view("category", $data);
	}

	public function detailProduk($id){
		$data = [
			'title' 		=> "Detail Produk",
			'menuAktif' 	=> "Detail Product",
			'page_header'	=> "Product Detail Page",
			'product'		=> $this->M_Product->getProductId($id)
		];
		$this->fronted->view("detail", $data);
	}
}
