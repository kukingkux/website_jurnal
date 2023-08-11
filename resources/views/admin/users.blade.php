<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User || Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #D9D9D9;">
    <!-- user -->
    <!-- user -->
    <div class="container-fluid d-flex p-2">
        @include('admin.layouts.nav')
        <div class="m-2">
            <div class="container">

                <div class="row d-flex">
                    <h5 class="mt-4">
                        Users
                        <h6>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                                </ol>
                            </nav>
                        </h6>
                    </h5>
                    <div class="card me-4"
                        style="width: 25rem; border-radius: 10px; box-shadow: 0px 10px 20px -10px #A18AFF;"">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-subtitle mb-4">Current User</h6>
                                <div class="input-group input-group-sm mb-3" style="width: 35%; height: 30%;">
                                    <select class="form-select form-control-sm" id="inputGroupSelect01">
                                        <option selected>30 days</option>
                                        <option value="1">7 days</option>
                                        <option value="2">1 days</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex">
                                <i class="col fa-solid fa-chart-simple fa-spin-pulse p-4 me-3"
                                    style="background-color: #6E56CF; color: #fff; border-radius: 10px;"></i>
                                <h1 class="col-lg-10">
                                    {{ $count_user }}
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="card me-4"
                        style="width: 25rem; border-radius: 10px; box-shadow: 0px 10px 20px -10px #A18AFF;"">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-subtitle mb-4">New User</h6>
                            </div>
                            <div>
                                <h1 class="mb-3">75%</h1>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 75%; background-color:#6E56CF;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- searchbar -->
            <div class="container mt-5">
                <div class="row">
                    <h4>User</h4>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex" style="box-shadow: 0px 10px 20px -10px #A18AFF;"">
                            <div class="px-1" style="background-color: #fff; border-radius: 20px 0px 0px 20px;">
                                <button type="button" class="btn btn-sm"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <div class="input-group input-group-sm" style="width: 100%;">
                                <input type="text"class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm" placeholder="Search User"
                                    style="border-style: none; border-radius: 0px 20px 20px 0px ;">
                            </div>
                        </div>
                        <div style="box-shadow: 0px 10px 20px -10px #A18AFF;">
                            <button data-bs-target="#ModalCreate" data-bs-toggle="modal" type="button"
                                class="btn btn-sm"
                                style="background-color: #6E56CF; color: #fff; border-radius: 20px">Create User</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5"
                style="background-color: rgb(255, 255, 255); border-radius: 10px; box-shadow: 0px 10px 20px -10px #A18AFF;"">
                <div class="row">
                    <table class="table table-striped mt-3 text-center">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Address</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Status</th>
                                <th scope="col">Role_id</th>
                                <th scope="col">Group_id</th>
                                <th scope="col">Office_id</th>
                                <th scope="col">Position_id</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                                <tr>
                                    <th scope="row">{{ $data->name }}</th>
                                    <td>-</td>
                                    <td class=" text-truncate" style="max-width: 150px;">
                                        {{ $data->password }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <div class="btn-group">
                                            <button data-bs-toggle="modal"
                                                data-bs-target="#ModalView-{{ $data->id }}" title="View"
                                                class="btn btn-sm"><i class="fa fa-eye"></i></button>
                                            <button data-bs-toggle="modal"
                                                data-bs-target="#ModalUbah-{{ $data->id }}" title="Edit"
                                                class="btn btn-sm"><i class="fa fa-edit"></i></button>
                                            <a href="{{ url('deleteuser/' . $data->id) }}" title="Hapus"
                                                class="btn btn-sm btn-delete"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.modal.view')
                                @include('admin.modal.create_user')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
