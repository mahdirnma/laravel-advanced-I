@extends('layout.app')
@section('title')
    delete course
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex flex-col items-center justify-center">
        <h2 class="text-3xl font-bold">آیا از حذف این دوره اطمینان دارید؟</h2>
        <p class="mt-10 text-3xl font-bold">{{$course->title}}</p>
        <form action="{{route('course.destroy',compact('course'))}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete" class="cursor-pointer text-xl text-red-700 mt-20 border-2 px-3 py-2 border-red-700 rounded-xl">
        </form>
    </div>
@endsection
