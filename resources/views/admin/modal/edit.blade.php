<div class="modal fade" id="ModalUbah-{{ $data->id }}" tabindex="-1" aria-labelledby="ModalCreateLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px;">
                <h1 class="modal-title fs-5" id="ModalUbahLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('update/' . $data->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Sekolah</label>
                        <select id="disabledSelect" name="sekolah" class="form-select">

                            @foreach ($agendas as $g)
                                <option>{{ $g->sekolah }}</option>
                                <option>{{ $g->sekolah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Waktu Kerja</label>
                        <select id="disabledSelect" name="waktu" class="form-select">
                            <option>{{ $data->waktu }}</option>
                            <option>08.00 - 16.00</option>
                            <option>08.00 - 13.00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $data->tanggal }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kegiatan</label>
                        <textarea class="form-control" name="kegiatan" id="floatingTextarea2" style="height: 100px">{{ $data->kegiatan }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Save changes</button>

                    </div>
            </div>

            </form>

        </div>
    </div>
</div>
