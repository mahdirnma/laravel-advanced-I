@extends('layout.app')
@section('title')
    add student
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">{{$course->title}} افزودن دانش اموز به دوره ی </h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('course.student.store',compact('course'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="student" class="font-semibold ml-5">: نام دانش آموز</label>
                            <select name="student" id="student" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($students as $student)
                                    <option value={{$student->id}}>{{$student->firstname}} {{$student->lastname}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('student'))
                                <p class="text-red-700">{{$errors->first('student')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                    </div>
                </form>
            </div>
    </div>
@endsection
