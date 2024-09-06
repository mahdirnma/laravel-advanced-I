@extends('layout.app')
@section('title')
    update section
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش کلاس</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('section.edit',compact('section'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="capacity" class="font-semibold ml-5">: ظرفیت</label>
                            <input type="number" name="capacity" id="capacity" value="{{$section->capacity}}" min="1" max="40" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('capacity'))
                                <p class="text-red-700">{{$errors->first('capacity')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="level" class="font-semibold ml-5">: سطح کلاس</label>
                            <select name="level" id="level" class="w-2/5 h-8 rounded outline-0 pl-3 border border-gray-400">
                                <option value="basic" {{$section->level=='basic'?'selected':''}}>basic</option>
                                <option value="advanced" {{$section->level=='advanced'?'selected':''}}>advanced</option>
                            </select>
                            @if($errors->has('level'))
                                <p class="text-red-700">{{$errors->first('level')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="type" class="font-semibold ml-5">: نوع کلاس</label>
                            <select name="type" id="type" class="w-2/5 h-8 rounded outline-0 pl-3 border border-gray-400">
                                <option value="general" {{$section->type=='general'?'selected':''}}>general</option>
                                <option value="private" {{$section->type=='private'?'selected':''}}>private</option>
                            </select>
                            @if($errors->has('type'))
                                <p class="text-red-700">{{$errors->first('type')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="course_id" class="font-semibold ml-5">: دوره</label>
                            <select name="course_id" id="course_id" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                @foreach($courses as $course)
                                    <option value={{$course->id}} {{$section->course_id==$course->id?'selected':''}}>{{$course->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('course_id'))
                                <p class="text-red-700">{{$errors->first('course_id')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="status" class="font-semibold ml-5">: وضعیت کلاس</label>
                            <select name="status" id="status" class="w-2/5 h-8 border border-gray-400 rounded outline-0 pl-3">
                                <option value='done' {{$section->status=='done'?'selected':''}}>done</option>
                                <option value='doing' {{$section->status=='doing'?'selected':''}}>doing</option>
                                <option value='initial' {{$section->status=='initial'?'selected':''}}>initial</option>
                            </select>
                            @if($errors->has('status'))
                                <p class="text-red-700">{{$errors->first('status')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
