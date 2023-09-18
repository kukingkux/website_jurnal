@include('admin.partials.dashboard_head')

<body style="background-color: #D9D9D9;">

    @include('admin.layouts.nav')
    <div class="container mt-5 pe-5 pb-5">
        <h5>Offices & Groups</h5>

        <h6>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Offices & Groups</li>
                </ol>
            </nav>
        </h6>

        <div class="d-block">
            <h1>Groups</h1>
            <div class="wrapper d-flex justify-content-end align-items-center pe-5"
                style="border-radius: 8px 8px 0 0; height:60px">
                <div>
                    <button data-bs-target="#GroupCreate" data-bs-toggle="modal" type="button" class="btn btn-sm"
                        style="background-color: #337ccf; color: #fff; border-radius: 4px;border: 2px solid #337ccf;
                             border-bottom: 4px solid #1450a3;">Create
                        Group</button>
                </div>
            </div>
            <div class="wrapper d-flex justify-content-start gap-2 pb-3 flex-wrap"
                style="border-radius: 0px 0px 8px 8px">
                <div class="card m-auto" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">{{ $group_admin->group_name }}</h5>
                        <p class="card-text">
                        <ul>
                            <p>Period Start:<li>-</li>
                            </p>
                            <p>Period End:<li>-</li>
                            </p>
                        </ul>
                        </p>
                        <button type="button" data-bs-target="" data-bs-toggle="modal" class="btn btn-primary">
                            <i class="fa-solid fa-pen"></i>
                        </button>


                    </div>

                </div>

                @foreach ($groups as $data)
                    <div class="card m-auto" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title">{{ $data->group_name }}</h5>
                            <p class="card-text">
                            <ul>
                                <p>Period Start:<li>{{ $data->period_start }}</li>
                                </p>
                                <p>Period End:<li>{{ $data->period_end }}</li>
                                </p>
                            </ul>
                            </p>
                            <button type="button" data-bs-target="#GroupEdit-{{ $data->id }}"
                                data-bs-toggle="modal" class="btn btn-primary">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button type="button" data-bs-target="#GroupDelete-{{ $data->id }}"
                                data-bs-toggle="modal" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                        </div>

                    </div>

                    @include('admin.modal.edit_groups')
                    @include('admin.modal.delete_groups')
                @endforeach
                @include('admin.modal.create_groups')
            </div>
        </div>



    </div>
    @extends('admin.offices')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    @include('admin.partials.css_container')

</body>

</html>
