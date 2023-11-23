<style>
    @media (max-width: 768px) {
        .sidebar.close {
            visibility: hidden;
            display: none;
        }

        .sidebar.open {
            width: 100%;
            display: flex;
            flex-grow: 1;
            align-items: stretch;
            flex: 1;
            background-color: #fff;
            display: block;
            visibility: visible;
        }
    }

    @media (min-width: 769px) {
        .sidebar.close {

            visibility: visible;
            display: block;
        }

        .sidebar.open {

            display: none;
            visibility: hidden;
        }
    }

    /*sidebar*/
    .sidebar.close {
        display: block;
        width: 90px;
        height: 100vh;
        position: fixed;
        padding: 10px;
        background-color: #f9f9f9;
    }

    .wrapper {
        display: flex;
        justify-content: center;
        width: 100%;
        border-radius: 8px;
        background-color: #ededed;
    }

    ul {
        margin: 10px;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .navsd .btn.btn-primary.mainsd {
        width: 100%;
        background-color: #f9f9f9;
        border: 2px solid #dddddd;
        border-bottom: 6px solid #dddddd;
        color: #337ccf;
    }

    .navsd .btn.btn-primary.mainsd:active {
        width: 100%;
        background-color: #337ccf;
        border: 2px solid #337ccf;
        border-bottom: 6px solid #1450a3;
        color: #fff;
    }

    /*offcanvas*/
    .offcanvas-body .wrapp .nav-item .nav-link {
        margin-bottom: 8px;
        color: #337ccf;
        border: 2px solid #dddddd;
        border-bottom: 6px solid #dddddd;
        background-color: #fff;
    }

    .offcanvas-body .wrapp .nav-item .nav-link:hover {
        background-color: #337ccf;
        color: white;
        border: 2px solid #337ccf;
        border-bottom: 6px solid #1450a3;
    }

    .offcanvas-body {
        display: block;
        width: 100%;
        height: 100vh;
        position: absolute;
        padding: 10px;
        background-color: #f9f9f9;
    }

    .offcanvas-body .wrapp .nav-item .nav-link.active {
        background-color: #337ccf;
        color: white;
        border: 2px solid #337ccf;
        border-bottom: 6px solid #1450a3;
    }

    /* CSS untuk tombol aktif */
    .navsd .nav-link {
        margin-bottom: 8px;
        color: #337ccf !important;
        border: 2px solid #dddddd;
        border-bottom: 6px solid #dddddd;
        background-color: #fff;
    }

    .navsd .nav-link:hover {
        background-color: #337ccf !important;
        color: white !important;
        border: 2px solid #337ccf !important;
        border-bottom: 6px solid #1450a3 !important;
    }

    .navsd .nav-link.active {
        background-color: #337ccf !important;
        color: white !important;
        border: 2px solid #337ccf !important;
        border-bottom: 6px solid #1450a3 !important;
    }

    .nav-item .nav-link {
        margin-bottom: 8px;
        color: #337ccf;
        border: 2px solid #dddddd;
        border-bottom: 6px solid #dddddd;
        background-color: #fff;
    }

    .nav-item .nav-link.active {
        background-color: #337ccf !important;
        color: white;
        border: 2px solid #337ccf;
        border-bottom: 6px solid #1450a3;
    }
</style>
