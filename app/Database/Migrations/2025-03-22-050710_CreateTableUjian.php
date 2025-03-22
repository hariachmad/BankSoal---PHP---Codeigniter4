<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUjian extends Migration
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
            'deskripsi_ujian' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'waktu_tutup_ujian' => [
                'type'=> 'TIME',
            ],
            'waktu_buka_ujian' => [
                'type'=> 'TIME',
            ],
            'durasi_ujian'=> [
                'type'=> 'INT',
            ],
            'nilai_minimum_kelulusan'=> [
                'type'=> 'INT',
            ],
            'ruang_ujian'=>[
                'type'=> 'VARCHAR',
                'constraint' => 100,
            ],
            'jumlah_soal'=> [
                'type'=> 'INT',
            ],
            'nama_ujian'=>[
                'type'=> 'VARCHAR',
                'constraint' => 100,
            ],
            'random'=>[
                'type'=> 'BOOLEAN',
            ],
            'tunjukan_nilai'=>[
                'type'=> 'BOOLEAN',
            ]


        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ujian');
    }

    public function down()
    {
        $this->forge->dropTable('ujian');
    }
}
