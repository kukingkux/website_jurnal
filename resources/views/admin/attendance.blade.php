<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Attendance</title>
    <!-- css -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- script -->
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="css/jquerydatatable.css">

</head>

<body style="background-color: #D9D9D9;">
    <style>
        .btn.btn-success {
            color: black;
            background-color: white;
            border-style: none;
        }

        .btn.btn-success:hover {
            color: white;
            background-color: #0D6EFD;
            border-style: none;
        }
    </style>
    <div class="container-fluid d-flex p-2">
        @include('admin.layouts.nav')
        <div class="m-2" style="width: 100%">
            <div class="container">

                <div class="row">
                    <h5 class="mt-4">
                        Attendance
                        <h6>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                                </ol>
                            </nav>
                        </h6>
                    </h5>
                    <div class="d-flex" style="box-shadow: 0px 10px 20px -10px #0D6EFD;">
                        <div class="col">
                            <input class="form-control" type="text" placeholder="Employee Name"
                                aria-label="default input example">
                        </div>
                        <div class="col input-group">
                            <select class="form-select form-control-sm filter-select" id="inputGroupSelect01">
                                <option selected>Select Month</option>
                                {{-- @foreach ($month as $m)
                                    <option>{{ $m->month }}</option>
                                @endforeach --}}

                            </select>
                        </div>
                        <div class="col input-group">
                            <select class="form-select form-control-sm" id="inputGroupSelect01">
                                <option selected>Select Year</option>
                                {{-- @foreach ($year as $y)
                                    <option value="1">{{ $y->year }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success" style="width: 100%;">Search</button>
                        </div>
                    </div>

                </div>
                <!-- table -->
                <div class="container mt-2"
                    style="background-color: rgb(255, 255, 255); border-radius: 10px; overflow-x: scroll; box-shadow: 0px 10px 20px -10px #0D6EFD;">
                    <div class="row">

                        <table id="datatable" class="table table-striped table-sm"
                            style="overflow-x: scroll; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sekolah</th>
                                    <th>Waktu</th>
                                    <th>Tanggal</th>
                                    <th>Kegiatan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attend as $data)
                                    <tr>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->sekolah }}</td>
                                        <td>{{ $data->waktu }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td class="text-truncate" style="max-width: 150px;">{{ $data->kegiatan }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button data-bs-toggle="modal"
                                                    data-bs-target="#ModalView-{{ $data->id }}"
                                                    class="btn btn-sm "><i class="fa fa-eye"></i></button>

                                                <button class="btn btn-sm btn-delete" data-bs-toggle="modal"
                                                    data-bs-target="#ModalDelete-{{ $data->id }}"><i
                                                        class="fa-regular fa-trash-can"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('admin.modal.view2')
                                    @include('admin.modal.modaldelete')
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- end tabel -->
    <script src="js/jquery.js"></script>

    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="js/jquerydatatable"></script>



    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                //'processing': true,
                //'serverSide': true,
                //'ajax': "{{ route('attendance') }}",
                // 'columns': [{
                //         'data': 'day'
                //     },
                //     {
                //         'data': 'month'
                //     },
                //     {
                //         'data': 'year'
                //     }
                // ],
                // 'searching': false,
                // 'paging': false,
                // 'info': false,
                // 'sort': false,
            })
        })

        $('.filter-select').change(function() {
            table.column($(this).data())
                .search($(this).val())
                .draw();
        })
    </script>
</body>

</html>
