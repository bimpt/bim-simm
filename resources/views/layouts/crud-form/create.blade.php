<x-app-layout title="{{ ucwords(str_replace('-', ' ', $title )) }}">

    @section('breadcrumbs')
        <x-breadcrumbs link="{{ route($table.'.index') }}" navigations="{{ $title }}" active="{{ $submit}} {{ ucwords(str_replace('-', ' ', $title )) }}"></x-breadcrumbs>
    @endsection

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-success">
                        <div class="card-header d-flex align-items-center">
                            <a href="{{ route($table . '.index') }}" class="btn btn-outline-secondary btn-circle me-2">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <!-- Title -->
                            <h5>Tambah {{ ucwords(str_replace('-', ' ', $title )) }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route($table.'.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @include($viewPage . '._form-control')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</x-app-layout>
