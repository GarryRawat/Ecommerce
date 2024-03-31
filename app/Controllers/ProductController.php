<?php

namespace App\Controllers;
use App\Models\ProductModel;


class ProductController extends BaseController
{
    public function __construct()
    {
       
        $this->productModel= new ProductModel();
      
              
    }

    public function productlist()
    {

        $data['products']=$this->productModel->getproduct();
    //    echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    //     die();
  
        return view('admin/includes/header')
                .view('admin/products/list',$data)
                .view('admin/includes/footer');

    }

    

   
   

    

  
}