<?php

class Tests extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->dbforge();
        $this->load->model('user');
        $this->load->model('user_activity');
        $this->load->model('user_alias');
        $this->load->model('topic');
        $this->load->model('group');
        $this->load->model('group_alias');
    }

    public function login()
    {
        $this->load->view('login');
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
        $this->dbforge->drop_table('user_alias');
        $this->dbforge->drop_table('user_activity');
        $this->dbforge->drop_table('history');
        $this->dbforge->drop_table('skill_point');
        $this->dbforge->drop_table('skill');
        
        $user_field = array(
            'user_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,'auto_increment'=>TRUE),
            'name' => array('type'=>'VARCHAR','constraint'=>'100',),
            'display_name' => array('type'=>'VARCHAR','constraint'=>'100','default'=>'Dropin User',),
            'email' => array('type'=>'VARCHAR','constraint'=>'100',),
            'birthday' => array('type'=>'DATE','null'=>TRUE,),
        );

         $user_alias_field = array(
            'alias_name' => array('type'=>'VARCHAR','constraint'=>'100',),
            'user_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,),
        );  
         
        $user_activity_field = array(
            'user_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,),
            'activity_mark' => array('type'=>'VARCHAR','constraint'=>'100',),
            'time' => array('type'=>'TIME','null'=>TRUE,),
            'point' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,),
        );
        
        $this->dbforge->add_field($user_field);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('user');
        
        $this->dbforge->add_field($user_alias_field);
        $this->dbforge->add_key('alias_name', TRUE);
        $this->dbforge->create_table('user_alias');
        
        $this->dbforge->add_field($user_activity_field);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('user_activity');

        echo '<p>Created user table...</p>';

        //creating sample user
        unset($data);        
        $data['name'] = 'yayan';
        $data['display_name'] = 'yayan';
        $data['email'] = 'yansyaf@gmail.com';
        $data['birthday'] = '1985-06-04';
        $this->user->insert($data);

        unset($data);        
        $data['name'] = 'nurul maulidiah';
        $data['display_name'] = 'nurul';
        $data['email'] = 'lia.sf07@gmail.com';
        $data['birthday'] = '1988-11-17';
        $this->user->insert($data);
        
        //creating user alias
        unset($data);
        $data['alias_name'] = 'yayan';
        $data['user_id'] = 1;
        $this->user_alias->insert($data);                
        
        unset($data);
        $data['alias_name'] = 'nurul.maulidiah';
        $data['user_id'] = 2;
        $this->user_alias->insert($data);                

        //creating sample activity
        unset($data);
        $data['user_id'] = 1;
        $data['activity_mark'] = 0; 
        $data['time'] = '2013-04-19-04:00'; 
        $data['point'] = 10;
        $this->user_activity->insert($data);

        unset($data);
        $data['user_id'] = 2;
        $data['activity_mark'] = 10; 
        $data['time'] = '2013-04-19-04:00'; 
        $data['point'] = 100;
        $this->user_activity->insert($data);        
    }

    public function install_topics()
    {
        $this->dbforge->drop_table('topic');
        
        $topic_field = array(
            'topic_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,'auto_increment'=>TRUE),
            'name' => array('type'=>'VARCHAR','constraint'=>'100',),
            'description' => array('type'=>'TEXT','null'=>TRUE,),
            'topic_url' => array('type'=>'VARCHAR','constraint'=>'100',),
        );

        $this->dbforge->add_field($topic_field);
        $this->dbforge->add_key('topic_id', TRUE);
        $this->dbforge->create_table('topic');
        
        //creating sample topic
        unset($data);        
        $data['name'] = 'Matematika Diskrit';
        $data['description'] = 'Matematika diskrit adalah...';
        $data['topic_url'] = 'matematika-diskrit';
        $this->topic->insert($data);

        unset($data);        
        $data['name'] = 'Farmakologi Klinis';
        $data['description'] = 'Farmakologi klinis adalah...';
        $data['topic_url'] = 'farmakologi-klinis';
        $this->topic->insert($data);
    }

    public function install_groups()
    {
        $this->dbforge->drop_table('group');
        $this->dbforge->drop_table('group_alias');
        
        $group_field = array(
            'group_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,'auto_increment'=>TRUE),
            'name' => array('type'=>'VARCHAR','constraint'=>'100',),
            'description' => array('type'=>'TEXT','null'=>TRUE,),
        );

        $group_alias_field = array(
            'alias_name' => array('type'=>'VARCHAR','constraint'=>'100',),
            'group_id' => array('type'=>'INT','constraint'=>5,'unsigned'=>TRUE,),
        );
        
        $this->dbforge->add_field($group_field);
        $this->dbforge->add_key('group_id', TRUE);
        $this->dbforge->create_table('group');

        $this->dbforge->add_field($group_alias_field);
        $this->dbforge->add_key('alias_name', TRUE);
        $this->dbforge->create_table('group_alias');
        
        //creating sample group
        unset($data);        
        $data['name'] = 'Farmasi 2003';
        $data['description'] = 'Ini group Farmasi 2003 OK!';
        $this->group->insert($data);

        unset($data);        
        $data['name'] = 'Nurul Fikri-es';
        $data['description'] = 'Tempat ngumpul anak-anak NF euy!';
        $this->group->insert($data); 
        
        //creating group alias
        unset($data);        
        $data['alias_name'] = 'farmasi.2003';
        $data['group_id'] = 1;
        $this->group_alias->insert($data);
        
        unset($data);        
        $data['alias_name'] = 'nurul.fikri';
        $data['group_id'] = 2;
        $this->group_alias->insert($data);
    }
    
}