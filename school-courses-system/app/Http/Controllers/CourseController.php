<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseStudentRequest;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Professor;
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
    public function student_destroy(Course $course,Student $student){
        if (!session()->has('login')) {
            return to_route('login');
        }
        $course->students()->detach($student);
        return to_route('course.student.index',$course);
    }
        public function create()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $professors=Professor::all()->where('is_active',1);
        return view('admin.courses.add',compact('professors'));
    }

    public function store(StoreCourseRequest $request)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $title=$request->title;
        $description=$request->description;
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        $professor_id=$request->professor_id;
        $course=Course::create([
            'title'=>$title,
            'description'=>$description,
            'start_date'=>$start_date,
            'end_date'=>$end_date,
            'professor_id'=>$professor_id,
        ]);
        if($course){
            return to_route('course.index');
        }
    }

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
