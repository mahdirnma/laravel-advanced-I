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
    public function update(Tag $tag)
    {
        return view('admin.tag.update', compact('tag'));
    }


    public function edit(UpdateTagRequest $request, Tag $tag)
    {
        $title=$request->input('title');
        $status=$tag->update([
            'title'=>$title,
        ]);
        if($status){
            return to_route('tags.index');

        }else{
            return to_route('tag.update');
        }
    }

    public function delete(Tag $tag)
    {
        return view('admin.tag.delete', compact('tag'));
    }
    public function destroy(Tag $tag)
    {
        $status=$tag->update([
            'is_active'=>0,
        ]);
        if($status){
            return to_route('tags.index');
        }else{
            return to_route('tag.delete');
        }
    }
}
