<x-app-layout title="{{ ucwords(str_replace('-', ' ', $title )) }}">
    @section('breadcrumbs')
        <x-breadcrumbs navigations="" active="{{ ucwords(str_replace('-', ' ', $title )) }}"></x-breadcrumbs>
    @endsection

    @section('content')
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <!-- Title -->
                            <h5>{{ ucwords(str_replace('-', ' ', $title )) }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="">
                                <!-- Tombol Tambah Data -->
                                @if($options['btn_tambah'] == 'show')
                                    <a href="{{ route($table.'.create') }}" class="btn btn-success"><i class="fa fa-plus-circle me-1"></i>{{ $submit }}</a>
                                @endif

                                <!-- Tombol Unduh/Print -->
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary mb-1 me-1 dropdown-toggle {{ $options['btn_cetak'] == 'show' ? 'd-display' : 'd-none' }}"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-download me-1"></i>{{ $cetak }}
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li class="{{ $options['btn_cetak_pdf'] == 'show' ? 'd-display' : 'd-none' }}">
                                            <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa fa-file-pdf-o me-2"></i> Pilih Data Tertentu (PDF)
                                            </a>
                                        </li>
                                        <li class="{{ $options['btn_cetak_pdfAll'] == 'show' ? 'd-display' : 'd-none' }}">
                                            <a class="dropdown-item" href="{{ route($table.'.downloadPdfAll') }}" target="_blank">
                                                <i class="fa fa-file-pdf-o me-2"></i>Semua Data (PDF)
                                            </a>
                                        </li>
                                        <li class="{{ $options['btn_cetak_ExcelAll'] == 'show' ? 'd-display' : 'd-none' }}">
                                            <a class="dropdown-item" href="{{ route($table.'.downloadExcelAll') }}">
                                                <i class="fa fa-file-excel-o me-2"></i>Semua Data (Excel)
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                @if($options['btn_cetak_pdf'] == 'show')
                                    <!-- Modal -->
                                    @include($viewPage . '._modal-cetak', ['table' => $table])
                                @endif
                            </div>

                            <!-- Tombol Hapus Data terpilih -->
                            <button type="button" class="btn btn btn-danger {{ $options['btn_hapus'] == 'show' ? 'd-display' : 'd-none' }}"
                                id="deleteAllBtn" data-toggle="modal" data-target="#hapusDataDipilih-{{ $table }}" disabled
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Beberapa Data {{ ucwords(str_replace('-', ' ', $table )) }}">
                                <i class="fa fa-trash me-1"></i>{{ $delete }}
                            </button>

                            <!-- Modal Hapus Data terpilih -->
                            @include('pages.admin.modals.delete-selected', ['table' => $table])
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered datatable">
                                @include($viewPage . '._table')
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection

    @push('scripts')
        <!--  Datatables -->
        @include('layouts.scripts._scripts-datatable')

        <!-- Hapus Beberapa Data -->
        {{-- @include('layouts.scripts._scripts-bulk', ['table' => $table]) --}}
    @endpush

    @section('script')
        <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    @endsection
</x-app-layout>
