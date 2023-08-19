<div class="modal fade text-start" id="ModalView-{{ $data->id }}" tabindex="-1" aria-labelledby="ModalViewLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 20px;">
            <div class="modal-header" style="background-color: #6E56CF; color: #fff; border-radius: 20px 20px 0px 0px;">
                <h1 class="modal-title fs-5" id="ModalViewLabel">Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-4">
                            <label class="form-label"><strong>ID</strong></label><br>
                            <p>
                                {{ $data->id }}
                            </p>
                        </div>
                        <div class="mb-3 col-4">
                            <label for="disabledSelect" class="form-label"><strong>Role ID</strong></label><br>
                            <p>
                                {{ $data->role_id }}
                            </p>
                        </div>
                        <div class="mb-3 col-4">
                            <label for="disabledSelect" class="form-label"><strong>Group ID</strong></label><br>
                            <p>
                                {{ $data->group_id }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-4">
                            <label class="form-label"><strong>Office ID</strong></label><br>
                            <p>
                                {{ $data->office_id }}
                            </p>
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label"><strong>Position ID</strong></label><br>
                            <p>
                                {{ $data->position_id }}
                            </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Nama Lengkap</strong></label>
                        <p>
                            {{ $data->name }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Username</strong></label>
                        <p>
                            {{ $data->username }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Kegiatan</strong></label>
                        <p>
                            {{ $data->kegiatan }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Email</strong></label>
                        <p>
                            {{ $data->email }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Password</strong></label>
                        <p>
                            {{ $data->password }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Remember Token</strong></label>
                        <p>
                            {{ $data->remember_token }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Avatar</strong></label>
                        <p>
                            {{ $data->avatar }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Access Token</strong></label>
                        <p>
                            {{ $data->access_token }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Birthdate</strong></label>
                        <p>
                            {{ $data->birthdate }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Gender</strong></label>
                        <p>
                            {{ $data->gender }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Phone Number</strong></label>
                        <p>
                            {{ $data->phone_number }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Address</strong></label>
                        <p>
                            {{ $data->address }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Latest Education</strong></label>
                        <p>
                            {{ $data->latest_education }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Identity number</strong></label>
                        <p>
                            {{ $data->identity_number }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Start Date</strong></label>
                        <p>
                            {{ $data->start_date }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>End Date</strong></label>
                        <p>
                            {{ $data->end_date }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Status</strong></label>
                        <p>
                            {{ $data->status }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Created At</strong></label>
                        <p>
                            {{ $data->created_at }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Updated At</strong></label>
                        <p>
                            {{ $data->updated_at }}
                        </p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    style="background-color: #6E56CF; color: #fff;">Close</button>
            </div>
        </div>
    </div>
</div>
