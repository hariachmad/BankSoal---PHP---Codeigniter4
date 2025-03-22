<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUserNilai extends Migration
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
            'id_ujian' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'id_users' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'nilai' => [
                'type' => 'INT',
                'constraint' => 3,
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
        $this->forge->addForeignKey('id_ujian', 'ujian','id','CASCADE','CASCADE');
        $this->forge->createTable('user_nilai');
    }

    public function down()
    {
        $this->forge->dropTable('user_nilai');
    }
}
