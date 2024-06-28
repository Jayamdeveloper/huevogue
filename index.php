<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUE VOGUE</title>
    <link rel="icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/stylesheet.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/theme-orange.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/design.css">
    <link rel="stylesheet" href="assets/css/design-responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">

</head>
<style>
    .nav-item.active {
        background-color: #5c5a56;
    }

    .nav-item.active a {
        color: #fff;
    }

    i.fa.fa-user-circle-o.user-i-con {
        font-size: 23px;
        padding: 0px;
    }

    .navbar-dark .nav-item.active {
        background-color: transparent;
    }

    .navbar-dark .nav-item.active a {
        color: #fff;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navItems = document.querySelectorAll('.nav-item');

        function removeActiveClass() {
            navItems.forEach(navItem => navItem.classList.remove('active'));
        }

        function setActiveClass() {
            navItems.forEach(item => {
                if (item.getAttribute('href') === 'index.php' || item.getAttribute('href') === '/') {
                    item.classList.add('active');
                }
            });
        }
        setActiveClass();
        navItems.forEach(item => {
            item.addEventListener('click', function() {
                removeActiveClass();
                this.classList.add('active');
            });
        });
    });
</script>

<body>

    <header class="header header-sticky header-transparent header-sticky-smart disable-transition-all position-absolute start-0 end-0 z-index-5">
        <div class="sticky-area">
            <div class="main-header nav navbar navbar-dark navbar-expand-xl transition-all-1 py-6 py-xl-0">
                <div class="container-wide container">
                    <div class="d-flex d-xl-none w-100 flex-nowrap">
                        <div class="w-72px d-flex d-xl-none">
                            <button class="navbar-toggler align-self-center  border-0 shadow-none px-0 canvas-toggle p-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavBar" aria-controls="offCanvasNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                                <span class="fs-24 toggle-icon"></span>
                            </button>
                        </div>
                        <div class="d-flex mx-auto">
                            <a href="index.php" class="navbar-brand has-sticky-logo px-8 py-4 mx-auto logo--align">
                                <img class="light-mode-img" src="assets/img/logo.png" alt="HUE VOGUE">

                                <img class="sticky-logo sticky-logo-light" src="assets/img/logo-dark.png" alt="HUE VOGUE">

                            </a>
                        </div>
                        <div class="icons-actions d-flex d-xl-none justify-content-start fs-28px text-light">
                        </div>
                    </div>
                    <div class="d-xl-flex flex-column flex-xl-row w-100">
                        <div class="w-auto w-xl-50 d-flex align-items-center justify-content-flex-end">

                            <ul class="navbar-nav w-100 w-xl-auto navss--mobile-hide">
                                <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px mr--30" href="#" id="menu-item-home">Home</a>
                                </li>

                                <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth position-static">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="#about" id="menu-item-shop">New Collection</a>

                                </li>

                            </ul>

                        </div>

                        <div class="px-10  d-xl-flex align-items-center navss--mobile-hide">
                            <a href="index.php" class="navbar-brand has-sticky-logo px-0 py-4 mx-auto logo--align">
                                <img class="light-mode-img" src="assets/img/logo.png" alt="HUE VOGUE">

                                <img class="sticky-logo sticky-logo-light" src="assets/img/logo-dark.png" alt="HUE VOGUE">

                            </a>
                        </div>
                        <div class="w-auto w-xl-50 d-flex align-items-center">

                            <?php
                            $current_uri = $_SERVER['REQUEST_URI'];
                            ?>

                            <ul class="navbar-nav w-100 w-xl-auto navss--mobile-hide">
                                <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth <?php echo strpos($current_uri, 'products') !== false ? 'active' : ''; ?>">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="#products" id="menu-item-blocks">Products</a>
                                </li>
                                <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth <?php echo strpos($current_uri, 'contactus') !== false ? 'active' : ''; ?>">
                                    <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="#contactus" id="menu-item-docs">Contact Us</a>
                                </li>
                            </ul>


                            <div class="icons-actions d-flex justify-content-end ms-auto fs-28px text-light">

                                <div class="dropdown dropstart pe-lg-5">
                                    <div type="button" class="cart-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-user-circle-o user-i-con" aria-hidden="true"></i>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li data-bs-toggle="modal" data-bs-target="#loginModel">
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-sign-in border-0" aria-hidden="true">
                                                </i>Login / Signup
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="myprofile.php">
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

                                        <!--<li data-bs-toggle="modal" data-bs-target="#RegisterModel">-->
                                        <!--    <a class="dropdown-item" href="#">-->
                                        <!--        <i class="fa fa-id-badge border-0" aria-hidden="true"></i>Registration-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                </div>

                                <div class="px-5 d-xl-inline-block">
                                    <a class="lh-1 color-inherit text-decoration-none cart-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                        <i class="fa fa-shopping-cart shopping-cart-i" aria-hidden="true"></i>
                                    </a>
                                    <a class="position-relative lh-1 color-inherit text-decoration-none" href="#">
                                        <span class="badge bg-white text-dark position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square" style="--square-size: 18px">2</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="content" class="wrapper layout-page">

        <section>
            <div class="hero hero-header-13 container-fluid">
                <div class="row">
                    <div data-animate="fadeInUp" class="col-6 mb-md-0 px-0">
                        <div class="d-flex justify-content-center border-0 text-center hero-hover-shine hover-zoom-in hero-height">
                            <!-- <img class="lazy-image object-fit-cover w-100 object-fit-cover img-fluid light-mode-img" src="#" data-src="" width="570" height="700" alt="BODYCARE"> -->
                            <img class="lazy-image dark-mode-img object-fit-cover w-100 object-fit-cover img-fluid" src="#" data-src="assets/img/slider/left-slide.jpg" width="570" height="700" alt="BODYCARE">
                            <div class="card-img-overlay d-inline-flex flex-column p-8 justify-content-center hero-overlay-2">
                                <!-- <p class="card-text fs-6 fs-sm-18px fs-md-4 text-white mb-4 d-flex justify-content-center">
                                    Find Inspration
                                </p> -->
                                <!-- <h3 class="card-title text-white mb-5 hero-title-4 font-primary fw-normal">BODYCARE</h3> -->
                                <!-- <div>
                                    <a href="#" class="pb-2 btn btn-link text-white p-0 fw-semibold text-decoration-none hero-link">
                                        Discover Now
                                        <svg class="icon icon-arrow-right">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div data-animate="fadeInUp" class=" col-6 mb-md-0 px-0">
                        <div class="d-flex justify-content-center border-0 text-center hero-hover-shine hover-zoom-in hero-height">
                            <img class="lazy-image object-fit-cover w-100 object-fit-cover img-fluid" src="#" data-src="assets/img/slider/right-slide.jpg" width="570" height="700" alt="SKINCARE">
                            <div class="card-img-overlay d-inline-flex flex-column p-8 justify-content-center hero-overlay-2">
                                <!-- <p class="card-text fs-6 fs-sm-18px fs-md-4 text-white mb-4 d-flex justify-content-center">
                                    Find Inspration
                                </p>
                                <h3 class="card-title text-white mb-5 hero-title-4 font-primary fw-normal">SKINCARE</h3> -->
                                <!-- <div>
                                    <a href="#" class="pb-2 btn btn-link text-white p-0 fw-semibold text-decoration-none hero-link">
                                        Discover Now
                                        <svg class="icon icon-arrow-right">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-12 py-lg-12 aboutbg" id="about">

            <div class="container container-xxl">

                <div class="row justify-content-center align-items-center">
                    <h2 class=" text-center about-title">New Collection</h2>
                </div>

                <div class="row pb-12">

                    <div class="col-12">
                        <div class="collection-con position-relative">
                            <img src="assets/img/collection/mens-undercut-haircuts-500x333.jpg" alt="">
                            <div class="banner-abt-btn">
                                <a href="#products">
                                    Buy Now
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">

                        <div class="about-new-con">

                            <div class="new-abt-title">
                                <span>About Us</span>
                            </div>

                            <div class="new-abt-content">
                                Before purchasing a beard serum, it's essential to consider your specific needs and
                                preferences, such as whether you prefer a particular scent, have any allergies or
                                sensitivities, or are targeting specific issues like dryness or patchy growth.
                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </section>

        <section class="servicesbg pb-14 py-lg-12 product-section" id="products">

            <div class="row">


                <div class="col-12 d-flex justify-content-center">
                    <h2 class="mb-16 text-center about-title">Our Products</h2>
                </div>

                <div class="col-sm-6 d-flex justify-content-center">
                    <div class="product--con">
                        <div class="product--img">
                            <img src="assets/img/product1.png" alt="">
                        </div>

                        <div class="product--des">
                            Supreme Polishing Treatment
                        </div>

                        <div class="product-description">
                            When using a beard serum, it's typically applied directly to the beard and massaged into the
                            skin underneath.
                        </div>


                        <div class="product--btn">
                            <div type="button" class="addto--cart--btn" id="addto-cart">
                                Add To Cart
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 d-flex justify-content-center">
                    <div class="product--con">
                        <div class="product--img">
                            <img src="assets/img/product2.png" alt="">
                        </div>
                        <div class="product--des">
                            Beard Growth Serum
                        </div>
                        <div class="product-description">
                            When using a beard serum, it's typically applied directly to the beard and massaged into the
                            skin underneath.
                        </div>
                        <div class="product--btn">
                            <div type="button" class="addto--cart--btn" id="addto-cart">
                                Add To Cart
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

        </section>

        <section class="pb-14 py-lg-12" id="contactus">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <h2 class="mb-10 text-center about-title">Contact Us</h2>
                </div>
            </div>
        </section>

        <section class="py-1 py-lg-2 contact-area ">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 contact-con-form">
                        <h2 class="mb-11 fs-3">Keep In Touch with Us</h2>
                        <form method="post" class="contact-from" id="contactForm" autocomplete="off" onsubmit="return checkCaptcha()">
                            <div class="row">
                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-6 mb--20">
                                    <input type="text" name="name" value="" id="fullName" class="form-control" placeholder="Full Name*" onkeypress="validateInput(event)" oninput="clearError('name-error')" />

                                    <div id="name-error" class="ms-1 mt-2" style="color:red; font-weight: 500;"></div>
                                </div>
                                <div class="form-group col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-md-6 mb--20">
                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="Your Email* " oninput="clearError('gmail-error'); emailValidation(this, event);">

                                    <div id="gmail-error" class="ms-1 mt-2" style="color:red; font-weight: 500;" title="Please enter a valid email address (e.g., user@example.com)."></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control mb--20" placeholder="Enter Your Phone Number *" value="" maxlength="10" oninput="validatePhoneNumber(this); clearError('phone-error')">

                                <div id="length-error-message" class="ms-1 mt-2" style="color:red; font-weight: 500;">
                                </div>

                                <div id="start-digit-error-message" class="ms-1 mt-2" style="color:red; font-weight: 500;"></div>

                                <div id="phone-error" class="ms-1 mt-2" style="color:red; font-weight: 500;"></div>
                            </div>
                            <div class="form-group mb--20">
                                <textarea name="message" class="form-control" placeholder="Enter Your Message *" maxlength="500" cols="30" value="" rows="3" oninput="clearError('message-error')"></textarea>
                                <div id="message-error" class="ms-1 mt-2" style="color:red; font-weight: 500;"></div>
                            </div>
                            <div class="form-group mb--20">
                                <label id="ebcaptchatext" style="color:#bf0a30; font-weight:550; font-size:14px;padding-bottom:10px;"></label>
                                <input type="text" class="form-control" id="ebcaptchainput" oninput="captchaerror('captcha-error')">
                                <label id="cap-alert" style="color:red;display:none">Your answer is wrong, please try
                                    again!</label>
                                <div id="captcha-error" class="ms-1 mt-2" style="color:red; font-weight: 500;"></div>
                            </div>

                            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-black width-100 mb-20" style="pointer-events: all; cursor: pointer;" onclick="validateCaptcha()">

                        </form>
                    </div>

                    <div class="col-lg-6">
                        <div class="quick-contact-new">

                            <!-- <h3>Quick Contact </h3> -->

                            <img src="assets/img/contactus.png" alt="" class="contactus-img">

                            <ul class="quick-c-ul">
                                <li>
                                    <div class="contact-inner-i">
                                        <i class="fa fa-phone mt--7"></i>
                                        Call Us
                                    </div>
                                    <div>
                                        <a href="tel:+919876543210">+91 98765 43210</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-inner-i">
                                        <i class="fa fa-envelope mt--2"></i>
                                        Email Us
                                    </div>
                                    <div>
                                        <a href="mailto:info@huevoguecom">info@huevoguecom</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php include('assets/connect/footer.php'); ?>

    <script>
        function showSuccessAlert() {
            Swal.fire({
                icon: 'success',
                title: 'Item Added Successfully!',
                timer: 1000, // 3000 milliseconds (3 seconds)
                timerProgressBar: true, // Show a progress bar
                showConfirmButton: false // Hide the "OK" button
            });
        }

        // Adding click event listener to all elements with class 'addto--cart--btn'
        var addToCartButtons = document.getElementsByClassName('addto--cart--btn');
        for (var i = 0; i < addToCartButtons.length; i++) {
            addToCartButtons[i].addEventListener('click', function() {
                showSuccessAlert();
            });
        }
    </script>


</body>

</html>