<?php

namespace App\Http\Controllers;

class AdminController extends Controller {
    
    public function index() {
        return view('admin');
    }

    public function indexNewProduct() {
        return view('addProduct');        
    }
}
