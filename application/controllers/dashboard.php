<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class dashboard extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $current = $this->checkUser();
        if ($current == false) {
            redirect("/login/index");
        }
    }

    public function index() {

        $data = array();
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "index";

        $this->layout('dashboard', $format, $eliments_c, $eliments_l, $eliments_r, $data);

        //print_r($this->decrypt($this->session->userdata('email')));
    }

}
