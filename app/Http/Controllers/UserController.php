<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        
        return view("dashboard");
    }
    public function listProduct(Request $request)
    {
        return view("user.listProduct");
    }
    public function detailProduct(Request $request)
    {
        return view("user.detailProduct");
    }
    public function searchProduct(Request $request)
    {
        return view("user.searchProduct");
    }
    public function slider(Request $request)
    {
        return view("user.slider");
    }
}
