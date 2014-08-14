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

    }

}
