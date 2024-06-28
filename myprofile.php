<?php include('assets/connect/inner-header.php'); ?>

<style>
    span.badge.square {
        background-color: #000 !important;
        color: #fff !important;
    }

    label.radio-card input[type=radio]:checked+.card-content-wrapper {
        background-color: #fff;
    }
</style>

<div class="container-fluid p-0" style="background-color: #f7f7f7;">

    <div class="breadcrump-con">

        <div class="bread-link">
            <a href="index.php">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>

        <div class="bread-arrow">
            <i class="fa-solid fa-chevron-right"></i>
        </div>

        <div class="bread-text">
            My Profile
        </div>

    </div>

</div>

<section class="terms-conditions-con my-profile-section">

    <div class="row">

        <div class="col-md-4">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'myProfileTab1')">Address Book</button>
                <button class="tablinks" onclick="openCity(event, 'myProfileTab2')" id="defaultOpen">Order History</button>
            </div>
        </div>

        <div class="col-md-8">

            <div id="myProfileTab1" class="tabcontent">

                <div class="row">

                    <div class="col-12 d-flex justify-content-between align-items-center">

                        <div class="delivery-address-title">
                            Delivered to this Address <i class="fa-solid fa-location-dot ps-3"></i>
                        </div>

                        <div class="add-addresscon" type="button" data-bs-toggle="modal" data-bs-target="#address">
                            <i class="fas fa-plus pe-3"></i> Add
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="radio-card-1" class="radio-card w-100 position-relative">

                            <div class="payment-title border-0 address-title-align">
                                DEFAULT ADDRESS
                            </div>
                            <input type="radio" name="radio-card" id="radio-card-1" checked="">
                            <div class="card-content-wrapper position-relative">
                                <span class="check-icon"></span>
                                <div class="address-card">

                                    <div class="address-name">

                                        <div class="name-address">
                                            Madhavan Nagaraj
                                        </div>

                                    </div>

                                    <div class="address-txts">
                                        No.1, First Floor, First Street,
                                        Bharathi Nagar, Tambaram - Mudichur Road
                                        Tambaram West , Chennai - 600063
                                        Tamil Nadu, India
                                    </div>
                                    <div class="address-txts">
                                        Mobile:9876543210
                                    </div>
                                </div>
                                <div class="address-card-actions" style="">

                                    <div data-bs-toggle="modal" data-bs-target="#address">
                                        <span class="edit" type="button">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </span>
                                        Edit
                                    </div>

                                    <div>
                                        <span type="button" class="delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                        Delete
                                    </div>

                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="col-12">

                        <div class="payment-title border-0 address-title-align">
                            OTHER ADDRESS
                        </div>

                        <label for="radio-card-2" class="radio-card w-100">
                            <input type="radio" name="radio-card" id="radio-card-2">
                            <div class="card-content-wrapper position-relative">
                                <span class="check-icon"></span>
                                <div class="address-card">

                                    <div class="address-name">

                                        <div class="name-address">
                                            Madhavan Nagaraj
                                        </div>

                                    </div>

                                    <div class="address-txts">
                                        No.1, First Floor, First Street,
                                        Bharathi Nagar, Tambaram - Mudichur Road
                                        Tambaram West , Chennai - 600063
                                        Tamil Nadu, India
                                    </div>

                                    <div class="address-txts">
                                        Mobile:9876543210
                                    </div>

                                </div>
                                <div class="address-card-actions" style="display: none;">

                                    <div data-bs-toggle="modal" data-bs-target="#address">
                                        <span class="edit" type="button">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </span>
                                        Edit
                                    </div>

                                    <div>
                                        <span type="button" class="delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                        Delete
                                    </div>

                                </div>
                            </div>
                        </label>

                    </div>

                </div>

            </div>

            <div id="myProfileTab2" class="tabcontent">
                <div class="row">

                    <div class="col-12">

                        <div class="row cart-con">

                            <div class="col-xl-2 col-lg-3 col-md-4 col-4">
                                <img src="assets/img/product1.png" alt="" class="cart-img">
                            </div>

                            <div class="col-xl-10 col-lg-7 col-md-8 col-8">

                                <div class="cart-pro-title">
                                    Supreme Polishing Treatment
                                </div>

                                <div>
                                    When using a beard serum, it's typically applied directly to the beard and massaged into the skin underneath.
                                </div>

                                <div class="cart-bottom order-history-bottom">
                                    <div class="price order-history-price">
                                        $39.00
                                    </div>

                                    <div class="btn btn-danger btn-sm" type="button">
                                        <span>Pending</span>

                                        <i class="fa-solid fa-hourglass-half ps-4"></i>
                                    </div>

                                    <div type="button" class="Track-order-btn btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#order-track">
                                        Track Order
                                        <i class="fa-solid fa-truck-fast ps-4"></i>
                                    </div>

                                    <div class="profile-help-text">
                                        <a href="index.php#contactus">
                                            Help/Support <i class="fa-solid fa-headphones-simple ps-3"></i>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row cart-con">

                            <div class="col-xl-2 col-lg-3 col-md-4 col-4">
                                <img src="assets/img/product2.png" alt="" class="cart-img">
                            </div>

                            <div class="col-xl-10 col-lg-7 col-md-8 col-8">

                                <div class="cart-pro-title">
                                    Beard Growth Serum
                                </div>

                                <div>
                                    When using a beard serum, it's typically applied directly to the beard and massaged into the skin underneath.
                                </div>

                                <div class="cart-bottom order-history-bottom">

                                    <div class="price order-history-price">
                                        $39.00
                                    </div>


                                    <div type="button" class="btn btn-success btn-sm" style="cursor:default;">
                                        <span>Completed</span>
                                        <i class="fa-solid fa-circle-check ps-4"></i>
                                    </div>

                                    <div type="button" class="Track-order-btn btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#order-track">
                                        Track Order
                                        <i class="fa-solid fa-truck-fast ps-4"></i>
                                    </div>

                                    <div class="profile-help-text">
                                        <a href="index.php#contactus">
                                            Help/Support <i class="fa-solid fa-headphones-simple ps-3"></i>
                                        </a>
                                    </div>

                                </div>

                                <div class="delivered-product-invoice-con">

                                    <div>
                                        <div class="delivered--title position-relative">
                                            Delivered on May 05
                                        </div>

                                        <div class="delivered-sec-title">
                                            Item has been delivered
                                        </div>
                                    </div>



                                    <div class="download-invoice">
                                        <a href="">Download Invoice <i class="fa-solid fa-download"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>
            </div>


        </div>

    </div>

</section>

<?php include('assets/connect/footer.php'); ?>