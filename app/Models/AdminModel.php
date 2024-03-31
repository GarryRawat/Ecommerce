<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin'; // Change 'admins' to your actual table name
    protected $primaryKey = 'id'; // Change 'id' to your actual primary key
    protected $allowedFields = ['email', 'password']; // Change as per your database schema
}
