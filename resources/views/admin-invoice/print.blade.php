<!DOCTYPE html>

<html lang="pt" class="light-style   layout-menu-fixed     " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="blank-menu-theme-default-light">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/print by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 05:36:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Print version - Invoice |
        Sneat -
        Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="pfCn6MKioneV2TzkfUr4GEExjYaDfp8CainvGO5A">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />

    @include('layouts.sections.styles')
</head>

<body>

    <!-- Content -->
    <div class="invoice-print p-5">

        <div class="d-flex justify-content-between flex-row">
            <div class="mb-4">
                <div class="d-flex svg-illustration mb-3 gap-2">
                    <img src="{{asset('assets/logo-dark.png')}}" alt="" class="sidemenu-logo ps-2">
                </div>
                <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
                <p class="mb-1">San Diego County, CA 91905, USA</p>
                <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
            </div>
            <div>
                <h4>Invoice #3492</h4>
                <div class="mb-2">
                    <span>Date Issues:</span>
                    <span class="fw-medium">April 25, 2021</span>
                </div>
                <div>
                    <span>Date Due:</span>
                    <span class="fw-medium">May 25, 2021</span>
                </div>
            </div>
        </div>

        <hr />

        <div class="row d-flex justify-content-between mb-4">
            <div class="col-sm-6 w-50">
                <h6>Invoice To:</h6>
                <p class="mb-1">Thomas shelby</p>
                <p class="mb-1">Shelby Company Limited</p>
                <p class="mb-1">Small Heath, B10 0HF, UK</p>
                <p class="mb-1">718-986-6062</p>
                <p class="mb-0">peakyFBlinders@gmail.com</p>
            </div>
            <div class="col-sm-6 w-50">
                <h6>Bill To:</h6>
                <table>
                    <tbody>
                        <tr>
                            <td class="pe-3">Total Due:</td>
                            <td class="fw-medium">$12,110.55</td>
                        </tr>
                        <tr>
                            <td class="pe-3">Bank name:</td>
                            <td>American Bank</td>
                        </tr>
                        <tr>
                            <td class="pe-3">Country:</td>
                            <td>United States</td>
                        </tr>
                        <tr>
                            <td class="pe-3">IBAN:</td>
                            <td>ETD95476213874685</td>
                        </tr>
                        <tr>
                            <td class="pe-3">SWIFT code:</td>
                            <td>BR91905</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table border-top m-0">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Cost</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vuexy Admin Template</td>
                        <td>HTML Admin Template</td>
                        <td>$32</td>
                        <td>1</td>
                        <td>$32.00</td>
                    </tr>
                    <tr>
                        <td>Frest Admin Template</td>
                        <td>Angular Admin Template</td>
                        <td>$22</td>
                        <td>1</td>
                        <td>$22.00</td>
                    </tr>
                    <tr>
                        <td>Apex Admin Template</td>
                        <td>HTML Admin Template</td>
                        <td>$17</td>
                        <td>2</td>
                        <td>$34.00</td>
                    </tr>
                    <tr>
                        <td>Robust Admin Template</td>
                        <td>React Admin Template</td>
                        <td>$66</td>
                        <td>1</td>
                        <td>$66.00</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="align-top px-4 py-3">
                            <p class="mb-2">
                                <span class="me-1 fw-medium">Salesperson:</span>
                                <span>Alfie Solomons</span>
                            </p>
                            <span>Thanks for your business</span>
                        </td>
                        <td class="text-end px-4 py-3">
                            <p class="mb-2">Subtotal:</p>
                            <p class="mb-2">Discount:</p>
                            <p class="mb-2">Tax:</p>
                            <p class="mb-0">Total:</p>
                        </td>
                        <td class="px-4 py-3">
                            <p class="fw-medium mb-2">$154.25</p>
                            <p class="fw-medium mb-2">$00.00</p>
                            <p class="fw-medium mb-2">$50.00</p>
                            <p class="fw-medium mb-0">$204.25</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-12">
                <span class="fw-medium">Note:</span>
                <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future
                    freelance projects. Thank You!</span>
            </div>
        </div>
    </div>
    <!--/ Content -->
    <script src="{{asset('assets/js/app-invoice-print.js') }}"></script>
    @include('layouts.sections.scripts')
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/print by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 05:36:32 GMT -->

</html>