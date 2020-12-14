<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebApis extends CI_Controller {

	public function getKabupaten(){
		$id = $this->input->post('id');
		$hasil = $this->api->getKabupaten($id);
		echo "<option>Pilih Kabupaten</option>";
		foreach ($hasil as $value) {
			echo "<option value='" . $value->city_id . "'>" . $value->city_name . "</option>" ;
		}

	}

	// public function kurir(){
	// 	$kurir = $this->input->post('kurir');
	// 	
	// }


	public function getLayanan(){
		$kurir = $this->input->post('kurir');
		$dest = $this->input->post('dest');

		if ($kurir == 'jne') {
			$hasil = $this->api->layanan('jne',$dest);
			foreach ($hasil as $value) {
				foreach ($value->costs as $va) {
					echo "<option value='" . $va->cost[0]->value . "'>" . $va->description . " ( Perkiraan ". $va->cost[0]->etd . " Hari )</option>" ;
				}
			}
		} else if ($kurir == 'tiki') {
			$hasil = $this->api->layanan('tiki',$dest);
			foreach ($hasil as $value) {
				foreach ($value->costs as $va) {
					echo "<option value='" . $va->cost[0]->value . "'>" . $va->description . " ( Perkiraan ". $va->cost[0]->etd . " Hari )</option>" ;
				}
			}
		} else {
			$hasil = $this->api->layanan('pos',$dest);
			foreach ($hasil as $value) {
				foreach ($value->costs as $va) {
					echo "<option value='" . $va->cost[0]->value . "'>" . $va->description . " ( Perkiraan ". $va->cost[0]->etd . " )</option>" ;
				}
			}
		}
		
	}

	public function getHarga(){
		$harga = $this->input->post('harga');
		// echo "Rp. " . number_format($harga);
		$data = [
			'harga' => 'Rp. ' . number_format($harga),
			'total' => 'Rp. ' . number_format($harga + $this->cart->total())
		];

		echo json_encode($data);

    }
    
    public function getSub(){
        $id = $this->input->post('Kategori');
        $result = $this->db->get_where('sub_kategori',['id_kategori' => $id])->result();
        if ($result){
            $data = [
                'status' => 200,
                'message' => 'OK',
                'sub_kategori' => $result
            ];
        } else {
            $data = [
                'status' => 404,
                'message' => 'Not Found'
            ];
        }
        echo json_encode($data);
    }

	


}