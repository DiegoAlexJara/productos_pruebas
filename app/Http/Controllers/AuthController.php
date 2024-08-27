<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('Inicio');
    }

    public function login(Request $request){
       
        $credenciales = $request->only('email', 'password');
        
        if (!Auth::attempt($credenciales)) {    
            return redirect()->route('home');
        }

        return redirect()->intended('dashboard');
    }
}
