<?php
class Migration_rename_merchants_to_users extends CI_Migration {

    public function up() {
        $this->dbforge->rename_table('merchans', 'users');

        $fields = array(
            'merchan_id' => array(
                    'name' => 'user_id',
            ),
        );
        $this->dbforge->modify_column('products', $fields);
    }

    public function down() {
        $this->dbforge->rename_table('users', 'merchans');
        $fields = array(
            'user_id' => array(
                    'name' => 'merchan_id',
            ),
        );
        $this->dbforge->modify_column('merchans', $fields);
    }
}