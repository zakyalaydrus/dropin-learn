<?php

class Category extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Category List";
        $data['content'] = 'categories/index';
        $this->load->view($this->layout, $data);
    }

    public function show($category_id = 1) {
        $data['title'] = 'Category ' . $category_id;
        $data['content'] = 'categories/' . $category_id;
        $this->load->view($this->layout, $data);
    }

}