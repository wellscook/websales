<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller {

    public $data = array();
    protected $layout;
    protected $api_url;

    public function __construct() {
        parent::__construct();
        $this->layout = $this->config->item("layout");
        $this->assets = $this->config->item("assets");
    }

    protected function layout($view = '', $format, $eliments_c, $eliments_l, $eliments_r, $data = array()) {

        $data['view'] = $view;
        $data['format'] = $format;
        $data["assets"] = $this->assets;

        if ($eliments_c != null) {
            $data['eliments_c'] = $eliments_c;
        }
        if ($eliments_l != null) {
            $data['eliments_l'] = $eliments_l;
        }
        if ($eliments_r != null) {
            $data['eliments_r'] = $eliments_r;
        }

        $this->load->view($this->layout . "/common/head", $data);
        $this->load->view($this->layout . "/common/template", $data);
        $this->load->view($this->layout . "/common/footer", $data);
        $this->output->enable_profiler(TRUE);
    }

    protected function is_post() {
        //check to see if the request is a post
        return $this->input->server('REQUEST_METHOD') == 'POST';
    }

    protected function is_get() {
        //check to see if the page is opening as a get, ie no data is being posted to the site.
        return $this->input->server('REQUEST_METHOD') == 'GET';
    }

    public function set_user_loggedin($response) {
        $data = array(
            'is_logged_in' => 'yes',
            'username' => $response['username'],
            'email' => $response['email'],
            'type' => $response['type'],
            'id' => $response['ID'],
        );
        $this->session->set_userdata($data);
    }

    protected function encrypt($string) {
        return $this->encrypt->encode($string);
    }

    protected function decrypt($string) {
        return $this->encrypt->decode($string);
    }

    protected function checkUser() {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if ($is_logged_in == "yes") {
            return true;
        } else {
            return false;
        }
    }

    public function checkID($id) {
        if (is_int($id)) {
            return true;
        } else {
            return false;
        }
    }

}
