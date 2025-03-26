<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BabSeeder extends Seeder
{
    public function run()
    {
        {
            $data = [
                'nomor_bab' => 1,
                'nama_bab' => 'pendahuluan',
                'sub_cpmk' => 'ringkasan sebelum memulai ke pembahasan',
                'id_mata_kuliah' => 1
            ];
    
            $this->db->table("bab")->insert($data);
        }
    }
}
