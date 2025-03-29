<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'auth';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['username', 'email', 'password', 'fullname', 'created_at', 'updated_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';


    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = ['hashPassword'];
    protected $afterInsert = [];
    protected $beforeUpdate = ['hashPassword'];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function registerUser(array $data)
    {        
        return $this->insert($data);
    }

    public function isEmailExists($email)
    {
        return $this->where('email', $email)->countAllResults() > 0;
    }
    
    public function isUsernameExists($username)
    {
        return $this->where('username', $username)->countAllResults() > 0;
    }

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function verifyPassword($username, $password)
    {
        $user = $this->where('username', $username)->first();

        if (!$user) {
            return false;
        }
        return password_verify($password, $user['password']);
    }

    public function getFullnameByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
