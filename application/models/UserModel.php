<?php

class UserModel extends CI_Model {

    public function create($user) {
        $now = date('Y-m-d H:i:s');
        $user['created_at'] = $now;
        $user['updated_at'] = $now;
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);

        if(!$this->db->insert('users', $user)) {
            return $this->db->error();
        }
        return null;
    }

    public function update($user) {
        $now = date('Y-m-d H:i:s');
        $user['updated_at'] = $now;

        if(!$this->db->update('users', $user, array('id' => $user['id']))) {
            return $this->db->error();
        }
        return null;
    }

    public function delete($id) {
        if(!$this->db->delete('users', array('id' => $id))) {
            return $this->db->error();
        }
        return null;
    }

    public function findByID($id) {
        return $this->db->get_where('users', array('id' => $id))->row_array();
    }

    public function findByEmail($email) {
        return $this->db->get_where('users', array('email' => $email))->row_array();
    }

    public function authenticate($email, $password) {
        $user = $this->findByEmail($email);
        if(!$user) {
            return false;
        }
        return password_verify($password, $user['password']);
    }

    public function findStandPosition($id) {
        $this->db->select('name, map_url')
                 ->from('users')
                 ->where('id', $id);
                 
        return $this->db->get()->row_array();
    }
}