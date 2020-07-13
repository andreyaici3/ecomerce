<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function index()
	{
		$data = [
			'title' 		=> "Cart",
			'menuAktif' 	=> "Category",
			'menuAktif2'	=> "login",
			'page_header'	=> "Shopping Cart"
		];
		$this->fronted->view("cart", $data);
	}

	public function checkout(){
		$data = [
			'title' 		=> "Checkout",
			'menuAktif' 	=> "Category",
			'menuAktif2'	=> "login",
			'page_header'	=> "Checkout"
		];
		$this->fronted->view("checkout", $data);
	}

	public function confirm(){
		$data = [
			'title' 		=> "Confirmation Purchase",
			'menuAktif' 	=> "Category",
			'menuAktif2'	=> "login",
			'page_header'	=> "Confirmation Purchase"
		];
		$this->fronted->view("confirm", $data);
	}
}
