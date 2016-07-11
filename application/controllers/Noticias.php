<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {


    public function index()
    {
        
        $this->load->view('css');
        $this->load->view('menu');
        $this->load->view('noticias');
    }

}
