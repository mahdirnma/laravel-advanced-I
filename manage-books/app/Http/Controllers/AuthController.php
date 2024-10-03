<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request)
    {
        $myData = $request->only('email', 'password');
        if (Auth::attempt($myData)) {
            $user = Auth::user();
            return to_route('dashboard');
        }else{
            return back();
        }
    }

    public function register(StoreUserRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirm_password = $request->input('confirmPassword');
        if ($password == $confirm_password) {
            $user=User::create($request->validated());
            if ($user) {
                return to_route('dashboard');
            }else{
                return back();
            }
        }else{
            return back();
        }
    }
    public function logout(){
        Auth::logout();
        return to_route('login.show');
    }
}
