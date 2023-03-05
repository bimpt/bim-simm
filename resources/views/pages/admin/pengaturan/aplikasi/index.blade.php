<x-app-layout title="Pengaturan {{ ucwords(str_replace('-', ' ', $table )) }}">

    @section('breadcrumbs')
        <x-breadcrumbs navigations="Dasbor" active="Pengaturan {{ ucwords(str_replace('-', ' ', $table )) }}"></x-breadcrumbs>
    @endsection

    @section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-success">
                    <div class="card-header">
                        <strong class="card-title">Pengaturan Gambar</strong>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('aplikasi.updateImage', 1) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @include('pages.admin.pengaturan.aplikasi._image')
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card card-success">
                    <div class="card-header">
                        <strong class="card-title">Pengaturan Dasar</strong>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('aplikasi.update', 1 ) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @include('pages.admin.pengaturan.aplikasi._form-control')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>
