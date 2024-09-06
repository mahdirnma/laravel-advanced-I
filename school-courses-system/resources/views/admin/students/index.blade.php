@extends('layout.app')
@section('title')
    students
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('student.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن دانش آموز +</a>
                <h2 class="text-xl">دانش آموزان</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">لیست دوره های ثبت نام شده</td>
                        <td class="text-center">آدرس</td>
                        <td class="text-center">شماره همراه پدر</td>
                        <td class="text-center">شغل پدر</td>
                        <td class="text-center">نام پدر</td>
                        <td class="text-center">سال تولد</td>
                        <td class="text-center">نام خانوادگی</td>
                        <td class="text-center">نام</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('student.delete',compact('course'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('student.update',compact('course'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('course.student.index',compact('course'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-fuchsia-600">show</button>
                                </form>
                            </td>
                            <td class="text-center">{{$student->address}}</td>
                            <td class="text-center">{{$student->father_phone}}</td>
                            <td class="text-center">{{$student->father_job}}</td>
                            <td class="text-center">{{$student->father_name}}</td>
                            <td class="text-center">{{$student->birth_year}}</td>
                            <td class="text-center">{{$student->lastname}}</td>
                            <td class="text-center">{{$student->firstname}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
