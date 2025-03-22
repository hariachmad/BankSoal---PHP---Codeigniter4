<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableMataKuliah extends Migration
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
            'nama_mata_kuliah' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'kode_mata_kuliah' => [
                'type'=> 'VARCHAR',
                'constraint'=> 100
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mata_kuliah');
    }

    public function down()
    {
        $this->forge->dropTable('mata_kuliah');
    }
}
