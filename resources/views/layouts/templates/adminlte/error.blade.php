@extends('layouts.templates.adminlte.includes.header', ['favicon' => $favicon])

@section('body')

    <!-- Preloader -->
    <x-preloader></x-preloader>

     <!-- Content Wrapper. Contains page content -->
        <!-- Content-->
        <div class="">
            <div class="p-4">
                @yield('content')
            </div>
        </div>
        <!-- /.content-->
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer id="main-footer-dashboard">
        @include('layouts.development.footer')
    </footer>
    <!-- /.footer -->

    <!-- Scripts -->
        @include('layouts.templates.adminlte.includes.scripts')
    <!-- /.scripts -->

@endsection
