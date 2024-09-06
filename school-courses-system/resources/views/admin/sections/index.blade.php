@extends('layout.app')
@section('title')
    sections
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('section.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">افزودن کلاس +</a>
                <h2 class="text-xl">کلاس ها</h2>
            </div>
            <div class="w-[90%] h-3/5 flex justify-between items-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">حذف</td>
                        <td class="text-center">ویرایش</td>
                        <td class="text-center">وضعیت کلاس</td>
                        <td class="text-center">نام استاد</td>
                        <td class="text-center">نام دوره</td>
                        <td class="text-center">نوع کلاس</td>
                        <td class="text-center">سطح کلاس</td>
                        <td class="text-center">ظرفیت کلاس</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sections as $section)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('section.destroy',compact('section'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('section.update',compact('section'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600" {{$section->status!='initial'?'disabled':''}}>update</button>
                                </form>
                            </td>
                            <td class="text-center">{{$section->status}}</td>
                            <td class="text-center">{{$section->course->professor->firstname}} {{$section->course->professor->lastname}}</td>
                            <td class="text-center">{{$section->course->title}}</td>
                            <td class="text-center">{{$section->type}}</td>
                            <td class="text-center">{{$section->level}}</td>
                            <td class="text-center">{{$section->capacity}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
