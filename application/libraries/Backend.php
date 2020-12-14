<?php 
defined('BASEPATH') or exit('No Access allowd the script');

class Backend {
    protected $ci;

    public function __construct(){
        $this->ci = &get_instance();
    }

    public function display($template = NULL, $data = NULL ){
        if ($template){
            $data = [
                'tagHead'    => $this->ci->load->view('_template/_backend/_tagHead', $data, TRUE),
                'tagFooterL' => $this->ci->load->view('_template/_backend/_tagL', $data, TRUE), 
                'header'     => $this->ci->load->view('_template/_backend/_topBar', $data, TRUE),
                'sidebar'     => $this->ci->load->view('_template/_backend/_sidebar', $data, TRUE)   

            ];
            $data['mainContent'] 	= $this->ci->load->view('_backend/' . $template, $data, TRUE);
            $data['content'] 		= $this->ci->load->view('_template/_backend/_content', $data, TRUE);
            echo $data['template'] = $this->ci->load->view('_template/_backend/_template', $data, TRUE);
        }
    }
}