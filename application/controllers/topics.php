<?php

class Topics extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('topic');        
    }

    public function index() {
        $data['title'] = "Topic List";
        $data['content'] = 'topics/index';
        $data['login'] = $this->set_login_status();        
        $this->load->view($this->layout, $data);
    }

    public function show($topic_alias = '', $topic_id = 1) {

        /* todo: check if topic alias is correct */
        $topic = $this->topic->find_by_id($topic_id);

        $data['title'] = "Topic " . $topic_id;
        $data['content'] = 'topics/topic_home';
        $data['topic'] = $topic;
        $data['login'] = $this->set_login_status();        
        $this->load->view($this->layout, $data);
    }

}