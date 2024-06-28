<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUE VOGUE</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesheet.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-orange.css') }}">

    <!---custom css end-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/design.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/design-responsive.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
    .navbar-expand-xl .navbar-nav .nav-link {
        color: #000;
    }

    .icons-actions i {
        color: #000;
    }

    /* header.header {
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
        } */
    button.navbar-toggler {
        color: #000;
    }
    </style>

</head>


<body>

    <header
        class="header header-sticky header-transparent header-sticky-smart disable-transition-all position-relative start-0 end-0 z-index-5">
        <div class="sticky-area">
            <div class="main-header nav navbar navbar-dark navbar-expand-xl transition-all-1 py-6 py-xl-0">
                <div class="container-wide container">
                    <div class="d-flex d-xl-none w-100 flex-nowrap">
                        <div class="w-72px d-flex d-xl-none">
                            <button
                                class="navbar-toggler align-self-center  border-0 shadow-none px-0 canvas-toggle p-4"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavBar"
                                aria-controls="offCanvasNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                                <span class="fs-24 toggle-icon"></span>
                            </button>
                        </div>
                        <div class="d-flex mx-auto">
                            <a href="{{ route('home') }}"
                                class="navbar-brand has-sticky-logo px-8 py-4 mx-auto logo--align">
                                <img class="light-mode-img" src="{{ asset('assets/img/logo-dark.png') }}"
                                    alt="HUE VOGUE">

                                <img class="sticky-logo sticky-logo-light" src="{{ asset('assets/img/logo-dark.png') }}"
                                    alt="HUE VOGUE">

                            </a>
                        </div>
                        <div class="icons-actions d-flex d-xl-none justify-content-start fs-28px text-light">

                        </div>
                    </div>
                    <div class=" d-xl-flex flex-column flex-xl-row w-100">
                        <div class="w-auto w-xl-50 d-flex align-items-center justify-content-flex-end">

                            <ul class="navbar-nav w-100 w-xl-auto navss--mobile-hide">
                                <li
                                    class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px mr--30"
                                        href="{{route('home')}}" id="menu-item-home">Home</a>
                                </li>
                                <li
                                    class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth position-static">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px"
                                        href="{{ url('/#about') }}" id="menu-item-shop">New Collection</a>
                                </li>
                            </ul>
                        </div>
                        <div class="px-10  d-xl-flex align-items-center navss--mobile-hide">
                            <a href="{{ route('home') }}" class="navbar-brand has-sticky-logo px-0 py-4 mx-auto">
                                <img class="light-mode-img" src="{{ asset('assets/img/logo-dark.png') }}"
                                    alt="HUE VOGUE">

                                <img class="sticky-logo sticky-logo-light" src="{{ asset('assets/img/logo-dark.png') }}"
                                    alt="HUE VOGUE">
                            </a>
                        </div>
                        <div class="w-auto w-xl-50 d-flex align-items-center">

                            <ul class="navbar-nav w-100 w-xl-auto navss--mobile-hide">
                                <li
                                    class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px "
                                        href="{{ url('/#products') }}" id="menu-item-blocks">Products</a>
                                </li>
                                <li
                                    class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px "
                                        href="{{ url('/#contactus') }}" id="menu-item-docs">Contact Us</a>
                                </li>
                            </ul>

                            <div class="icons-actions d-flex justify-content-end ms-auto fs-28px text-light">

                                <div class="dropdown dropstart pe-lg-5">
                                    <div type="button" class="" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-user-circle-o user-i-con" aria-hidden="true"></i>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li data-bs-toggle="modal" data-bs-target="#loginModel">
                                            <a class="dropdown-item" role="button">
                                                <i class="fa fa-sign-in border-0" aria-hidden="true">

                                                </i>Login / Signup
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('profile')}}">
                                                <i class="fa-regular fa-address-card border-0"></i>
                                                My Profile
                                            </a>
                                        </li>

                                        <!--<li>-->
                                        <!--    <a class="dropdown-item" href="#">-->
                                        <!--        <i class="fa fa-sign-out border-0" aria-hidden="true">-->
                                        <!--        </i>Signout-->
                                        <!--    </a>-->
                                        <!--</li>-->


                                    </ul>
                                </div>

                                <div class="px-5 d-xl-inline-block">
                                    <a class="lh-1 color-inherit text-decoration-none" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                                        aria-controls="offcanvasWithBothOptions">
                                        <i class="fa fa-shopping-cart shopping-cart-i" aria-hidden="true"></i>
                                    </a>
                                    <a class="position-relative lh-1 color-inherit text-decoration-none" href="#">
                                        <span
                                            class="badge bg-white text-dark position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                            style="--square-size: 18px">2</span>
                                    </a>
                                </div>

                                <!-- <div class="color-modes position-relative ps-5">
                                    <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                                        href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static"
                                        aria-label="Toggle theme (light)">
                                        <svg class="bi my-1 theme-icon-active">
                                            <use href="#sun-fill"></use>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center active"
                                                data-bs-theme-value="light" aria-pressed="true">
                                                <svg class="bi me-4 opacity-50 theme-icon">
                                                    <use href="#sun-fill"></use>
                                                </svg>
                                                Light
                                                <svg class="bi ms-auto d-none">
                                                    <use href="#check2"></use>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center"
                                                data-bs-theme-value="dark" aria-pressed="false">
                                                <svg class="bi me-4 opacity-50 theme-icon">
                                                    <use href="#moon-stars-fill"></use>
                                                </svg>
                                                Dark
                                                <svg class="bi ms-auto d-none">
                                                    <use href="#check2"></use>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center"
                                                data-bs-theme-value="auto" aria-pressed="false">
                                                <svg class="bi me-4 opacity-50 theme-icon">
                                                    <use href="#circle-half"></use>
                                                </svg>
                                                Auto
                                                <svg class="bi ms-auto d-none">
                                                    <use href="#check2"></use>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="content" class="wrapper layout-page">