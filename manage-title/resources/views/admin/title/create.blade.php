@extends('layout.app')
@section('title')
    add title
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add title</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('title.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="value" class="font-semibold ml-5">: value</label>
                            <input type="text" name="value" value="{{old('value')}}" id="value" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('value'))
                                <p class="text-red-700">{{$errors->first('value')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="key" class="font-semibold ml-5">: key</label>
                            <input type="number" name="key" min="1" value="{{old('key')}}" id="key" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('key'))
                                <p class="text-red-700">{{$errors->first('key')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
