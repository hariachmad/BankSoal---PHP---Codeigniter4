<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BabUntukUjianSeeder extends Seeder
{
    public function run()
    {
        {
            $data = [
                'id_bab' => 1,
                'id_ujian' => 1,
            ];
    
            $this->db->table("bab_untuk_ujian")->insert($data);
        }
    }
}
