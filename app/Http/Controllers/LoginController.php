<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    
    public function index() {
        return view('login');
    }

    public function authentication(Request $request) {
        $credentials = $request->only(['email', 'password']);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->roleId === 1) {
                return redirect()->route('admin.index');
            } elseif ($user->roleId === 2) {
                return redirect()->route('home.index');
            }
        }
    
        return back()->withErrors([
            'email' => 'Неверные учетные данные.',
        ]);
    }
}
