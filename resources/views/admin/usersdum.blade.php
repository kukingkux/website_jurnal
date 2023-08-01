<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex p-2">
        @include('admin.layouts.nav')
        <div class="container mt-5" style="background-color: rgb(255, 255, 255); border-radius: 5px;">
            <div class="row text-center">
                <h1 class="mt-4">List Users</h1>

                <table class="table table-striped mt-5">
                    <thead>
                        <tr>

                            <th scope="col">Nama</th>
                            <th scope="col">Sekolah</th>
                            <th scope="col">Email</th>
                            <th>
                                <div class="text-end mt-4">
                                    <button type="button" style="background-color: #6E56CF; color: #fff;"
                                        class="btn text-center" data-bs-target="#ModalCreate"
                                        data-bs-toggle="modal">Tambah
                                        Data &nbsp;<i class="fa-solid fa-plus"></i></button>


                                </div>
                            </th>
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
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#ModalView-{{ $data->id }}" title="View"><i
                                                class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#ModalUbah-{{ $data->id }}" title="Edit"><i
                                                class="fa fa-edit"></i></button>
                                        <a href="{{ url('delete/' . $data->id) }}"
                                            class="btn btn-sm btn-danger btn-delete" data-id="2057"
                                            data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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

    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
