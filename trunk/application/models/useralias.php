<?php

class UserAlias extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'useralias';
        $this->primary_key_id = 'alias_name';        
    }    
    
}