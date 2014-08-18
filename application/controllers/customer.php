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
        $this->load->model("customer_model");
    }

    public function index() {

    }

    public function listClients() {
        $data = array();
        $data['customers'] = $this->customer_model->getAllClients();
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "list";
        $this->layout('customer', $format, $eliments_c, $eliments_l, $eliments_r, $data);
    }

    public function createClient() {
        $data = array();

        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "create";

        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');

        if ($this->is_get()) {
            $this->layout('customer', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }
        if ($this->is_post()) {
            if ($this->form_validation->run() == FALSE) {
                $this->layout('customer', $format, $eliments_c, $eliments_l, $eliments_r, $data);
            } else {
                $data = $_POST;

                $this->customer_model->createClient($data);

                redirect("/customer/listClients");
            }
        }
    }

    public function editClient($id) {
        $data = array();

        $is_int = $this->checkID();
        if ($is_int == false) {
            redirect("/customer/listClients");
        }

        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "edit";

        if ($this->is_get()) {
            $this->layout('customer', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }
        if ($this->is_post()) {
            if ($this->form_validation->run() == FALSE) {
                $this->layout('customer', $format, $eliments_c, $eliments_l, $eliments_r, $data);
            } else {
                $data = $_POST;

                $this->customer_model->updateClient();
            }
        }
    }

    public function deleteClient() {

    }

}
