<?php
defined('BASEPATH') or exit('not allow');

class Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('page/index');
    }
}
