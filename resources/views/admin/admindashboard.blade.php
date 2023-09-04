<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style=" background-color: #f4f4f4;">
    <style>
        @media(max-width:768px) {
            .container {
                margin-top: 20px;
            }
        }

        .btn.btn-outline-secondary.mb-4.mt-2 {
            color: black;
            border-color: #6F61C0;
        }

        .btn.btn-outline-secondary.mb-4.mt-2:hover {
            color: white;
            background-color: #6F61C0;
            border-color: #6F61C0;
        }

        .cardflex {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            gap: 20px;
            width: 100%;
        }

        .cardflex .card {
            width: 100%;
            border-radius: 10px;
            border-style: none;
            border-style: none;
            box-shadow: 0px 10px 20px -10px #4891ff;
        }

        .card-body .text-center .card-subtitle {
            margin-bottom: 20px;
        }

        @media(max-width:1335px) {
            .cardflex {
                width: 100%;
                gap: 10px;
            }

            .cardflex .card {
                width: 100%;
            }

            .card-body .text-center .card-subtitle {
                font-size: 19px;
            }

            .card-body .text-center .m-0 {
                font-size: 21px;
            }

            .breadcrumb {
                font-size: 19px;
            }

            .row .usn {
                font-size: 21px;
            }
        }

        @media(max-width:970px) {
            .cardflex {
                width: 100%;
                gap: 10px;
            }

            .cardflex .card {
                width: 100%;
            }

            .card-body .text-center .card-subtitle {
                font-size: 19px;
            }

            .card-body .text-center .m-0 {
                font-size: 21px;
            }

            .breadcrumb {
                font-size: 19px;
            }

            .row .usn {
                font-size: 21px;
            }
        }

        @media(max-width:588px) {
            .cardflex {
                width: 100%;
                gap: 10px;
                flex-direction: column;
            }

            .card-body .text-center .card-subtitle {
                margin-bottom: 10px;
                font-size: 15px;
            }

            .card-body .text-center .m-0 {
                font-size: 17px;
            }

            .breadcrumb {
                font-size: 16px;
            }

            .row .usn {
                font-size: 19px;
            }
        }
    </style>
    <div class="d-flex justify-content-between">
        @include('admin.layouts.nav')
        <div class="container">
            <div class="row">
                <!-- dashboard title -->
                <h5 class="usn mt-4">
                    {{ $currentuser->name }}
                    <h5>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </h5>
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
                <div>
                    <div class="container mt-4" style="border-style: none; box-shadow: 0px 10px 20px -10px #4891ff;">
                        <div class="row align-items-center" style="background-color: #fff; border-radius: 20px;">
                            <div class="col-lg-4">
                                <img src="https://img.freepik.com/free-vector/confirmed-attendance-concept-illustration_114360-7745.jpg?w=740&t=st=1691032445~exp=1691033045~hmac=70e11368e7d6b65288d8fa3bd34515850ca6e0a524e592a979ae638fad26a3f1"
                                    alt="customer-support" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <a href="#"><button type="button" class="btn btn-outline-secondary mb-2 mt-2"
                                        style="width: 100%;">Member List</button></a>
                                <a href="#"><button type="button" class="btn btn-outline-secondary mb-2 mt-2"
                                        style="width: 100%;">Attendance</button></a>
                                <a href="#"><button type="button" class="btn btn-outline-secondary mb-2 mt-2"
                                        style="width: 100%;">Logout</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end btn button -->
                <div>
                    <div class="container">
                        <div class="row mt-4">
                            @include('../layouts.kalender')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>

</html>
