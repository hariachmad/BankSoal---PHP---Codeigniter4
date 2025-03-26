<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KodeUjianSeeder extends Seeder
{
    public function run()
    {
        $data = [  
            "kode_ujian"=> "1A",
            "id_ujian"=>1,
        ];

        $this->db->table("kode_ujian")->insert($data);
    }
}
