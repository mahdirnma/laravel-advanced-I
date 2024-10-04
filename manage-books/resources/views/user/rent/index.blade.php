@extends('layout.app2')
@section('title')
    rent book
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">book</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">rent</td>
                        <td class="text-center">publication year</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('rent',compact('book'))}}" method="post">
                                    @csrf
                                    <button type="submit" class="text-red-600 font-bold text-xl">rent</button>
                                </form>
                            </td>
                            <td class="text-center">{{$book->publication_year}}</td>
                            <td class="text-center">{{$book->description}}</td>
                            <td class="text-center">{{$book->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$books->links()}}</div>
        </div>
@endsection
