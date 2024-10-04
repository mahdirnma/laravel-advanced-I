<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\User;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::where('is_active',1)->paginate(2);
        return view('admin.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::where('is_active',1)->where('role','>',1)->get();
        return view('admin.book.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book=Book::create($request->validated());
        if ($book) {
            return to_route('books.index');
        }else{
            return to_route('books.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $users=User::where('is_active',1)->where('role','>',1)->get();
        return view('admin.book.edit',compact('book','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $status=$book->update($request->validated());
/*        $title=$request->title;
        $description=$request->description;
        $publication_year=$request->publication_year;
        $user_id=$request->user_id;
        $status=$book->update([
            'title'=>$title,
            'description'=>$description,
            'publication_year'=>$publication_year,
            'user_id'=>$user_id
        ]);*/
        if ($status) {
            return to_route('books.index');
        }else{
            return to_route('books.edit',$book);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->update(['is_active'=>0]);
        return to_route('books.index');
    }
}
