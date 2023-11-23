<style>
    @media (max-width: 768px) {
        .sidebar.close {
            visibility: hidden;
            display: none;
        }

        .sidebar.open {
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
        color: #000;
    }

    .navsd .btn.btn-primary.mainsd:active {
        width: 100%;
        background-color: #6f61c0;
        border: 2px solid #6f61c0;
        border-bottom: 6px solid #6558a9;
        color: #fff;
    }

    /*offcanvas*/
    .offcanvas-body .wrapp .nav-item .nav-link {
        margin-bottom: 8px;
        color: #6f61c0;
        border: 2px solid #dddddd;
        border-bottom: 6px solid #dddddd;
        background-color: #fff;
    }

    .offcanvas-body .wrapp .nav-item .nav-link:hover {
        background-color: #6f61c0;
        color: white;
        border: 2px solid #6f61c0;
        border-bottom: 6px solid #6558a9;
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
        background-color: #6f61c0;
        color: white;
        border: 2px solid #6f61c0;
        border-bottom: 6px solid #6558a9;
    }

    /* CSS untuk tombol aktif */
    .navsd .nav-link {
        margin-bottom: 8px;
        color: #6f61c0 !important;
        border: 2px solid #dddddd;
        border-bottom: 6px solid #dddddd;
        background-color: #fff;
    }

    .navsd .nav-link:hover {
        background-color: #6f61c0 !important;
        color: white !important;
        border: 2px solid #6f61c0 !important;
        border-bottom: 6px solid #6558a9 !important;
    }

    .navsd .nav-link.active {
        background-color: #6f61c0 !important;
        color: white !important;
        border: 2px solid #6f61c0 !important;
        border-bottom: 6px solid #6558a9 !important;
    }

    .nav-item .nav-link {
        margin-bottom: 8px;
        color: #6f61c0;
        border: 2px solid #dddddd;
        border-bottom: 6px solid #dddddd;
        background-color: #fff;
    }

    .nav-item .nav-link.active {
        background-color: #6f61c0 !important;
        color: white;
        border: 2px solid #6f61c0;
        border-bottom: 6px solid #6558a9;
    }
</style>
