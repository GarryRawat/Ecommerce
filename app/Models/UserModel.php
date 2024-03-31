<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Change 'admins' to your actual table name
    protected $primaryKey = 'id'; // Change 'id' to your actual primary key
    protected $allowedFields = ['name','email','phone', 'password']; // Change as per your database schema


    public function checkUserExists($email) {
        return $this->db->table($this->table)->where('email', $email)->get()->getRowArray();
    }
    
}
