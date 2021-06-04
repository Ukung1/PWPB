<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    
</head>
<body class="flex items-center justify-center bg-gray-50">

    <header>
        {{-- @include('header') --}}
    </header>
    <main>
        <div class="md:container md:mx-auto mt-10">
            @yield('content')
        </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>