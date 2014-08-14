<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class customer extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $current = $this->checkUser();
        if ($current == false) {
            redirect("/login/index");
        }
        $this->load->model("user_model");
    }

    public function index() {

    }

    public function listClients() {
        $data = array();
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "list";

        $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
    }

    public function createClient() {
        $data = array();
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "create";

        $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
    }

    public function editClient() {
        $data = array();
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "edit";

        $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
    }

    public function deleteClient() {

    }

}
