<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UjianSeeder extends Seeder
{
    public function run()
    { {
            $data = [
                'nama_ujian' => 'ujian logika algoritma',
                'deskripsi_ujian' => 'Ujian Dilakukan Secara Online',
                'waktu_tutup_ujian' => '15:00:00',
                'waktu_buka_ujian' => '13:00:00',
                'durasi_ujian' => 120,
                'nilai_minimum_kelulusan' => 70,
                'ruang_ujian' => 'AB1',
                'jumlah_soal' => 100,
                'random' => 0,
                'tunjukkan_nilai' => 1,
                'id_mata_kuliah' => 1,
            ];

            $this->db->table("ujian")->insert($data);
        }
    }
}
