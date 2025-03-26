<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableSoal extends Migration
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
            'id_bab'=> [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'jawaban_benar' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'soal' => [
                'type'=> 'TEXT',
            ],
            'jawaban_a'=> [
                'type'=> 'TEXT',
            ],
            'jawaban_b'=> [
                'type'=> 'TEXT',
            ],
            'jawaban_c'=> [
                'type'=> 'TEXT',
            ],
            'jawaban_d'=> [
                'type'=> 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_bab', 'bab','id','CASCADE','CASCADE');
        $this->forge->createTable('soal');
    }

    public function down()
    {
        $this->forge->dropTable('soal');
    }
}
