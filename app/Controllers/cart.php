<?php

namespace App\Controllers;

class cart extends BaseController
{
   

    public function cart()
    {
       
        return view('frontend/includes/header')
                .view('frontend/cart')
                .view('frontend/includes/footer');
    }

    public function checkout()
    {
        return view('frontend/includes/header')
        .view('frontend/checkout')
        .view('frontend/includes/footer');
    }

  
}
