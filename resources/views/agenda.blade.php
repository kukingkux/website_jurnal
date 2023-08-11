<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User || Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #D9D9D9;">
    <div class="container-fluid d-flex p-2" style="box-shadow: 0px 10px 20px -10px #A18AFF;">
        @include('layouts.nav')
        <section style="flex-basis: 100%">
            <div class="container">
                <div class="row align-items-center">
                    <h5 class="mt-4">
                        Absensi
                        <h6>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Absensi</li>
                                </ol>
                            </nav>
                        </h6>
                    </h5>
                    <div>
                        <div class="col pt-3 pb-1"
                            style="background-color: white; border-radius: 20px; box-shadow: 0px 10px 20px -10px #A18AFF;">
                            <h5 class="ms-4">Form Absensi Magang Campus Digital</h5>
                            <hr>
                            <form method="post" action="{{ route('agenda.store') }}">
                                {{ csrf_field() }}
                                <div class="mb-3 me-4 ms-4 col">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama"
                                        value="{{ $currentuser->name }}" readonly="readonly">
                                    <input type="text" class="form-control d-none" name="user_id" placeholder="Nama"
                                        value="{{ $currentuser->id }}" readonly="readonly">
                                    <div class="mb-3 col">

                                        <label for="disabledSelect" class="form-label">Sekolah</label>
                                        <select id="disabledSelect" class="form-select" name="sekolah" required>
                                            <option>--Pilih Sekolah--</option>
                                            @foreach ($groups as $g)
                                                <option>{{ $g->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="mb-3 col">
                                        <label for="disabledSelect" class="form-label">Waktu Kerja</label>
                                        <select id="disabledSelect" class="form-select" name="waktu" required>
                                            <option>--Pilih Waktu--</option>
                                            <option>08.00 - 16.00</option>
                                            <option>08.00 - 13.00</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kegiatan</label>
                                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="kegiatan" maxlength="256"
                                            placeholder="Kegiatan (max. 256 karakter)" required></textarea>
                                    </div>
                                    <button id="register-button" type="submit"
                                        class="btn btn-primary register">Kirim</button>
                                    <a href="/"><button class="btn btn-primary register"
                                            type="button">Kembali</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
