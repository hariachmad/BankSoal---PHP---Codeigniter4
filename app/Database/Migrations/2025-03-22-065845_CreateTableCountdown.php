<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableCountdown extends Migration
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
            'id_kode_users' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'remaining_duration' => [
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
        $this->forge->addForeignKey('id_kode_users', 'kode_users','id','CASCADE','CASCADE');
        $this->forge->createTable('countdown');
    }

    public function down()
    {
        $this->forge->dropTable('countdown');
    }
}
