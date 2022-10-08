<?php
defined('BASEPATH') or exit('not allow');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login/login');
    }
}
