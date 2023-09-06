@include('admin.partials.dashboard_head')

<body>
    @include('admin.layouts.nav')
    <div class="container mt-5 pe-5">
        <h1 class="m-2">Roles & Permission</h1>
        <div class="wrapper d-flex justify-content-end align-items-center pe-5"
            style="border-radius: 8px 8px 0 0; height:60px">
            <div>
                <button data-bs-target="#ModalCreate" data-bs-toggle="modal" type="button" class="btn btn-sm"
                    style="background-color: #337ccf; color: #fff; border-radius: 4px;border: 2px solid #337ccf;
        border-bottom: 4px solid #1450a3;">Create
                    Role</button>
            </div>
        </div>
        <div class="wrapper d-flex justify-content-start gap-2 " style="border-radius: 0px 0px 8px 8px">
            @foreach ($roles as $role)
                <div class="card m-auto" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">{{ $role->name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

        @include('admin.modal.create_role')
    </div>

    <style>
        .container {
            max-width: 90%;
            float: right;

        }
    </style>
</body>
