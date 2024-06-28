<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed     " dir="ltr"
    data-theme="theme-default"
    data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1"
    data-framework="laravel" data-template="vertical-menu-theme-default-light">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/charts/chartjs by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 05:35:59 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Chart.js - Charts |
        Sneat -
        Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="pfCn6MKioneV2TzkfUr4GEExjYaDfp8CainvGO5A">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />





    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    <!-- Vendor Styles -->


    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('assets/js/config.js') }}"></script>

  <script>
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
            'theme-default-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
                      'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
            'theme-bordered-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
                      'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
            'theme-semi-dark-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
    });
  </script>
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

    @include('layouts.commonSidebar')
    

    <!-- Layout page -->
    <div class="layout-page">

      
      

      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      
      <!-- ! Not required for layout-without-menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
              <i class="bx bx-search bx-sm"></i>
              <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        
        <!-- Language -->
        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='bx bx-globe bx-sm'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item active" href="../forms/editors.html" data-language="en">
                <span class="align-middle">English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="chartjs.html" data-language="fr">
                <span class="align-middle">French</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="chartjs.html" data-language="de">
                <span class="align-middle">German</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="chartjs.html" data-language="pt">
                <span class="align-middle">Portuguese</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Language -->

        <!-- Quick links  -->
        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class='bx bx-grid-alt bx-sm'></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end py-0">
            <div class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
              </div>
            </div>
            <div class="dropdown-shortcuts-list scrollable-container">
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-calendar fs-4"></i>
                  </span>
                  <a href="../app/calendar.html" class="stretched-link">Calendar</a>
                  <small class="text-muted mb-0">Appointments</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-food-menu fs-4"></i>
                  </span>
                  <a href="../app/invoice/list.html" class="stretched-link">Invoice App</a>
                  <small class="text-muted mb-0">Manage Accounts</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-user fs-4"></i>
                  </span>
                  <a href="../app/user/list.html" class="stretched-link">User App</a>
                  <small class="text-muted mb-0">Manage Users</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-check-shield fs-4"></i>
                  </span>
                  <a href="../app/access-roles.html" class="stretched-link">Role Management</a>
                  <small class="text-muted mb-0">Permission</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                  <small class="text-muted mb-0">User Profile</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-cog fs-4"></i>
                  </span>
                  <a href="../pages/account-settings-account.html" class="stretched-link">Setting</a>
                  <small class="text-muted mb-0">Account Settings</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-help-circle fs-4"></i>
                  </span>
                  <a href="../pages/faq.html" class="stretched-link">FAQs</a>
                  <small class="text-muted mb-0">FAQs & Articles</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-window-open fs-4"></i>
                  </span>
                  <a href="../modal-examples.html" class="stretched-link">Modals</a>
                  <small class="text-muted mb-0">Useful Popups</small>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- Quick links -->

                <!-- Style Switcher -->
        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='bx bx-sm'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Style Switcher -->
        
        <!-- Notification -->
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class="bx bx-bell bx-sm"></i>
            <span class="badge bg-danger rounded-pill badge-notifications">5</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">Notification</h5>
                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
              </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                      <p class="mb-0">Won the monthly best seller gold badge</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Charles Franklin</h6>
                      <p class="mb-0">Accepted your connection</p>
                      <small class="text-muted">12hr ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/2.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New Message ✉️</h6>
                      <p class="mb-0">You have new message from Natalie</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                      <p class="mb-0">ACME Inc. made new order $1,154</p>
                      <small class="text-muted">1 day ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/9.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Application has been approved 🚀 </h6>
                      <p class="mb-0">Your ABC project application has been approved.</p>
                      <small class="text-muted">2 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Monthly report is generated</h6>
                      <p class="mb-0">July monthly financial report is generated </p>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Send connection request</h6>
                      <p class="mb-0">Peter sent you connection request</p>
                      <small class="text-muted">4 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/6.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New message from Jane</h6>
                      <p class="mb-0">Your have new message from Jane</p>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">CPU is running high</h6>
                      <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown-menu-footer border-top p-3">
              <button class="btn btn-primary text-uppercase w-100">view all notifications</button>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="../pages/profile-user.html">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
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
              <a class="dropdown-item" href="../pages/profile-user.html">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
                        <li>
              <a class="dropdown-item" href="../pages/account-settings-billing.html">
                <span class="d-flex align-items-center align-middle">
                  <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                  <span class="flex-grow-1 align-middle">Billing</span>
                  <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                </span>
              </a>
            </li>
                          <li>
                <div class="dropdown-divider"></div>
              </li>
                            <li>
                <a class="dropdown-item" href="../auth/login-basic.html">
                  <i class='bx bx-log-in me-2'></i>
                  <span class="align-middle">Login</span>
                </a>
              </li>
                          </ul>
          </li>
          <!--/ User -->
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


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Charts /</span> Chart.js
</h4>

<div class="row">
  <!-- Bar Charts -->
  <div class="col-xl-6 col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Latest Statistics</h5>
        <div class="card-action-element ms-auto py-0">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="barChart" class="chartjs" data-height="400"></canvas>
      </div>
    </div>
  </div>
  <!-- /Bar Charts -->

  <!-- Horizontal Bar Charts -->
  <div class="col-xl-6 col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <div class="d-flex flex-column">
          <p class="card-subtitle text-muted mb-1">Balance</p>
          <h5 class="card-title mb-0">$74,123</h5>
        </div>
        <div class="card-action-element ms-auto py-0">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="horizontalBarChart" class="chartjs" data-height="400"></canvas>
      </div>
    </div>
  </div>
  <!-- /Horizontal Bar Charts -->

  <!-- Line Charts -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <div>
          <h5 class="card-title mb-0">Statistics</h5>
          <small class="text-muted">Commercial networks and enterprises</small>
        </div>
        <div class="card-header-elements ms-auto py-0">
          <h5 class="mb-0 me-3">$ 78,000</h5>
          <span class="badge bg-label-secondary">
            <i class='bx bx-up-arrow-alt bx-xs text-success'></i>
            <span class="align-middle">37%</span>
          </span>
        </div>
      </div>
      <div class="card-body">
        <canvas id="lineChart" class="chartjs" data-height="500"></canvas>
      </div>
    </div>
  </div>
  <!-- /Line Charts -->

  <!-- Radar Chart -->
  <div class="col-lg-6 col-12 mb-4">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Radar Chart</h5>
      </div>
      <div class="card-body">
        <canvas class="chartjs" id="radarChart" data-height="355"></canvas>
      </div>
    </div>
  </div>
  <!-- /Radar Chart -->

  <!-- Polar Area Chart -->
  <div class="col-lg-6 col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Average Skills</h5>
        <div class="card-header-elements ms-auto py-0 dropdown">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" id="heat-chart-dd" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heat-chart-dd">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="polarChart" class="chartjs" data-height="337"></canvas>
      </div>
    </div>
  </div>
  <!-- /Polar Area Chart -->

  <!-- Bubble Chart -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Bubble Chart</h5>
        <div class="card-header-elements ms-auto py-0">
          <h5 class="mb-0 me-3">$ 100,000</h5>
          <span class="badge bg-label-secondary">
            <i class='bx bx-down-arrow-alt bx-xs text-danger'></i>
            <span class="align-middle">20%</span>
          </span>
        </div>
      </div>
      <div class="card-body">
        <canvas id="bubbleChart" class="chartjs" data-height="500"></canvas>
      </div>
    </div>
  </div>
  <!-- /Bubble Chart -->

  <!-- Line Area Charts -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Data Science</h5>
        <div class="card-header-elements py-0 ms-auto">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body pt-2">
        <canvas id="lineAreaChart" class="chartjs" data-height="450"></canvas>
      </div>
    </div>
  </div>
  <!-- /Line Area Charts -->

  <!-- Doughnut Chart -->
  <div class="col-lg-4 col-12 mb-4">
    <div class="card">
      <h5 class="card-header">User by Devices</h5>
      <div class="card-body">
        <canvas id="doughnutChart" class="chartjs mb-4" data-height="350"></canvas>
        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
          <li class="ct-series-0 d-flex flex-column">
            <h5 class="mb-0">Desktop</h5>
            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(102, 110, 232);width:35px; height:6px;"></span>
            <div class="text-muted">80 %</div>
          </li>
          <li class="ct-series-1 d-flex flex-column">
            <h5 class="mb-0">Tablet</h5>
            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(40, 208, 148);width:35px; height:6px;"></span>
            <div class="text-muted">10 %</div>
          </li>
          <li class="ct-series-2 d-flex flex-column">
            <h5 class="mb-0">Mobile</h5>
            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(253, 172, 52);width:35px; height:6px;"></span>
            <div class="text-muted">10 %</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Doughnut Chart -->

  <!-- Scatter Chart -->
  <div class="col-lg-8 col-12 mb-4">
    <div class="card">
      <div class="card-header flex-nowrap header-elements">
        <h5 class="card-title mb-0">New Product Data</h5>
        <div class="card-header-elements ms-auto py-0 d-none d-sm-block">
          <div class="btn-group" role="group" aria-label="radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="dailyRadio" checked>
            <label class="btn btn-outline-secondary" for="dailyRadio">Daily</label>

            <input type="radio" class="btn-check" name="btnradio" id="monthlyRadio">
            <label class="btn btn-outline-secondary" for="monthlyRadio">Monthly</label>

            <input type="radio" class="btn-check" name="btnradio" id="yearlyRadio">
            <label class="btn btn-outline-secondary" for="yearlyRadio">Yearly</label>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="scatterChart" class="chartjs" data-height="435"></canvas>
      </div>
    </div>
  </div>
  <!-- /Scatter Chart -->
</div>

          </div>
          <!-- / Content -->

         @include('layouts.sections.scripts')
<!-- BEGIN: Page JS-->
<script src="{{ asset('assets/js/charts-chartjs.js') }}"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/charts/chartjs by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 05:36:02 GMT -->
</html>