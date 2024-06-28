@extends('layouts.commonMaster')
@section('layoutContent')
<style>
    .form-select {
        background-clip: padding-box;
        /* padding: 9px 11px; */
        width: max-content;
    }
</style>
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
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Products /</span> Product List
        </h4>


        <!-- Product List Table -->
        <div class="card">
            <div class="card-header">
                <!--<h5 class="card-title">Filter</h5>-->
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                    <div class="col-md-4 product_status"></div>
                    <div class="col-md-4 product_category"></div>
                    <div class="col-md-4 product_stock"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-products table border-top">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Sort Order</th>
                            <th>Image</th>
                            <th class="text-nowrap">product Name</th>
                            <th class="text-nowrap">stock</th>
                            <th>Description</th>
                            <th>price</th>
                            <th>qty</th>
                            <th>status</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $index => $product)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $product->sortOrder }}</td>
                            <td>
                                <img src="{{ asset($product->productImage) }}" alt="Product Image" width="50">
                            </td>
                            <td>{{ $product->productName }}</td>
                            <td>{{ $product->productQuantity }}</td>
                            <td>{!! $product->productDescription !!}</td>
                            <td>{{ $product->productPrice }}</td>
                            <td>{{ $product->productQuantity }}</td>
                            <td>
                                <select class="form-select status-dropdown" data-product-id="{{ $product->id }}">
                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </td>

                            <td>
                                <div class="d-flex">

                                    <button class="btn btn-info me-2 view-product-details" data-toggle="modal" data-target="#productModal" data-product-id="{{ $product->id }}">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>


                                    <a href="{{route('products.create',['id' => $product->id])}}" class="btn btn-primary me-2">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- / Content -->

    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" aria-label="Close" id="closeModal"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeModalBtn">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.status-dropdown').change(function() {
                var productId = $(this).data('product-id');
                var status = $(this).val();
                console.log(productId, status);
                $.ajax({
                    url: "{{ route('products.status', ['product' => ':productId']) }}".replace(':productId', productId),
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status,
                        productId: productId
                    },
                    success: function(response) {
                        Toastify({
                            text: response.message || 'Status updated successfully.',
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#4CAF50",
                            stopOnFocus: true
                        }).showToast();
                    },
                    error: function(xhr) {
                        Toastify({
                            text: "Response status error!",
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
            $('.view-product-details').on('click', function() {
                var productId = $(this).data('product-id');
                console.log(productId);
                $.ajax({
                    url: "{{ route('products.show', ['product' => ':productId']) }}".replace(':productId', productId),
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        var product = response;
                        var modalBody = $('.modal-body');
                        modalBody.html(`
                        <p><strong>Product Name:</strong> ${product.productName}</p>
                        <p><strong>Image:</strong> <img src="{{asset('${product.productImage}')}}" class="w-20" alt="Product Image"></p>
                        <p><strong>Price:</strong> ${product.productPrice}</p>
                        <p><strong>Quantity:</strong> ${product.productQuantity}</p>
                        <p><strong>Description:</strong> ${product.productDescription}</p>
                        <p><strong>Created At:</strong> ${product.created_at}</p>
                    `);
                        $('#productModal').modal('show');
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
                        console.error(error);
                    }
                });
            });
            $('#closeModal').on('click', function() {
                $('#productModal').modal('hide');
            });
            $('#closeModalBtn').on('click', function() {
                $('#productModal').modal('hide');
            });
        });
    </script>
    <script>
        $(document).ready(function() {



            var table = $('.datatables').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.view-product-details').on('click', function() {
                var productId = $(this).data('product-id');
                console.log(productId);
                $.ajax({
                    url: "{{ route('products.show', ['product' => ':productId']) }}".replace(':productId', productId),
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        var product = response;
                        var modalBody = $('.modal-body');
                        modalBody.html(`
                            <p><strong>Product Name:</strong> ${product.productName}</p>
                            <p><strong>Image:</strong> <img src="{{asset('${product.productImage}')}}" class="w-20" alt="Product Image"></p>
                            <p><strong>Price:</strong> ${product.productPrice}</p>
                            <p><strong>Quantity:</strong> ${product.productQuantity}</p>
                            <p><strong>Description:</strong> ${product.productDescription}</p>
                            <p><strong>Created At:</strong> ${product.created_at}</p>
                           
                        `);
                        $('#productModal').modal('show');
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
                        console.error(error);
                    }
                });
            });
            $('#closeModal').on('click', function() {
                $('#productModal').modal('hide');
            });

            $('#closeModalBtn').on('click', function() {
                $('#productModal').modal('hide');
            });
        });
        $('.btn-danger').on('click', function() {
            if (confirm('Are you sure you want to delete this product?')) {
                var productId = $(this).closest('div').find('.view-product-details').data('product-id');
                console.log(productId);
                $.ajax({
                    url: "{{ route('products.destroy', ['product' => ':id']) }}".replace(':id', productId),
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "#4CAF50",
                            stopOnFocus: true
                        }).showToast();
                        window.location.reload();
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
            }
        });
    </script>


    @endsection