<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request){
        $myData = $request->only('username', 'password');
        if (Auth::attempt($myData)) {
            return to_route('dashboard');
        }else{
            return to_route('login');
        }
    }
    public function register(StoreUserRequest $request)
    {
        $name=$request->name;
        $username=$request->username;
        $password=$request->password;
        $confirmPassword=$request->confirmPassword;
        if($password == $confirmPassword){
            $user=User::create([
                'name'=>$name,
                'username'=>$username,
                'password'=>Hash::make($password),
            ]);
            if($user){
                return to_route('dashboard');
            }else{
                return to_route('register.show');
            }
        }else{
            return to_route('register.show');
        }
    }
}
