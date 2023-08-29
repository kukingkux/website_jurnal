<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Absensi || User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>

<body style="background-color: #D9D9D9;">
    <div class="container-fluid d-flex p-2">
        @include('layouts.nav')
        <div class="m-2" style="width: 100%">
            <div class="container">
                <div class="row">
                    <h5 class="mt-4">
                        Attendance
                        <h6>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
                                </ol>
                            </nav>
                        </h6>
                    </h5>
                    <div>
                        <div class="d-flex" style="box-shadow: 0px 10px 20px -10px #A18AFF;">
                            <div class="col">
                                <input class="form-control" type="text" placeholder="Employee Name" disabled
                                    aria-label="default input example" value="{{ $currentuser->name }}">
                            </div>
                            <div class="col input-group">
                                <select class="form-select form-control-sm filter-select" id="month">
                                    <option selected>Select Month</option>
                                    @foreach ($month as $m)
                                        <option>{{ $m->month }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col input-group">
                                <select class="form-select form-control-sm filter-select" id="year">
                                    <option selected>Select Year</option>
                                    @foreach ($year as $y)
                                        <option>{{ $y->year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-success" style="width: 100%;">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="container"
                            style="background-color: rgb(255, 255, 255); border-radius: 10px; overflow-x: scroll; box-shadow: 0px 10px 20px -10px #A18AFF;">
                            <div class="row text-center">

                                <table class="table table-striped mt-3" id="datatable">
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

                                                <td tdscope="col">{{ $data->name }}</td>
                                                <td scope="col">{{ $data->group_name }}</td>
                                                <td scope="col">{{ $data->waktu }}</td>
                                                <td scope="col">{{ $data->tanggal }}</td>
                                                <td scope="col" class="text-truncate" style="max-width: 150px;">
                                                    {{ $data->kegiatan }}
                                                </td>
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

                                            @include('modal.edit')
                                            @include('modal.view')
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/jquerydatatable.js"></script>
    <script src="js/date-filter.js"></script>
</body>

</html>
