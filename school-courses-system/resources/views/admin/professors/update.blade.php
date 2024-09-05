@extends('layout.app')
@section('title')
    update professor
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش استاد</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('professor.edit',compact('professor'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="firstname" class="font-semibold ml-5">: نام</label>
                            <input type="text" name="firstname" id="firstname" value="{{$professor->firstname}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('firstname'))
                                <p class="text-red-700">{{$errors->first('firstname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lastname" class="font-semibold ml-5">: نام خانوادگی</label>
                            <input type="text" name="lastname" id="lastname" value="{{$professor->lastname}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('lastname'))
                                <p class="text-red-700">{{$errors->first('lastname')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="birth_year" class="font-semibold ml-5">: سال تولد</label>
                            <select name="birth_year" id="birth_year" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @for($i=2004;$i>=1940;$i--)
                                    <option value={{$i}} {{$professor->birth_year==$i?'selected':''}}>{{$i}}</option>
                                @endfor
                            </select>
                            @if($errors->has('birth_year'))
                                <p class="text-red-700">{{$errors->first('birth_year')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="field" class="font-semibold ml-5">: رشته</label>
                            <input type="text" name="field" id="field" value="{{$professor->field}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('field'))
                                <p class="text-red-700">{{$errors->first('field')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="orientation" class="font-semibold ml-5">: گرایش</label>
                            <input type="text" name="orientation" id="orientation" value="{{$professor->orientation}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('orientation'))
                                <p class="text-red-700">{{$errors->first('orientation')}}</p>
                            @endif
                        </div>
                         <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="degree" class="font-semibold ml-5">: مدرک</label>
                            <select name="degree" id="degree" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value="master" {{$professor->degree=="master"?'selected':''}}>master</option>
                                <option value="bachelor" {{$professor->degree=="bachelor"?'selected':''}}>bachelor</option>
                                <option value="doctorate" {{$professor->degree=="doctorate"?'selected':''}}>doctorate</option>
                            </select>
                            @if($errors->has('degree'))
                                <p class="text-red-700">{{$errors->first('degree')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="last_education_place" class="font-semibold ml-5">: آخرین مکان تحصیل</label>
                            <input type="text" name="last_education_place" id="last_education_place" value="{{$professor->last_education_place}}" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('last_education_place'))
                                <p class="text-red-700">{{$errors->first('last_education_place')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="degree_year" class="font-semibold ml-5">: سال دریافت مدرک</label>
                            <select name="degree_year" id="degree_year" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @for($i=2024;$i>=1980;$i--)
                                    <option value={{$i}} {{$professor->degree_year==$i?'selected':''}}>{{$i}}</option>
                                @endfor
                            </select>
                            @if($errors->has('degree_year'))
                                <p class="text-red-700">{{$errors->first('degree_year')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
