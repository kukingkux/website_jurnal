<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #D9D9D9;">
    <div class="container mt-5" style="background-color: rgb(255, 255, 255); border-radius: 10px;">
        <div class="row">
            <h2 class="mt-4">Tambah data </h2>
            <div class="mt-4">
                <button type="button" class="btn btn-light float-end"
                    style="background-color: #6E56CF; color: #fff;"><i class="fa-solid fa-plus">&nbsp;&nbsp;</i>Tambah
                    Data</button>
            </div>
            <table class="table table-striped mt-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Status</th>
                        <th scope="col">Role_id</th>
                        <th scope="col">Group_id</th>
                        <th scope="col">Office_id</th>
                        <th scope="col">Position_id</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Indra</th>
                        <td>indramagang</td>
                        <td>wcuvrbcoyaerb</td>
                        <td>Semarang</td>
                        <td>Laki-laki</td>
                        <td>status</td>
                        <td>role</td>
                        <td>group</td>
                        <td>Office</td>
                        <td>Position</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger btn-delete"><i
                                        class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
