<?php

class Groups extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('group');        
        $this->load->model('group_alias');
    }

    public function index() {
        $data['title'] = "Group Index";
        $data['content'] = 'groups/index';
        $data['login'] = $this->set_login_status();        
        $this->load->view($this->layout, $data);
    }

    public function show($group_id = 1) {
        if (!is_numeric($group_id))
        {
            $alias = $this->group_alias->find_by_id($group_id);
            unset($group_id);
            $group_id = $alias['group_id'];
        }        
        
        $group = $this->group->find_by_id($group_id);        
        
        $data['title'] = 'Group ' . $group_id;
        $data['content'] = 'groups/group_home';
        $data['group'] = $group;
        $data['login'] = $this->set_login_status();        
//        $this->load->view($this->layout, $data);
        $this->load->view('layout/temporary_group', $data);
    }

}