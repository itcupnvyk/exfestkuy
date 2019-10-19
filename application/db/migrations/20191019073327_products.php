<?php
class Migration_products extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'description' => array(
                'type' => 'TEXT'
            ),
            'quantity' => array(
                'type' => 'INT'
            ),
            'price' => array(
                'type' => 'DECIMAL',
            ),
            'image_url' => array(
                'type' => 'TEXT'
            ),
            'merchan_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field('CONSTRAINT "fk_merchan_id" FOREIGN KEY (merchan_id) REFERENCES merchans(id)');
        $this->dbforge->create_table('products');
    }

    public function down() {
        $this->dbforge->drop_table('products');
    }
}