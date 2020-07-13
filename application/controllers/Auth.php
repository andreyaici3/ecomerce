<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$data = [ 'title' => "Login",
				  'menuAktif' => 'login',
				  'menuAktif2' => 'login',
				  'page_header'	=> "Login / Register"
					];
		$this->fronted->view('login', $data);
	}
}
