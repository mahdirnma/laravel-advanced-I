@extends('layout.app')
@section('title')
    add course
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">افزودن دوره</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('course.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: نام دوره</label>
                            <input type="text" name="title" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('title'))
                                <p class="text-red-700">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: توضیحات</label>
                            <textarea name="description" id="description" cols="30" rows="7" class="rounded outline-0 p-2 border border-gray-400"></textarea>
                            @if($errors->has('description'))
                                <p class="text-red-700">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="اضافه کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="start_date" class="font-semibold ml-5">: تاریخ شروع دوره</label>
                            <input type="date" name="start_date" id="start_date" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('start_date'))
                                <p class="text-red-700">{{$errors->first('start_date')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="end_date" class="font-semibold ml-5">: تاریخ پایان دوره</label>
                            <input type="date" name="end_date" id="end_date" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('end_date'))
                                <p class="text-red-700">{{$errors->first('end_date')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="professor_id" class="font-semibold ml-5">: استاد</label>
                            <select name="professor_id" id="professor_id" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($professors as $professor)
                                    <option value={{$professor->id}}>{{$professor->firstname}} {{$professor->lastname}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('professor_id'))
                                <p class="text-red-700">{{$errors->first('professor_id')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
