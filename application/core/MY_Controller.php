<?php

class MY_Controller extends CI_Controller {

    public $layout;

    public function __construct() {
        parent::__construct();
        $this->load->library('login');
        $this->load->model('user_alias');
        $this->load->helper('url');        
        $this->layout = 'layout/master';        
    }
    
    public function set_login_status()
    {
        if ($this->login->validate_session()) {
            $data['is_logged'] = 1;
            $data['name'] = $this->user_alias->find_alias_name($this->login->get_id());
        } else {
            $data['is_logged'] = 0;
            $data['name'] = '';
        }        
        
        return $data;        
    }

}