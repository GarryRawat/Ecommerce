<?php

namespace App\Controllers;
use App\Models\ProductModel;


class HomeController extends BaseController
{

    public function __construct()
    {
        $this->productModel=new ProductModel();
    }


    public function index(): string
    {
        return view('welcome_message');
    }

    public function home()
    {
       
        $data['products']=$this->productModel->getproduct();

        // print_r($data);
        // die();

        return view('frontend/includes/header')
                .view('frontend/home',$data)
                .view('frontend/includes/footer');
    }

    public function shop()
    {
        return view('frontend/shop');
    }


    
}
