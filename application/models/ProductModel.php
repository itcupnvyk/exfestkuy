<?php

class ProductModel extends CI_Model {

    public function create($user) {
        $now = date('Y-m-d H:i:s');
        $user['created_at'] = $now;
        $user['updated_at'] = $now;

        if(!$this->db->insert('products', $user)) {
            return $this->db->error();
        }
        return null;
    }

    public function update($user) {
        $now = date('Y-m-d H:i:s');
        $user['updated_at'] = $now;

        if(!$this->db->update('products', $user, array('id' => $user['id']))) {
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

    public function findByEmail($email) {
        return $this->db->get_where('products', array('email' => $email))->row_array();
    }

    public function authenticate($email, $password) {
        $user = $this->findByEmail($email);
        if(!$user) {
            return false;
        }
        return password_verify($password, $user['password']);
    }
}