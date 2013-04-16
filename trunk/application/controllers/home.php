<?php

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->helper('url');

        if (!file_exists('application/views/pages/home.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = "Test";
        $data['content'] = 'topics/index';

        $this->load->view('layout/master', $data);
    }

    public function show($topic_id = 1) {
        $this->load->helper('url');

        if (!file_exists('application/views/pages/home.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = "Test";
        $data['content'] = 'topics/' . $topic_id;

        $this->load->view('layout/master', $data);
    }

}