@extends('layouts.commonMaster')
@section('layoutContent')

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light"></span> Account Settings
    </h4>

    <div class="row">

        <div class="col-md-12">

            <!-- Change Password -->
            <div class="card mb-4">
                <h5 class="card-header">Profile Update</h5>
                <div class="card-body">
                    <form id="formAccount" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="Name">Name</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="name" value="{{$admin->username}}" name="name" />
                                </div>
                            </div>

                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="email">Email</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="email" name="email" value="{{$admin->email}}" id="email" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="Name">Profile Image</label>
                                <div class="input-group input-group-merge">
                                    <img id="profileImage" src="{{ asset($admin->profileImage) }}" alt="Profile Image" style="max-width: 100px; max-height: 100px;" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="image">Change Profile Image</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="file" name="image" accept="/*.jpeg,.jpg,.png" id="image" />
                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <button type="button" class="btn btn-primary me-2" id="saveButton">Save changes</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!--/ Change Password -->

            <!-- Change Password -->
            <div class="card mb-4">
                <h5 class="card-header">Change Password</h5>
                <div class="card-body">
                    <form id="formAccountSettings">
                        <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="newPassword">New Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <p class="fw-medium mt-2">Password Requirements:</p>
                                <ul class="ps-3 mb-0">
                                    <li class="mb-1">
                                        Minimum 8 characters long - the more, the better
                                    </li>
                                    <li class="mb-1">At least one lowercase character</li>
                                    <li>At least one number, symbol, or whitespace character</li>
                                </ul>
                            </div>
                            <div class="col-12 mt-1">
                                <button type="button" class="btn btn-primary me-2" id="saveChangesButton">Save changes</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!--/ Change Password -->

        </div>
    </div>

</div>
<script>
    $(document).ready(function() {
        $('#saveButton').on('click', function(e) {
            e.preventDefault();
            var formData = new FormData($('#formAccount')[0]);

            $.ajax({
                url: "{{ route('change.profile') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {

                    if (response.success) {

                        Toastify({
                            text: response.success,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#4CAF50",
                            stopOnFocus: true
                        }).showToast();
                        window.location.reload();
                    }
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    var errorMessage = '';
                    for (var error in errors) {
                        errorMessage += errors[error] + '\n';
                    }
                    Toastify({
                        text: errorMessage,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true
                    }).showToast();
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#saveChangesButton').click(function() {
            var newPassword = $('#newPassword').val();
            var confirmPassword = $('#confirmPassword').val();

            $.ajax({
                url: '{{ route("change.password") }}', // Your route to handle password change
                type: 'POST',
                data: {
                    _token: '{{csrf_token()}}',
                    newPassword: newPassword,
                    confirmPassword: confirmPassword
                },
                success: function(response) {
                    console.log(response);
                    if (response.hasOwnProperty('status') && response.status === 'success' && response.hasOwnProperty('message')) {
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#4CAF50",
                            stopOnFocus: true
                        }).showToast();
                    } else {
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#FF0000",
                            stopOnFocus: true
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    Toastify({
                        text: "An error occurred while processing your request!",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true
                    }).showToast();
                    console.error('Error:', error);
                }

            });
        });
    });
</script>
@endsection