<?php

class User_Alias extends MY_Model {
    
    public function __construct() {
        parent::__construct();
        $this->table = 'users_alias';
        $this->primary_key_id = 'alias_name';        
    }
    
    public function find_alias_name($id)
    {
        $data = $this->db->where('user_id', $id)->get($this->table)->row_array();
        return $data['alias_name'];
    }
    
}