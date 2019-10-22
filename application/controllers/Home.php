<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __contruct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $data = array(
            'title'     => 'Exfeskuy'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}