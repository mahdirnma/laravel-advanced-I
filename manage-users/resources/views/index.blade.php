@extends('layout.app2')
@section('title')
    home
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex flex-col items-end pr-20 pt-10">
        @foreach($products as $product)
            <a href="{{route('home.profile',['id'=>$product->id])}}" class="bg-white px-10 py-10 rounded mt-5">{{$product->title}}</a>
        @endforeach
    </div>
@endsection
