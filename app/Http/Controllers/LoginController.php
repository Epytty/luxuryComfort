<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    
    public function index() {
        return view('login');
    }

    public function authentication(Request $request) {
        $arr = $request->only((['email', 'password']));
        Auth::attempt($arr);
        return view('home');
    }
}
