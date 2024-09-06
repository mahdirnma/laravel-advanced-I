<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $students = Student::all()->where('is_active',1);
        return view('admin.students.index',compact('students'));
    }
    public function create()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        return view('admin.students.add');
    }


    public function store(StoreStudentRequest $request)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $birth_year = $request->input('birth_year');
        $father_name = $request->input('father_name');
        $father_job = $request->input('father_job');
        $father_phone = $request->input('father_phone');
        $student=Student::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'address' => $address,
            'birth_year' => $birth_year,
            'father_name' => $father_name,
            'father_job' => $father_job,
            'father_phone' => $father_phone,
        ]);
        if ($student) {
            return to_route('student.index');
        }else{
            return to_route('student.create');
        }
    }

    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
