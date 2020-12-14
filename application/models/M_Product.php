<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {
	public function getProduct($limit, $start){
		return $result = $this->db->get('products', $limit, $start)->result();
	}

	public function addCart(){
		$id = $this->input->post('id');
		$product = $this->db->get_where('products',['id' => $id])->row();
		$data = array(
		                'id'      => $id,
		                'qty'     => 1,
		                'price'   => $product->price,
		                'name'    => $product->name
		       		);

		$this->cart->insert($data);
		echo $this->getRows();
		// return json_encode($data['name']);
		// redirect('product');
	}

	public function getRows(){
		$i=0;
		foreach ($this->cart->contents() as $value) {
			$i++;
		}
		return $i;
	}

	public function deal(){
		$this->db->join('invoices','orders.invoice_id = invoices.id');
		$this->db->join('products','products.id = orders.product_id');
		$this->db->order_by('tgl_transaksi','DESC');
		return $this->db->get('orders')->result();
	}

	public function image($id){
		return $this->db->get_where('products',['id' => $id])->result()[0]->image;
	}

	public function paginationConf(){
		$config['base_url'] = base_url('product/index');
		$config['total_rows'] = $this->db->get('products')->num_rows();
		$config['per_page'] = $this->M_Product->getPer();
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['prev_link'] = '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>';
		$config['next_link'] = '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>';
		$config['cur_tag_open'] = '<a href="#" class="active">';
		$config['cur_tag_close'] = '</a>';

		$this->pagination->initialize($config);
		return $this->pagination->create_links();

	}

	public function latestProduct($limit, $start){
		$this->db->order_by('id','DESC');
		return $result = $this->db->get('products', $limit, $start)->result();
	}

	public function getPer(){
		return $data = 6;
	}

	public function getProductId($id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('kategori', 'products.id_kategori = kategori.id_kategori');
		$this->db->where('products.id', $id);
		return $this->db->get()->row_array();
	}

	public function getCategory(){
		return $this->db->get('kategori')->result();
	}

	public function get($id_kategori){
		$product = $this->db->get('products')->result();
		$i=0;
		foreach($product as $p){
			if ($p->id_kategori == $id_kategori){
				$i++;
			}
		}

		return $i;
    }
    
    public function selects(){
        return $this->db
                    ->join('kategori','kategori.id_kategori = products.id_kategori')
                    ->order_by('name','ASC')
                    ->get('products')
                    ->result();
    }

}