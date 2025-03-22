<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableKodeUjian extends Migration
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
            'id_ujian' => [
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
        $this->forge->addForeignKey('id_ujian', 'ujian','id','CASCADE','CASCADE','FK_kode_ujian_1');
        $this->forge->createTable('kode_ujian');
    }

    public function down()
    {
        $this->forge->dropTable('kode_ujian');
    }
}
