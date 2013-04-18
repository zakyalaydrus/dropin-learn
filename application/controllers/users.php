<?php

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('user_alias');
        $this->load->model('user_activity');
    }

    public function index() {
        $data['title'] = "User List";
        $data['content'] = 'users/index';
        $this->load->view($this->layout, $data);
    }

    public function show($user_id = 1) {
        if (!is_numeric($user_id))
        {
            $alias = $this->user_alias->find_by_id($user_id);
            unset($user_id);
            $user_id = $alias['user_id'];
        }
        
        $user = $this->user->find_by_id($user_id);
        $activity = $this->user_activity->find_by_id($user_id);
        
        $data['title'] = 'User ' . $user_id;
        $data['content'] = 'users/user_home';
        $data['user'] = $user;        
        $data['activity'] = $activity;
        $this->load->view($this->layout, $data);
    }

    public function groups($user_id = 1) {
        $data['title'] = 'User ' . $user_id;
        $data['content'] = 'users/' . $user_id;
        $this->load->view($this->layout, $data);
    }
    
    public function topics($user_id = 1) {
        $data['title'] = 'User Topic Lists' . $user_id;
        $data['content'] = 'users/topics';
        $this->load->view($this->layout, $data);
    }  
}