<?php

class MY_Controller extends CI_Controller {

    public $layout;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');        
        $this->layout = 'layout/master';        
    }

}