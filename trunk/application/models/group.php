<?php

class Group extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'groups';
        $this->primary_key_id = 'group_id';        
    }    
    
}