<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function index()
    {

        $this->load->view('css');
        $this->load->view('menu');
        $this->load->view('login');
    }
    public function cadastro()
    {

        $this->load->view('css');
        $this->load->view('menu');
        $this->load->view('cadastro');
    }

}
