<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (!session()->has('login')) {
            return to_route('login');
        }
        return view('admin.index');
    }
    public function login(){
        return view('login');
    }
    public function signin(){
        return view('signin');
    }
}
