<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- stilos -->
    <style>
        .active {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- header -->
    <!-- nav -->

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
    <!-- script -->
</body>

</html>
