<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products'; // Change 'admins' to your actual table name
    protected $primaryKey = 'id'; // Change 'id' to your actual primary key
    protected $allowedFields = ['product_category','product_name','product_price', 'product_description','image','created_at']; // Change as per your database schema


    // public function checkUserExists($email) {
    //     return $this->db->table($this->table)->where('email', $email)->get()->getRowArray();
    // }
    public function getproduct()
    {
        return $this->db->table($this->table)->get()->getResultArray();
       

    }

  
    
}
