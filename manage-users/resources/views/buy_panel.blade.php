@extends('layout.app2')
@section('title')
    orders
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex flex-col items-end pr-20 pt-10">
        <p>{{session()->get('user')['firstname']}} : firstname</p>
        <p>{{session()->get('user')['lastname']}} : lastname</p>
        <p>{{session()->get('user')['phone']}} : phone</p>
        <p>{{session()->get('product')->title}} : product title</p>
        <p>{{number_format(session()->get('product')->price)}} : product price</p>
    </div>
@endsection
