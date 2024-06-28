@php
$url = url()->current();
$segments = explode('/', rtrim($url, '/'));
$twoSegments = implode('/', array_slice($segments, -2));
$url = basename($url);


@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo p-0">
        <a href="{{route('admin.authlogin')}}" class="app-brand-link">
            <img src="{{asset('assets/logo-dark.png')}}" alt="" class="sidemenu-logo ps-2">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <!--<div class="menu-inner-shadow"></div>-->

    <ul class="menu-inner py-1">

        <li class="menu-item {{(isset($url) && $url=='dashboard') ? 'active':'' }} ">
            <a href="{{route('admin.authlogin')}}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate">Dashboard</div>
                <div class="badge bg-danger rounded-pill ms-auto"></div>
            </a>

        </li>

        <li class="menu-item {{(isset($url) && $url=='users') ? 'active':'' }} ">
            <a href="{{route('users.index')}}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate">Users</div>
                <div class="badge bg-danger rounded-pill ms-auto"></div>
            </a>

        </li>





        <!--<li class="menu-item {{($url=='users') ? 'active open':'' }}">-->
        <!--    <a href="javascript:void(0);" class="menu-link menu-toggle">-->
        <!--        <i class="menu-icon tf-icons bx bx-user"></i>-->
        <!--        <div class="text-truncate">Users</div>-->
        <!--    </a>-->


        <!--    <ul class="menu-sub">-->



        <!--        <li class="menu-item {{(isset($url) && $url=='users' && $url=='invoice-view') ? 'active':'' }}">-->
        <!--            <a href="{{route('users.index')}}" class="menu-link">-->
        <!--                <div>List</div>-->
        <!--            </a>-->
        <!--        </li>-->



        <!--         <li class="menu-item ">-->
        <!--            <a href="javascript:void(0)" class="menu-link menu-toggle">-->
        <!--                <div>View</div>-->
        <!--            </a>-->


        <!--            <ul class="menu-sub">-->



        <!--                <li class="menu-item ">-->
        <!--                    <a href="../../user/view/account.html" class="menu-link">-->
        <!--                        <div>Account</div>-->
        <!--                    </a>-->


        <!--                </li>-->



        <!--                <li class="menu-item ">-->
        <!--                    <a href="../../user/view/security.html" class="menu-link">-->
        <!--                        <div>Security</div>-->
        <!--                    </a>-->


        <!--                </li>-->



        <!--                <li class="menu-item ">-->
        <!--                    <a href="../../user/view/billing.html" class="menu-link">-->
        <!--                        <div>Billing &amp; Plans</div>-->
        <!--                    </a>-->


        <!--                </li>-->



        <!--                <li class="menu-item ">-->
        <!--                    <a href="../../user/view/notifications.html" class="menu-link">-->
        <!--                        <div>Notifications</div>-->
        <!--                    </a>-->


        <!--                </li>-->



        <!--                <li class="menu-item ">-->
        <!--                    <a href="../../user/view/connections.html" class="menu-link">-->
        <!--                        <div>Connections</div>-->
        <!--                    </a>-->


        <!--                </li>-->
        <!--            </ul>-->
        <!--        </li> -->
        <!--    </ul>-->
        <!--</li>-->



        <li class="menu-header small text-uppercase d-none">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>

        <!--<li class="menu-item {{($url=='customermanagement') ? 'active':'' }} ">-->
        <!--    <a href="{{route('customermanagement')}}" class="menu-link ">-->
        <!--        <i class='menu-icon tf-icons bx bxs-user-detail'></i>-->
        <!--        <div>Customer Management</div>-->
        <!--    </a>-->
        <!--</li>-->

        <li class="menu-item {{(isset($url) && $url=='orders') || ($url=='invoice-view') ? 'active':'' }}">
            <a href="{{route('orders.index')}}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-list-check'></i>
                <div>Order List</div>
            </a>
        </li>

        <li class="menu-item {{($twoSegments=='products/create' || $url=='products') ? 'active open':'' }} ">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-cart'></i>
                <div>Products</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item {{(isset($url) && $url=='products') ? 'active':'' }}">
                    <a href="{{route('products.index')}}" class="menu-link">
                        <div>Product List</div>
                    </a>


                </li>



                <li class="menu-item {{(isset($twoSegments) && $twoSegments=='products/create') ? 'active':'' }}">
                    <a href="{{route('products.create')}}" class="menu-link">
                        <div>Add Product</div>
                    </a>


                </li>

            </ul>
        </li>
        <li class="menu-item {{($twoSegments=='products/create' || $url=='products') ? 'active open':'' }} ">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-home me-3'></i>
                <div>Home</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item {{(isset($url) && $url=='products') ? 'active':'' }}">
                    <a href="{{route('manage-home')}}" class="menu-link">
                        <div>Home Menu</div>
                    </a>


                </li>

                <li class="menu-item {{(isset($url) && $url=='products') ? 'active':'' }}">
                    <a href="{{route('manage-slider')}}" class="menu-link">
                        <div>Home Slider</div>
                    </a>


                </li>



                <li class="menu-item {{(isset($twoSegments) && $twoSegments=='products/create') ? 'active':'' }}">
                    <a href="{{route('manage-collection')}}" class="menu-link">
                        <div>New Collection</div>
                    </a>


                </li>

            </ul>
        </li>

        <li class="menu-item {{($twoSegments=='privacypolicy' || $url=='termsandconditions' || $url=='cancellationrefundpolicy' || $url=='privacypolicy' ) ? 'active open':'' }} ">

            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa-solid fa-file-lines"></i>
                <div>Informative Pages</div>
            </a>


            <ul class="menu-sub">
                <li class="menu-item {{(isset($url) && $url=='privacypolicy') ? 'active':'' }}">
                    <a href="{{route('privacypolicy')}}" class="menu-link">
                        <div>Privacy Policy</div>
                    </a>
                </li>
            </ul>

            <ul class="menu-sub">
                <li class="menu-item {{(isset($url) && $url=='termsandconditions') ? 'active':'' }}">
                    <a href="{{route('termsandconditions')}}" class="menu-link">
                        <div>Terms & Conditions </div>
                    </a>
                </li>
            </ul>

            <ul class="menu-sub">
                <li class="menu-item {{(isset($url) && $url=='cancellationrefundpolicy') ? 'active':'' }}">
                    <a href="{{route('cancellationrefundpolicy')}}" class="menu-link">
                        <div>Cancellation & Refund Policy</div>
                    </a>
                </li>
            </ul>

        </li>


        <!-- <li class="menu-item {{($url=='category') ? 'active':'' }} ">
            <a href="{{route('category.index')}}" class="menu-link ">
                <div>Categories</div>
            </a>
        </li> -->

        <!-- <li class="menu-item {{($url=='orders-view' || $url=='orders') ? 'active open':'' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <div>Order</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item {{(isset($url) && $url=='orders') ? 'active':'' }}">
                    <a href="{{route('orders.index')}}" class="menu-link">
                        <div>Order List</div>
                    </a>


                </li>



                <li class="menu-item {{(isset($url) && $url=='orders-view') ? 'active':'' }}">
                    <a href="{{route('admin-orders-view')}}" class="menu-link">
                        <div> Order Details</div>
                    </a>


                </li>
            </ul>
        </li> -->


        <!--<li class="menu-item {{( $url=='invoice' || $url=='invoice-view' || $url=='edit' || $twoSegments=='invoice/create') ? 'active open':'' }}">-->
        <!--    <a href="javascript:void(0);" class="menu-link menu-toggle">-->
        <!--        <i class="menu-icon tf-icons bx bx-food-menu"></i>-->
        <!--        <div class="text-truncate">Invoice</div>-->
        <!--         <div class="badge bg-success rounded-pill ms-auto">4</div> -->
        <!--    </a>-->


        <!--    <ul class="menu-sub">-->



        <!--        <li class="menu-item {{($url=='invoice') ? 'active':'' }} ">-->
        <!--            <a href="{{route('invoice.index')}}" class="menu-link">-->
        <!--                <div>List</div>-->
        <!--            </a>-->


        <!--        </li>-->



        <!--        <li class="menu-item {{($url=='invoice-view') ? 'active':'' }}">-->
        <!--            <a href="{{route('admin-invoice-view')}}" class="menu-link">-->
        <!--                <div>Preview</div>-->
        <!--            </a>-->


        <!--        </li>-->



        <!--        <li class="menu-item {{ $url=='edit' ?'active':'' }}">-->
        <!--            <a href="{{route('invoice.edit',['invoice'=>1])}}" class="menu-link">-->
        <!--                <div>Edit</div>-->
        <!--            </a>-->


        <!--        </li>-->



        <!--        <li class="menu-item {{ $twoSegments=='invoice/create'?'active':'' }} ">-->
        <!--            <a href="{{route('invoice.create')}}" class="menu-link">-->
        <!--                <div>Add</div>-->
        <!--            </a>-->


        <!--        </li>-->
        <!--    </ul>-->
        <!--</li>-->



        <li class="menu-item {{(isset($url) && $url=='settings') ? 'active':'' }}">
            <a href="{{route('settings.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate">Profile</div>
            </a>
        </li>

        <li class="menu-item border-0">
            <a href="{{route('admin-login')}}" class="menu-link">
                <i class="bx bx-power-off me-2"></i>
                <div class="text-truncate">Logout</div>
            </a>
        </li>
    </ul>

</aside>