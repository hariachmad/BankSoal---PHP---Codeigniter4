<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'hariachmad',
            'email' => 'hari08achmad@gmail.com',
            'password' => password_hash('Oper@ti0n', PASSWORD_DEFAULT),
            'fullname' => 'Hari Achmad',
        ];

        $this->db->table("auth")->insert($data);
    }
}
