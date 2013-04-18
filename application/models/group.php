<?php

class Group extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'group';
        $this->primary_key_id = 'group_id';        
    }    
    
}