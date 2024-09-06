@extends('layout.app')
@section('title')
    add student
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن دانش آموز</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('student.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="firstname" class="font-semibold ml-5">: نام</label>
                            <input type="text" name="firstname" id="firstname" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('firstname'))
                                <p class="text-red-700">{{$errors->first('firstname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lastname" class="font-semibold ml-5">: نام خانوادگی</label>
                            <input type="text" name="lastname" id="lastname" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('lastname'))
                                <p class="text-red-700">{{$errors->first('lastname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="birth_year" class="font-semibold ml-5">: سال تولد</label>
                            <select name="birth_year" id="birth_year" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @for($i=2006;$i>=1980;$i--)
                                    <option value={{$i}}>{{$i}}</option>
                                @endfor
                            </select>
                            @if($errors->has('birth_year'))
                                <p class="text-red-700">{{$errors->first('birth_year')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="address" class="font-semibold ml-5">: آدرس</label>
                            <input type="text" name="address" id="address" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('address'))
                                <p class="text-red-700">{{$errors->first('address')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="father_name" class="font-semibold ml-5">: نام پدر</label>
                            <input type="text" name="father_name" id="father_name" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('father_name'))
                                <p class="text-red-700">{{$errors->first('father_name')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="father_job" class="font-semibold ml-5">: شغل پدر</label>
                            <input type="text" name="father_job" id="father_job" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('father_job'))
                                <p class="text-red-700">{{$errors->first('father_job')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="father_phone" class="font-semibold ml-5">: شماره همراه پدر</label>
                            <input type="text" name="father_phone" id="father_phone" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('father_phone'))
                                <p class="text-red-700">{{$errors->first('father_phone')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
