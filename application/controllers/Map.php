<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'title'     => 'Peta Stand'
        );

        $this->load->view('templates/header', $data);
        $this->load->view('map/map');
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }
}