<?php

class Signups extends MY_Controller {

    function __construct() {
        parent::__construct();
    }    
    
    public function email() {
        //temporary
        $data['title'] = 'Sign Up Unavailable';
        $data['content'] = 'home/signup_unavailable'; 
        $data['login'] = $this->set_login_status();
        $this->load->view($this->layout, $data);
    }
}