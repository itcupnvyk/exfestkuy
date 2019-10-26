<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('ProductModel');
        $this->load->library('session');
    }

    public function index() {
        if($this->session->userdata('role_id') == 1) {
            $data = array(
                'title'     => 'Dashboard',
                'users'     => $this->UserModel->findAllWithoutLimit()
            );

            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/dashboard', $data);
            $this->load->view('templates/footer_navbar');
            $this->load->view('templates/footer');
        } else {
            redirect('home');
        }
    }

    public function addStand() {
        $this->load->view('templates/header');
        $this->load->view('stand/stand_add');
        $this->load->view('templates/footer');
    }

    public function createStand() {
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
    }

    public function stand($id_stand) {
        $data = array(
            'title'     => 'Update Stand',
            'user'      => $this->UserModel->findByID($id_stand)
        );

        $this->load->view('templates/header', $data);
        $this->load->view('stand/stand_update', $data);
        $this->load->view('templates/footer');
    }

    public function updateStand($id_stand) {
        $name       = $this->input->post('name');
        $map_url    = $this->input->post('map');

        $user = array(
            'id'        => $id_stand,
            'name'      => $name,
            'map_url'   => $map_url . '.jpg'
        );
        
        $this->UserModel->update($user);
        redirect('dashboard');
    }

    public function products($user_id) {
        $data = array(
            'title'     => 'Update Produk',
            'user_id'   => $user_id,
            'products'  => $this->ProductModel->findByUserID($user_id),
            'user'      => $this->UserModel->findByID($user_id)
        );

        $this->load->view('templates/header', $data);
        $this->load->view('products/product_add', $data);
        $this->load->view('templates/footer');
    }

    public function updateProduct($product_id) {
        $name   = $this->input->post('name');
        $price  = $this->input->post('price');

        $product = array(
            'id'    => $product_id,
            'name'  => $name,
            'price' => $price
        );

        $this->ProductModel->update($product);
        redirect('dashboard/products/' . $product_id);
    }

    public function addProduct($user_id) {
        $name           = $this->input->post('name');
        $description    = " ";
        $quantity       = 1;
        $price          = $this->input->post('price');
        $image_url      = " ";
        $user_id        = $user_id;
        
        $products = array(
            'name'          => $name,
            'description'   => $description,
            'quantity'      => $quantity,
            'price'         => $price,
            'image_url'     => $image_url,
            'user_id'       => $user_id
        );

        $this->ProductModel->create($products);
        redirect('dashboard');
    }

    public function deleteProduct($product_id) {
        $this->ProductModel->delete($product_id);
        redirect('dashboard');
    }
}