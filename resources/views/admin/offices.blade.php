  <div class="d-block mt-5">
      <h1>Office</h1>
      <div class="wrapper d-flex justify-content-end align-items-center pe-5"
          style="border-radius: 8px 8px 0 0; height:60px">
          <div>
              <button data-bs-target="#OfficeCreate" data-bs-toggle="modal" type="button" class="btn btn-sm"
                  style="background-color: #337ccf; color: #fff; border-radius: 4px;border: 2px solid #337ccf;
                            border-bottom: 4px solid #1450a3;">Create
                  Office</button>
          </div>
      </div>
      <div class="wrapper d-flex justify-content-start gap-2 pb-3 flex-wrap" style="border-radius: 0px 0px 8px 8px">

          @foreach ($office as $data)
              <div class="card m-auto" style="width: 18rem;">

                  <div class="card-body">
                      <h5 class="card-title">{{ $data->name }}</h5>

                      <button type="button" data-bs-target="#OfficeEdit-{{ $data->id }}" data-bs-toggle="modal"
                          class="btn btn-primary">
                          <i class="fa-solid fa-pen"></i>
                      </button>
                      <button type="button" data-bs-target="#OfficeDelete-{{ $data->id }}" data-bs-toggle="modal"
                          class="btn btn-danger">
                          <i class="fa-solid fa-trash"></i>
                      </button>

                  </div>

              </div>

              @include('admin.modal.edit_office')
              @include('admin.modal.delete_office')
          @endforeach

          @include('admin.modal.create_office')
      </div>
