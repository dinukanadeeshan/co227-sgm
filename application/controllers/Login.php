<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-12-12
 * Time: 6:18 PM
 */
class Login extends CI_Controller
{


    public function index()
    {
        $this->load->view('pages/login');
    }
}