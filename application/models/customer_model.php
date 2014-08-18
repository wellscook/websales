<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class customer_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function createClient() {
        $this->db->insert("customer", $data);
    }

    public function deleteClient() {

    }

    public function getAllClients() {
        $this->db->select("*");
        $this->db->from("customer");
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function getClientByID($id) {
        $this->db->select("*");
        $this->db->from("customer");
        $this->db->where("ID", $id);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data;
    }

}
