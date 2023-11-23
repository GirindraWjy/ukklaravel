@extends('partials.history_head')

<body style="background-color: #f9f9f9;">

    <div style="display: flex; gap: 10px;">
        @include('layouts.nav')
        <div class="m-2" style="width: 100%">
            <div class="container pe-5">
                <div class="row">
                    <h5 class="mt-4">
                        Attendance
                        <h6>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
                                </ol>
                            </nav>
                        </h6>
                    </h5>
                    <div>
                        <div class="d-flex coll">
                            <div class="col" style="box-shadow: 0px 10px 20px -10px #A18AFF;">
                                <input class="form-control" type="text" placeholder="Employee Name" disabled
                                    aria-label="default input example" value="{{ $currentuser->name }}">
                            </div>
                            <div class="col input-group" style="box-shadow: 0px 10px 20px -10px #A18AFF;">
                                <select class="form-select form-control-sm filter-select" id="month">
                                    <option selected>Select Month</option>
                                    @foreach ($month as $m)
                                        <option>{{ $m->month }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col input-group" style="box-shadow: 0px 10px 20px -10px #A18AFF;">
                                <select class="form-select form-control-sm filter-select" id="year">
                                    <option selected>Select Year</option>
                                    @foreach ($year as $y)
                                        <option>{{ $y->year }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div
                            style="background-color: rgb(255, 255, 255); border-radius: 10px; overflow-x: scroll; box-shadow: 0px 10px 20px -10px #A18AFF;">
                            <div class="row text-center">

                                <table class="table table-striped mt-3" id="datatable">
                                    <thead>
                                        <tr>

                                            <th scope="col">Nama</th>
                                            <th scope="col">Posisi</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Kegiatan</th>
                                            <th scope="col">Opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agendas as $data)
                                            <tr>

                                                <td tdscope="col">{{ $data->name }}</td>
                                                <td scope="col">{{ $data->group_name }}</td>
                                                <td scope="col">{{ $data->waktu }}</td>
                                                <td scope="col">{{ $data->tanggal }}</td>
                                                <td scope="col" class="text-truncate" style="max-width: 150px;">
                                                    {{ $data->kegiatan }}
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#ModalView-{{ $data->id }}"
                                                            title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#AgendaEdit-{{ $data->id }}"
                                                            title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#AgendaDelete-{{ $data->id }}"
                                                            title="Edit"><i class="fa fa-trash"></i></button>
                                                        {{-- <a href="{{ url('delete/' . $data->id) }}"
                                                            class="btn btn-sm btn-delete" data-id="2057"
                                                            data-toggle="tooltip" title="Hapus"><i
                                                                class="fa fa-trash"></i></a> --}}
                                                    </div>
                                                </td>
                                            </tr>

                                            @include('modal.edit_agenda')
                                            @include('modal.delete_agenda')
                                            @include('modal.view')
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partials.css_container')
    @include('partials.css_readonly')
    @extends('partials.history_script')
</body>

</html>
