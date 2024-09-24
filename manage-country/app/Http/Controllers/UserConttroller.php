<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class UserConttroller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function index()
    {
        $countries = Country::where('is_active',1)->get()->count();
        $cities = City::where('is_active',1)->get()->count();
        return view('admin.dashboard',compact('countries','cities'));
    }
}
