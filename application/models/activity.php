<?php

class Activity extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'activity';
        $this->primary_key_id = 'user_id';        
    }    
    
}