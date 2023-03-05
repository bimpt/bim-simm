<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.templates.simm.includes._base')

    <!-- Title -->
    <title>{{ $title }} | SIMM</title>

    <!-- Mengatur style pada header-->
    {{ $styles }}
</head>

<body>
    @yield('body')
</body>

</html>
