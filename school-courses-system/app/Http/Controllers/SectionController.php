<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;

class SectionController extends Controller
{
    public function index()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $sections = Section::all()->where('is_active', 1);
        return view('admin.sections.index', compact('sections'));
    }

    public function create()
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $courses = Course::all()->where('is_active', 1);
        return view('admin.sections.add', compact('courses'));
    }

    public function store(StoreSectionRequest $request)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $capacity = $request->input('capacity');
        $level = $request->input('level');
        $type = $request->input('type');
        $course_id = $request->input('course_id');
        $status = $request->input('status');
        $section=Section::create([
            'capacity' => $capacity,
            'level' => $level,
            'type' => $type,
            'course_id' => $course_id,
            'status' => $status,
        ]);
        if ($section) {
            return to_route('section.index');
        }else{
            return to_route('section.create');
        }
    }

    public function update(Section $section)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $courses = Course::all()->where('is_active', 1);
        return view('admin.sections.update', compact('section', 'courses'));
    }

    public function edit(UpdateSectionRequest $request, Section $section)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $capacity = $request->input('capacity');
        $level = $request->input('level');
        $type = $request->input('type');
        $course_id = $request->input('course_id');
        $status = $request->input('status');
        $position= $section->update([
            'capacity' => $capacity,
            'level' => $level,
            'type' => $type,
            'course_id' => $course_id,
            'status' => $status,
        ]);
        if ($position) {
            return to_route('section.index');
        }else{
            return to_route('section.update', $section);
        }
    }

/*    public function delete(Section $section)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        return view('admin.sections.delete', compact('section'));
    }*/
    public function destroy(Section $section)
    {
        if (!session()->has('login')) {
            return to_route('login');
        }
        $section->update([
            'is_active' => 0
        ]);
        return to_route('section.index');
    }
}
