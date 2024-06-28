@extends('layouts.commonMaster')
@section('layoutContent')
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    // Check if there are any session messages
    @if(session('success'))
    // Display success toast
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000,
        close: true,
        gravity: "top", // Position of the toast
        position: 'right', // Position of the toast
        backgroundColor: "#4CAF50", // Background color of the toast
        stopOnFocus: true // Stop auto close when the toast is focused
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
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Home /</span> Home Slider
    </h4>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card mb-4">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    <form action="{{ route('upload.sliders') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="mb-3 col-md-6 form-password-toggle text-center">
                                <img src="{{ asset($sliders[0]['image']) }}" alt="" style="width: 300px; height: 300px; box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);" class="mx-auto d-block mb-3">
                                <input type="file" class="form-control" id="slider1" name="slider1" accept="image/*">
                            </div>

                            <div class="mb-3 col-md-6 form-password-toggle text-center">
                                <img src="{{ asset($sliders[1]['image']) }}" alt="" style="width: 300px; height: 300px; box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);" class="mx-auto d-block mb-3">
                                <input type="file" class="form-control" id="slider2" name="slider2" accept="image/*">
                            </div>
                            <div class="mb-3 col-md-6 form-password-toggle text-center">
                                <input type="input" class="form-control" id="title1" name="title1" value="{{$sliders[0]['title']}}" placeholder="Banner-1 Title">
                            </div>

                            <div class="mb-3 col-md-6 form-password-toggle text-center">
                                <input type="input" class="form-control" id="title2" name="title2" value="{{$sliders[1]['title']}}" placeholder="Banner-2 Title">
                            </div>
                        </div>


                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <div class="col-md-1"></div>
    </div>

</div>
<!-- / Content -->

@endsection