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


    <style>
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

        button {
            background-color: #b1a2f0;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        button:hover {
            background-color: #6E56CF;
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


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100vh;">
        <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">

            </svg>
            <span class="fs-4">Journal</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">

            {{-- <li>
                <a href="#" class="nav-link ">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#grid"></use>
                    </svg>
                    Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                    Customers
                </a>
            </li> --}}

            {{-- @foreach (getMenus() as $menu) --}}
            <li class="nav-item" style="background-color: #ae9fec;">
                <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : 'nav-link' }}"
                    aria-current="page">
                    <i class="fa-solid fa-gauge" href="#"></i>&nbsp;
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/agenda" class="nav-link {{ request()->is('agenda') ? 'active' : 'nav-link' }}"
                    aria-current="page">
                    <i class="fa-solid fa-clipboard-user"></i>&nbsp;
                    Attendance
                </a>
            </li>
            <li>
                <a href="/history" class="nav-link {{ request()->is('history') ? 'active' : 'nav-link' }} "
                    aria-current="page">
                    <i class="fa-solid fa-clock-rotate-left"></i>&nbsp;
                    History
                </a>
            </li>

            {{-- @endforeach --}}
        </ul>
        <!-- Default dropup button -->


        <!-- Split dropup button -->
        <button id="dropBtn" class="text-center"><i class="fa-solid fa-gear"></i>&nbsp; Opsi Pengguna</button>
        <div class="dropup-content" id="myDropup">
            <a href="#">
                <p style="text-decoration: none"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp; Sign Out</p>
            </a>
        </div>
    </div>

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
    <script type="text/javascript">
        $('li a').on('click', function() {
            $('li a.active').removeClass('active');

            $(this).addClass('active');

        });
    </script>

    <script type="text/javascript">
        $(function() {
            //$(".dropdown-toggle").dropdown('toggle'); // this works
            $('#click').click(function(e) {
                e.stopPropagation();
                $(".dropdown-toggle").dropdown('toggle'); // this doesn't
            });
        });
    </script>

    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
</body>

</html>
