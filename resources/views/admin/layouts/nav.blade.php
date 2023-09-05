<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="{!! asset('images/gcm_ico.ico') !!}" />
    <title>Sidebar</title>
</head>

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


                    <!-- {{-- @foreach (getMenus() as $menu) --}} -->
                    <li class="nav-item">
                        <a href="/admin" class="nav-link {{ request()->is('admin') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-gauge" href="#"></i>&nbsp;
                            <span class="sdtext">Dashboard (Admin)</span>
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
                        <a href="admin/attendance"
                            class="nav-link {{ request()->is('admin/attendance') ? 'active' : 'nav-link' }} "
                            aria-current="page">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span class="sdtext">Attendance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin/groups"
                            class="nav-link {{ request()->is('admin/groups') ? 'active' : 'nav-link' }} "
                            aria-current="page">
                            <i class="fa-solid fa-building"></i></i>&nbsp;
                            <span class="sdtext">Groups</span>
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
                    <li class="navsd mb-2 text-center nav-item">
                        <a href="/"
                            class="btn btn-primary mainsd nav-link {{ request()->is('admin') ? 'active' : 'nav-link' }}">
                            <i class="fa-solid fa-gauge" href="#"></i>
                        </a>
                    </li>
                    <li class="navsd mb-2 text-center">
                        <a href="{{ route('admin.user.index') }}"
                            class="btn btn-primary mainsd nav-link {{ request()->is('admin/user') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-clipboard-user"></i>
                        </a>
                    </li>
                    </li>
                    <li class="navsd mb-2 text-center">
                        <a href="{{ route('admin.attendance.index') }}"
                            class="btn btn-primary mainsd nav-link {{ request()->is('admin/attendance') ? 'active' : 'nav-link' }} "
                            aria-current="page">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </a>
                    </li>
                    @role('admin')
                        <li class="navsd mb-2 text-center">
                            <a href="/admin/groups"
                                class="btn btn-primary mainsd nav-link {{ request()->is('admin/groups') ? 'active' : 'nav-link' }} "
                                aria-current="page">
                                <i class="fa-solid fa-building"></i>
                            </a>
                        </li>
                        <li class="navsd mb-2 text-center">
                            <a href="{{ route('admin.roles.index') }}"
                                class="btn btn-primary mainsd nav-link {{ request()->is('admin/groups') ? 'active' : 'nav-link' }} "
                                aria-current="page">
                                <i class="fa-solid fa-building"></i>
                            </a>
                        </li>
                    @endrole
                </ul>
            </div>
            <div class="btn-group dropup">
                <button type="button" class="btn btn-primary mainsd2 dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-circle-user"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Sign Out</a></li>
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
            width: 80px;
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

        .btn.btn-primary.mainsd {
            width: 100%;
            background-color: #f9f9f9;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            color: #000;
        }

        .btn.btn-primary.mainsd2 {
            width: 100%;
            background-color: #f9f9f9;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            color: #000;
        }

        /*offcanvas*/
        .offcanvas-body .wrapp .nav-item .nav-link {
            margin-bottom: 8px;
            color: #1450A3;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            background-color: #fff;
        }

        .offcanvas-body .wrapp .nav-item .nav-link:hover {
            background-color: #337CCF;
            color: white;
            border: 2px solid #337CCF;
            border-bottom: 6px solid #1450A3;
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
            background-color: #337CCF;
            color: white;
            border: 2px solid #337CCF;
            border-bottom: 6px solid #1450A3;
        }
    </style>
    <style>
        /* CSS untuk tombol aktif */
        .navsd .nav-link {
            margin-bottom: 8px;
            color: #337CCF;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            background-color: #fff;
        }

        .navsd .nav-link:hover {
            background-color: #337CCF;
            color: white;
            border: 2px solid #337CCF;
            border-bottom: 6px solid #1450A3;
        }

        .navsd .nav-link.active {
            background-color: #337CCF;
            color: white;
            border: 2px solid #337CCF;
            border-bottom: 6px solid #1450A3;
        }

        .nav-item .nav-link {
            margin-bottom: 8px;
            color: #337CCF;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            background-color: #fff;
        }

        .nav-item .nav-link.active {
            background-color: #337CCF;
            color: white;
            border: 2px solid #337CCF;
            border-bottom: 6px solid #1450A3;
        }
    </style>
    <script src="js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".nav-link").click(function() {
                // Remove active class from all tabs
                $(".nav-link").removeClass("active");

                // Add active class to the clicked tab
                $(this).addClass("active");
            });
        });
    </script>
</body>

</html>
