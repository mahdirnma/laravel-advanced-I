@extends('layout.app2')
@section('title')
    home
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex flex-col items-end pr-20 pt-10">
        @foreach($products as $product)
            <div class="bg-white flex flex-row-reverse justify-between items-center px-4 mt-5 w-1/6 h-1/6">
                <p class="">{{$product->title}}</p>
                <a href="{{route('home.profile',['id'=>$product->id])}}" class="rounded-3xl bg-blue-800 text-amber-50 w-[3svw] h-[3svw] flex justify-center items-center">خرید</a>
            </div>
        @endforeach
    </div>
@endsection
