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
    public function logout(Request $request){

        // Cerrar la sesión del usuario
        Auth::logout();

        // Invalidar la sesión actual
        $request->session()->invalidate();

        // Regenerar el token de la sesión
        $request->session()->regenerateToken();

        // Redirigir al usuario a la página de inicio u otra página
        return redirect()->route('login');

    }
}
