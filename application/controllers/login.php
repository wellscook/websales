<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class login extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index() {

        if ($this->is_get()) {
            $this->load->view('/default/login/login');
        }
        if ($this->is_post()) {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('/default/login/login');
            } else {
                $data = array(
                    "username" => $this->input->post("username"),
                    "password" => sha1($this->input->post("password")),
                );

                $this->load->view('/default/login/login');

                $response = $this->user_model->getUserLogin($data);

                if (isset($response['username'])) {

                    $this->set_user_loggedin($response);

                    redirect("/dashboard/index");
                } else {
                    redirect("/login/incorrect");
                }
            }
        }
    }

    public function incorrect() {
        $this->load->view('/default/login/incorrect');
    }

    public function loginForm() {
        $data = array(
            "username" => $this->encrypt($this->input->post("username")),
            "password" => sha1($this->input->post("password")),
        );
        return $data;
    }

    public function recoverEmail() {

        $this->form_validation->set_rules('email', 'Email Address', 'required');

        if ($this->is_get()) {
            $this->load->view('/default/login/recover');
        } elseif ($this->is_post()) {

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('/default/login/recover');
            } else {

                $email = $this->user_model->getUserByEmail($this->recoverForm());

                if (isset($email['email'])) {

                } else {
                    redirect("/login/incorrect");
                }

                $this->load->view('/default/login/email_sent');
            }
        }
    }

    public function recoverForm() {
        $data = array(
            "email" => $this->encrypt($string),
        );
        return $data;
    }

    public function sendPassword($Email) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.decisivemarketing.co.uk',
            'smtp_port' => 465,
            'smtp_user' => 'responses@decisivemarketing.co.uk',
            'smtp_pass' => 'Responsepw123',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->from("Web Sales // Password Reset", "responses@decisivemarketing.co.uk");
        $this->email->to($email_to);
        $this->email->subject("Your password has been reset");
        $this->email->message($msg);
        $this->email->send();
    }

    public function createUser() {

        $data = array(
            "name" => $this->encrypt("Douglas Cook"),
            "email" => $this->encrypt("douglaswilliamcook123@gmail.com"),
            "phone" => $this->encrypt("07769585700"),
            "mobile" => $this->encrypt("07769585700"),
            "password" => sha1("405857"),
            "username" => "DougC",
            "type" => $this->encrypt("admin"),
        );

        $this->user_model->createUser($data);
    }

}
