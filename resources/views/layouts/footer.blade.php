</main>

<!-- <footer class="pt-1 pt-lg-2 pb-6 footer-new">
    <div class="container container-xxl pt-4">
        <div class="row align-items-center mt-0 mt-lg-2 pt-lg-4">

            <div class="col-xl-4 d-flex">
                <p class="copy-right">Copyright &copy; 2024 HUE VOGUE . All rights reserved</p>
            </div>

            <div class="col-xl-5">

                <div class="footer-links">
                    <div>
                        <a class="d-inline-block" href="privacy-policy.php">
                            Privacy Policy
                        </a>
                        &nbsp; | &nbsp;
                    </div>


                    <div>
                        <a class="d-inline-block" href="TermsandConditions.php">
                            Terms & Conditions
                        </a>
                        &nbsp; | &nbsp;
                    </div>

                    <div>
                        <a class="d-inline-block" href="refundpolicy.php">
                            Cancellation & Refund Policy
                        </a>
                    </div>
                </div>


            </div>

            <div class="col-xl-3">
                <a href="https://jayamwebsolutions.com/web-design-company-in-chennai.php" target="_blank"
                    rel="noopener noreferrer" class="jayam--link">Design by Jayam Web Solutions</a>
            </div>

        </div>
    </div>
</footer> -->

<div class="new-footer-con">

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center inner-footer--con">

            <div class="col-xl-4 text-center">
                <div class="copy-right">Copyright &copy; <?php echo date('Y'); ?> HUE VOGUE . All rights reserved</div>
            </div>

            <div
                class="col-xl-5 text-center d-flex align-items-center justify-content-between px-0 footer-link--main-con">

                <div class="footer-nav-links">

                    <div>
                        <a class="d-inline-block" href="{{ route('privacy-policy') }}">
                            Privacy Policy
                        </a>
                        &nbsp; | &nbsp;
                    </div>

                    <div>
                        <a class="d-inline-block" href="{{ route('terms-and-conditions') }}">
                            Terms & Conditions
                        </a>
                        &nbsp; | &nbsp;
                    </div>

                    <div>
                        <a class="d-inline-block" href="{{ route('refund-policy') }}">
                            Cancellation & Refund Policy
                        </a>
                    </div>

                </div>

                <div class="footer-track-btn">
                    <a href="{{route('profile') }}">
                        Track Order <i class="fa-solid fa-truck-fast"></i>
                    </a>
                </div>

            </div>

            <div class="col-xl-3 text-center">
                <a href="https://jayamwebsolutions.com/web-design-company-in-chennai.php" target="_blank"
                    rel="noopener noreferrer" class="jayam-connecting">Design by Jayam Web Solutions</a>
            </div>
        </div>
    </div>

</div>

<script>
function openCity(evt, cityName) {
    console.log("Function called with city name:", cityName);
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("active");
}
document.getElementById("defaultOpen").click();
</script>


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.min.js') }}"></script>
<script src="https://cdn.js') }}delivr.net/npm/sweetalert2@11"></script>



<div class="navbar">
    <div id="offCanvasNavBar" class="offcanvas offcanvas-start" style="--bs-offcanvas-width: 310px">
        <div class="offcanvas-header bg-body-tertiary">
            <h3 class="offcanvas-title text-uppercase">HUE VOGUE</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="mt-0">
        <div class="offcanvas-body pt-0 mb-2">
            <ul class="navbar-nav">
                <li class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth">
                    <a class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
                        href="index.php" id="menu-item-home-canvas">Home</a>
                </li>
                <li class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth">
                    <a class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
                        href="#about" id="menu-item-home-canvas">New Collection</a>
                </li>
                <li class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth">
                    <a class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
                        href="#products" id="menu-item-home-canvas">Our Products</a>
                </li>
                <li class="nav-item transition-all-xl-1 py-0 dropdown dropdown-fullwidth">
                    <a class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
                        href="#contactus" id="menu-item-home-canvas">Contact Us</a>
                </li>
            </ul>
        </div>
        <hr class="mb-0">
        <!-- <div class="offcanvas-footer bg-body-tertiary">
            © 2024 HUE VOGUE. <br>
            All rights reserved.
        </div> -->
    </div>
</div>

<div class="position-fixed z-index-10 bottom-0 end-0 p-10">
    <a href="#"
        class="gtf-back-to-top text-decoration-none bg-body text-primary bg-primary-hover text-light-hover shadow square p-0 rounded-circle d-flex align-items-center justify-content-center"
        title="Back To Top" style="--square-size: 48px"><i class="fa fa-arrow-up"></i></a>
</div>


<!-- Loginmodel start here  -->
<div class="modal fade" id="loginModel" tabindex="-1" aria-labelledby="loginModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModel">Login / Signup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" autocomplete="off">

                    <div class="login-wd-golugolu">

                        <button class="google-btn">
                            <div>
                                <img src="{{ asset('assets/img/payment-imgs/google-color-icon.png') }}" alt="">
                            </div>

                            <a href="/auth/google">
                                Login with Google
                            </a>

                        </button>

                    </div>

                    <div class="or-con position-relative">
                        <span> Or</span>
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Mobile Number:</label>
                        <input type="number" class="form-control" id="phone-no" name="phone-no" autocomplete="off">
                    </div>


                </form>

                <div class="midLinks">By continuing, I agree to the <a class="reg-txt"
                        href="TermsandConditions.php">Terms of Use</a> &amp; <a class="reg-txt"
                        href="privacy-policy.php">Privacy Policy</a></div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary text-light">Continue</button>
            </div>
            <!--<div class="text-center py-5">-->
            <!--    Don’t have an account yet? <span class="reg-txt" data-bs-toggle="modal" data-bs-target="#RegisterModel">Register Here</span>-->
            <!--</div>-->
        </div>
    </div>
</div>

<!-- Register model start here  -->
<div class="modal fade" id="RegisterModel" tabindex="-1" aria-labelledby="RegisterModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="RegisterModel">Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">User Name:</label>
                        <input type="email" class="form-control" id="recipient-name" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="message-text" autocomplete="off"></input>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary text-light">Register</button>
            </div>
            <div class="text-center py-5">
                Already have an account ? <span class="reg-txt" data-bs-toggle="modal" data-bs-target="#loginModel">Log
                    in</span>

            </div>
        </div>
    </div>
</div>

<!-- Forget password model start here  -->
<div class="modal fade" id="forgotModel" tabindex="-1" aria-labelledby="forgotModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forgotModel">Forgot Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Your Email:</label>
                        <input type="email" class="form-control" id="recipient-name" autocomplete="off">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary text-light">Send message</button>
            </div>
        </div>
    </div>
</div>


<!-- Cart canvas start here  -->

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header border-bottom-gold">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><i class="fa-solid fa-bag-shopping pe-4"></i>
            Shopping Bag</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body position-relative rounded-0">


        <div class="row">

            <div class="col-12">

                <div class="row cart-con">

                    <div class="col-3">
                        <img src="{{ asset('assets/img/product1.png') }}" alt="" class="mini-cart-img">
                    </div>

                    <div class="col-9 ">

                        <div class="cart-pro-title">
                            Supreme Polishing Treatment
                        </div>

                        <div class="cart-bottom">
                            <div class="price">
                                $39.00
                            </div>

                            <div class="side-cart-action">
                                <form class="increase-decrease-form">

                                    <div class="value-button decrease" onclick="decreaseValue(this)"
                                        value="Decrease Value">-</div>

                                    <input type="number" class="number" value="0" />

                                    <div class="value-button increase" onclick="increaseValue(this)"
                                        value="Increase Value">+</div>

                                </form>

                            </div>

                            <div type="button" class="side-cart-cancel-x">
                                <span>X</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row cart-con">

                    <div class="col-3">
                        <img src="{{ asset('assets/img/product2.png') }}" alt="" class="mini-cart-img">
                    </div>

                    <div class="col-9 ">

                        <div class="cart-pro-title">
                            Beard Growth Serum
                        </div>

                        <div class="cart-bottom">
                            <div class="price">
                                $39.00
                            </div>

                            <div class="side-cart-action">
                                <form class="increase-decrease-form">

                                    <div class="value-button decrease" onclick="decreaseValue(this)"
                                        value="Decrease Value">-</div>

                                    <input type="number" class="number" value="0" />

                                    <div class="value-button increase" onclick="increaseValue(this)"
                                        value="Increase Value">+</div>

                                </form>
                            </div>

                            <div type="button" class="side-cart-cancel-x">
                                <span>X</span>
                            </div>

                        </div>

                    </div>



                </div>

                <div class="checkout-btn">

                    <a href="checkout.php">
                        Place Order <i class="fa-solid fa-arrow-right-long pe-4 checkout-i"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</div>

</body>

</html>

<!-- Address model  -->

<div class="modal fade" id="address" tabindex="-1" aria-labelledby="address" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="address">Add Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Address:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary text-light">Add</button>
            </div>
        </div>
    </div>
</div>


<!--Order tracking model -->

<div class="modal fade" id="order-track" tabindex="-1" aria-labelledby="order-track" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="hh-grayBox">
                    <div class="font-weight-bold mb-4 order--title">
                        Supreme Polishing Treatment
                    </div>
                    <div class="row justify-content-between">
                        <div class="order-tracking completed">
                            <span class="is-complete"></span>
                            <p>Ordered<br><span>Mon, May 02</span></p>
                        </div>
                        <div class="order-tracking completed">
                            <span class="is-complete"></span>
                            <p>Shipped<br><span>Tue, May 03</span></p>
                        </div>
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Delivered<br><span>Fri, May 05</span></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    // Hide all .address-card-actions
    $('.address-card-actions').hide();

    // Show .address-card-actions for initially checked radio button
    $('input[name="radio-card"]:checked').closest('.radio-card').find('.address-card-actions').show();

    // Listen for change event on radio buttons
    $('input[name="radio-card"]').change(function() {
        // Hide all .address-card-actions
        $('.address-card-actions').hide();

        // Show .address-card-actions only for the selected radio button
        $(this).closest('.radio-card').find('.address-card-actions').show();
    });
});
</script>

<script>
$(function() {
    $('#contactForm').ebcaptcha();
});
(function($) {
    jQuery.fn.ebcaptcha = function(options) {
        var element = this;
        var input = this.find('#ebcaptchainput');
        var label = this.find('#ebcaptchatext');
        $(element).find('button[type=submit]').attr('enabled', 'enabled');
        var randomNr1 = 0;
        var randomNr2 = 0;
        var totalNr = 0;
        randomNr1 = Math.floor(Math.random() * 10);
        randomNr2 = Math.floor(Math.random() * 10);
        totalNr = randomNr1 + randomNr2;
        var texti = "Enter Answer For (" + randomNr1 + " + " + randomNr2 + ") = ? (If you are not a robot)";
        $(label).text(texti);
        $(input).keyup(function() {
            var nr = $(this).val();
            if (nr == totalNr) {
                $(element).find('#cap-alert').css('display', 'none');
                $(element).find('button[type=submit]').removeAttr('disabled');
            } else if (nr == "") {
                $(element).find('#cap-alert').css('display', 'none');
                $(element).find('button[type=submit]').attr('disabled', 'disabled');
            } else {
                $(element).find('#cap-alert').css('display', 'block');
                $(element).find('button[type=submit]').attr('disabled', 'disabled');
            }
        });
        $(document).keypress(function(e) {
            if (e.which == 13) {
                if ((element).find('button[type=submit]').is(':disabled') == true) {
                    e.preventDefault();
                    return false;
                }
            }
        });
    };
})(jQuery);
</script>
<!-- captcha script -->

<!--form input start here -->
<script>
// input increase decrease
function increaseValue(element) {
    var inputElement = element.parentElement.querySelector('.number');
    var value = parseInt(inputElement.value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    inputElement.value = value;
}

function decreaseValue(element) {
    var inputElement = element.parentElement.querySelector('.number');
    var value = parseInt(inputElement.value, 10);
    value = isNaN(value) ? 0 : value;
    value = value < 1 ? 1 : value;
    value--;
    inputElement.value = value;
}

// input increase decrease

function validateInput() {
    var nameInput = document.getElementById('name');
    var inputValue = nameInput.value;

    if (/^[a-zA-Z\s]+$/.test(inputValue)) {

        return true;
    } else {
        alert('Please enter only letters and spaces in the Full Name field.');
        return false;
    }
}

function validateInput(event) {
    const key = event.key;

    const allowedChars = /^[A-Za-z\s]+$/;

    if (!allowedChars.test(key)) {
        event.preventDefault();
    }
}

function validatePhoneNumber(input) {
    input.value = input.value.replace(/\D/g, '');

    var lengthErrorMessage = document.getElementById('length-error-message');
    var startDigitErrorMessage = document.getElementById('start-digit-error-message');
    var submitButton = document.getElementById('submit');

    if (input.value.length < 10) {
        lengthErrorMessage.textContent = 'Phone number must be at least 10 digits';
        startDigitErrorMessage.textContent = '';
        submitButton.type = 'button';
    } else if (!/^[6789]/.test(input.value)) {
        lengthErrorMessage.textContent = '';
        startDigitErrorMessage.textContent = 'Phone number must start with 6, 7, 8, or 9';
        submitButton.type = 'button';
    } else {
        lengthErrorMessage.textContent = '';
        startDigitErrorMessage.textContent = '';
        submitButton.type = 'submit';
    }
}


function emailValidation(inputElement, event) {
    var submitButton = document.getElementById('submit');
    // Remove spaces and convert to lowercase
    inputElement.value = inputElement.value.replace(/\s/g, '').toLowerCase();

    // Check if the input follows the Gmail-like pattern
    var gmailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var isValid = gmailPattern.test(inputElement.value);

    // Display error if the pattern is not matched
    if (!isValid) {
        document.getElementById('gmail-error').innerText = 'Please enter a valid Gmail address.';
        submitButton.type = 'button';
    } else {
        document.getElementById('gmail-error').innerText = '';
        submitButton.type = 'submit';
    }
}

function clearError(errorId) {
    document.getElementById(errorId).innerText = '';
}
</script>
<!--form input end here -->

<!--form required field validation start here -->
<script>
// Function to clear error messages when the user starts typing
function clearError(elementId) {
    document.getElementById(elementId).innerHTML = "";
}

// Modified checkCaptcha function
function checkCaptcha() {
    // Reset error messages
    clearError("name-error");
    clearError("gmail-error");
    clearError("phone-error");
    clearError("message-error");
    clearError("captcha-error");

    // Check for validation rules and display error messages
    var isValid = true;

    // Check Full Name
    var fullName = document.getElementById("fullName").value;
    if (fullName.trim() === "") {
        document.getElementById("name-error").innerHTML = "Full Name is required.";
        isValid = false;
    }

    // Check Email
    var email = document.getElementById("email").value;
    if (email.trim() === "") {
        document.getElementById("gmail-error").innerHTML = "Email is required.";
        isValid = false;
    }

    // Check Phone Number
    var phone = document.getElementsByName("phone")[0].value;
    if (phone.trim() === "") {
        document.getElementById("phone-error").innerHTML = "Phone Number is required.";
        isValid = false;
    }


    // Check Message
    var message = document.getElementsByName("message")[0].value;
    if (message.trim() === "") {
        document.getElementById("message-error").innerHTML = "Message is required.";
        isValid = false;
    }

    // Check Captcha
    var captcha = document.getElementById("ebcaptchainput").value;
    if (captcha.trim() === "") {
        document.getElementById("captcha-error").innerHTML = "Captcha is required.";
        isValid = false;
    }

    return isValid;
}

function captchaerror(errorId) {
    var captchaInput = document.getElementById('ebcaptchainput');
    var errorDiv = document.getElementById(errorId);
    var capAlert = document.getElementById('cap-alert');

    if (captchaInput.value.trim() === '') {
        errorDiv.innerHTML = 'Captcha is required.';
        capAlert.style.display = 'none';
    } else {
        errorDiv.innerHTML = '';
    }
}
</script>
