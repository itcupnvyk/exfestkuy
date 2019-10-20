<?php
class Migration_roles extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('roles');

        $data = array(
            array(
                    'name' => 'Admin',
                    'slug' => 'admin'
            ),
            array(
                    'name' => 'Merchant',
                    'slug' => 'merchant'
            )
        );
        $this->db->insert_batch('roles', $data);
    }

    public function down() {
        $this->dbforge->drop_table('roles');
    }
}