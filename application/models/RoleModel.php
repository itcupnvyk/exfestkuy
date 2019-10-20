<?php

class RoleModel extends CI_Model {

    public function create($role) {
        if(!$this->db->insert('roles', $role)) {
            return $this->db->error();
        }
        return null;
    }

    public function update($role) {
        if(!$this->db->update('roles', $user, array('id' => $user['id']))) {
            return $this->db->error();
        }
        return null;
    }

    public function delete($id) {
        if(!$this->db->delete('roles', array('id' => $id))) {
            return $this->db->error();
        }
        return null;
    }

    public function findByID($slug) {
        return $this->db->get_where('roles', array('id' => $id))->row_array();
    }

    public function findBySlug($slug) {
        return $this->db->get_where('roles', array('slug' => $slug))->row_array();
    }
}
