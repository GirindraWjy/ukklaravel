<body>
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-header d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr>
            <div class="wrapp">
                <ul class="nav nav-pills flex-column mb-auto">
                    @role('admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}"
                                class="nav-link {{ request()->is('admin') ? 'active' : 'nav-link' }}" aria-current="page">
                                <i class="fa-solid fa-gauge" href="#"></i>&nbsp;
                                <span class="sdtext">Dashboard (Admin)</span>
                            </a>
                        </li>
                    @endrole
                    <!-- {{-- @foreach (getMenus() as $menu) --}} -->
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-gauge" href="#"></i>&nbsp;
                            <span class="sdtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/agenda" class="nav-link  {{ request()->is('agenda') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-clipboard-user"></i>&nbsp;
                            <span class="sdtext">Absen</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/history" class="nav-link {{ request()->is('history') ? 'active' : 'nav-link' }} "
                            aria-current="page">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span class="sdtext">Riwayat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn btn-secondary dropdown-toggle text-start" style="width: 100%;"
                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fa-solid fa-gear"></i>&nbsp; <span class="sdtext">Opsi
                                Pengguna</span></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/logout"><i
                                        class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp; Sign
                                    Out</p></a>
                            </li>
                        </ul>
                    </li>
                    <!-- {{-- @endforeach --}} -->
                </ul>
            </div>
        </div>
    </div>
    <!-- end offcanvas -->
    <!-- main sidebar -->
    <div class="sidebar open position-absolute" style="z-index: 1;">
        <div class="text-start">
            <button class="btn ofcnvs" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                    class="fa-solid fa-bars fa-xl"></i></button>
        </div>
    </div>
    <nav>
        <div class="sidebar close">
            <div class="text-center">
                <button class="btn" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                        class="fa-solid fa-bars fa-xl"></i></button>
            </div>
            <hr>
            <div class="wrapper">
                <ul class="nav nav-item nav-pills flex-column">
                    @role('admin')
                        <li class="navsd mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right"
                            title="Dashboard (Admin)">
                            <a href="/admin"
                                class="btn btn-primary mainsd nav-link {{ request()->is('admin') ? 'active' : 'nav-link' }} ">
                                <i class="fa-solid fa-toolbox"></i>
                            </a>
                        </li>
                    @endrole
                    <li class="navsd mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Dashboard">
                        <a href="/dashboard"
                            class="btn btn-primary mainsd nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                            style="text-decoration: none;">
                            <i class="fa-solid fa-gauge" href="#"></i>
                        </a>
                    </li>

                    <li class="navsd mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Agenda">
                        <a href="/agenda"
                            class="btn btn-primary mainsd nav-link {{ request()->is('agenda') ? 'active' : 'nav-link' }}">
                            <i class="fa-solid fa-clipboard-user"></i>
                        </a>
                    </li>
                    </li>
                    <li class="navsd mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Riwayat">
                        <a href="/history"
                            class="btn btn-primary mainsd nav-link {{ request()->is('history') ? 'active' : 'nav-link' }} ">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </a>
                    </li>

                    <li class="navsd mb-2 text-center">
                        <div class="btn-group dropend">
                            <button type="button" class="nav-list btn btn-primary mainsd nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-user"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/logout"><i
                                            class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp;Sign Out</li></a>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end sidebar -->

    @extends('partials.layouts.nav_style')
    @extends('partials.layouts.nav_script')

</body>

</html>
