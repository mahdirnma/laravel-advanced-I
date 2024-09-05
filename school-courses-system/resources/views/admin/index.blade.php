@extends('layout.app')
@section('title')
    dashboard
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex flex-row-reverse pr-20 pt-10">
        <div class="w-1/5 h-48 flex flex-col justify-center items-center ml-16 bg-white rounded-xl">
            <h2 class="mb-8">تعداد استاد ها</h2>
            <p class="text-5xl font-light">{{$professors}}</p>
        </div>
        <div class="w-1/5 h-48 flex flex-col justify-center items-center bg-white rounded-xl ml-16 ">
            <h2 class="mb-8">تعداد دوره ها</h2>
            <p class="text-5xl font-light">{{$courses}}</p>
        </div>
        <div class="w-1/5 h-48 flex flex-col justify-center items-center bg-white rounded-xl ml-16 ">
            <h2 class="mb-8">تعداد دانش آموزان</h2>
            <p class="text-5xl font-light">{{$students}}</p>
        </div>
        <div class="w-1/5 h-48 flex flex-col justify-center items-center bg-white rounded-xl">
            <h2 class="mb-8">تعداد کلاس ها</h2>
            <p class="text-5xl font-light">{{$sections}}</p>
        </div>
    </div>
@endsection
