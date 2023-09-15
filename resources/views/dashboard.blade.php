<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard || User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>

<body style="background-color: #f4f4f4">
    <div style="display: flex; gap: 10px;">
        @include('layouts.nav')
        <div class="container">
            <div class="row">
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
                <div class="carduser">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="card-subtitle mb-4">Total Users</h6>
                                <h2 class="card-subtitle2">{{ $count_user }}</h>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="card-subtitle mb-4">Member</h6>
                                <h2 class="card-subtitle2">{{ $count_member }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="card-subtitle mb-4">Admin</h6>
                                <h2 class="card-subtitle2">{{ $count_admin }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- btn button -->
                <div>
                    <div class="container mt-4"
                        style="box-shadow: 0px -5px 20px -10px #a18aff; background-color: #fff; border-radius: 12px;">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <img src="https://img.freepik.com/free-vector/confirmed-attendance-concept-illustration_114360-7745.jpg?w=740&t=st=1691032445~exp=1691033045~hmac=70e11368e7d6b65288d8fa3bd34515850ca6e0a524e592a979ae638fad26a3f1"
                                    alt="customer-support" class="img-fluid" />
                            </div>
                            <div class="col-lg-8">
                                <a href="/agenda"><button type="button" class="btn btn-outline-secondary mb-4 mt-2"
                                        style="width: 100%">
                                        Absen
                                    </button></a>
                                <a href="/history"><button type="button" class="btn btn-outline-secondary mb-4 mt-2"
                                        style="width: 100%">
                                        Riwayat
                                    </button></a>
                                <a href="/logout"><button type="button" class="btn btn-outline-secondary mb-4 mt-2"
                                        style="width: 100%">
                                        Logout
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end btn button -->
                @include('layouts.kalender')

            </div>
        </div>
    </div>
    <style>
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

        .carduser {
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
            .carduser {
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


</body>

</html>
