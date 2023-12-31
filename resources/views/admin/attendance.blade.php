@include('admin.partials.attendance_head')

<body style="background-color: #D9D9D9;">

    @include('admin.layouts.nav')

    <div class="container pe-5 ">


        <h5 class="mt-4">
            Attendance
            <h6>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                    </ol>
                </nav>
            </h6>
        </h5>
        <div class="d-flex coll">
            <div class="col"style="box-shadow: 0px 10px 20px -10px #0D6EFD;">
                <input class="form-control" type="text" placeholder="Employee Name" id="filter-search"
                    aria-label="default input example">
            </div>
            <div class="col input-group" style="box-shadow: 0px 10px 20px -10px #0D6EFD;">
                <select class="form-select form-control-sm filter-select" id="month">
                    <option selected>Select Month</option>
                    @foreach ($month as $m)
                        <option>{{ $m->month }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col input-group" style="box-shadow: 0px 10px 20px -10px #0D6EFD;">
                <select class="form-select form-control-sm" id="year">
                    <option selected>Select Year</option>
                    @foreach ($year as $y)
                        <option>{{ $y->year }}</option>
                    @endforeach
                </select>
            </div>


        </div>
        <!-- table -->
        <div class="mt-2"
            style="background-color: rgb(255, 255, 255); border-radius: 10px; overflow-x: scroll; box-shadow: 0px 10px 20px -10px #0D6EFD;">
            <div class="row">

                <table id="datatable" class="table table-striped table-sm" style="width: 100%;">

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
                                <td>{{ $data->groups->group_name }} ({{ $data->groups_id }})</td>
                                <td>{{ $data->waktu }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td class="text-truncate" style="max-width: 150px;">{{ $data->kegiatan }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button data-bs-toggle="modal" data-bs-target="#ModalView-{{ $data->id }}"
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




    <!-- end tabel -->

    @extends('admin.partials.attendance_script')
    @include('admin.partials.css_container')

</body>

</html>
