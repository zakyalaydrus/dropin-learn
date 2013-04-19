<?php

class User_profile extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'users_profile';
        $this->primary_key_id = 'user_id';        
    }    
    
}