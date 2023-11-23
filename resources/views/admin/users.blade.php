@include('admin.partials.users_head')

<body style="background-color: #f9f9f9;">


    @include('admin.layouts.nav')
    <div class="container pe-5">
        <div class="row">
            <h5 class="mt-4">
                Users
                <h6>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </h6>
            </h5>
            <div class="cardflex">
                <div class="card"
                    style="width: 100%; border-radius: 10px; box-shadow: 0px 10px 20px -10px #337ccf; border-style: none;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-subtitle mb-4">Current User</h6>
                            <div class="input-group input-group-sm mb-3" style="width: 35%; height: 30%;">
                                <select class="form-select form-control-sm" id="inputGroupSelect01">
                                    <option selected>30 days</option>
                                    <option value="1">7 days</option>
                                    <option value="2">1 days</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="iconchart fa-solid fa-chart-simple"></i>
                            <h1 class="countuser">
                                {{ $count_user }}
                            </h1>
                        </div>
                    </div>
                </div>

            </div>
            <div class="searchbar mt-4 d-flex justify-content-between">
                <div class="input-group mb-3" style="width: 300px;">
                    <span
                        style="border-style: none;  border-radius: 20px 0px 0px 20px; background-color: #fff; box-shadow: 0px 10px 20px -10px #0D6EFD;"
                        class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input
                        style="border-style: none; border-radius: 0px 20px 20px 0px; box-shadow: 0px 10px 20px -10px #0D6EFD;"
                        id="filter-search" type="text" class="form-control" placeholder="Search User"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div>
                    <button data-bs-target="#CreateUser" data-bs-toggle="modal" type="button" class="btn btn-sm"
                        style="background-color: #337ccf; color: #fff; border-radius: 20px; box-shadow: 0px 10px 20px -10px #337ccf;">
                        CreateUser
                    </button>
                    @extends('admin.modal.create_user')
                </div>
            </div>
            <div class="tableuser">
                <div class="usertable pb-1"
                    style="background-color: rgb(255, 255, 255); border-radius: 10px; box-shadow: 0px 10px 20px -10px #0D6EFD; overflow-x: scroll;">
                    <table id="datatable" class="table table-striped mt-1 text-center">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Address</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Status</th>
                                <th scope="col">Role_id</th>
                                <th scope="col">Group_id</th>
                                <th scope="col">Office_id</th>
                                <th scope="col">Position_id</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($user as $data)
                                <tr>
                                    <td scope="row">{{ $data->name }}</th>
                                    <td>{{ $data->username }}</td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        {{ $data->password }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->gender }}</td>
                                    <td>{{ $data->status ?? 'None' }}</td>
                                    <td> {{ $data->role->name }}{{ $data->role_id }}</td>
                                    <td><i>{{ $data->groups->group_name ?? 'None' }} ({{ $data->groups_id }})
                                        </i>
                                    </td>
                                    <td>{{ $data->office_id }}</td>
                                    <td>{{ $data->position_id }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button data-bs-toggle="modal"
                                                data-bs-target="#ModalView-{{ $data->id }}" title="View"
                                                class="btn btn-sm"><i class="fa fa-eye"></i></button>
                                            <button data-bs-toggle="modal"
                                                data-bs-target="#ModalUbah-{{ $data->id }}" title="Edit"
                                                class="btn btn-sm"><i class="fa fa-edit"></i></button>
                                            <a href="{{ url('deleteuser/' . $data->id) }}" title="Hapus"
                                                class="btn btn-sm btn-delete"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.modal.view')
                                @include('admin.modal.edit_user')
                                @include('admin.modal.delete_user')
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    @extends('admin.partials.users_script')
    @include('admin.partials.css_container')
</body>

</html>
