<?php

class Categories extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Category List";
        $data['content'] = 'categories/index';
        $data['login'] = $this->set_login_status();
        $this->load->view($this->layout, $data);
    }

    public function show($category_id = 1) {
        $data['title'] = 'Category ' . $category_id;
        $data['content'] = 'categories/category_home';
        $data['login'] = $this->set_login_status();
        $this->load->view($this->layout, $data);
    }

}