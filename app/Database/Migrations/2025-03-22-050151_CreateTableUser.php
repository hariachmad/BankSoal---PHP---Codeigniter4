<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'password_hash' => [
                'type'=> 'VARCHAR',
                'constraint'=> 100
            ],
            'role' => [
                'type'=> 'VARCHAR',
                'constraint'=> 100
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');        
    }
}
