@extends('layouts.commonMaster')
@section('layoutContent')
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    // Check if there are any session messages
    @if(session('success'))
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
        <span class="text-muted fw-light">Informative Pages /</span><span> Privacy Policy</span>
    </h4>

    <div class="app-ecommerce">
        <form action="{{ route('policies.save') }}" method="POST">
            @csrf
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">

                </div>

                <div class="d-flex align-content-center flex-wrap gap-3">
                    <button type="button" class="btn btn-label-secondary" id="discardBtn">Discard</button>
                    <!-- <button class="btn btn-label-primary">Save draft</button> -->
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>

            <div class="row">

                <!-- First column-->
                <div class="col-12">

                    <!-- Product Information -->
                    <!-- Product Information -->
                    <div class="card mb-4">

                        <div class="card-header">
                            <!--<h5 class="card-tile mb-0">Product information</h5>-->
                        </div>

                        <div class="card-body">

                            <div class="mb-3 w-50">
                                <label class="form-label" for="ecommerce-product-name">Page Heading</label>
                                <input type="text" class="form-control" id="ecommerce-product-name" value="{{isset($policy[0]->type)?$policy[0]->type:''}}" placeholder="Page Heading" name="productTitle" aria-label="Product title">
                            </div>

                            <!-- Description -->
                            <div>
                                <label class="form-label">Page Content</label>
                                <div class="form-control p-0 pt-1">

                                    <div class="comment-editor border-0 pb-4" id="product-description">
                                        {!! html_entity_decode(html_entity_decode($policy[0]->content)) !!}
                                    </div>

                                    <input type="hidden" name="productDescription" id="productDescriptionInput">
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Product Information -->
                    <!-- /Product Information -->

                </div>
                <!-- /Second column -->

            </div>
    </div>
    </form>

</div>
<!-- / Content -->

<script>
    var quill = new Quill('#product-description', {
        modules: {
            toolbar: [
                [{
                    header: [1, 2, false]
                }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block']
            ]
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    });

    quill.on('text-change', function() {
        var htmlContent = quill.root.innerHTML;
        document.getElementById('productDescriptionInput').value = htmlContent;
    });
</script>

<script>
    document.getElementById('discardBtn').addEventListener('click', function() {
        window.location.reload();
    });
</script>
@endsection