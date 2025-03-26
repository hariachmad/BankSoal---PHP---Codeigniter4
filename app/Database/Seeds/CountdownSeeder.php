<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CountdownSeeder extends Seeder
{
    public function run()
    {
        $data = [  
            "id_kode_users"=> 1,
            "remaining_duration"=>60,
        ];

        $this->db->table("countdown")->insert($data);
    }
}
