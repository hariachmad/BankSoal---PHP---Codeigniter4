<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SoalSeeder extends Seeder
{
    public function run()
    {
        {
            $data = [
                'soal' => "Apakah huruf A adalah huruf kapital?",
                'id_bab' => 1,
                'jawaban_a' => 'benar',
                'jawaban_b' => 'salah',
                'jawaban_c' => 'benar dan salah',
                'jawaban_d' => 'semua salah',
                'jawaban_benar' => 'jawaban_a',
            ];
    
            $this->db->table("soal")->insert($data);
        }
    }
}
