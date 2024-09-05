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
        $professors = Professor::all();
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

    public function show(Professor $professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfessorRequest $request, Professor $professor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        //
    }
}
