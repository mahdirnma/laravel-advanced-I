@extends('layout.app')
@section('title')
    professors
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('professor.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن استاد +</a>
                <h2 class="text-xl">استاد ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">آپدیت</td>
                        <td class="text-center">تعداد دوره ها</td>
                        <td class="text-center">سال دریافت مدرک</td>
                        <td class="text-center">اخرین مکان تحصیل</td>
                        <td class="text-center">گرایش</td>
                        <td class="text-center">رشته</td>
                        <td class="text-center">مدرک</td>
                        <td class="text-center">سال تولد</td>
                        <td class="text-center">نام خانوادگی</td>
                        <td class="text-center">نام</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($professors as $professor)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('category.delete',compact('category'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('category.edit',compact('category'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$professor->courses->count()}}</td>
                            <td class="text-center">{{$professor->degree_year}}</td>
                            <td class="text-center">{{$professor->last_education_place}}</td>
                            <td class="text-center">{{$professor->orientation}}</td>
                            <td class="text-center">{{$professor->field}}</td>
                            <td class="text-center">{{$professor->degree}}</td>
                            <td class="text-center">{{$professor->birth_year}}</td>
                            <td class="text-center">{{$professor->lastname}}</td>
                            <td class="text-center">{{$professor->firstname}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
