<?php

class Test extends MY_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function topic()
  {
            $this->load->helper('url'); 

            if ( ! file_exists('application/views/pages/home.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $data['title'] = "Test";
            $data['content'] = 'pages/home';

            $this->load->view('layout/master', $data);
  }
  
}