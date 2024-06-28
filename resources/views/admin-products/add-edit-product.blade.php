@extends('layouts.commonMaster')
@section('layoutContent')
<script src="{{ asset('assets/js/app-ecommerce-product-add.js') }}"></script>
<script>
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
</script>
@if ($errors->any())
@foreach ($errors->all() as $error)

<script>
    Toastify({
        text: "{{ $error }}",
        duration: 3000,
        close: true,
        gravity: "top",
        position: 'right',
        backgroundColor: "#FF0000",
        stopOnFocus: true
    }).showToast();
</script>
@endforeach
@endif
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Products /</span><span> {{ isset($product) ? 'Edit Product' : 'Add Product' }}</span>
        </h4>
        <div class="app-ecommerce">
            <form id="productForm" action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($product))
                @method('PUT')
                <input type="hidden" name="id" value="{{ $product->id }}">
                @endif

                <!-- Form Header -->
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">{{ isset($product) ? 'Edit Product' : 'Add a new Product' }}</h4>
                        <p class="text-muted">Orders placed across your store</p>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <button type="button" class="btn btn-label-secondary" id="discardBtn">Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- First Column -->
                                    <div class="col-6 col-lg-6">
                                        <!-- Name -->
                                        <div class="mb-3">
                                            <label class="form-label" for="ecommerce-product-name">Name</label>
                                            <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Product title" name="productTitle" aria-label="Product title" value="{{ old('productTitle', isset($product) ? $product->productName : '') }}">
                                        </div>
                                        <!-- Price -->
                                        <div class="mb-3">
                                            <label class="form-label" for="ecommerce-product-price">Price</label>
                                            <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price" name="productPrice" aria-label="Product price" value="{{ old('productPrice', isset($product) ? $product->productPrice : '') }}">
                                        </div>
                                        <!-- Quantity -->
                                        <div class="mb-3">
                                            <label class="form-label" for="ecommerce-product-quantity">Quantity</label>
                                            <input type="number" class="form-control" id="ecommerce-product-quantity" placeholder="Quantity" name="productQuantity" aria-label="Product quantity" value="{{ old('productQuantity', isset($product) ? $product->productQuantity : '') }}">
                                        </div>
                                        <!-- Product Image -->
                                        <div class="mb-2 mt-3 text-center">
                                            @if(isset($product) && $product->productImage)
                                            <img src="{{ asset($product->productImage) }}" alt="Product Image" width="50" class="d-block mx-auto mb-3">
                                            @endif
                                            <label for="formFileMultiple" class="form-label">New Product Image</label>
                                            <input class="form-control" type="file" name="formFileMultiple" accept=".jpeg,.jpg,.png" id="formFileMultiple" multiple="">
                                        </div>
                                    </div>

                                    <!-- Second Column -->
                                    <div class="col-6 col-lg-6">
                                        <!-- Description -->
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <div class="form-control p-0 pt-1">
                                                <div class="comment-editor border-0 pb-1" id="product-description">
                                                    @if(isset($product))
                                                    {!! old('productDescription', html_entity_decode($product->productDescription)) !!}
                                                    @endif
                                                </div>
                                            </div>
                                            <input type="hidden" name="productDescription" id="productDescriptionInput" value="{{ old('productDescription', isset($product) ? $product->productDescription : '') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>


</div>
<!-- / Content -->



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var quill = new Quill('#product-description', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline']
                    // ['image', 'code-block']
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });

        quill.on('text-change', function() {
            var htmlContent = quill.root.innerHTML;
            document.getElementById('productDescriptionInput').value = htmlContent;
        });
    });
</script>
<script>
    document.getElementById('discardBtn').addEventListener('click', function() {
        window.location.reload();
    });
</script>

@endsection