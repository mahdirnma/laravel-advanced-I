@extends('layout.app')
@section('title')
    add city
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add city</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('city.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="name" class="font-semibold ml-5">: name</label>
                            <input type="text" name="name" id="name" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('name'))
                                <p class="text-red-700">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="population" class="font-semibold ml-5">: population</label>
                            <input type="number" name="population" step="1000000" min="1000000" id="population" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('population'))
                                <p class="text-red-700">{{$errors->first('population')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="country" class="font-semibold ml-5">: country</label>
                            <select name="country" id="country" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country'))
                                <p class="text-red-700">{{$errors->first('country')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
