<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KodeUserSeeder extends Seeder
{
    public function run()
    {
        $data = [  
            "kode_ujian"=> "1A",
            "id_users"=>1,
        ];

        $this->db->table("kode_users")->insert($data);
    }
}
