<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solucoes extends CI_Controller {


    public function index()
    {
        
        $this->load->view('css');
        $this->load->view('menu');
        $this->load->view('solucoes');
    }

}
