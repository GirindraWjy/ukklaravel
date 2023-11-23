<!-- Modal -->
<div class="modal fade" id="AgendaDelete-{{ $data->id }}" tabindex="-1" aria-labelledby="ModalDeleteLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDeleteLabel">Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin anda akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                <a href="{{ url('delete/' . $data->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Hapus">
                    Yakin</a>
            </div>
        </div>
    </div>
</div>
