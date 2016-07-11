<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function cliente()
    {

        $this->load->view('css');
        $this->load->view('menu_dashboard');
        $this->load->view('dashboard_cliente');
    }
    public function integrador()
    {

        $this->load->view('css');
        $this->load->view('menu_dashboard');
        $this->load->view('dashboard_integrador');
    }

}
