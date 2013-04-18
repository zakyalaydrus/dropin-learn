<?php

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
    }

    public function index() {
        $data['title'] = "User List";
        $data['content'] = 'users/index';
        $this->load->view($this->layout, $data);
    }

    public function show($user_id = 1) {
        $data = $this->user->find_by_id($user_id);
        //var_dump($data);
        //die();
        $data['title'] = 'User ' . $user_id;
        $data['content'] = 'users/' . $user_id;
        $this->load->view($this->layout, $data);
    }

    /**
     * 
     * @param type $user_id
     * Show what's this user is following, could be a topics or a group
     */
    public function follows($user_id = 1) {
        $data['title'] = 'User ' . $user_id;
        $data['content'] = 'users/' . $user_id;
        $this->load->view($this->layout, $data);
    }
    
    /**
     * 
     * @param type $user_id
     * Show what's this user is creating topics
     */
    public function topics($user_id = 1) {
        $data['title'] = 'User Topic Lists' . $user_id;
        $data['content'] = 'users/' . $user_id;
        $this->load->view($this->layout, $data);
    }  
}