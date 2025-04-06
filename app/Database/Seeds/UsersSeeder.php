<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [  
            "email"=> "hari08achmad@gmail.com",
            "username"=>"hariachmad",
            "fullname"=>"Hari Achmad",
            "password_hash"=> password_hash('Oper@ti0n', PASSWORD_DEFAULT),
            "role"=>"Mahasiswa"
        ];

        $this->db->table("users")->insert($data);
    }

}
