<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];
    protected $returnType = 'array';
    protected $useTimestamps = false; // Set to true if using created_at/updated_at

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
