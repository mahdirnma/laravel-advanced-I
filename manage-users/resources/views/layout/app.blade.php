<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-svw h-svh">
    <div class="w-full h-[12%] flex items-center flex-row-reverse pr-12 text-xl">
        <h1 class="font-bold text-xl">admin panel</h1>
        <div class="w-5/6 h-full flex items-center justify-center">
            <nav>
                <ul class="flex flex-row-reverse">
                    <li class="w-44 h-full flex justify-center items-center font-mono text-balance"><a href="{{route('index')}}">dashboard</a></li>
                    @if(session()->get('role')==1 || session()->get('role')==2)
                        <li class="w-44 h-full flex justify-center items-center font-mono text-balance"><a href="{{route('users.index')}}">users</a></li>
                    @endif
                    <li class="w-44 h-full flex justify-center items-center font-mono text-balance"><a href="{{route('products.index')}}">products</a></li>
                    <li class="w-44 h-full flex justify-center items-center font-mono text-balance"><a href="{{route('categories.index')}}">categories</a></li>
                    <li class="w-44 h-full flex justify-center items-center font-mono text-balance"><a href="{{route('tags.index')}}">tags</a></li>
                </ul>
            </nav>
        </div>
{{--        <a href="{{route('logout')}}" class="text-red-700 font-bold"><- logout</a>--}}
    </div>
    @yield('content')
</div>
</body>
</html>
