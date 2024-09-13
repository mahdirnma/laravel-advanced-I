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


    public function update(Category $category)
    {
        return view('admin.category.update', compact('category'));
    }

    public function edit(UpdateCategoryRequest $request, Category $category)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $status = $category->update([
            'title' => $title,
            'description' => $description
        ]);
        if ($status) {
            return to_route('categories.index');
        }else{
            return to_route('category.add');
        }
    }

    public function delete(Category $category)
    {
        return view('admin.category.delete', compact('category'));
    }
    public function destroy(Category $category)
    {
        $status=$category->update([
            'is_active' => 0
        ]);
        if ($status) {
            return to_route('categories.index');
        }else{
            return to_route('categories.delete');
        }
    }
}
