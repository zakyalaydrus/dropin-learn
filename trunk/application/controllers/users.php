<?php

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('login');
        $this->load->model('user_profile');
        $this->load->model('user_alias');
        $this->load->model('user_activity');
    }

    public function index() {
        $data['title'] = "User List";
        $data['content'] = 'users/index';
        $this->load->view($this->layout, $data);
    }

    public function show($user_id = 1) {
        if (!is_numeric($user_id)) {
            $alias = $this->user_alias->find_by_id($user_id);
            unset($user_id);
            $user_id = $alias['user_id'];
        }

        $data['user'] = $this->user_profile->find_by_id($user_id);
        $data['activity'] = $this->user_activity->find_by_id($user_id);        
        $data['login'] = $this->set_login_status();
        $data['title'] = $data['user']['name'];
        $data['content'] = 'users/user_home';
        
        if ($user_id == $this->login->get_id()) {
            $data['is_valid_access'] = 1;
        }
        else {
            $data['is_valid_access'] = 0;            
        }
        
        $this->load->view($this->layout, $data);
    }

    public function groups($user_id = 1) {
        $data['title'] = 'User ' . $user_id;
        $data['content'] = 'users/' . $user_id;
        $data['login'] = $this->set_login_status();        
        $this->load->view($this->layout, $data);
    }

    public function topics($user_id = 1) {
        $data['title'] = 'User Topic Lists' . $user_id;
        $data['content'] = 'users/topics';
        $data['login'] = $this->set_login_status();
        $this->load->view($this->layout, $data);
    }

}