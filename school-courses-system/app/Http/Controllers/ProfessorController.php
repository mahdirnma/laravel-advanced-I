<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;

class ProfessorController extends Controller
{
    public function index()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $professors = Professor::all()->where('is_active',1);
        return view('admin.professors.index', compact('professors'));
    }

    public function create()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        return view('admin.professors.add');
    }

    public function store(StoreProfessorRequest $request)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $degree = $request->input('degree');
        $field= $request->input('field');
        $orientation = $request->input('orientation');
        $last_education_place = $request->input('last_education_place');
        $birth_year = $request->input('birth_year');
        $degree_year = $request->input('degree_year');
        $professor=Professor::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'degree' => $degree,
            'field' => $field,
            'orientation' => $orientation,
            'last_education_place' => $last_education_place,
            'birth_year' => $birth_year,
            'degree_year' => $degree_year,
        ]);
        if ($professor) {
            return to_route('professor.index');
        }else{
            return to_route('professor.create');
        }
    }

    public function update(Professor $professor)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        return view('admin.professors.update', compact('professor'));
    }
    public function edit(UpdateProfessorRequest $request, Professor $professor)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $degree = $request->input('degree');
        $field= $request->input('field');
        $orientation = $request->input('orientation');
        $last_education_place = $request->input('last_education_place');
        $birth_year = $request->input('birth_year');
        $degree_year = $request->input('degree_year');
        $status= $professor->update([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'degree' => $degree,
            'field' => $field,
            'orientation' => $orientation,
            'last_education_place' => $last_education_place,
            'birth_year' => $birth_year,
            'degree_year' => $degree_year,
        ]);
        if($status){
            return to_route('professor.index');
        }else{
            return to_route('professor.update', $professor);
        }
    }

    protected function delete(Professor $professor)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        return view('admin.professors.delete', compact('professor'));
    }
    public function destroy(Professor $professor)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $status = $professor->update([
            'is_active' => 0
        ]);
        if($status){
            return to_route('professor.index');
        }else{
            return to_route('professor.delete', $professor);
        }
    }
}
