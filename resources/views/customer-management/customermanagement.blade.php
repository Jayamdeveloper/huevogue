@extends('layouts.commonMaster')
@section('layoutContent')

<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            Customer Management
        </h4>

        <div class="app-ecommerce-category">
            <!-- Category List Table -->
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="datatables-category-list table border-top">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Name</th>
                                <th class="text-nowrap text-sm-end">Phone &nbsp;</th>
                                <th class="text-nowrap text-sm-end">customer id</th>
                                <th class="text-nowrap text-sm-end">orders</th>
                                <th class="text-lg-center">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList"
                aria-labelledby="offcanvasEcommerceCategoryListLabel">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4">
                    <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Data</h5>
                    <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">

                        <div class="mb-3">
                            <label class="form-label" for="cm-name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="Name"
                                aria-label="cm-name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="cm-phone">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="cm-phone"
                                aria-label="cm-phone">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="cm-id">Customer Id</label>
                            <input type="text" class="form-control" id="cm-id" placeholder="Enter Customer Id"
                                name="cm-id" aria-label="cm-id">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="cm-Orders">Orders</label>
                            <input type="text" class="form-control" id="cm-Orders" placeholder="Enter Orders"
                                name="cm-Orders" aria-label="cm-Orders">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                            <button type="reset" class="btn bg-label-danger"
                                data-bs-dismiss="offcanvas">Discard</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>
    <!-- / Content -->
    <script src="{{asset('assets/js/app-ecommerce-category-list.js') }}"></script>

    <!-- <script>
    $(document).ready(function() {
        $('.datatables-order').DataTable({
            "processing": true,
            "serverSide": false,
            "ajax": {
                "url": "",
                "type": "GET"
            },
            "columns": [{
                    "data": "si_no"
                },
                {
                    "data": "image"
                },
                {
                    "data": "pro_name"
                },
                {
                    "data": "category"
                },
                {
                    "data": "qty"
                },
                {
                    "data": "price"
                },
                {
                    "data": "size"
                },
                {
                    "data": "color"
                },
                {
                    "data": "material"
                },
                {
                    "data": "user_name"
                },
                {
                    "data": "user_mobile"
                },
                {
                    "data": "user_address"
                },
                {
                    "data": "action"
                }
            ],
            "buttons": [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script> -->


    @endsection