<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{


    public function index()
    {

        $this->load->view('template/header');


        $data = array(
            'active' => 'user'
        );
        $this->load->view('template/side_bar', $data);

        $this->load->view('pages/user');

        $this->load->view('template/footer');
    }
}
