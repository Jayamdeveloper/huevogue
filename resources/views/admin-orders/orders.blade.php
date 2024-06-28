@extends('layouts.commonMaster')
@section('layoutContent')

<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            Order List
        </h4>

        <!-- Order List Widget -->

        <div class="card mb-4">
            <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                    <div class="row gy-4 gy-sm-1">
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                <div>
                                    <h3 class="mb-2">1</h3>
                                    <p class="mb-0">Pending Payment</p>
                                </div>
                                <div class="avatar me-sm-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-calendar bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none me-4">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                <div>
                                    <h3 class="mb-2">1</h3>
                                    <p class="mb-0">Completed</p>
                                </div>
                                <div class="avatar me-lg-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-check-double bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                <div>
                                    <h3 class="mb-2">0</h3>
                                    <p class="mb-0">Refunded</p>
                                </div>
                                <div class="avatar me-sm-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-wallet bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h3 class="mb-2">0</h3>
                                    <p class="mb-0">Failed</p>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-error-alt bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-order table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th>S.no</th>
                            <th class="text-nowrap">Date of Order</th>
                            <th class="text-nowrap">Order Id</th>
                            <th class="text-nowrap">Products Ordered</th>
                            <th class="text-nowrap">Order Amount</th>
                            <th class="text-nowrap">Order status </th>
                            <th class="text-nowrap">Transaction id</th>
                            <th>Invoice</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td></td>
                            <td>1</td>
                            <td>02/Mar/24</td>
                            <td>101</td>
                            <td>Supreme Polishing Treatment</td>
                            <td>$40</td>
                            <td>Pending</td>
                            <td>100010101</td>
                            <td>-</td>
                            <td>
                               <div class="d-flex">
                                   
                                   <button class="btn btn-info me-2">
                                       <i class="fa-regular fa-eye"></i>
                                   </button>
                                   
                                    <button class="btn btn-primary me-2">
                                       <i class="fa-solid fa-pen-to-square"></i>
                                   </button>
                                   
                                   <button class="btn btn-danger">
                                       <i class="fa-solid fa-trash-can"></i>
                                   </button>
                                   
                               </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>2</td>
                            <td>03/Mar/24</td>
                            <td>102</td>
                            <td>Supreme Polishing Treatment</td>
                            <td>$30</td>
                            <td>Complete</td>
                            <td>100046321</td>
                            <td>
                                <a  href="{{route('admin-invoice-view')}}" class="btn btn-warning">
                                    <i class=" bx bx-food-menu"></i>
                                </a>
                            </td>
                            <td>
                               <div class="d-flex">
                                   
                                   <button class="btn btn-info me-2">
                                       <i class="fa-regular fa-eye"></i>
                                   </button>
                                   
                                   <button class="btn btn-primary me-2">
                                       <i class="fa-solid fa-pen-to-square"></i>
                                   </button>
                                   
                                   <button class="btn btn-danger">
                                       <i class="fa-solid fa-trash-can"></i>
                                   </button>
                                   
                               </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- / Content -->
    <!--<script src="{{asset('assets/js/app-ecommerce-order-list.js')}}"></script>-->
    @endsection