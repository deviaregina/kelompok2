<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
<<<<<<< HEAD
    protected $allowedFields = ['name', 'email', 'password'];
=======
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password', 'name'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
>>>>>>> 6eb8e969e6f907eda0a887bc62d007c6e0acbf87
}
