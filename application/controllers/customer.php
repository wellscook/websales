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

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fistname', 'First Name', 'required');
        $this->form_validation->set_rules('surname', 'Surname', 'required');
        $this->form_validation->set_rules('emailaddress', 'Email Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('work', 'Work', 'required');
        $this->form_validation->set_rules('addressl1', 'Address Line 1', 'required');
        $this->form_validation->set_rules('addressl2', 'Address Line 2', 'required');
        $this->form_validation->set_rules('town', 'Town', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('postcode', 'Postcode', 'required');
        $this->form_validation->set_rules('budget', 'Budget', 'required');
        $this->form_validation->set_rules('deposit', 'Deposit', 'required');
        $this->form_validation->set_rules('enquirysource', 'Enquiry Source', 'required');
        $this->form_validation->set_rules('enquirytype', 'Enquiry Type', 'required');
        $this->form_validation->set_rules('enquiryproduct', 'Enquiry Product', 'required');

        if ($this->is_get()) {
            $this->layout('customer', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }
        if ($this->is_post()) {
            if ($this->form_validation->run() == FALSE) {
                $this->layout('customer', $format, $eliments_c, $eliments_l, $eliments_r, $data);
            } else {
                $form = $_POST;

                $data = array(
                    "title" => $this->encrypt($form['title']),
                    "firstname" => $this->encrypt($form['firstname']),
                    "surname" => $this->encrypt($form['surname']),
                    "emailaddress" => $this->encrypt($form['emailaddress']),
                    "phone" => $this->encrypt($form['phone']),
                    "mobile" => $this->encrypt($form['mobile']),
                    "work" => $this->encrypt($form['work']),
                    "addressl1" => $this->encrypt($form['addressl1']),
                    "addressl2" => $this->encrypt($form['addressl2']),
                    "town" => $this->encrypt($form['town']),
                    "city" => $this->encrypt($form['city']),
                    "postcode" => $this->encrypt($form['postcode']),
                    "password" => sha1($form['password']),
                    "budget" => $this->encrypt($form['budget']),
                    "deposit" => $this->encrypt($form['deposit']),
                    "assigneduser" => $this->session->userdata('id'),
                    "status" => "0",
                    "enquirysource" => $this->encrypt($form['enquirysource']),
                    "enquirytype" => $this->encrypt($form['enquirytype']),
                    "enquiryproduct" => $this->encrypt($form['enquiryproduct']),
                );

                $this->customer_model->createClient($data);

                redirect("/customer/listClients");
            }
        }
    }

    public function editClient($id) {
        $data = array();

        $form = $this->customer_model->getClientByID($id);

        $data['client'] = array(
            "title" => $this->decrypt($form['title']),
            "firstname" => $this->decrypt($form['firstname']),
            "surname" => $this->decrypt($form['surname']),
            "emailaddress" => $this->decrypt($form['emailaddress']),
            "phone" => $this->decrypt($form['phone']),
            "mobile" => $this->decrypt($form['mobile']),
            "work" => $this->decrypt($form['work']),
            "addressl1" => $this->decrypt($form['addressl1']),
            "addressl2" => $this->decrypt($form['addressl2']),
            "town" => $this->decrypt($form['town']),
            "city" => $this->decrypt($form['city']),
            "postcode" => $this->decrypt($form['postcode']),
            "password" => sha1($form['password']),
            "budget" => $this->decrypt($form['budget']),
            "deposit" => $this->decrypt($form['deposit']),
            "assigneduser" => $form['assigneduser'],
            "status" => $form['status'],
            "enquirysource" => $this->decrypt($form['enquirysource']),
            "enquirytype" => $this->decrypt($form['enquirytype']),
            "enquiryproduct" => $this->decrypt($form['enquiryproduct']),
        );

        $is_int = $this->checkID($id);
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
                $form = $_POST;

                $data = array(
                    "title" => $this->encrypt($form['title']),
                    "firstname" => $this->encrypt($form['firstname']),
                    "surname" => $this->encrypt($form['surname']),
                    "emailaddress" => $this->encrypt($form['emailaddress']),
                    "phone" => $this->encrypt($form['phone']),
                    "mobile" => $this->encrypt($form['mobile']),
                    "work" => $this->encrypt($form['work']),
                    "addressl1" => $this->encrypt($form['addressl1']),
                    "addressl2" => $this->encrypt($form['addressl2']),
                    "town" => $this->encrypt($form['town']),
                    "city" => $this->encrypt($form['city']),
                    "postcode" => $this->encrypt($form['postcode']),
                    "password" => sha1($form['password']),
                    "budget" => $this->encrypt($form['budget']),
                    "deposit" => $this->encrypt($form['deposit']),
                    "assigneduser" => $form['assigneduser'],
                    "status" => $form['status'],
                    "enquirysource" => $this->encrypt($form['enquirysource']),
                    "enquirytype" => $this->encrypt($form['enquirytype']),
                    "enquiryproduct" => $this->encrypt($form['enquiryproduct']),
                );

                $this->customer_model->updateClient($data, $id);

                redirect("/customer/listClients");
            }
        }
    }

    public function deleteClient() {

    }

}
