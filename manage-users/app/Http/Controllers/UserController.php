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
        $categories=Category::where('is_active',1)->get();
        return view('admin.user.add',compact('categories'));
    }
    public function store(StoreUserRequest $request){

    }
}
