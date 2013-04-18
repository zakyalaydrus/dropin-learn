<?php

class Uploads extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $data['title'] = "User List";
        $data['content'] = 'upload/upload_form';
        $data['error'] = '';
        $this->load->view($this->layout, $data);
    }

    function do_upload() {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $data['title'] = "User List";
            $data['content'] = 'upload/upload_form';
            $this->load->view($this->layout, $data);
        } else {
            $data['upload_data'] = $this->upload->data();

            $data['title'] = "User List";
            $data['content'] = 'upload/upload_success';
            $this->load->view($this->layout, $data);
        }
    }

}
