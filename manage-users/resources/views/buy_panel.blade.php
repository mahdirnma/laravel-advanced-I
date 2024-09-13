@extends('layout.app2')
@section('title')
    orders
@endsection
@section('content')
    @if(session()->get('user') && session()->get('product'))
        <div class="w-full h-[88%] bg-gray-200 flex flex-col items-end pr-20 pt-10">
            <p>{{session()->get('user')['firstname']}} : firstname</p>
            <p>{{session()->get('user')['lastname']}} : lastname</p>
            <p>{{session()->get('user')['phone']}} : phone</p>
            <p>{{session()->get('product')->title}} : product title</p>
            <p>{{number_format(session()->get('product')->price)}} : product price</p>
        </div>
    @else
        <div class="w-full h-[88%] bg-gray-200 flex flex-col items-center pr-20 pt-10">
            <p class="text-3xl font-bold text-red-600">any order doesn't exist</p>
        </div>
    @endif
@endsection
