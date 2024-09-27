<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $categories = Category::where('is_active', 1)->paginate(2);
        $categories=Category::where('description','like','%'.$request->description.'%');
        if ($request->title)
            $categories=$categories->where('title',$request->title);
        if ($request->status){
            $status=$request->status==2?0:1;
            $categories=$categories->where('is_active',$status);
        }
        $categories=$categories->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $category =Category::create([
            'title' => $title,
            'description' => $description
        ]);
        if($category){
            return to_route('category');
        }else{
            return to_route('category.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $status = $category->update([
            'title' => $title,
            'description' => $description
        ]);
        if($status){
            return to_route('category');
        }else{
            return to_route('category.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Category $category)
    {
        return view('admin.category.delete', compact('category'));
    }
    public function destroy(Category $category)
    {
        $status = $category->update([
            'is_active' => 0
        ]);
        if($status){
            return to_route('category');
        }else{
            return to_route('category.delete');
        }
    }
}
