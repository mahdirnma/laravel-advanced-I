<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('login');
    }
    public function user_index(){
        $users=User::where('is_active',1)->get();
        return view('admin.user.index',compact('users'));
    }
    public function create(){
        return view('admin.user.add');
    }
    public function store(StoreUserRequest $request){
        $name=$request->input('name');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $role=$request->input('role');
        $username=$request->input('username');
        $password=$request->input('password');
        $user=User::create([
            'name'=>$name,
            'age'=>$age,
            'gender'=>$gender,
            'role'=>$role,
            'username'=>$username,
            'password'=>$password
        ]);
        if($user){
            return to_route('users.index');
        }
    }
}
