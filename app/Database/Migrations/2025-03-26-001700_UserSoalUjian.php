<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserSoalUjian extends Migration
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
            'id_soal' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'id_kode_users' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'jawaban_dipilih' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updateds_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_soal', 'soal', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_kode_users', 'kode_users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('user_soal_ujian');
    }

    public function down()
    {
        $this->forge->dropTable('user_soal_ujian');
    }
}
