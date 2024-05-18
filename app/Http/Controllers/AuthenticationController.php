<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function registration()
    {
        return view("auth.Registration");
    }
    
    public function login()
    {
        return view("auth.login");
    }
}
