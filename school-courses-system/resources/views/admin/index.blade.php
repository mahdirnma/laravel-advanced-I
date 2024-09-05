@extends('layout.app')
@section('title')
    dashboard
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex flex-row-reverse p-10">
        <div class="w-1/5 h-48 flex flex-col justify-center items-center ml-12 bg-white rounded-xl">
            <h2 class="mb-8">تعداد محصولات</h2>
            <p class="text-5xl font-light">{{--{{$products}}--}}</p>
        </div>
        <div class="w-1/5 h-48 flex flex-col justify-center items-center bg-white rounded-xl">
            <h2 class="mb-8">تعداد دسته بندی</h2>
            <p class="text-5xl font-light">{{--{{$categories}}--}}</p>
        </div>
    </div>
@endsection
