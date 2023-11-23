@include('partials.dashboard_head')

<body style="background-color: #f4f4f4">
    <div style="display: flex; gap: 10px;">
        @include('layouts.nav')
        <div class="container p-5">

            <!-- dashboard title -->
            <h5 class="mt-1">
                {{ $currentuser->name }}
                <h6>
                    <nav style="
                  --bs-breadcrumb-divider: url(
                    &#34;data:image/svg + xml,
                    %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;
                  );
                "
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </h6>
            </h5>
            <!-- end dashboard title -->
            <!-- btn button -->

            <div class=" mt-4"
                style="box-shadow: 0px -5px 20px -10px #a18aff; background-color: #fff; border-radius: 12px;">
                <div class="row align-items-center text-center">
                    <div class="col-lg-4">
                        <img src="https://img.freepik.com/free-vector/confirmed-attendance-concept-illustration_114360-7745.jpg?w=740&t=st=1691032445~exp=1691033045~hmac=70e11368e7d6b65288d8fa3bd34515850ca6e0a524e592a979ae638fad26a3f1"
                            alt="customer-support" class="img-fluid p-1" />
                    </div>
                    <div class="col-lg-8">
                        <a href="/agenda"><button type="button" class="btn btn-outline-secondary mb-4 mt-2">
                                Absen
                            </button></a>
                        <a href="/history"><button type="button" class="btn btn-outline-secondary mb-4 mt-2">
                                Riwayat
                            </button></a>
                        <a href="/logout"><button type="button" class="btn btn-outline-secondary mb-4 mt-2">
                                Logout
                            </button></a>
                    </div>
                </div>
            </div>

            <!-- end btn button -->
            @include('layouts.kalender')


        </div>
    </div>

    @include('partials.css_container')
    @extends('partials.dashboard_script')
</body>

</html>
