<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_mata_kuliah' => 'Logika Algoritma',
            'kode_mata_kuliah' => 'AL1'
        ];

        $this->db->table("mata_kuliah")->insert($data);
    }
}
