<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Professor;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $professors = Professor::all()->where('is_active',1)->count();
        $courses = Course::all()->where('is_active',1)->count();
        $students = Student::all()->where('is_active',1)->count();
        $sections = Section::all()->where('is_active',1)->count();
        return view('admin.index',compact('professors','courses','students','sections'));
    }
    public function login(){
        return view('login');
    }
    public function signin(){
        return view('signin');
    }
    public function logout(){
        session()->forget('login');
        return to_route('login');
    }
}
