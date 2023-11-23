<div class="modal fade" id="OfficeCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content" style="border-radius: 20px">
            <div class="modal-header" style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px">
                <h1 class="modal-title fs-5" id="OfficeCreateLabel">Buat Office Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.office.store') }}">
                    @csrf
                    <div class="row text-center mt-4">
                        <!-- name username password -->
                        <div class="col">
                            <label for="">Nama Office</label>
                            <input type="text" class="form-control" id="name" name="name"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @error('name')
                                <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Group id</label>
                            <select type="text" class="form-control @error('groups_id') is-invalid @enderror"
                                id="groups_id" name="groups_id"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                @foreach ($global_groups as $data)
                                    <option value="{{ $data->id }}">
                                        <i>({{ $data->id }})</i> {{ $data->group_name }}
                                    </option>

                                    @if ($errors->has('groups_id'))
                                        <span class="text-danger">{{ $errors->first('groups_id') }}</span>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Save changes</button>

                        </div>

                </form>

            </div>
        </div>
    </div>
