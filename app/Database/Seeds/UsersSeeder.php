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
            "fullname"=>"Hari Achmad"
        ];

        $this->db->table("users")->insert($data);
    }

}
