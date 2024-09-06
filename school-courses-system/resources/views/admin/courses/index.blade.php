@extends('layout.app')
@section('title')
    courses
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('course.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن دوره +</a>
                <h2 class="text-xl">دوره ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">لیست دانش آموزان</td>
                        <td class="text-center">تعداد دانش آموزان دوره</td>
                        <td class="text-center">تعداد کلاس های دوره</td>
                        <td class="text-center">استاد</td>
                        <td class="text-center">روز پایان</td>
                        <td class="text-center">روز شروع</td>
                        <td class="text-center">توضیحات</td>
                        <td class="text-center">نام دوره</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('course.delete',compact('course'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('course.update',compact('course'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('course.student.index',compact('course'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-fuchsia-600">show</button>
                                </form>
                            </td>
                            <td class="text-center">{{$course->students->count()}}</td>
                            <td class="text-center">{{$course->sections->count()}}</td>
                            <td class="text-center">{{$course->professor->firstname}} {{$course->professor->lastname}}</td>
                            <td class="text-center">{{$course->end_date}}</td>
                            <td class="text-center">{{$course->start_date}}</td>
                            <td class="text-center">{{$course->description}}</td>
                            <td class="text-center">{{$course->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
