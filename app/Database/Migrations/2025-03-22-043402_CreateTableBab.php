<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBab extends Migration
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
            'nama_bab' => [
                'type' => 'VARCHAR',    
                'constraint' => 100
            ],
            'nomor_bab' => [
                'type'=> 'INT',
                'constraint'=> 5
            ],
            'id_mata_kuliah' => [
                'type'=> 'INT',
                'constraint'=> 5
            ],
            'sub_cpmk' => [
                'type'=> 'VARCHAR',
                'constraint'=> 100
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bab');
    }

    public function down()
    {
        $this->forge->dropTable('bab');
    }
}
