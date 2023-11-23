<div class="modal fade" id="RoleEdit-{{ $data->id }}" tabindex="-1" aria-labelledby="ModalCreateLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content" style="border-radius: 20px">
            <div class="modal-header" style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px">
                <h1 class="modal-title fs-5" id="ModalUbahLabel">Edit Role</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.roles.update', $data) }}">
                    @csrf
                    @method('PUT')
                    <div class="row text-center mt-4">
                        <!-- name username password -->
                        <div class="col">
                            <label for="">Nama Role</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $data->name }}"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @error('name')
                                <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Save changes</button>

                        </div>
                </form>

                <div class="row mt-4">
                    <h3>Role Permission(s)</h3>
                    <div class="mt-4 p-2">
                        @if ($data->permissions)
                            @foreach ($data->permissions as $role_permission)
                                <form method="POST"
                                    action="{{ route('admin.roles.permission.revoke', [$data->id, $role_permission->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ $role_permission->name }}</button>
                                </form>
                            @endforeach
                        @endif
                    </div>
                    <form method="POST" action="{{ route('admin.roles.permission', $data->id) }}">
                        @csrf
                        @method('POST')
                        <div class="col-2 pb-3">
                            <label for="permission" class="form-label">Permission</label>
                            <select id="permission" name="permission" class="form-select">
                                @foreach ($permission as $data)
                                    <option>{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-primary">Assign</button>
                        </div>
                    </form>
                </div>

            </div>


        </div>
    </div>
</div>
</div>
