<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBabUntukUjian extends Migration
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
            'id_bab' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
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
            'updated_at'=>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_bab', 'bab','id','CASCADE','CASCADE','FK_id_ujian_1');
        $this->forge->addForeignKey('id_ujian', 'ujian','id','CASCADE','CASCADE','FK_id_ujian_2');
        $this->forge->createTable('bab_untuk_ujian');
    }

    public function down()
    {
        $this->forge->dropTable('bab_untuk_ujian');
    }
}
