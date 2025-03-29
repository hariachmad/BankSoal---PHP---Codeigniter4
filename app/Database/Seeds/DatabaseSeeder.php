<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('UjianSeeder');
        $this->call('KodeUjianSeeder');
        $this->call('KodeUserSeeder');
        $this->call('CountdownSeeder');
        $this->call('UserNilaiSeeder');
        $this->call('BabSeeder');
        $this->call('BabUntukUjianSeeder');
        $this->call('SoalSeeder');
        $this->call('UserSoalUjianSeeder');
        $this->call('AuthSeeder');
        $this->call('MataKuliahSeeder');
    }
}
