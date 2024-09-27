@extends('layout.app')
@section('title')
    categories
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('category.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add category +</a>
                <h2 class="text-xl">category</h2>
            </div>
            <form action="" method="" class="py-5">
                <input type="text" name="title" id="title" placeholder="enter title" class="border border-amber-500 py-2 px-5">
                <input type="text" name="description" id="description" placeholder="enter description" class="border border-amber-500 py-2 px-5">
                <select name="status" id="status" class="border border-amber-500 py-2 px-5">
                    <option value="">all status</option>
                    <option value="1">active</option>
                    <option value="2">deactivate</option>
                </select>
                <input type="submit" value="Go" class="bg-amber-500 text-amber-50 py-2 px-5 cursor-pointer">
            </form>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('category.delete',compact('category'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('category.edit',compact('category'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$category->description}}</td>
                            <td class="text-center">{{$category->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$categories->links()}}</div>--}}
        </div>
@endsection
