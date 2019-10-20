<?php
class Migration_add_role_id_to_users extends CI_Migration {

    public function up() {
        $field = array(
            'role_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE
            )
        );
        $this->dbforge->add_column('users', $field);
        $this->db->query('ALTER TABLE users ADD CONSTRAINT "fk_role_id" FOREIGN KEY(role_id) REFERENCES roles(id)');
    }

    public function down() {
        $this->dbforge->drop_column('users', 'role_id');
    }
}