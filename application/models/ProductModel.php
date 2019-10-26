<?php

class ProductModel extends CI_Model {

    public function create($product) {
        $now = date('Y-m-d H:i:s');
        $user['created_at'] = $now;
        $user['updated_at'] = $now;

        if(!$this->db->insert('products', $product)) {
            return $this->db->error();
        }
        return null;
    }

    public function update($product) {
        $now = date('Y-m-d H:i:s');
        $user['updated_at'] = $now;

        if(!$this->db->update('products', $product, array('id' => $product['id']))) {
            return $this->db->error();
        }
        return null;
    }

    public function delete($id) {
        if(!$this->db->delete('products', array('id' => $id))) {
            return $this->db->error();
        }
        return null;
    }

    public function findByID($id) {
        return $this->db->get_where('products', array('id' => $id))->row_array();
    }

    public function findByUserID($user_id) {
        $this->db->select('products.id as product_id, 
                            products.name as product_name, 
                            price')
                 ->from('products')
                 ->join('users', 'users.id = products.user_id')
                 ->where(array('users.id' => $user_id));
        return $this->db->get()->result_array();
    }

    public function findAll() {
        $this->db->select('products.id as product_id, 
                            products.name as product_name, 
                            users.name as user_name, 
                            users.id as user_id,
                            price')
                 ->from('products')
                 ->join('users', 'users.id = products.user_id');
                 
        return $this->db->get()->result_array();
    }
}