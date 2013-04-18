<?php

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('activity');
    }

    public function index() {
        $data['title'] = "User List";
        $data['content'] = 'users/index';
        $this->load->view($this->layout, $data);
    }

    public function show($user_id = 1) {
        $user = $this->user->find_by_id($user_id);
        $activity = $this->activity->find_by_id($user_id);
        
        //var_dump($activity); die();
        $data['user'] = $user;        
        $data['activity'] = $activity;
        $data['title'] = 'User ' . $user_id;
        $data['content'] = 'users/' . $user_id;
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