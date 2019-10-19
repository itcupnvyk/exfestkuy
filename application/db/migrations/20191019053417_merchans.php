<?php
class Migration_merchans extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'avatar_url' => array(
                'type' => 'TEXT',
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => TRUE
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'map_url' => array(
                'type' => 'TEXT'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('merchans');
    }

    public function down() {
        $this->dbforge->drop_table('merchans');
    }
}