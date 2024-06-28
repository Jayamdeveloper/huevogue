@include('layouts.inner-header')
<style>
span.badge.square {
    background-color: #000 !important;
    color: #fff !important;
}
</style>

<div class="container-fluid p-0" style="background-color: #f7f7f7;">
    <div class="breadcrump-con">

        <div class="bread-link">
            <a href="{{route('home')}}">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>

        <div class="bread-arrow">
            <i class="fa-solid fa-chevron-right"></i>
        </div>

        <div class="bread-text">
            Checkout
        </div>

    </div>
</div>


<section class="checkout-container">

    <div class="row">

        <div class="col-lg-8 left-address-con">

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
                        <input type="radio" name="radio-card" id="radio-card-1" checked />
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
                            <div class="address-card-actions">

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
                        <input type="radio" name="radio-card" id="radio-card-2" />
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
                            <div class="address-card-actions">

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

        <div class="col-lg-4 cart--align-co">

            <div class="payment-title border-0 pb-1">
                DELIVERY ESTIMATES
            </div>

            <div class="row cart-con">

                <div class="col-3">
                    <img src="assets/img/product1.png" alt="" class="checkoutimg">
                </div>

                <div class="col-9 px-0">

                    <div class="cart-pro-title">
                        Supreme Polishing Treatment
                    </div>

                    <!-- <div class="cart-bottom">
                        <div class="price">
                            $39.00
                        </div>

                        <div class="side-cart-action">
                            <div class="quandity-txt">
                                Qty - <span>2</span>
                            </div>
                        </div>


                    </div> -->

                </div>

            </div>

            <div class="row pt-5">

                <div class="col-3">
                    <img src="assets/img/product2.png" alt="" class="checkoutimg">
                </div>

                <div class="col-9 px-0">

                    <div class="cart-pro-title">
                        Supreme Polishing Treatment
                    </div>

                    <!-- <div class="cart-bottom">
                        <div class="price">
                            $39.00
                        </div>

                        <div class="side-cart-action">
                            <div class="quandity-txt">
                                Qty - <span>2</span>
                            </div>
                        </div>


                    </div> -->

                </div>



            </div>

            <div class="payment-method-con">

                <div class="payment-title">
                    PRICE DETAILS <span>(1 Item)</span>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="checkout--con w-100">

                    <div class="checkout-body">


                        <div class="checkout-inner">

                            <div>Total MRP </div>

                            <div>$50</div>

                        </div>

                        <div class="checkout-inner">

                            <div>Discount on MRP </div>

                            <div class="light-green">- $10</div>

                        </div>

                        <div class="checkout-inner pb-0">

                            <div>Shipping Fee </div>

                            <div>
                                <span class="line-through">$15</span>
                                <span class="light-green">FREE</span>
                            </div>

                        </div>
                        <div class="freedelivery-txt">
                            Free shipping for you
                        </div>

                        <div class="checkout-inner border-top total-amount-con">
                            <div>
                                Total Amount
                            </div>
                            <div>
                                $40
                            </div>
                        </div>

                    </div>

                    <div type="button" class="checkout-bottom" id="place-order-btn">
                        Place Order <i class="fa-solid fa-circle-check ps-4"></i>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-12 payments-info-con">

            <div class="payment-all-imgs">
                <img src="assets/img/payment-imgs/footer-bank-bhim.png" alt="">
                <img src="assets/img/payment-imgs/footer-bank-mc.png" alt="">
                <img src="assets/img/payment-imgs/footer-bank-nb.png" alt="">
                <img src="assets/img/payment-imgs/footer-bank-rupay.png" alt="">
                <img src="assets/img/payment-imgs/footer-bank-visa.png" alt="">
            </div>

            <a href="#contactus" class="need-help-txt">
                <span>Need Help ? Contact Us</span>
            </a>
        </div>

    </div>

</section>

@include('layouts.footer')

<script>
function showSuccessAlert() {
    Swal.fire({
        icon: 'success',
        title: 'Order Placed Successfully!',
        text: 'Thank you for your purchase.',
        confirmButtonColor: '#28a745' // Optional: customize confirm button color
    });
}

document.getElementById('place-order-btn').addEventListener('click', function() {

    showSuccessAlert();
});
</script>