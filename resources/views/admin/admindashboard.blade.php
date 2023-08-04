<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Depan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style=" background-color: #f4f4f4;">
    <div class="d-flex">
        @include('layouts.nav')
        <div class="container">
            <div class="row">
                <!-- dashboard title -->
                <h5 class="mt-4">
                    Dashboard
                    <h6>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </h6>
                </h5>
                <!-- end dashboard title -->
                <!-- card -->
                <div class="d-flex justify-content-between">
                    <div class="card"
                        style="width: 20rem; border-radius: 10px; border-style: none; border-style: none; box-shadow: 0px 10px 20px -10px #A18AFF;">
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="card-subtitle mb-4">Total Users</h6>
                                <h1>14</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card"
                        style="width: 20rem; border-radius: 10px; border-style: none; border-style: none; box-shadow: 0px 10px 20px -10px #A18AFF;">
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="card-subtitle mb-4">Member</h6>
                                <h1>12</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card"
                        style="width: 20rem; border-radius: 10px; border-style: none; border-style: none; box-shadow: 0px 10px 20px -10px #A18AFF;">
                        <div class="card-body">
                            <div class="text-center">
                                <h6 class="card-subtitle mb-4">Admin</h6>
                                <h1>2</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- btn button -->
                <div>
                    <div class="container mt-4" style="border-style: none; box-shadow: 0px 10px 20px -10px #A18AFF;">
                        <div class="row align-items-center" style="background-color: #fff; border-radius: 20px;">
                            <div class="col-lg-4">
                                <img src="https://img.freepik.com/free-vector/confirmed-attendance-concept-illustration_114360-7745.jpg?w=740&t=st=1691032445~exp=1691033045~hmac=70e11368e7d6b65288d8fa3bd34515850ca6e0a524e592a979ae638fad26a3f1"
                                    alt="customer-support" class="img-fluid">
                            </div>
                            <div class="col-lg-8">
                                <a href="#"><button type="button" class="btn btn-outline-secondary mb-4 mt-2"
                                        style="width: 100%;">Member List</button></a>
                                <a href="#"><button type="button" class="btn btn-outline-secondary mb-4 mt-2"
                                        style="width: 100%;">Logout</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end btn button -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>

</html>
