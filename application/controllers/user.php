<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class user extends MY_Controller {

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

    public function createUser() {
        $data = array();
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "create";

        $data['user_types'] = $this->user_model->getUserTypes();

        if ($this->is_get()) {

            $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }
        if ($this->is_post()) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
            $this->form_validation->set_message('is_unique', 'The %s is already taken, please uses another username');
            if ($this->form_validation->run() == FALSE) {
                $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
            } else {
                $data = array(
                    "name" => $this->encrypt($this->input->post("name")),
                    "email" => $this->encrypt($this->input->post("email")),
                    "phone" => $this->encrypt($this->input->post("phone")),
                    "mobile" => $this->encrypt($this->input->post("mobile")),
                    "password" => sha1($this->input->post("password")),
                    "username" => $this->input->post("username"),
                    "type" => $this->encrypt($this->input->post("type")),
                );
                $data['createdby'] = $this->session->userdata('id');
                $this->user_model->createUser($data);
                redirect("user/listusers");
            }
        }
    }

    public function createUserType() {
        $data = array();

        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "createtype";

        if ($this->is_get()) {
            $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }

        if ($this->is_post()) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
            } else {
                /* @var $_POST type */
                $data = $_POST;
                $data['createdby'] = $this->session->userdata('id');
                $this->user_model->createUserType($data);
                redirect("user/listUserTypes");
            }
        }
    }

    public function listUserTypes() {
        $data = array();
        $data['usertypes'] = $this->user_model->getUserTypes();
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "usertypeslist";
        if ($this->is_get()) {
            $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }
        if ($this->is_post()) {
            redirect("/user/listUsers");
        }
    }

    public function updateUser($id) {

        $data = array();
        $data['user'] = $this->user_model->getUserByID($id);
        $format = "12"; //format = 12 or 6
        $eliments_l = "";
        $eliments_r = "";
        $eliments_c = "edituser";

        if ($this->is_get()) {

            $data['user']['name'] = $this->decrypt($data['user']['name']);
            $data['user']['email'] = $this->decrypt($data['user']['email']);
            $data['user']['phone'] = $this->decrypt($data['user']['phone']);
            $data['user']['mobile'] = $this->decrypt($data['user']['mobile']);

            $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }
        if ($this->is_post()) {

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
            } else {
                /* @var $_POST type */
                $form = $_POST;
                $password = $this->input->post("password");
                //if password is not updated or is null then remove the value from the update array.
                if ($password == null or "") {
                    unset($form['password']);
                } else {
                    $form['password'] = sha1($form['password']);
                }

                unset($form['type']);

                $form['name'] = $this->encrypt($form['name']);
                $form['email'] = $this->encrypt($form['email']);
                $form['mobile'] = $this->encrypt($form['mobile']);
                $form['phone'] = $this->encrypt($form['phone']);
                $this->user_model->updateUserById($form, $id);
                redirect("/user/listUsers");
            }
        }
    }

    public function deleteUser($id) {
        if ($this->is_get()) {
            $this->user_model->deleteUser($id);
            redirect("/user/listUsers");
        }
    }

    public function listUsers() {
        if ($this->is_get()) {
            $data = array();
            $data['users'] = $this->user_model->getAll();
            $i = 0;
            foreach ($data['users'] as $user) {
                $data['users'][$i]['email'] = $this->decrypt($user['email']);
                $data['users'][$i]['name'] = $this->decrypt($user['name']);
                $data['users'][$i]['phone'] = $this->decrypt($user['phone']);
                $data['users'][$i]['mobile'] = $this->decrypt($user['mobile']);
                $data['users'][$i]['type'] = $this->decrypt($user['type']);
                $i++;
            }
            $format = "12"; //format = 12 or 6
            $eliments_l = "";
            $eliments_r = "";
            $eliments_c = "list";
            $this->layout('user', $format, $eliments_c, $eliments_l, $eliments_r, $data);
        }
    }

}
