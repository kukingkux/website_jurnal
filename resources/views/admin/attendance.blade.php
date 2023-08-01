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
    <div class="container-fluid d-flex p-2">
        @include('admin.layouts.nav')
        <div class="m-2" style="width: 100%">
            <div class="container">

                <div class="row">
                    <h1>Attendance</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                        </ol>
                    </nav>
                    <div class="d-flex">
                        <div class="col">
                            <input class="form-control" type="text" placeholder="Employee Name"
                                aria-label="default input example">
                        </div>
                        <div class="col input-group">
                            <select class="form-select form-control-sm" id="inputGroupSelect01">
                                <option selected>Select Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="1">April</option>
                                <option value="2">May</option>
                                <option value="3">June</option>
                                <option value="1">July</option>
                                <option value="2">August</option>
                                <option value="3">September</option>
                                <option value="1">October</option>
                                <option value="2">November</option>
                                <option value="3">Desember</option>
                            </select>
                        </div>
                        <div class="col input-group">
                            <select class="form-select form-control-sm" id="inputGroupSelect01">
                                <option selected>Select Year</option>
                                <option value="1">2023</option>
                                <option value="2">2022</option>
                                <option value="3">2021</option>
                            </select>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success" style="width: 100%;">Search</button>
                        </div>
                    </div>

                </div>
                <!-- table -->
                <div class="container mt-2"
                    style="background-color: rgb(255, 255, 255); border-radius: 10px; overflow-x: scroll;">
                    <div class="row text-center">

                        <table class="table table-sm" style="overflow-x: scroll;">
                            <thead style="background-color: #f4f4f4;">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>
                                    <th scope="col">11</th>
                                    <th scope="col">12</th>
                                    <th scope="col">13</th>
                                    <th scope="col">14</th>
                                    <th scope="col">15</th>
                                    <th scope="col">16</th>
                                    <th scope="col">17</th>
                                    <th scope="col">18</th>
                                    <th scope="col">19</th>
                                    <th scope="col">20</th>
                                    <th scope="col">21</th>

                                    <th scope="col">22</th>
                                    <th scope="col">23</th>
                                    <th scope="col">24</th>
                                    <th scope="col">25</th>
                                    <th scope="col">26</th>
                                    <th scope="col">27</th>
                                    <th scope="col">28</th>
                                    <th scope="col">29</th>
                                    <th scope="col">30</th>
                                    <th scope="col">31</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Indra</th>
                                    <td><i class="fa-solid fa-check" style="color: green;" onclick=""></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>
                                    <td><i class="fa-solid fa-xmark" style="color: red;"></i></td>
                                    <td><i class="fa-solid fa-check" style="color: green;"></i></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end tabel -->
    <script src="https://kit.fontawesome.com/056e6cea98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>