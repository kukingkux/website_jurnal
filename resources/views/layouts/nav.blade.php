<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>User Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">






    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>

    <nav>
        <div class="sidebar close">
            <div>
                <a href="/admin" style="text-decoration: none; color: #000;">
                    Dashboard
                </a>
            </div>
            <hr>
            <div class="wrapper">
                <ul class="nav nav-pills flex-column mb-auto">


                    {{-- @foreach (getMenus() as $menu) --}}
                    <li class="nav-item-1">
                        <!-- /dashboard -->
                        <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-gauge" href="#"></i>&nbsp;
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item-1">
                        <!-- /agenda -->
                        <a href="/agenda" class="nav-link {{ request()->is('agenda') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-clipboard-user"></i>&nbsp;
                            <span class="sdtext">Absen</span>
                        </a>
                    </li>
                    <li class="nav-item-1">
                        <!-- /history -->
                        <a href="/history" class="nav-link {{ request()->is('history') ? 'active' : 'nav-link' }} "
                            aria-current="page">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span class="sdtext">Riwayat</span>
                        </a>
                    </li>
                    <li class="nav-item-1">
                        <button id="dropBtn" class="nav-link"><i class="fa-solid fa-gear"></i>&nbsp; <span
                                class="sdtext">Opsi
                                Pengguna</span></button>
                    </li>
                    <div class="dropup-content" id="myDropup">
                        <a href="#">
                            <p style="text-decoration: none"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp;
                                Sign
                                Out</p>
                        </a>
                    </div>
                    {{-- @endforeach --}}
                </ul>
            </div>
            <!-- Split dropup button -->
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container nav-2 sticky-top">
            <a href="/admin" class="btn dashboard">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                aria-controls="sidebar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="sidebar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    {{-- @foreach (getMenus() as $menu) --}}
                    <li class="nav-item-1">
                        <!-- /dashboard -->
                        <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-gauge" href="#"></i>&nbsp;
                            <span class="sdtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item-1">
                        <!-- /agenda -->
                        <a href="/agenda" class="nav-link {{ request()->is('agenda') ? 'active' : 'nav-link' }}"
                            aria-current="page">
                            <i class="fa-solid fa-clipboard-user"></i>&nbsp;
                            <span class="sdtext">Absen</span>
                        </a>
                    </li>
                    <li class="nav-item-1">
                        <!-- /history -->
                        <a href="/history" class="nav-link {{ request()->is('history') ? 'active' : 'nav-link' }} "
                            aria-current="page">
                            <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                            <span class="sdtext">Riwayat</span>
                        </a>
                    </li>
                    <li class="nav-item-1">
                        <button style="width: 100%;" id="dropBtn" class="nav-link dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fa-solid fa-gear"></i>&nbsp; <span class="sdtext">Opsi
                                Pengguna</span></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li class="text-center"><a href="logout">
                                    <p style="text-decoration: none"><i
                                            class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp; Sign
                                        Out</p>
                                </a></li>
                        </ul>

                    </li>
                    {{-- @endforeach --}}
                </ul>
            </div>
        </div>
    </nav>

    <style>
        @media(max-width:680px) {
            nav .sidebar.close {
                visibility: hidden;
                display: none
            }

            .navbar {
                align-items: flex-start;
            }
        }

        @media(min-width:679px) {
            .container.nav-2 {
                visibility: hidden;
                display: none;
            }


        }

        .btn.hamburger {
            display: none;
        }

        .sidebar.close {
            display: block;
            width: 280px;
            height: 100vh;
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


        .dropup-content {
            display: none;
            position: absolute;
            top: auto;
            /* Mengubah 'top' menjadi 'auto' */
            bottom: 10%;
            /* Mengubah 'bottom' menjadi '100%' */
            left: 50px;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
        }

        .dropup-content.active {
            display: block;

        }

        /* CSS untuk tombol aktif */
        .nav-item-1 .nav-link {
            margin-bottom: 8px;
            color: #46157A;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            background-color: #fff;
        }

        .nav-item-1 .nav-link.active {
            background-color: #6F61C0;
            color: white;
            border: 2px solid #6F61C0;
            border-bottom: 6px solid #6558a9;
        }

        .collapse .nav-item-1 .nav-link {
            text-align: center;
            margin-bottom: 8px;
            color: #46157A;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            background-color: #fff;
        }

        .collapse .nav-item-1 .nav-link.active {
            text-align: center;
            background-color: #6F61C0;
            color: white;
            border: 2px solid #6F61C0;
            border-bottom: 6px solid #6558a9;
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById("dropBtn").addEventListener("click", function() {
            var dropupContent = document.getElementById("myDropup");
            if (dropupContent.style.display === "block") {
                dropupContent.style.display = "none";
            } else {
                dropupContent.style.display = "block";
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Memilih semua elemen <a> dengan class "nav-link"
            $("a.nav-link").on("click", function() {
                // Menghapus kelas "active" dari semua elemen dengan class "nav-link"
                $("a.nav-link").removeClass("active");
                // Menambahkan kelas "active" ke elemen yang sedang dipencet
                $(this).addClass("active");
            });
        });
    </script>

    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
</body>

</html>
