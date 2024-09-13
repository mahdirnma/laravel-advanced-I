<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request)
    {
        $username=$request->input('username');
        $password=$request->input('password');
        $user=User::where('username',$username)->where('password',$password)->first();
        if($user){
            session()->put('role',$user->role);
            return to_route('index');
        }else{
            return to_route('login.show');
        }
    }
}
