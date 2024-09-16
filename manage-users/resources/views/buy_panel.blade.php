@extends('layout.app2')
@section('title')
    orders
@endsection
@section('content')
    @if(session()->get('order'))
        <div class="w-full h-[88%] bg-gray-200 flex flex-col items-end pr-20 pt-10">
            <p>{{session()->get('order')['firstname']}} : firstname</p>
            <p>{{session()->get('order')['lastname']}} : lastname</p>
            <p>{{session()->get('order')['phone']}} : phone</p>
            <p>{{session()->get('order')->product->title}} : product title</p>
            <p>{{session()->get('order')->product->price}} : product price</p>
        </div>
    @else
        <div class="w-full h-[88%] bg-gray-200 flex flex-col items-center pr-20 pt-10">
            <p class="text-3xl font-bold text-red-600">any order doesn't exist</p>
        </div>
    @endif
@endsection
