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
            'nama_ujian' => [
                'type' => 'VARCHAR',
                'constraint' => 100
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
            'id_mata_kuliah'=>[
                'type'=> 'INT',
            ],
            'random'=>[
                'type'=> 'BOOLEAN',
            ],
            'tunjukkan_nilai'=>[
                'type'=> 'BOOLEAN',
            ]


        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ujian');
        $this->forge->addForeignKey('id_mata_kuliah', 'mata_kuliah', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropTable('ujian');
    }
}
