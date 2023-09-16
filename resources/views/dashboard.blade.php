<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard || User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>

<body style="background-color: #f4f4f4">
    <div style="display: flex; gap: 10px;">
        @include('layouts.nav')
        <div class="container p-5">

            <!-- dashboard title -->
            <h5 class="mt-4">
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
            <!-- card -->
            <div class="cardflex">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-subtitle">Total Users</h5>
                            <h3 class="m-0">{{ $count_user }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-subtitle">Member</h5>
                            <h3 class="m-0">{{ $count_member }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-subtitle">Admin</h5>
                            <h3 class="m-0">{{ $count_admin }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
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
    <style>
        .btn.btn-outline-secondary.mb-4.mt-2 {
            width: 90%;
        }

        @media(max-width:768px) {
            .container {
                margin-top: 20px;
            }
        }

        .btn.btn-outline-secondary.mb-4.mt-2 {
            color: white;
            background-color: #6f61c0;
            border-color: #6f61c0;
            border-radius: 12px;
            border-style: none;
            box-shadow: 0px 10px 20px -10px #a18aff;
        }

        .btn.btn-outline-secondary.mb-4.mt-2:hover {

            background-color: #6f61c0df;
            border-color: #6f61c0df;
            box-shadow: 0px 5px 25px -5px #8f75f6;
        }

        .cardflex {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        .card {
            width: 100%;
            border-radius: 12px;
            border-style: none;
            box-shadow: 0px 10px 20px -10px #a18aff;

        }

        @media(max-width:768px) {
            .cardflex {
                flex-direction: column;
            }

            .card-subtitle {
                font-size: 16px;
            }

            .card-subtitle2 {
                font-size: 20px;
            }
        }
    </style>
    @include('admin.partials.css_container')
    @include('admin.partials.dashboard_script')
</body>

</html>
