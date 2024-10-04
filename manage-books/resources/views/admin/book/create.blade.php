@extends('layout.app')
@section('title')
    add book
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add book</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('books.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: title</label>
                            <input type="text" name="title" value="{{old('title')}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p class="text-red-700">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: description</label>
                            <textarea name="description" id="description" cols="3" rows="3" class="w-2/5 h-8 rounded outline-0 pb-2 pt-1 px-2 border border-gray-400">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <p class="text-red-700">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="publication_year" class="font-semibold ml-5">: publication year</label>
                            <input type="number" name="publication_year" min="1900" max="2024" value="{{old('publication_year')}}" id="key" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('publication_year'))
                                <p class="text-red-700">{{$errors->first('publication_year')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="librarian" class="font-semibold ml-5">: librarian</label>
                            <select name="user_id" id="librarian" class="w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('librarian'))
                                <p class="text-red-700">{{$errors->first('librarian')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
