<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Office || Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background-color: #D9D9D9;">
    <div class="d-flex">
        @include('layouts.nav')
        <div class="container">
            <div class="row">
                <!-- dashboard title -->
                <div>
                    <h5 class="mt-4">
                        Table Office
                        <h6>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table Office</li>
                                </ol>
                            </nav>
                        </h6>
                    </h5>
                </div>
                <!-- end dashboard title -->
                <!-- card -->
                <div>
                    <div class="container mt-4"
                        style="background-color: rgb(255, 255, 255); border-radius: 10px; box-shadow: 0px 10px 20px -10px #A18AFF;">
                        <div class="row text-center">

                            <table class="table table-striped mt-2">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">group_id</th>
                                        <th scope="col">Kantor</th>
                                        <th scope="col">is_admin</th>
                                        <th scope="col">created_at</th>
                                        <th scope="col">updated_at</th>
                                        <th scope="col">option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>group</td>
                                        <td>Campus Digital</td>
                                        <td><i class="fa-regular fa-circle-xmark" style="color: red;"></i><i
                                                class="fa-regular fa-circle-check" style="color: green;"></i></td>
                                        <td>18/07/2023 14.42</td>
                                        <td>18/07/2023 14.42</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm "><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-sm "><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-delete"><i
                                                        class="fa-regular fa-trash-can"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>

</html>
