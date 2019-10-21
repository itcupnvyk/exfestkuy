<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
    }

	public function index() {
        $data = array(
            'title'     => 'Login'
        );

        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }
    
    public function login() {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $this->UserModel->authenticate($email, $password);
        // redirect to dashboard
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
        $avatar_url = base_url('assets/img/avatar_default.svg');
        $name       = $this->input->post('name');
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        $map_url    = base_url('assets/img/Exfeskuy_Denah.jpg');
        $role_id    = 2;

        $user = array(
            'avatar_url'    => $avatar_url,
            'name'          => $name,
            'email'         => $email,
            'password'      => $password,
            'map_url'       => $map_url,
            'role_id'       => $role_id
        );

        $this->UserModel->create($user);
        redirect('auth');
    }

    public function forgotPassword() {
        $data = array(
            'title'     => 'Forgot Password'
        );

        $this->load->view('templates/header', $data);
        $this->load->view('auth/forgot_password');
        $this->load->view('templates/footer');
    }

    public function setPassword() {
        $data = array(
            'title'     => 'Set Password'
        );

        $email = $this->input->post('email');

        if($user['email'] = $this->UserModel->findByEmail($email)) {
            $user_data = $this->UserModel->findByEmail($email);
            // if email found next to input password
            $this->load->view('templates/header', $data);
            $this->load->view('auth/set_password', $user_data);
            $this->load->view('templates/footer');
        }
        else {
            // if email not found, redirect to forgot password
            $data['notif'] = '
                <label style="background-color: red;" class="px-3">Email not found!</label>
                <br>
            ';
            $this->session->set_flashdata($data);
            redirect('auth/forgotpassword');
        }
    }

    public function resetPassword($id) {
        // update password
        $password           = $this->input->post('password');
        $re_enter_password  = $this->input->post('re-enter-password');
        
        if ($password === $re_enter_password) {
            $user = array(
                'id'        => $id,
                'password'  => password_hash($password, PASSWORD_DEFAULT)
            );
            $this->UserModel->update($user);
            redirect('auth');
        }
    }
}
