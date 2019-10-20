<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

	public function index() {
        $data = array(
            'title'     => 'Login'
        );

        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }
    
    public function login() {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $this->UserModel->authenticate($email, $password);
    }

    public function registration() {
        $data = array(
            'title'     => 'Registration'
        );

        $this->load->view('templates/header', $data);
        $this->load->view('auth/registration');
        $this->load->view('templates/footer');
    }

    public function createUser() {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        $name       = $this->input->post('nama');

        $user = array(
            'email'     => $email,
            'password'  => $password,
            'name'      => $name
        );

        $this->UserModel->create($user);
        redirect('auth');
    }

    public function forgot_password() {
        // forgot password
    }
}
