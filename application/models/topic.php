<?php

class Topic extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'topics';
        $this->primary_key_id = 'topic_id';        
    }    
    
}