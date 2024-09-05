<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request){
        $username=$request->input('username');
        $password=$request->input('password');
        $user=User::all()->where('username',$username)->where('password',$password)->first();
        if($user){
            session(['login'=>true]);
            return to_route('dashboard');
        }else{
            return to_route('login');
        }
    }
    public function signin(StoreUserRequest $request){
        $name=$request->input('name');
        $username=$request->input('username');
        $password=$request->input('password');
        $user=User::create([
            'name'=>$name,
            'username'=>$username,
            'password'=>$password
        ]);
        if($user){
            session(['login'=>true]);
            return to_route('dashboard');
        }else{
            return to_route('signin');
        }
    }
}
