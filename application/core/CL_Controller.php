<?php

/* 
 * This is main Controller which will be load on every controller insted of CI_controller.
 * 
 */

class CL_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('custom_redirect_helper');
        $this->load->helper('cookie');
        $this->load->library('Layout');
    }
    
}



