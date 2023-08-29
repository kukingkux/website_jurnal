<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">





    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>


    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100vh;">
        <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">

            </svg>
            <span class="fs-4">Dashboard</span>
        </a>
        <hr>
        <div class="wrapper">
            <ul class="nav nav-pills flex-column mb-auto">


                {{-- @foreach (getMenus() as $menu) --}}
                <li class="nav-item">
                    <!-- /admin -->
                    <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                        aria-current="page">
                        <i class="fa-solid fa-gauge" href="#"></i>&nbsp;
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <!-- /admin -->
                    <a href="/agenda" class="nav-link {{ request()->is('agenda') ? 'active' : 'nav-link' }}"
                        aria-current="page">
                        <i class="fa-solid fa-clipboard-user"></i>&nbsp;
                        Absen
                    </a>
                </li>
                <li class="nav-item">
                    <!-- /admin -->
                    <a href="/history" class="nav-link {{ request()->is('history') ? 'active' : 'nav-link' }} "
                        aria-current="page">
                        <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                        Riwayat
                    </a>
                </li>
                <li class="nav-item">
                    <button id="dropBtn" class="text-center nav-link"><i class="fa-solid fa-gear"></i>&nbsp; Opsi
                        Pengguna</button>
                </li>
                <div class="dropup-content" id="myDropup">
                    <a href="logout">
                        <p style="text-decoration: none"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp; Sign
                            Out</p>
                    </a>
                </div>
                {{-- @endforeach --}}
            </ul>
        </div>
        <!-- Split dropup button -->

    </div>

    <style>
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
            bottom: 7.5%;
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
    </style>

    <style>
        /* CSS untuk tombol aktif */
        .nav-item .nav-link {
            margin-bottom: 8px;
            color: #46157A;
            border: 2px solid #dddddd;
            border-bottom: 6px solid #dddddd;
            background-color: #fff;
        }

        .nav-item .nav-link.active {
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
