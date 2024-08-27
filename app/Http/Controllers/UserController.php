<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
        $usuarios = User::all();
        return view('User.index', compact('usuarios'));
    }
    public function create(){
    }
}
