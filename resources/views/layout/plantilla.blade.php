<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>@yield('title')</title>

    <style>
        .active {
            color: brown;
            font-weight: bold;
        }
    </style>
</head>
<body >

    @include('layout.partials.header')
    @yield('content')
    @include('layout.partials.footer')
</body>
</html>
