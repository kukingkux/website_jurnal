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
                                        <a href="#" class="btn btn-sm btn-info" data-toggle="tooltip"
                                            title="Detail" target="_blank"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip"
                                            title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger btn-delete" data-id="2057"
                                            data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
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
