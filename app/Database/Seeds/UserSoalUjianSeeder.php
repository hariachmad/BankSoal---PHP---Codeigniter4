<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSoalUjianSeeder extends Seeder
{
    public function run()
    {
        {
            $data = [
                'id_soal' => 1,
                'id_kode_users' => 1,
                'jawaban_dipilih'=> 'jawaban_a',
            ];
    
            $this->db->table("user_soal_ujian")->insert($data);
        }
    }
}
