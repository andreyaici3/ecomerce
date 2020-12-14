<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function index()
	{
		$this->load->model('M_Product');
		$data = [
			'title' 		=> "Cart",
			'menuAktif' 	=> "Category",
			'menuAktif2'	=> "login",
			'page_header'	=> "Shopping Cart",
			'shopCart'		=> $this->cart->contents()
		];
		$this->fronted->view("cart", $data);
	}

	public function editQty(){
		@$rowid = $_POST['rowid'];
		@$value = $_POST['value'];
		@$data = [
			'rowid' => $rowid,
			'qty'	=> $value
		];

		$this->cart->update($data);
		echo json_encode($this->cart->format_number($this->cart->total()));
		
	}

	public function checkout(){
		if (!$this->session->userdata('login')) {
			redirect('auth');
		} else {
			$this->form_validation->set_rules('fullName','fullName','required');
				if ($this->form_validation->run() != true) {
					$data = [
					'title' 		=> "Checkout",
					'menuAktif' 	=> "Category",
					'menuAktif2'	=> "login",
					'page_header'	=> "Checkout",
					'provinsi'		=> $this->api->getProvinsi()
				];
				$this->fronted->view("checkout", $data);
			} else {
				$this->order->unpaid();
			}
			
		}
		
		
		
		
	}

	public function billing($invoices){
		$data = [
			'title' 		=> "Confirmation Purchase",
			'menuAktif' 	=> "Category",
			'menuAktif2'	=> "login",
			'page_header'	=> "Confirmation Purchase",
			'order'			=> $this->order->billing($invoices),
			'product'		=> $this->order->produk($invoices)
		];
		$this->fronted->view("confirm", $data);
	}
}
