<div class="modal fade text-start" id="ModalView-{{ $data->id }}" tabindex="-1" aria-labelledby="ModalViewLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-header" style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px;">
                <h1 class="modal-title fs-5" id="ModalViewLabel">Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label"><strong>Nama</strong></label>
                        <p>
                            {{ $data->name }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label"><strong>Sekolah</strong></label>
                        <p>
                            {{ $data->group_name }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label"><strong>Waktu Kerja</strong></label>
                        <p>
                            {{ $data->waktu }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Tanggal</strong></label>
                        <p>
                            {{ $data->tanggal }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Kegiatan</strong></label>
                        <p>
                            {{ $data->kegiatan }}
                        </p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    style="background-color: #6E56CF; color: #fff;">Close</button>
            </div>
        </div>
    </div>
</div>
