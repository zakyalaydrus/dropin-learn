<?php

class Groups extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Group Index";
        $data['content'] = 'groups/index';
        $this->load->view($this->layout, $data);
    }

    public function show($group_id = 1) {
        $data['title'] = 'Group ' . $group_id;
        $data['content'] = 'groups/' . $group_id;
        $this->load->view($this->layout, $data);
    }

}