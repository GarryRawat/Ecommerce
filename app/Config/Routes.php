<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'HomeController::home');
$routes->get('/shop', 'shop::shop');
$routes->get('/productdetails', 'shop::productdetails');
$routes->get('/cart', 'cart::cart');
$routes->get('/checkout', 'cart::checkout');
$routes->get('/login', 'AuthController::userLogin');
$routes->post('/user-auth', 'AuthController::userAuth');


// admin routes
$routes->get('/admin', 'AuthController::adminLogin');
$routes->get('/admin-dashboard', 'AdminController::dashboard');
$routes->post('/admin-auth', 'AuthController::adminAuth');
$routes->get('/list', 'productController::productlist');
$routes->post('/addproduct', 'AdminController::addproduct');
$routes->get('/addProductPage', 'AdminController::addProductPage');
