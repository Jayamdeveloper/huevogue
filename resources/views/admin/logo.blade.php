@extends('layouts.commonMaster')
@section('layoutContent')
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<style>
    .nav-pills .nav-link.active,
    .nav-pills .nav-link.active:focus,
    .nav-pills .nav-link.active:hover {
        background-color: #5c5a56;
        box-shadow: 0 2px 4px 0 rgba(105, 108, 255, .4);
        color: #fff;
    }
</style>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light"></span> Home Menu
    </h4>

    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button">Header</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button">Contact us</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-usage-tab" data-bs-toggle="pill" data-bs-target="#pills-usage" type="button">About us</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                    <div class="card-header-1">
                        <h5>Logo </h5>
                    </div>
                    <form id="siteForm" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4 align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Site Title</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="siteTitle" id="siteTitle" value="{{ isset($home[0]->title) ? $home[0]->title : '' }}" type="text" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-4 align-items-center">
                                    <label class="form-label-title col-lg-4 col-md-3 mb-0">Fav-icon</label>
                                    <div class="col-md-9 col-lg-8">
                                        @if(isset($home[0]) && $home[0]->favicon)
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <img id="faviconPreview" class="w-50 h-50 mt-4" src="{{ asset($home[0]->favicon) }}" alt="Fav-icon Image">
                                        </div>
                                        @else
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <img id="faviconPreview" class="w-50 h-50 mt-4" src="" alt="Fav-icon Image" style="display:none;">
                                        </div>
                                        @endif
                                        <input type="file" name="favicon" class="form-control" id="img1Input" accept=".jpg, .jpeg, .png">
                                        <span id="img1Error" style="color: red;"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-4 align-items-center">
                                    <label class="form-label-title col-lg-4 col-md-3 mb-0">Logo</label>
                                    <div class="col-md-9 col-lg-8">
                                        @if(isset($home[0]) && $home[0]->logo)
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <img id="logoPreview" class="w-50 h-50 mt-4" src="{{ asset($home[0]->logo) }}" alt="Logo Image">
                                        </div>
                                        @else
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <img id="logoPreview" class="w-50 h-50 mt-4" src="" alt="Logo Image" style="display:none;">
                                        </div>
                                        @endif
                                        <input type="file" name="logo" class="form-control" id="img2Input" accept=".jpg, .jpeg, .png">
                                        <span id="img2Error" style="color: red;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                    <div class="theme-form theme-form-2 mega-form">
                        <div class="card-header-1">
                            <h5>Contact Us </h5>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Contact Title</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="title" id="title" value="{{isset($home[0]->contenTitle)?$home[0]->contenTitle:''}}" type="text" required>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Contact Number</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="contact" id="contact" value="{{isset($home[0]->phone)?$home[0]->phone:''}}" type="number" required>
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Email</label>
                            <div class="col-md-9 col-lg-10">
                                <input class="form-control" name="email" id="email" value="{{isset($home[0]->email)?$home[0]->email:''}}" type="email" required>
                            </div>
                        </div>
                        <!-- <div class="row align-items-center justify-content-center">
                                <div class="col-sm-2">
                                    <button type="submit" value="banner1" id="prevButton2" class="btn btn-primary">Save</button>
                                    <input type="hidden" name="id" value="1" />
                                </div>
                            </div> -->
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-usage" role="tabpanel">
                    <div class="theme-form theme-form-2 mega-form">
                        <div class="card-header-1">
                            <h5>About Us </h5>
                        </div>
                        <div class="row mb-4 align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">About us Content</label>
                            <div class="col-md-9 col-lg-10">
                                <textarea class="form-control" name="about" id="about" rows="6" type="text" required>{{isset($home[0]->about)?$home[0]->about:''}}</textarea>
                            </div>
                        </div>
                        <!-- <div class="row align-items-center justify-content-center">
                                <div class="col-sm-2">
                                    <button type="submit" value="banner1" id="prevButton2" class="btn btn-primary">Save</button>
                                    <input type="hidden" name="id" value="1" />
                                </div>
                            </div> -->
                    </div>
                </div>
                <!-- Content for other tabs -->
            </div>

        </div>
    </div>


</div>
<script>
    $(document).ready(function() {
        $('#about').on('change', function() {
            var aboutContent = $(this).val();
            console.log(aboutContent);
            $.ajax({
                url: '{{ route("save-about")}}',
                type: 'POST',
                data: {
                    about: aboutContent,
                    _token: '{{csrf_token()}}',
                },
                success: function(response) {
                    if (response.status === 'success') {
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
                        text: "Response status error!",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true
                    }).showToast();
                    console.error('Error saving content:', error);
                }
            });
        });
        $('#email, #title, #contact').on('change', function() {
            var fieldId = $(this).attr('id');
            var value = $(this).val();
            var data = {};
            data[fieldId] = value;
            data._token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '{{ route("save-contact")}}',
                type: 'POST',
                data: data,
                success: function(response) {
                    if (response.status === 'success') {
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
                            text: "Update not successful",
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
                        text: "An error occurred!",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#FF0000",
                        stopOnFocus: true
                    }).showToast();
                    console.error('Error updating content:', error);
                }
            });
        });
        $('#img1Input').on('change', function() {
            previewImage(this, '#faviconPreview');
        });

        $('#img2Input').on('change', function() {
            previewImage(this, '#logoPreview');
        });

        $('#siteTitle, #img1Input, #img2Input').on('change', function() {
            var siteTitle = $('#siteTitle').val();
            var img1Input = $('#img1Input')[0].files[0];
            var img2Input = $('#img2Input')[0].files[0];

            var formData = new FormData();
            formData.append('title', siteTitle);
            formData.append('favicon', img1Input);
            formData.append('logo', img2Input);
            formData.append('_token', '{{ csrf_token() }}');

            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            $.ajax({
                url: '{{ route("save-header") }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    if (response.status === 'success') {
                        showNotification(response.message, 'green');
                    } else {
                        showNotification('Update not successful', 'red');
                    }
                },
                error: function(xhr, status, error) {
                    showNotification('An error occurred!', 'red');
                    console.error('Error updating content:', xhr, status, error);
                }
            });
        });

        function previewImage(input, previewSelector) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(previewSelector).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


        function showNotification(message, color) {
            Toastify({
                text: message,
                duration: 3000,
                close: true,
                gravity: 'top',
                position: 'right',
                backgroundColor: color,
                stopOnFocus: true
            }).showToast();
        }

    });

    @if(session('success'))
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000,
        close: true,
        gravity: "top",
        position: 'right',
        backgroundColor: "#4CAF50",
        stopOnFocus: true
    }).showToast();
    @endif

    @if(session('error'))

    Toastify({
        text: "{{ session('error') }}",
        duration: 3000,
        close: true,
        gravity: "top",
        position: 'right',
        backgroundColor: "#FF0000",
        stopOnFocus: true
    }).showToast();
    @endif
</script>
@endsection