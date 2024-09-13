<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(StoreCategoryRequest $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $category = Category::create([
            'title' => $title,
            'description' => $description
        ]);
        if ($category) {
            return to_route('categories.index');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
