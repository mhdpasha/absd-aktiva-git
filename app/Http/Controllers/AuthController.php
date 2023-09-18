<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.index', [
            "title" => "Login",
        ]);
    }

    public function register()
    {
        
    }
}
