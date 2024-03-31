<?php

namespace App\Controllers;
use App\Models\ProductModel;

class AdminController extends BaseController
{
   
    public function __construct()
    {
        $this->productModel= new ProductModel();
    }

    public function dashboard()
    {

        
  
        return view('admin/includes/header')
                .view('admin/index')
                .view('admin/includes/footer');
    }

public function addProductPage(){
    return view('admin/includes/header')
    .view('admin/products/addproduct')
    .view('admin/includes/footer');
}

    public function addproduct(){

        $product_category=$this->request->getVar('product_category');
        $product_name=$this->request->getVar('product_name');
        $product_price=$this->request->getVar('product_price');
        $product_description=$this->request->getVar('product_description');
        $image=$this->request->getfile('image');

 
        if($image->isValid() && !$image->hasMoved())
        {
             $newName=$image->getRandomname();
             $image->move(APPPATH . '../uploads', $newName);
 
             $data=[
               'product_category'=>$product_category,
               'product_name'=>$product_name,
               'product_price'=>$product_price,
               'product_description'=>$product_description,
               'image'=>$newName
             ];
            //  echo "<pre>";
            //  print_r($data);
            //  echo "</pre>";
            //  die();

            if($this->productModel->insert($data)){
             
            //  session()->setFlashdata('message','data insert successfully');
            //  return redirect('list');
            $response = array("status" => "success", "message" => "Data inserted successfully");
            }
            else{
                $response = array("status" => "error", "message" => "Product not added");
                // session()->setFlashdata('message','product not add ');
            }
           
        }
        else{
            $response = array("status" => "error", "message" => "image not uploaded");
        }
        echo json_encode($response);

      
    }

    




    

  
}