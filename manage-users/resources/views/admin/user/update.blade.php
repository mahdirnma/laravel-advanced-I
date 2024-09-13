@extends('layout.app')
@section('title')
    update user
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">update user</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('user.edit',compact('user'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="name" class="font-semibold ml-5">: name</label>
                            <input type="text" name="name" value="{{$user->name}}" id="name" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('name'))
                                <p class="text-red-700">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="age" class="font-semibold ml-5">: age</label>
                            <input type="number" name="age" value="{{$user->age}}" min="1" max="70" id="age" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('age'))
                                <p class="text-red-700">{{$errors->first('age')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="gender" class="font-semibold ml-5">: gender</label>
                            <select name="gender" id="gender" class="w-2/5 h-8 rounded outline-0 pl-3 border border-gray-400">
                                <option value="male" {{$user->gender=='male'?'selected':''}}>male</option>
                                <option value="female" {{$user->gender=='female'?'selected':''}}>female</option>
                            </select>
                            @if($errors->has('gender'))
                                <p class="text-red-700">{{$errors->first('gender')}}</p>
                            @endif
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="role" class="font-semibold ml-5">: role</label>
                            <select name="role" id="role" class="w-2/5 h-8 rounded outline-0 pl-3 border border-gray-400">
                                <option value="1" {{$user->role=='1'?'selected':''}}>1</option>
                                <option value="2" {{$user->role=='2'?'selected':''}}>2</option>
                                <option value="3" {{$user->role=='3'?'selected':''}}>3</option>
                                <option value="4" {{$user->role=='4'?'selected':''}}>4</option>
                            </select>
                            @if($errors->has('role'))
                                <p class="text-red-700">{{$errors->first('role')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="Update" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="username" class="font-semibold ml-5">: username</label>
                            <input type="text" name="username" value="{{$user->username}}" id="username" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @if($errors->has('username'))
                                <p class="text-red-700">{{$errors->first('username')}}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
