<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\UserModel;

class AuthController extends BaseController
{
   

    public function __construct()
    {
       
        $this->adminModel= new AdminModel();
        $this->userModel= new UserModel();
              
    }
    

    public function adminLogin()
    {
       

                return view('admin/Login');
    }

    public function userLogin()
    {
       
        return view('frontend/includes/header')
                .view('frontend/Login')
                .view('frontend/includes/footer');
    }


    public function adminAuth(){
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
    
        $Admin = $this->adminModel->where('email', $email)->first();
    
        if ($Admin && password_verify($password, $Admin['password'])){
            session()->setFlashdata('message', 'Login successful'); // Set flash message
            return redirect()->to('/admin-dashboard');
        } else {
            session()->setFlashdata('message', 'Invalid username or password'); // Set flash message
            return redirect()->to('/admin')->withInput();
        }
    }





    public function userAuth(){
        $name=$this->request->getVar('name');
        $email=$this->request->getVar('email');
        $phone=$this->request->getVar('phone');
        $password=$this->request->getVar('password');

        

        $checkUserExists = $this->userModel->checkUserExists($email);
        if($checkUserExists){
            session()->setFlashdata('message', 'email already exits');
            return redirect()->to('/login'); 
        }

      $data=[
        'name'=>$name,
        'email'=>$email,
        'phone'=>$phone,
        'password'=>password_hash($password,PASSWORD_DEFAULT)
      ];

      if ($this->userModel->insert($data)) {
        session()->setFlashdata('message', 'Registration successful');
        return redirect()->to('/home');
    } else {
        session()->setFlashdata('message', 'Registration unsuccessful');
    }

    }








    
    
  
}