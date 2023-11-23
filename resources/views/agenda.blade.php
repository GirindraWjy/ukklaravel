@extends('partials.agenda_head')

<body style="background-color: #f9f9f9;">
    <div style="display: flex; gap: 10px;">
        @include('layouts.nav')
        <section style="flex-basis: 100%">
            <div class="container pe-5">
                <div class="row align-items-center">
                    <h5 class="mt-4">
                        Absensi
                        <h6>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Absensi</li>
                                </ol>
                            </nav>
                        </h6>
                    </h5>
                    <div>
                        <div class="col pt-3 pb-1"
                            style="background-color: white; border-radius: 20px; box-shadow: 0px 10px 20px -10px #A18AFF;">
                            <h5 class="ms-4">Form Absensi Magang Campus Digital</h5>
                            <hr>
                            <form method="post" action="{{ route('user.agenda.store') }}">
                                {{ csrf_field() }}
                                <div class="mb-3 me-4 ms-4 col">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama"
                                        value="{{ $currentuser->name }}" readonly="readonly">
                                    <input type="text" class="form-control d-none" name="user_id"
                                        value="{{ $currentuser->id }}" readonly="readonly">
                                    <input type="text" class="form-control d-none" name="groups_id"
                                        value="{{ $currentuser->groups_id }}" readonly="readonly">


                                    <label for="disabledSelect" class="form-label">Group</label>
                                    <select id="disabledSelect" class="form-select" name="group_name" tabindex="-1"
                                        readonly required>

                                        @foreach ($usergroup as $g)
                                            <option>{{ $g->groups->group_name }}</option>
                                        @endforeach


                                    </select>


                                </div>
                                <div class="mb-3 me-4 ms-4 col">
                                    <label for="disabledSelect" class="form-label">Waktu Kerja</label>
                                    <select id="disabledSelect" class="form-select" name="waktu" required>
                                        <option>--Pilih Waktu--</option>
                                        <option>08.00 - 16.00</option>
                                        <option>08.00 - 13.00</option>
                                    </select>
                                </div>
                                <div class="mb-3  me-4 ms-4">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>
                                <div class="mb-3 me-4 ms-4">
                                    <label class="form-label">Kegiatan</label>
                                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="kegiatan" maxlength="256"
                                        placeholder="Kegiatan (max. 256 karakter)" required></textarea>
                                </div>
                                <div class="mb-3 me-4 ms-4 d-flex flex-row-reverse gap-2">

                                    <a href="/dashboard"><button class="btn btn-primary register"
                                            style="background: #6f42c1" type="button">Kembali</button></a>
                                    <button id="register-button" type="submit" class="btn btn-primary register"
                                        style="background: #6f42c1">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @extends('partials.agenda_head')
    @include('partials.css_readonly')
    @include('admin.partials.css_container')

</body>

</html>
