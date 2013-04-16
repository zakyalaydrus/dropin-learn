<?php

class Topic extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Topic List";
        $data['content'] = 'topics/index';
        $this->load->view($this->layout, $data);
    }

    public function show($topic_id = 1) {
        $data['title'] = "Topic " . $topic_id;
        $data['content'] = 'topics/' . $topic_id;
        $this->load->view($this->layout, $data);
    }

}