<?php

class Install extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->dbforge();
    }

    public function index() {
        //first, make sure you have set up correct database connection
        //: username, password, and database name
        //also make sure that it is empty databases, otherwise it will broke
        //create tables

        echo '<h1>Installing Initial Dropin Database</h1>';

        //Creating user table
        $this->dbforge->drop_table('user');
        $fields = array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'display_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'default' => 'Dropin User',
            ),
            'email' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'birthday' => array(
                'type' => 'DATE',
                'null' => TRUE,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('user');
        echo '<p>Created user table...</p>';

        //creating sample user
    }

}