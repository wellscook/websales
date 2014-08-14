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

}
