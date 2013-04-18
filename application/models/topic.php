<?php

class Topic extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'topic';
        $this->primary_key_id = 'topic_id';        
    }    
    
}