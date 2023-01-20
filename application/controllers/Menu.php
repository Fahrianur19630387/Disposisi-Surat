<?php
defined('BASEPATH') OR exit('No Direct Script Acces Allowed');

class Menu extends CI_Controller {
    public function Index()
    {
        $data = array(
            'content'=> 'dashboard/index.php'
        );
        $this->load->view('template/main',$data);
    }
}