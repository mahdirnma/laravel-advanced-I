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
        $myData=$request->only('username','password');
        if(Auth::attempt($myData)){
            return to_route('title.index');
        }else{
            return to_route('login.show');
        }
    }

    public function register(StoreUserRequest $request)
    {
        $name=$request->name;
        $username=$request->username;
        $password=$request->password;
        $confirmPassword=$request->confirmPassword;
        $role=$request->role;
        $user=User::create([
            'name'=>$name,
            'username'=>$username,
            'password'=>Hash::make($password),
            'role'=>$role,
        ]);
        if($user){
            Auth::login($user);
            return to_route('title.index');
        }else{
            return to_route('register.show');
        }
    }
    public function logout(){
        Auth::logout();
        return to_route('login.show');
    }
}
