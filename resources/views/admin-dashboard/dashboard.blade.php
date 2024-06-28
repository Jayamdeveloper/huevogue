@extends('layouts.commonMaster')
@section('layoutContent')
<script src="{{ asset('assets/js/app-ecommerce-dashboard.js') }}"></script>
<!-- Content wrapper -->
<div class="content-wrapper">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <div id="totalIncomeChart">
    </div>
    <script>
        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'sales',
                data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            Dashboard
        </h4>

        <div class="row">

            <div class="col-md-4">
                <div class="card dashboard-card">
                    
                    <a href="{{route('orders.index')}}">
                        <div class="das-card-inner">
                        <div>
                            <div class="dash-card-i">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div class="das-card-title">
                                Total Orders
                            </div>

                        </div>

                        <div class="dash-card-count">
                            80
                        </div>
                    </div>
                    </a>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card dashboard-card">
                    
                    <a href="{{route('users.index')}}">
                      <div class="das-card-inner">
                        <div>
                            <div class="dash-card-i">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="das-card-title">
                                Total Customer
                            </div>
                        </div>

                        <div class="dash-card-count">
                            100
                        </div>

                    </div>
                    </a>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dashboard-card">
                    
                <a href="{{route('users.index')}}">
                    <div class="das-card-inner">

                        <div>
                            <div>
                                <div class="dash-card-i">
                                    <i class="fa-solid fa-user-plus"></i>
                                </div>
                                <div class="das-card-title">
                                    New Customers
                                </div>
                            </div>
                        </div>

                        <div class="dash-card-count">
                            10
                        </div>

                    </div>
                </a> 
                
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dashboard-card">
                    <a href="{{route('products.index')}}">
                      <div class="das-card-inner">
                        <div>
                            <div class="dash-card-i">
                                <i class="fa-solid fa-chart-simple"></i>
                            </div>
                            <div class="das-card-title">
                                Total Revenue
                            </div>
                        </div>

                        <div class="dash-card-count">
                            $100
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dashboard-card">
                    
                <a href="{{route('products.index')}}">
                    <div class="das-card-inner">
                        <div>
                            <div class="dash-card-i">
                                <i class="fa-solid fa-hourglass"></i>
                            </div>
                            <div class="das-card-title">
                                Out of Stock
                            </div>
                        </div>
                        <div class="dash-card-count">
                            1
                        </div>
                    </div>
                </a>
                    
                </div>
            </div>

            <!-- <div class="col-md-6 col-lg-7 mb-0">
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="invoice-list-table table">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th class="cell-fit">Paid By</th>
                                    <th class="cell-fit">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="pages-profile-user.html" class="text-body text-truncate fw-medium">Henry Barnes</a>
                                                <small class="text-truncate text-muted">jok@puc.co.uk</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$459.65</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td><img src="../../assets/img/icons/payments/master-light.png" class="img-fluid" width="50" alt="masterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img src="../../assets/img/avatars/20.png" alt="Avatar" class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="pages-profile-user.html" class="text-body text-truncate fw-medium">Hallie Warner</a>
                                                <small class="text-truncate text-muted">hellie@war.co.uk</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$93.81</td>
                                    <td><span class="badge bg-label-warning"> Pending </span></td>
                                    <td><img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid" width="50" alt="visaCard" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img src="../../assets/img/avatars/9.png" alt="Avatar" class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="pages-profile-user.html" class="text-body text-truncate fw-medium">Gerald Flowers</a>
                                                <small class="text-truncate text-muted">initus@odemi.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$934.35</td>
                                    <td><span class="badge bg-label-warning"> Pending </span></td>
                                    <td><img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid" width="50" alt="visaCard" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img src="../../assets/img/avatars/14.png" alt="Avatar" class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="pages-profile-user.html" class="text-body text-truncate fw-medium">John Davidson</a>
                                                <small class="text-truncate text-muted">jtum@upkesja.gov</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$794.97</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td><img src="../../assets/img/icons/payments/paypal-light.png" class="img-fluid" width="50" alt="paypalCard" data-app-light-img="icons/payments/paypal-light.png" data-app-dark-img="icons/payments/paypal-dark.png"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><span class="avatar-initial rounded-circle bg-label-warning">JH</span></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="pages-profile-user.html" class="text-body text-truncate fw-medium">Jayden Harris</a>
                                                <small class="text-truncate text-muted">wipare@tin.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$19.49</td>
                                    <td><span class="badge bg-label-success"> Paid </span></td>
                                    <td><img src="../../assets/img/icons/payments/master-light.png" class="img-fluid" width="50" alt="masterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-2"><img src="../../assets/img/avatars/8.png" alt="Avatar" class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="pages-profile-user.html" class="text-body text-truncate fw-medium">Rena Ferguson</a>
                                                <small class="text-truncate text-muted">nur@kaomor.edu</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$636.27</td>
                                    <td><span class="badge bg-label-danger"> Failed </span></td>
                                    <td><img src="../../assets/img/icons/payments/paypal-light.png" class="img-fluid" width="50" alt="paypalCard" data-app-light-img="icons/payments/paypal-light.png" data-app-dark-img="icons/payments/paypal-dark.png"></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                    <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->



        </div>


        <div class="row d-none">
            <div class="col-md-12 col-lg-4 mb-4">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-8">
                            <div class="card-body">
                                <h6 class="card-title mb-1 text-nowrap">Congratulations Katie!</h6>
                                <small class="d-block mb-3 text-nowrap">Best seller of the month</small>

                                <h5 class="card-title text-primary mb-1">$48.9k</h5>
                                <small class="d-block mb-4 pb-1 text-muted">78% of target</small>

                                <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
                            </div>
                        </div>
                        <div class="col-4 pt-3 ps-0">
                            <img src="{{ asset('assets/img/illustrations/prize-light.png') }}" width="90" height="140" class="rounded-start" alt="View Sales">
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Visitors & Activity -->
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-body row g-4">
                        <div class="col-md-6 pe-md-4 card-separator">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <h5 class="mb-0">New Visitors</h5>
                                <small>Last Week</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="mt-auto">
                                    <h2 class="mb-2">23%</h2>
                                    <small class="text-danger text-nowrap fw-medium"><i class='bx bx-down-arrow-alt'></i> -13.24%</small>
                                </div>
                                <div id="visitorsChart"></div>
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-4">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <h5 class="mb-0">Activity</h5>
                                <small>Last Week</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="mt-auto">
                                    <h2 class="mb-2">82%</h2>
                                    <small class="text-success text-nowrap fw-medium"><i class='bx bx-up-arrow-alt'></i>
                                        24.8%</small>
                                </div>
                                <div id="activityChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ New Visitors & Activity -->

            <div class="col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block">Sales</span>
                                <h4 class="card-title mb-1">$4,679</h4>
                                <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body pb-2">
                                <span class="d-block fw-medium">Profit</span>
                                <h3 class="card-title mb-0">624k</h3>
                                <div id="profitChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body pb-0">
                                <span class="d-block fw-medium">Expenses</span>
                            </div>
                            <div id="expensesChart" class="mb-2"></div>
                            <div class="p-3 pt-2">
                                <small class="text-muted d-block text-center">$21k Expenses more than last month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/unicons/briefcase.png')}}" alt="Credit Card" class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block">Transactions</span>
                                <h4 class="card-title mb-1">$14,857</h4>
                                <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Income -->
            <div class="col-md-12 col-lg-8 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-8">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Total Income</h5>
                                <small class="card-subtitle">Yearly report overview</small>
                            </div>
                            <div class="card-body">
                                <div id="totalIncomeChart"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <h5 class="card-title mb-0">Report</h5>
                                    <small class="card-subtitle">Monthly Avg. $45.578k</small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="report-list">
                                    <div class="report-list-item rounded-2 mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon shadow-sm me-2">
                                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Income</span>
                                                    <h5 class="mb-0">$42,845</h5>
                                                </div>
                                                <small class="text-success">+2.34k</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-list-item rounded-2 mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon shadow-sm me-2">
                                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Expense</span>
                                                    <h5 class="mb-0">$38,658</h5>
                                                </div>
                                                <small class="text-danger">-1.15k</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-list-item rounded-2">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon shadow-sm me-2">
                                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Profit</span>
                                                    <h5 class="mb-0">$18,220</h5>
                                                </div>
                                                <small class="text-success">+1.35k</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total Income -->
            </div>
            <!--/ Total Income -->
        </div>

    </div>
    <!-- / Content -->

</div>
<!--/ Content wrapper -->


@endsection