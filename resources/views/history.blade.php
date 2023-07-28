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
        @include('layouts.nav')
        <div class="container mt-5" style="background-color: rgb(255, 255, 255); border-radius: 5px;">
            <div class="row text-center">
                <h1 class="mt-4">Riwayat Absensi & Kegiatan</h1>
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>

                            <th scope="col">Nama</th>
                            <th scope="col">Sekolah</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Opsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agendas as $data)
                            <tr>

                                <td tdscope="col">{{ $data->nama }}</td>
                                <td scope="col">{{ $data->sekolah }}</td>
                                <td scope="col">{{ $data->waktu }}</td>
                                <td scope="col">{{ $data->tanggal }}</td>
                                <td scope="col">{{ $data->kegiatan }}</td>
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

                            <div class="modal fade" id="ModalUbah-{{ $data->id }}" tabindex="-1"
                                aria-labelledby="ModalCreateLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="ModalUbahLabel">Edit Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ url('update/' . $data->id) }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" name="nama" class="form-control"
                                                        value="{{ $data->nama }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">Sekolah</label>
                                                    <select id="disabledSelect" name="sekolah" class="form-select">

                                                        @foreach ($agendas as $g)
                                                            <option>{{ $g->sekolah }}</option>
                                                            <option>{{ $g->sekolah }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">Waktu Kerja</label>
                                                    <select id="disabledSelect" name="waktu" class="form-select">
                                                        <option>{{ $data->waktu }}</option>
                                                        <option>08.00 - 16.00</option>
                                                        <option>08.00 - 13.00</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Tanggal</label>
                                                    <input type="date" name="tanggal" class="form-control"
                                                        value="{{ $data->tanggal }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Kegiatan</label>
                                                    <textarea class="form-control" name="kegiatan" id="floatingTextarea2" style="height: 100px">{{ $data->kegiatan }}</textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary">Save changes</button>

                                                </div>
                                        </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            @include('modal.view')
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
