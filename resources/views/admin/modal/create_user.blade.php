<div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px;">
                <h1 class="modal-title fs-5" id="ModalUbahLabel">Buat User Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ 'create' }}">
                    @csrf
                    <div class="row text-center mt-4">
                        <!-- name username password -->
                        <div class="col">
                            <label for="">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="col">
                            <label for="">Email</label>
                            <input type="email " id="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="col">
                            <label for="">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <!-- end name username password -->
                    </div>
                    <div class="row text-center mt-4">
                        <!-- address gender status -->
                        <div class="col-lg-8">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation"
                                style="border-radius: 10px; margin-top: 10px; background-color: #F4F4F4; border-style: none;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Save changes</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
