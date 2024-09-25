@extends('layout.app')
@section('title')
    cities
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{--{{route('city.create')}}--}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add city +</a>
                <h2 class="text-xl">cities</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">country</td>
                        <td class="text-center">population</td>
                        <td class="text-center">name</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cities as $city)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('city.delete',compact('city'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('city.edit',compact('city'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$city->country->name}}</td>
                            <td class="text-center">{{$city->population}}</td>
                            <td class="text-center">{{$city->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$cities->links()}}</div>

{{--
            @if($status)
                <div class="mt-5">{{$categories->links()}}</div>
            @endif
--}}
        </div>
@endsection
