@extends('layout.app')
@section('title')
    students
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex flex-row-reverse justify-between items-center border-b">
{{--                <a href="{{route('student.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن دوره +</a>--}}
                <h2 class="text-xl">{{$student->firstname}} {{$student->lastname}} دوره های </h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">نام دوره</td>
                        <td class="text-center">نام خانوادگی</td>
                        <td class="text-center">نام</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($student->courses as $course)
                        <tr>
{{--
                            <td class="text-center">
                                <form action="{{route('student.delete',compact('student'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
--}}
                            <td class="text-center">{{$course->title}}</td>
                            <td class="text-center">{{$student->lastname}}</td>
                            <td class="text-center">{{$student->firstname}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
