<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Sidebar</title>
</head>

<body style="background-color: #d9d9d9;">
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
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
                <ul class="nav nav-pills flex-column">
                    @role('admin')
                        <li class="navsd mb-2 text-center">
                            <a href="/history"
                                class="btn btn-primary mainsd {{ request()->is('history') ? 'active' : 'nav-link' }} "
                                aria-current="page">
                                <i class="fa-solid fa-toolbox"></i>
                            </a>
                        </li>
                    @endrole
                    <li class="navsd mb-2 text-center">
                        <a href="/dashboard"
                            class="btn btn-primary mainsd {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                            style="text-decoration: none; color: #000;">
                            <i class="fa-solid fa-gauge" href="#"></i>
                        </a>
                    </li>

                    <li class="navsd mb-2 text-center">
                        <a href="/agenda"
                            class="btn btn-primary mainsd {{ request()->is('agenda') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-clipboard-user"></i>
                        </a>
                    </li>
                    </li>
                    <li class="navsd mb-2 text-center">
                        <a href="/history"
                            class="btn btn-primary mainsd {{ request()->is('history') ? 'active' : 'nav-link' }} "
                            aria-current="page">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </a>
                    </li>

                    <li class="navsd mb-2 text-center">
                        <div class="btn-group dropend">
                            <button type="button" class="nav-list btn btn-primary mainsd dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-user"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp;Sign Out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end sidebar -->
    <style>
        @media(max-width:768px) {
            .sidebar.close {
                visibility: hidden;
                display: none;
            }

            .sidebar.open {
                background-color: #fff;
                border-radius: 10px;
                display: block;
                visibility: visible;
            }
        }

        @media(min-width:769px) {
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
            background-color: #6F61C0;
            border: 2px solid #6F61C0;
            border-bottom: 6px solid #6558a9;
            color: #fff;
        }

        /*offcanvas*/
        .offcanvas-body .wrapp .nav-item .nav-link {
            margin-bottom: 8px;
            color: #46157A;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            background-color: #fff;
        }

        .offcanvas-body .wrapp .nav-item .nav-link:hover {
            background-color: #6F61C0;
            color: white;
            border: 2px solid #6F61C0;
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
    </style>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
