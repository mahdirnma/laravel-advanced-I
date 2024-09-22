@extends('layout.app')
@section('title')
    sections
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('user.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add user +</a>
                <h2 class="text-xl">users</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">username</td>
                        <td class="text-center">role</td>
                        <td class="text-center">gender</td>
                        <td class="text-center">age</td>
                        <td class="text-center">name</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('user.delete',compact('user'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('user.update',compact('user'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$user->username}}</td>
                            <td class="text-center">{{$user->role}}</td>
                            <td class="text-center">{{$user->gender}}</td>
                            <td class="text-center">{{$user->age}}</td>
                            <td class="text-center">{{$user->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @if($status)
                <div class="mt-5">{{$users->links()}}</div>
            @endif
        </div>
@endsection
