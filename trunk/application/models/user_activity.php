<?php

class User_Activity extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'users_activity';
        $this->primary_key_id = 'user_id';        
    }    
    
}