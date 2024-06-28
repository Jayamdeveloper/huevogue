@extends('layouts.commonMaster')
@section('layoutContent')

@section('title', 'All customers |')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Users /</span> All Customers
        </h4>

        <!-- customers List Table -->
        <div class="card">

            <div class="card-datatable table-responsive">
                <table class="datatables-customers table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th>S.no</th>
                            <th>Name</th>
                            <th class="text-nowrap">User Id</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Order</th>
                            <th class="text-nowrap">Total Spent</th>
                            <th class="text-nowrap">Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        
                        <tr>
                            <td></td>
                            <td>1</td>
                            <td>Tom</td>
                            <td>1001</td>
                            <td>tombrixzz@gmail.com</td>
                            <td>+91 9876543210</td>
                            <td>Supreme Polishing Treatment</td>
                            <td>$40</td>
                            <td>
                               <div class="d-flex">
                                   
                                   <button class="btn btn-info me-2">
                                       <i class="fa-regular fa-eye"></i>
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
                            <td>Maddy</td>
                            <td>1002</td>
                            <td>maddy@gmail.com</td>
                            <td class="text-nowrap">+91 9876543210</td>
                            <td class="text-nowrap">Beard Growth Serum</td>
                            <td>$30</td>
                            <td>
                               <div class="d-flex">
                                   
                                   <button class="btn btn-info me-2">
                                       <i class="fa-regular fa-eye"></i>
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
            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0">
                    <form class="ecommerce-customer-add pt-0" id="eCommerceCustomerAddForm" onsubmit="return false">
                        <div class="ecommerce-customer-add-basic mb-3">
                            <h6 class="mb-3">Basic Information</h6>
                            
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-customer-add-name">Name*</label>
                                <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe" />
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-customer-add-id">Name*</label>
                                <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe" />
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-customer-add-email">Email*</label>
                                <input type="text" id="ecommerce-customer-add-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="customerEmail" />
                            </div>
                            
                            <div>
                                <label class="form-label" for="ecommerce-customer-add-contact">Mobile</label>
                                <input type="text" id="ecommerce-customer-add-contact" class="form-control phone-mask" placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="customerContact" />
                            </div>
                            
                        </div>

                        
                        <div class="pt-3">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                            <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->
    <!--<script src="{{ asset('assets/js/app-ecommerce-customer-all.js') }}"></script>-->
    @endsection