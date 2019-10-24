<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stand extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("UserModel");
        $this->load->model('ProductModel');
    }

    public function index() {
        $data = array(
            'title'     => 'Stand',
            'users'     => $this->UserModel->findAll()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('stand/stand', $data);
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }

    public function detail($user_id) {
        $data = array(
            'title'     => 'Stand Detail',
            'user'      => $this->UserModel->findById($user_id),
            'products'  => $this->ProductModel->findByUserID($user_id)
        );

        $this->load->view('templates/header', $data);
        $this->load->view('stand/stand_detail', $data);
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }

    public function map($user_id) {
        $data = array(
            'title'     => 'Peta Map',
            'user'      => $this->UserModel->findByID($user_id),
            'position'  => $this->UserModel->findStandPosition($user_id),
            'products'  => $this->ProductModel->findByUserID($user_id)
        );

        $this->load->view('templates/header', $data);
        $this->load->view('stand/stand_map', $data);
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }
}