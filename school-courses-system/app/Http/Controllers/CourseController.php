<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseStudentRequest;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Student;

class CourseController extends Controller
{

    public function index()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $courses = Course::all()->where('is_active',1);
        return view('admin.courses.index',compact('courses'));
    }

    public function student(Course $course)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        return view('admin.courses.students.student_index',compact('course'));
    }

    public function student_create(Course $course)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $students = Student::all()->where('is_active',1);
        return view('admin.courses.students.student_add',compact('course','students'));
    }
    public function student_store(StoreCourseStudentRequest $request,Course $course){
        if (!session()->has('login')) {
            return to_route('login');
        }
        $student=$request->student;
        $course->students()->attach($student);
        return to_route('course.student.index',$course);
    }
    public function create()
    {

    }

    public function store(StoreCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
