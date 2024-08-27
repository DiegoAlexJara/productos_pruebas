<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showInicio(){
        $user = Auth::user();
        return view('login.inicio', compact('user'));
    }
}
