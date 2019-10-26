<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stand extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("UserModel");
        $this->load->model('ProductModel');
        $this->load->library('pagination');
    }

    public function index() {
        $config['base_url'] = site_url('stand/index');
        $config['total_rows'] = $this->UserModel->count();
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
        $data['users'] = $this->UserModel->findAll($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = 'Stand';

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

    public function search() {
        $query = $this->input->post('search-input');
        $data['users'] = $this->UserModel->search($query);     
        $data['pagination'] = null;

		$this->load->view('templates/header', $data);
        $this->load->view('stand/stand', $data);
        $this->load->view('templates/footer_navbar');
        $this->load->view('templates/footer');
    }
}