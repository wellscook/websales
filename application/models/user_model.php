<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function createUser($data) {
        $this->db->insert('user', $data);
    }

    public function createUserType($data) {
        $this->db->insert("usertype", $data);
    }

    public function getUserByEmail($email) {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("email", $email);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data;
    }

    public function getUserLogin($user) {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("username", $user['username']);
        $this->db->where("password", $user['password']);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data;
    }

    public function getAll() {
        $this->db->select("*");
        $this->db->from("user");
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function getUserTypes() {
        $this->db->select("*");
        $this->db->from("usertype");
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    public function deleteUser($id) {
        $this->db->delete('user', array('ID' => $id));
    }

    public function getUserByID($id) {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("ID", $id);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data;
    }

    public function updateUserById($data, $id) {

        $this->db->where('ID', $id);
        $this->db->update("user", $data);
    }

}
