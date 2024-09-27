@extends('layout.app')
@section('title')
    titles
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('title.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add title +</a>
                <h2 class="text-xl">title</h2>
            </div>
            <form action="" method="" class="py-5">
                <input type="text" name="value" id="value" placeholder="enter value" class="border border-amber-500 py-2 px-5">
                <input type="number" name="key" id="key" placeholder="enter key" class="border border-amber-500 py-2 px-5">
                <input type="submit" value="Search" class="bg-amber-500 text-amber-50 py-2 px-5 cursor-pointer">
            </form>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">key</td>
                        <td class="text-center">value</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($titles as $title)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('title.delete',compact('title'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('title.edit',compact('title'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$title->key}}</td>
                            <td class="text-center">{{$title->value}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$titles->links()}}</div>
        </div>
@endsection
