<?php if (!defined('BASEPATH'))exit('No direct script access allowed');


class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }


    public function index() {

    }
}