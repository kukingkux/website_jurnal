<!-- <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollabless">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalEditLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('save/' . $data->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" value="{{ $data->nama }}" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Sekolah</label>
                        <select id="disabledSelect" class="form-select">
                            <option>--Pilih Sekolah--</option>
                            <option>SMK TELKOM Purwokerto</option>
                            <option>SMK NU KENDAL</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Waktu Kerja</label>
                        <select id="disabledSelect" class="form-select">
                            <option>--Pilih Waktu--</option>
                            <option>08.00 - 16.00</option>
                            <option>08.00 - 13.00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="datetime-local" class="form-control" value="{{ $data->tanggal }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kegiatan</label>
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px">{{ $data->kegiatan }}</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi || Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate">
        Launch demo modal
    </button>
    <!-- Modal -->
    <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-header"
                    style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px;">
                    <h1 class="modal-title fs-5" id="ModalCreateLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Sekolah</label>
                            <select id="disabledSelect" class="form-select">
                                <option>--Pilih Sekolah--</option>
                                <option>SMK TELKOM Purwokerto</option>
                                <option>SMK NU KENDAL</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Waktu Kerja</label>
                            <select id="disabledSelect" class="form-select">
                                <option>--Pilih Waktu--</option>
                                <option>08.00 - 16.00</option>
                                <option>08.00 - 13.00</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kegiatan</label>
                            <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn" style="background-color: #6E56CF; color: #fff;">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
