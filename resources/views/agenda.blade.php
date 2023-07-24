<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Depan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('layouts.main')
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col">
                    <h5>Form Absensi Magang Campus Digital</h5>
                    <hr>
                    <form method="post" action="{{ route('agenda.store') }}">
                        {{ csrf_field() }}
                        <div class="mb-3 col">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3 col">
                            <label for="disabledSelect" class="form-label">Sekolah</label>
                            <select id="disabledSelect" class="form-select" name="sekolah">
                                <option>--Pilih Sekolah--</option>
                                <option>SMK TELKOM Purwokerto</option>
                                <option>SMK NU KENDAL</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <label for="disabledSelect" class="form-label">Waktu Kerja</label>
                            <select id="disabledSelect" class="form-select" name="waktu">
                                <option>--Pilih Waktu--</option>
                                <option>08.00 - 16.00</option>
                                <option>08.00 - 13.00</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="datetime-local" class="form-control" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kegiatan</label>
                            <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="kegiatan"></textarea>
                        </div>
                        <button id="register-button" type="submit" class="btn btn-primary register">Kirim</button>
                        <a href="/"><button class="btn btn-primary register" type="button">Kembali</button></a>
                    </form>
                </div>
            </div>ssss
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
