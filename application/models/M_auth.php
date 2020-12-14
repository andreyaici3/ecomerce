<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	public function login($user, $pass){

		$this->db->select('users.*');
		$this->db->from('users');
		$this->db->where('users.email', $this->db->escape_str($user));
		$this->db->where('users.password', $this->db->escape_str(md5($pass)));

		$data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}		
		
    }
    
    public function loginadmin($user, $pass){
        $this->db->select('users.*');
		$this->db->from('users');
		$this->db->where('users.email', $this->db->escape_str($user));
        $this->db->where('users.password', $this->db->escape_str(md5($pass)));
        $this->db->where('users.group = 1');

        $data = $this->db->get();

		if ($data->num_rows() == 1) {
            $data = [
                'email' => $data->row()->email,
                'pass'  => $pass
            ];
			return $data;
		} else {
			return false;
		}		
    }

    public function loginadmin1($user, $pass){
        $this->db->select('users.*');
		$this->db->from('users');
		$this->db->where('users.email', $this->db->escape_str($user));
        $this->db->where('users.password', $this->db->escape_str(md5($pass)));
        $this->db->where('users.group = 1');

        $data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}		
    }
}