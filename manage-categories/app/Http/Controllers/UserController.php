<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){}

    public function login()
    {
        return view('auth.login');
    }

    public function unauthorized()
    {
        return view('admin.unauthorized');
    }
}
