@extends('layouts.templates.simm.includes.header', ['favicon' => $favicon])

@section('body')
    <!-- Navbar -->
    <x-simm-navbar></x-simm-navbar>

    <!-- Content -->
    {{ $slot }}

    <!-- Footer -->
    @include('layouts.templates.simm.includes.footer')

    @include('layouts.templates.simm.includes.scripts')
@endsection
