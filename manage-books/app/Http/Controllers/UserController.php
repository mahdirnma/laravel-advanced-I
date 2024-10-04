<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function rent_show()
    {
        $books=Book::where('is_active',1)->where('is_rented',0)->paginate(2);
        return view('user.rent.index',compact('books'));
    }

    public function rent(Book $book)
    {
        $user=Auth::user();
        $user->books()->attach($user->id);
        $book->update(['is_rented'=>1]);
        return to_route('user.panel');
    }

    public function user_panel()
    {
        $user=Auth::user();
        $books=$user->books()->paginate(2);
        return view('user.rent.dashboard',compact('books','user'));
    }
}
