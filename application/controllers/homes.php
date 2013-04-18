<?php

class Homes extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Home";
        $data['content'] = 'home/index';
        $this->load->view($this->layout, $data);
    }

    public function login() {
        $data['title'] = "Login";
        $data['content'] = 'home/login';
        $this->load->view($this->layout, $data);
    }    

    public function signup() {
        $data['title'] = "Sign Up";
        $data['content'] = 'home/signup';
        $this->load->view($this->layout, $data);
    }    

    public function about() {
        $data['title'] = "About";
        $data['content'] = 'home/about';
        $this->load->view($this->layout, $data);
    }    
    
}