<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend/home');
    }
    public function product()
    {
        return view('frontend/product');
    }
    public function productDetails()
    {
        return view('frontend/product-details');
    }

    public function checkout(){
        return view('frontend/checkout');
    }

    public function cart(){
        return view('frontend/cart');
    }

    public function login(){
        return view('frontend/login');
    }
}
