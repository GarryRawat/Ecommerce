<?php

namespace App\Controllers;

class Shop extends BaseController
{


    public function shop()
    {
        return view('frontend/includes/header')
        .view('frontend/shop')
        .view('frontend/includes/footer');
    }

    public function productdetails()
    {
        return view('frontend/includes/header')
        .view('frontend/productdetails')
        .view('frontend/includes/footer');
    }
}


