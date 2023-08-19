<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users || Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #D9D9D9;">
    <style>
        .btn.text-center.btn-sm {
            color: #46157A;
            background-color: #d3aaff;
        }

        .btn.text-center.btn-sm:hover {
            color: white;
            background-color: #46157A;
        }
    </style>
    <div class="d-flex">
        @include('admin.layouts.nav')
        <div class="container">
            <div class="row">
                <!-- dashboard title -->
                <h5 class="mt-4">
                    {{ $currentuser->name }}
                    <h6>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </h6>
                </h5>
                <!-- end dashboard title -->
                <div>
                    <div class="container mt-3"
                        style="background-color: rgb(255, 255, 255); border-radius: 10px; box-shadow: 0px 10px 20px -10px #A18AFF;">
                        <div class="row text-center">
                            <div class="text-start mt-4">
                                <button type="button" class="btn text-center btn-sm" data-bs-target="#ModalCreate"
                                    data-bs-toggle="modal">Tambah
                                    Data &nbsp;<i class="fa-solid fa-plus"></i></button>


                            </div>

                            <table class="table table-striped mt-5">
                                <thead>
                                    <tr>

                                        <th scope="col">Nama</th>
                                        <th scope="col">Sekolah</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $data)
                                        <tr>

                                            <td tdscope="col">{{ $data->name }}</td>
                                            <td scope="col">-</td>
                                            <td scope="col">{{ $data->email }}</td>

                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#ModalView-{{ $data->id }}"
                                                        title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#ModalUbah-{{ $data->id }}"
                                                        title="Edit"><i class="fa fa-edit"></i></button>
                                                    <a href="{{ url('delete/' . $data->id) }}"
                                                        class="btn btn-sm btn-delete" data-id="2057"
                                                        data-toggle="tooltip" title="Hapus"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- @include('modal.edit') --}}
                                        @include('admin.modal.view')
                                        @include('admin.modal.create_user')
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- card -->
                <!-- end btn button -->
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
