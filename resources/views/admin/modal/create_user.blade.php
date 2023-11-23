<div class="modal fade" id="CreateUser" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content" style="border-radius: 20px">
            <div class="modal-header" style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px">
                <h1 class="modal-title fs-5" id="ModalUbahLabel">Buat User Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    <div class="row text-center mt-4">
                        <!-- name username password -->
                        <div class="col">
                            <label for="">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                id="username" name="username"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>



                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" id="email" name="email" "
                                class="form-control @error('email') is-invalid @enderror"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                              @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>


                        <!-- end name username email -->
                    </div>
                    <div class="row text-center mt-4">
                        <!-- password confirmpassword role_id -->
                        <div class="col">
                            <label for="">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                        </div>
                        <div class="col">
                            <label for="">Role_id</label>
                            <select class="form-select form-control @error('role_id') is-invalid @enderror"
                                id="role_id" name="role_id"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" selected>{{ $role->name }}</option>

                                    @if ($errors->has('role_id'))
                                        <span class="text-danger">{{ $errors->first('role_id') }}</span>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row text-center mt-4">
                        <!-- group_id office_id position_id -->
                        <div class="col">
                            <label for="">Group_id</label>
                            <select type="text" class="form-control @error('groups_id') is-invalid @enderror"
                                id="groups_id" name="groups_id"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                @foreach ($global_groups as $data)
                                    <option value="{{ $data->id }}" selected>
                                        <i>({{ $data->id }})</i> {{ $data->group_name }}
                                    </option>

                                    @if ($errors->has('groups_id'))
                                        <span class="text-danger">{{ $errors->first('groups_id') }}</span>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Office_id</label>
                            <input type="text" class="form-control @error('office_id') is-invalid @enderror"
                                id="office_id" name="office_id"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('office_id'))
                                <span class="text-danger">{{ $errors->first('office_id') }}</span>
                            @endif
                        </div>

                        <div class="col">
                            <label for="">Position_id</label>
                            <input type="text" class="form-control @error('position_id') is-invalid @enderror"
                                id="position_id" name="position_id"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">

                            @if ($errors->has('position_id'))
                                <span class="text-danger">{{ $errors->first('position_id') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row text-center mt-4">
                        <!-- birthdate gender phone_number -->
                        <div class="col">
                            <label for="">Birthdate</label>
                            <input type="date" class="form-control @error('birthdate') is-invalid @enderror"
                                id="birthdate" name="birthdate"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('birthdate'))
                                <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                            @endif
                        </div>
                        <div class="col">
                            <label for="">Gender</label>
                            <select class="form-select form-control @error('gender') is-invalid @enderror"
                                id="gender" name="gender"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                                <option selected>Laki-laki</option>
                                <option>Perempuan</option>
                                @if ($errors->has('gender'))
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                            </select>
                        </div>

                        <div class="col">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                id="phone_number" name="phone_number"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('phone_number'))
                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row text-center mt-4">
                        <!-- address latest_education -->
                        <div class="col">
                            <label for="">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                id="address" name="address"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>

                        <div class="col-3">
                            <label for="">Latest Education</label>
                            <input type="text"
                                class="form-control @error('latest_education') is-invalid @enderror"
                                id="latest_education" name="latest_education"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('latest_education'))
                                <span class="text-danger">{{ $errors->first('latest_education') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row text-center mt-4">
                        <!-- identity_number start_date end_date -->
                        <div class="col">
                            <label for="">Identity Number</label>
                            <input type="text" class="form-control @error('identity_number') is-invalid @enderror"
                                id="identity_number" name="identity_number"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('identity_number'))
                                <span class="text-danger">{{ $errors->first('identity_number') }}</span>
                            @endif
                        </div>

                        <div class="col-3">
                            <label for="">Start Date</label>
                            <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                id="start_date" name="start_date"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('start_date'))
                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                            @endif
                        </div>
                        <div class="col-3">
                            <label for="">End Date</label>
                            <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                id="end_date" name="end_date"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('end_date'))
                                <span class="text-danger">{{ $errors->first('end_date') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Save changes</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
