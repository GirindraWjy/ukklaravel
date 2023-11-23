@include('admin.partials.dashboard_head')

<body style=" background-color: #f4f4f4;">

    <div style="display: flex; gap: 10px;">
        @include('admin.layouts.nav')
        <div class="container p-5">

            <!-- dashboard title -->
            <h5 class="usn mt-4">
                {{ $currentuser->name }}
                <h5>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </h5>
            </h5>
            <!-- end dashboard title -->
            <!-- card -->

            <div class="cardflex">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-subtitle">Member</h5>
                            <h3 class="m-0">{{ $count_member }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-subtitle">Admin</h5>
                            <h3 class="m-0">{{ $count_admin }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- btn button -->

            <div class="mt-4" style="border-style: none;">
                <div class="row align-items-center"
                    style="background-color: #fff; border-radius: 8px; max-width:100%; margin:0;">
                    <div class="col-lg-4">
                        <img src="https://img.freepik.com/free-vector/confirmed-attendance-concept-illustration_114360-7745.jpg?w=740&t=st=1691032445~exp=1691033045~hmac=70e11368e7d6b65288d8fa3bd34515850ca6e0a524e592a979ae638fad26a3f1"
                            alt="customer-support" class="img-fluid p-1">
                    </div>
                    <div class="col-lg-8 p-1">
                        <a href="admin/user"><button type="button" class="btn btn-outline-secondary mb-2 mt-2"
                                style="width: 100%;">Member List</button></a>
                        <a href="/logout"><button type="button" class="btn btn-outline-secondary mb-2 mt-2"
                                style="width: 100%;">Logout</button></a>
                    </div>
                </div>
            </div>

            <!-- end btn button -->


            <div class="row mt-4">
                @include('../layouts.kalender')
            </div>


        </div>
    </div>

    @include('admin.partials.css_container')
    @extends('admin.partials.dashboard_script')

</body>

</html>
