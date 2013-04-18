<?php

class MY_Model extends CI_Model {

    public $table;
    public $id_name;

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->id_name = 'id';
    }

    public function find() {
        return $this->db->get($this->table)->result();
    }

    public function find_by_id($id) {
        return $this->db->where($this->id_name, $id)->get($this->table)->row_array();
    }

    public function insert($data) {
        $this->db->set($data);
        $this->db->insert($this->table);
        return $this->db->insert_id();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete();
        return $this->db->affected_rows();
    }

}