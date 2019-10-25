<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->model('UserModel');
        $this->load->library('pagination');
    }

    public function index() {
        $config['base_url'] = site_url('product/index');
        $config['total_rows'] = $this->ProductModel->count();
        $config['per_page'] = 5;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['products'] = $this->ProductModel->findAll($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = 'Produk';

        $this->load->view('templates/header', $data);
        $this->load->view('products/products', $data);
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }

    public function product_detail($id_user, $id_product) {
        $data = array(
            'title'         => 'Product detail',
            'id_product'    => $id_product,
            'product'       => $this->ProductModel->findById($id_product),
            'user'          => $this->UserModel->findStandPosition($id_user)
        );

        $this->load->view('templates/header', $data);
        $this->load->view('products/product_detail', $data);
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }
}