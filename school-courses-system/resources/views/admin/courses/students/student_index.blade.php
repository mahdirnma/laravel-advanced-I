@extends('layout.app')
@section('title')
    {{$course->title}} students
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('course.student.create',compact('course'))}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن دانش اموز به این دوره +</a>
                <h2 class="text-xl">{{$course->title}} دانش آموزان دوره </h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">نام خانوادگی دانش آموز</td>
                        <td class="text-center">نام دانش آموز</td>
                        <td class="text-center">نام دوره</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course->students as $student)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('course.student.destroy',compact('course','student'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">{{$student->lastname}}</td>
                            <td class="text-center">{{$student->firstname}}</td>
                            <td class="text-center">{{$course->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
