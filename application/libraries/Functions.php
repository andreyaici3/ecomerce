<?php 


class Functions {
    protected $ci;

    public function __construct(){
        $this->ci = &get_instance();
    }

    public function error($html = 'NULL', $url){
        $html = '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><i class="icon fa fa-ban"></i> <b> '. $html . '</b></p>
                </div>';

        $this->ci->session->set_flashdata('pesan',$html);
        redirect($url);
    }

    public function succ($html = 'NULL', $url){
        $html = '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><i class="icon fa fa-check"></i> <b> '. $html . '</b></p>
                </div>';

        $this->ci->session->set_flashdata('pesan',$html);
        redirect($url);
    }
}