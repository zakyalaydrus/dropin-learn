<?php

class User extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'user';
        $this->primary_key_id = 'user_id';        
    }    
    
}