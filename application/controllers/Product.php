<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
    }

    public function index() {
        $data = array(
            'title'     => 'Produk',
            'products'  => $this->ProductModel->findAll()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('products/products', $data);
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }

    public function product_detail($id_product) {
        $data = array(
            'title'         => 'Product detail',
            'id_product'    => $id_product
        );

        $this->load->view('templates/header', $data);
        $this->load->view('products/product_detail');
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }
}