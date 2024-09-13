<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all()->where('is_active',1);
        return view('admin.students.index',compact('students'));
    }
    public function create()
    {
        return view('admin.students.add');
    }


    public function store(StoreStudentRequest $request)
    {
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

    public function update(Student $student)
    {
        return view('admin.students.update',compact('student'));
    }

    public function edit(UpdateStudentRequest $request, Student $student)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $birth_year = $request->input('birth_year');
        $father_name = $request->input('father_name');
        $father_job = $request->input('father_job');
        $father_phone = $request->input('father_phone');
        $status=$student->update([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'address' => $address,
            'birth_year' => $birth_year,
            'father_name' => $father_name,
            'father_job' => $father_job,
            'father_phone' => $father_phone,
        ]);
        if ($status) {
            return to_route('student.index');
        }else{
            return to_route('student.update',$student);
        }
    }

    public function delete(Student $student)
    {
        return view('admin.students.delete',compact('student'));
    }
    public function destroy(Student $student)
    {
        $status=$student->update([
            'is_active' => 0,
        ]);
        if ($status) {
            return to_route('student.index');
        }else{
            return to_route('student.delete',$student);
        }
    }

    public function course(Student $student)
    {
        return view('admin.students.courses.index',compact('student'));
    }
}
