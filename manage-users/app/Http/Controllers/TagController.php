<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::where('is_active', 1)->get();
        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.add');
    }

    public function store(StoreTagRequest $request)
    {
        $title=$request->input('title');
        $tag=Tag::create([
            'title'=>$title,
        ]);
        if($tag){
            return to_route('tags.index');
        }else{
            return to_route('tag.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
