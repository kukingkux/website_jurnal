<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Depan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex p-2">
        @include('admin.layouts.nav')
        <section class="bg-light py-5" style="flex-basis: 100%">
            <div class="container">


                <div class="justify-content-center    d-flex flex-column"
                    style="height: 100%  ; width:50%; margin: auto;">

                    <h5>Halaman Utama</h5>
                    <hr>
                    <div class="">
                        <a href="/user"><button href="index.html" class="btn btn-outline-success me-2 p-2"
                                type="button" style="width: 100%;">User</button><br><br></a>
                    </div>
                    <div class=""><a href="/history"><button class="btn btn-outline-success me-2 p-2"
                                type="button" style="width: 100%;">Riwayat Absensi</button><br><br></a></div>
                    <div class=""><a href="/logout"><button class="btn btn-outline-success me-2 p-2"
                                type="button" style="width: 100%;">Keluar</button></a></div>


                </div>

        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>

</html>
