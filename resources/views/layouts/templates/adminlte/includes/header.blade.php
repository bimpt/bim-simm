<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.templates.adminlte.includes._base', ['favicon' => $favicon])

        <!-- Title -->
        <title>{{ $title ? $title . ' |' : $title }} Layanan BIM</title>

        <!-- Mengatur style pada header-->
        {{ $styles }}

    </head>

    <body>
        @yield('body')
    </body>
</html>
