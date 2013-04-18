<?php

class Tests extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->dbforge();
        $this->load->model('user');
        $this->load->model('activity');
        $this->load->model('useralias');
    }

    public function install() {
        //first, make sure you have set up correct database connection
        //: username, password, and database name
        //also make sure that it is empty databases, otherwise it will broke
        //create tables

        echo '<h1>Installing Initial Dropin Database</h1>';

        //Creating user table
        $this->install_users();
        $this->install_topics();
        $this->install_groups();
    }
    
    public function install_users()
    {
        $this->dbforge->drop_table('user');
        $this->dbforge->drop_table('useralias');
        $this->dbforge->drop_table('activity');
        $this->dbforge->drop_table('history');
        $this->dbforge->drop_table('skill_point');
        $this->dbforge->drop_table('skill');
        
        $user_field = array(
            'user_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,'auto_increment'=>TRUE),
            'name' => array('type'=>'VARCHAR','constraint'=>'100',),
            'display_name' => array('type'=>'VARCHAR','constraint'=>'100','default'=>'Dropin User',),
            'email' => array('type'=>'TEXT','null'=>TRUE,),
            'birthday' => array('type'=>'DATE','null'=>TRUE,),
        );

        $activity_field = array(
            'user_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,),
            'activity_mark' => array('type'=>'VARCHAR','constraint'=>'100',),
            'time' => array('type'=>'TIME','null'=>TRUE,),
            'point' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,),
        );
        
        $user_alias_field = array(
            'alias_name' => array('type'=>'VARCHAR','constraint'=>'100',),
            'user_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,),
        );        
        
        $this->dbforge->add_field($user_field);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('user');
        
        $this->dbforge->add_field($activity_field);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('activity');
        
        $this->dbforge->add_field($user_alias_field);
        $this->dbforge->add_key('alias_name', TRUE);
        $this->dbforge->create_table('useralias');

        echo '<p>Created user table...</p>';

        //creating sample user
        unset($data);        
        $data['name'] = 'yayan';
        $data['display_name'] = 'yayan';
        $data['email'] = 'yansyaf@gmail.com';
        $data['birthday'] = '1985-06-04';
        $this->user->insert($data);
        
        //creating sample activity
        unset($data);
        $data['user_id'] = 1;
        $data['activity_mark'] = 0; 
        $data['time'] = '2013-04-19-04:00'; 
        $data['point'] = 10;
        $this->activity->insert($data);
        
        unset($data);
        $data['alias_name'] = 'yayan';
        $data['user_id'] = 1;
        $this->useralias->insert($data);        
    }

    public function install_topics()
    {
        
    }

    public function install_groups()
    {
        
    }
    
}