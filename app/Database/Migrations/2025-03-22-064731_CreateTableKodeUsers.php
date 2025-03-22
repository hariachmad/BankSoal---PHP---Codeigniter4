<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableKodeUsers extends Migration
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
            'kode_ujian' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true,
            ],
            'id_users' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_at'=>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updateds_at'=>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_users', 'users','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('kode_ujian', 'kode_ujian','kode_ujian','CASCADE','CASCADE');
        $this->forge->createTable('kode_users');
    }

    public function down()
    {
        $this->forge->dropTable('kode_users');
    }
}
