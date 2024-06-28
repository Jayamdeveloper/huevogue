<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') HUE VOGUE </title>
    <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
    <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Include Google Fonts CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- Include Toastify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- <script>
window.templateCustomizer = new TemplateCustomizer({
    cssPath: '',
    themesPath: '',
    defaultStyle: "light",
    defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
    displayCustomizer: "true",
    lang: 'en',
    pathResolver: function(path) {
        var resolvedPaths = {
            // Core stylesheets
            'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8',
            'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6',

            // Themes
            'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1',
            'theme-default-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
            'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
            'theme-bordered-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
            'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
            'theme-semi-dark-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51',
        }
        return resolvedPaths[path] || path;
    },
    'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions",
        "themes"
    ],
});
</script> -->

    <!-- Include Styles -->
    @include('layouts/sections/styles')

    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('layouts/sections/scriptsIncludes')


</head>

<body>

    <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            <!-- Layout page -->
            <div class="layout-page">

                <!-- BEGIN: Navbar-->
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme d-none" id="layout-navbar">

                    <!--  Brand demo (display only for navbar-full and hide on below xl) -->

                    <!-- ! Not required for layout-without-menu -->
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <!--<div class="navbar-nav align-items-center">-->
                        <!--    <div class="nav-item navbar-search-wrapper mb-0">-->
                        <!--        <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">-->
                        <!--            <i class="bx bx-search bx-sm"></i>-->
                        <!--            <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>-->
                        <!--        </a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Language -->
                            <!-- <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <i class='bx bx-globe bx-sm'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item active" href="list.html" data-language="en">
                                            <span class="align-middle">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="list.html" data-language="fr">
                                            <span class="align-middle">French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="list.html" data-language="de">
                                            <span class="align-middle">German</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="list.html" data-language="pt">
                                            <span class="align-middle">Portuguese</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                            <!--/ Language -->

                            <!-- Quick links  -->
                            <!-- <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class='bx bx-grid-alt bx-sm'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                            <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-calendar fs-4"></i>
                                                </span>
                                                <a href="../../calendar.html" class="stretched-link">Calendar</a>
                                                <small class="text-muted mb-0">Appointments</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-food-menu fs-4"></i>
                                                </span>
                                                <a href="../../invoice/list.html" class="stretched-link">Invoice App</a>
                                                <small class="text-muted mb-0">Manage Accounts</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-user fs-4"></i>
                                                </span>
                                                <a href="../../user/list.html" class="stretched-link">User App</a>
                                                <small class="text-muted mb-0">Manage Users</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-check-shield fs-4"></i>
                                                </span>
                                                <a href="../../access-roles.html" class="stretched-link">Role
                                                    Management</a>
                                                <small class="text-muted mb-0">Permission</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                                </span>
                                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1"
                                                    class="stretched-link">Dashboard</a>
                                                <small class="text-muted mb-0">User Profile</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-cog fs-4"></i>
                                                </span>
                                                <a href="../../../pages/account-settings-account.html"
                                                    class="stretched-link">Setting</a>
                                                <small class="text-muted mb-0">Account Settings</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-help-circle fs-4"></i>
                                                </span>
                                                <a href="../../../pages/faq.html" class="stretched-link">FAQs</a>
                                                <small class="text-muted mb-0">FAQs & Articles</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-window-open fs-4"></i>
                                                </span>
                                                <a href="../../../modal-examples.html" class="stretched-link">Modals</a>
                                                <small class="text-muted mb-0">Useful Popups</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <!-- Quick links -->


                            <!-- Notification -->
                            <!--<li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">-->
                            <!--    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"-->
                            <!--        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">-->
                            <!--        <i class="bx bx-bell bx-sm"></i>-->
                            <!--        <span class="badge bg-danger rounded-pill badge-notifications">5</span>-->
                            <!--    </a>-->
                            <!--    <ul class="dropdown-menu dropdown-menu-end py-0">-->
                            <!--        <li class="dropdown-menu-header border-bottom">-->
                            <!--            <div class="dropdown-header d-flex align-items-center py-3">-->
                            <!--                <h5 class="text-body mb-0 me-auto">Notification</h5>-->
                            <!--                <a href="javascript:void(0)" class="dropdown-notifications-all text-body"-->
                            <!--                    data-bs-toggle="tooltip" data-bs-placement="top"-->
                            <!--                    title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>-->
                            <!--            </div>-->
                            <!--        </li>-->
                            <!--        <li class="dropdown-notifications-list scrollable-container">-->
                            <!--            <ul class="list-group list-group-flush">-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <img src="../../../../demo/assets/img/avatars/1.png" alt-->
                            <!--                                    class="w-px-40 h-auto rounded-circle">-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>-->
                            <!--                            <p class="mb-0">Won the monthly best seller gold badge</p>-->
                            <!--                            <small class="text-muted">1h ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <span-->
                            <!--                                    class="avatar-initial rounded-circle bg-label-danger">CF</span>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">Charles Franklin</h6>-->
                            <!--                            <p class="mb-0">Accepted your connection</p>-->
                            <!--                            <small class="text-muted">12hr ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <img src="../../../../demo/assets/img/avatars/2.png" alt-->
                            <!--                                    class="w-px-40 h-auto rounded-circle">-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">New Message ✉️</h6>-->
                            <!--                            <p class="mb-0">You have new message from Natalie</p>-->
                            <!--                            <small class="text-muted">1h ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <span-->
                            <!--                                    class="avatar-initial rounded-circle bg-label-success"><i-->
                            <!--                                        class="bx bx-cart"></i></span>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">Whoo! You have new order 🛒 </h6>-->
                            <!--                            <p class="mb-0">ACME Inc. made new order $1,154</p>-->
                            <!--                            <small class="text-muted">1 day ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <img src="../../../../demo/assets/img/avatars/9.png" alt-->
                            <!--                                    class="w-px-40 h-auto rounded-circle">-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">Application has been approved 🚀 </h6>-->
                            <!--                            <p class="mb-0">Your ABC project application has been approved.-->
                            <!--                            </p>-->
                            <!--                            <small class="text-muted">2 days ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <span-->
                            <!--                                    class="avatar-initial rounded-circle bg-label-success"><i-->
                            <!--                                        class="bx bx-pie-chart-alt"></i></span>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">Monthly report is generated</h6>-->
                            <!--                            <p class="mb-0">July monthly financial report is generated </p>-->
                            <!--                            <small class="text-muted">3 days ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <img src="../../../../demo/assets/img/avatars/5.png" alt-->
                            <!--                                    class="w-px-40 h-auto rounded-circle">-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">Send connection request</h6>-->
                            <!--                            <p class="mb-0">Peter sent you connection request</p>-->
                            <!--                            <small class="text-muted">4 days ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <img src="../../../../demo/assets/img/avatars/6.png" alt-->
                            <!--                                    class="w-px-40 h-auto rounded-circle">-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">New message from Jane</h6>-->
                            <!--                            <p class="mb-0">Your have new message from Jane</p>-->
                            <!--                            <small class="text-muted">5 days ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--                <li-->
                            <!--                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">-->
                            <!--                    <div class="d-flex">-->
                            <!--                        <div class="flex-shrink-0 me-3">-->
                            <!--                            <div class="avatar">-->
                            <!--                                <span-->
                            <!--                                    class="avatar-initial rounded-circle bg-label-warning"><i-->
                            <!--                                        class="bx bx-error"></i></span>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-grow-1">-->
                            <!--                            <h6 class="mb-1">CPU is running high</h6>-->
                            <!--                            <p class="mb-0">CPU Utilization Percent is currently at 88.63%,-->
                            <!--                            </p>-->
                            <!--                            <small class="text-muted">5 days ago</small>-->
                            <!--                        </div>-->
                            <!--                        <div class="flex-shrink-0 dropdown-notifications-actions">-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-read"><span-->
                            <!--                                    class="badge badge-dot"></span></a>-->
                            <!--                            <a href="javascript:void(0)"-->
                            <!--                                class="dropdown-notifications-archive"><span-->
                            <!--                                    class="bx bx-x"></span></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </li>-->
                            <!--            </ul>-->
                            <!--        </li>-->
                            <!--        <li class="dropdown-menu-footer border-top p-3">-->
                            <!--            <button class="btn btn-primary text-uppercase w-100">view all-->
                            <!--                notifications</button>-->
                            <!--        </li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                            <!--/ Notification -->


                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>

                </nav>
                <!-- / Navbar -->
                <!-- END: Navbar-->

                <div class="heade--new">

                    <div class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online notifi-img-bg">
                                <img src="{{asset('assets/admin.png')}}" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{route('settings.index')}}">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="{{asset('assets/admin.png')}}" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-medium d-block">
                                                John Doe
                                            </span>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('settings.index')}}">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <!--<li>-->
                            <!--    <a class="dropdown-item" href="../../../pages/account-settings-billing.html">-->
                            <!--        <span class="d-flex align-items-center align-middle">-->
                            <!--            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>-->
                            <!--            <span class="flex-grow-1 align-middle">Billing</span>-->
                            <!--            <span-->
                            <!--                class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>-->
                            <!--        </span>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Logout</span>
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </div>

                </div>



                <!-- Side bar  -->

                @include('layouts/commonSidebar')
                <!--/ Side bar  -->


                <!-- Layout Content -->
                @yield('layoutContent')
                <!--/ Layout Content -->



                <!-- Include Scripts -->
                @include('layouts/sections/footer/footer')

                <!-- Include Scripts -->
                @include('layouts/sections/scripts')

</body>

</html>