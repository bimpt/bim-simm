<!-- Modal untuk hapus beberapa data -->
<div class="modal fade" id="hapusDataDipilih-{{ $table }}" tabindex="-1" role="dialog" aria-labelledby="hapusDataDipilih-{{ $table }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusDataDipilih-{{ $table }}Label">Apakah Anda yakin menghapus data {{ $table }} yang dipilih?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    Data yang sudah dihapus tidak bisa dikembalikan <i class="fa fa-warning"></i>
                </div>
                <div class="clear"></div>
                <div class="d-flex justify-content-arround">
                    <div class="w-100">
                        <br/>
                        <a href="#" class="btn btn-danger btn-block" id="deleteAllSelectedRecord"><i class="fa fa-trash"></i>  Yes</a>
                    </div>
                    <div class="mx-1"></div>
                    <div class="w-100">
                        <br/>
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
