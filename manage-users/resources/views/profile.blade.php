@extends('layout.app2')
@section('title')
    individual profile
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add individual profile</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('buy.panel',compact('product'))}}" method="get" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="firstname" class="font-semibold ml-5">: firstname</label>
                            <input type="text" name="firstname" id="firstname" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('firstname'))
                                <p class="text-red-700">{{$errors->first('firstname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lastname" class="font-semibold ml-5">: lastname</label>
                            <input type="text" name="lastname" id="lastname" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('lastname'))
                                <p class="text-red-700">{{$errors->first('lastname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="phone" class="font-semibold ml-5">: phone</label>
                            <input type="text" name="phone" id="phone" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('phone'))
                                <p class="text-red-700">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="order" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                    </div>
                </form>
            </div>
    </div>
@endsection
