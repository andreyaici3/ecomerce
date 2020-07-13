<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {
	public function getProduct($limit, $start){
		return $result = $this->db->get('products', $limit, $start)->result();
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

}