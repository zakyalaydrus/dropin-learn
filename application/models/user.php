<?php

class User extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'user';
        $this->id_name = 'user_id';        
    }    
    
}