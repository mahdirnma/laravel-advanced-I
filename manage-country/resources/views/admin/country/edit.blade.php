@extends('layout.app')
@section('title')
    edit country
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">edit country</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('country.update',compact('country'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="name" class="font-semibold ml-5">: name</label>
                            <input type="text" name="name" value="{{$country->name}}" id="name" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('name'))
                                <p class="text-red-700">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="capital" class="font-semibold ml-5">: capital</label>
                            <input type="text" name="capital" value="{{$country->capital}}" id="capital" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('capital'))
                                <p class="text-red-700">{{$errors->first('capital')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="Update" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="population" class="font-semibold ml-5">: population</label>
                            <input type="number" name="population" value="{{$country->population}}" step="1000000" min="1000000" id="population" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('population'))
                                <p class="text-red-700">{{$errors->first('population')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="language" class="font-semibold ml-5">: language</label>
                            <input type="text" name="language" id="language" value="{{$country->language}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('language'))
                                <p class="text-red-700">{{$errors->first('language')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
