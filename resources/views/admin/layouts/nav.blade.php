<body>
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-header d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr>
            <div class="wrapp">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}"
                            class="nav-link {{ request()->is('admin') ? 'active' : 'nav-link' }}" aria-current="page">
                            <i class="fa-solid fa-toolbox"></i></i>&nbsp;
                            <span class="sdtext">Dashboard (Admin)</span>
                        </a>
                    </li>

                    <!-- {{-- @foreach (getMenus() as $menu) --}} -->
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-gauge"></i>&nbsp;
                            <span class="sdtext">Dashboard (User)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin/user" class="nav-link {{ request()->is('admin/user') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-clipboard-user"></i>&nbsp;
                            <span class="sdtext">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn btn-secondary dropdown-toggle text-start" style="width: 100%;"
                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fa-solid fa-gear"></i>&nbsp; <span class="sdtext">Opsi
                                Pengguna</span></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#"><i
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
                    <li class="navsd mb-2 text-center nav-item" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Dashboard (Admin)">
                        <a href="/"
                            class="btn btn-primary mainsd nav-link {{ request()->is('admin') ? 'active' : 'nav-link' }}">
                            <i class="fa-solid fa-toolbox"></i>
                        </a>
                    </li>
                    <li class="navsd mb-2 text-center nav-item" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Dashboard (User)">
                        <a href="/dashboard"
                            class="btn btn-primary mainsd nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}">
                            <i class="fa-solid fa-gauge" href="#"></i>
                        </a>
                    </li>
                    <li class="navsd mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Users">
                        <a href="{{ route('admin.user.index') }}"
                            class="btn btn-primary mainsd nav-link {{ request()->is('admin/user') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-clipboard-user"></i>
                        </a>
                    </li>
                    </li>
                    @role('admin')
                        <li class="navsd mb-2 text-center">
                            <div class="btn-group dropend">
                                <button type="button" class="nav-list btn btn-primary mainsd dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-user"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/logout"><i
                                                class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp;Sign Out</a></li>
                                </ul>
                            </div>
                        </li>
                    @endrole
                </ul>
            </div>
        </div>
    </nav>
    <!-- end sidebar -->
    @extends('admin.partials.layout.nav_style')


    @extends('admin.partials.layout.nav_script')




</body>

</html>
