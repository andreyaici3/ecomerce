<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {
	public function billing($inv){
		$this->db->join('invoices','orders.invoice_id = invoices.id');
		$this->db->join('products','products.id = orders.product_id');
		$this->db->order_by('tgl_transaksi','DESC');
		return $this->db->get_where('orders',['invoice_id' => $inv])->result()[0];
	}

	public function produk($inv){
		$this->db->join('products','products.id = orders.product_id');
		$data = $this->db->get_where('orders',['invoice_id' => $inv])->result();
		return $data;
	}

	public function unpaid(){
		$inv = $this->getInv();
		$wil = $this->api->desKab($this->input->post('prov'), $this->input->post('kab'));
		
		$invoices = [
			'id' => $inv,
			'id_users' => $this->session->userdata('login')['user_id'],
			'street' => htmlspecialchars($this->input->post('add1', true)),
			'city' => $wil->city_name,
			'province' => $wil->province,
			'country'	=> 'indonesia',
			'post_code' => htmlspecialchars($this->input->post('kdPos', true)),
			'total_harga' => $this->cart->total(),
			'kurir'		=> $this->input->post('kurir', true),
			'jumlah_ongkir'	=> $this->input->post('layanan', true),			
			'date' => date("Y-m-d H:m:i", time()),
			'due_date' => date("Y-m-d H:m:i", time() + (60*60*24)),
			'status' => 'unpaid'
		];

		$this->db->insert('invoices', $invoices);

		foreach ($this->cart->contents() as $value) {
			$data = [
				'invoice_id' => $inv,
				'product_id' => $value['id'],
				'product_name' => $value['name'],
				'price' => $value['price'],
				'qty' => $value['qty']

			];
			$this->db->insert('orders', $data);
		}

		$this->cart->destroy();

		redirect('order/billing/' . $inv);

	}

	function getInv()
	{
	   	$characters = '1234567890';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 5; $i++) {
	        $randomString .= $characters[Rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	public function transaksi($id, $status){
		$result = $this->db
					->where('id_users', $id)
					->where('status',$status)
					->get('invoices')
                    ->result();
                    
		return $result;

	}
}