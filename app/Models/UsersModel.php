<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = false;
    protected $allowedFields = ['email', 'username', 'fullname'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
