<!-- Modal untuk hapus 1 data -->
<div class="modal fade" id="{{ $table }}-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $table }}-{{ $data->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $table }}-{{ $data->id }}Label">Apakah Anda Yakin ?</h5>
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
                        <form action="{{ route($table.'.destroy', encrypt($data->id)) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <br/>
                            <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>  Yes</button>
                        </form>
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
