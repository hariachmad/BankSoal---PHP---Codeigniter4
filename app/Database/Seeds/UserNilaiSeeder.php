<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserNilaiSeeder extends Seeder
{
    public function run()
    { {
            $data = [
                "id_users" => 1,
                "id_ujian" => 1,
                "nilai" => 80
            ];

            $this->db->table("user_nilai")->insert($data);
        }
    }
}
