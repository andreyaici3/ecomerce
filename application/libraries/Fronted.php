<?php 
	
/**
 * 
 */
class Fronted
{
	private $ci;
	function __construct()
	{
		$this->ci = &get_instance();
	}

	function view($template = NULL, $data = NULL){
		$newView = '_frontend/' . $template;
		$data = [
			'_head'				=> $this->ci->load->view('_template/_frontend/_head', $data, TRUE),
			'_header'			=> $this->ci->load->view('_template/_frontend/_header', $data, TRUE),
			'_banerArea'		=> $this->ci->load->view('_template/_frontend/_banerArea', $data, TRUE),
			'_banerNA'			=> $this->ci->load->view('_template/_frontend/_banerNA', $data, TRUE),
			'_related'			=> $this->ci->load->view('_template/_frontend/_related', $data, TRUE),
			'_footerSection'	=> $this->ci->load->view('_template/_frontend/_footerSection', $data, TRUE),
			'_libfooter'		=> $this->ci->load->view('_template/_frontend/_libfooter', $data, TRUE)
		];
		
			$data['_mainContent'] 		= $this->ci->load->view($newView, $data, TRUE);
			$data['_content']			= $this->ci->load->view('_template/_frontend/_content', $data, TRUE);

		echo $data['_template'] 		= $this->ci->load->view('_template/_frontend/_template', $data, TRUE);
	}

}

 ?>