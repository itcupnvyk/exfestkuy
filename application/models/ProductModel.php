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

    public function findAll() {
        return $this->db->get('products')->row_array();
    }
}