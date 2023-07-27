<footer>

    <section class="maile-section py-5 bg-color-dark-1">

        <div class="container-fluid">

            <div class="mailer-flex d-flex align-items-center">

                <div class="mailer-text w-100">

                    <h5 class="mb-0 d-flex align-items-center"> <i class="fa-light fa-paper-plane"></i> Subscribe
                        Newsletter And Get Discount</h5>

                </div>

                <div class="mailer-input w-100">

                    <form method="POST" action="{{ route('savesubscribeemail') }}">
                        @csrf
                        <div class="wdinput position-relative">

                            <input type="email" class="form-control" name="subscribe_email"
                                placeholder="Your Email Address" required>

                            <button class="btn subscrib-btn">Subscribe</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <div class="main-footer bg-color-dark-2 pt-5">

        <div class="container-fluid">



            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-xl-block d-lg-block d-none">

                    <div class="footer-link">

                        <h5 class="heading-1">Quick Links</h5>

                        <ul>

                            <li><a href="index.php">Home </a></li>

                            <li><a href="{{ route('about') }}">About Us</a></li>

                            <li><a href="{{ route('brands') }}">Brands</a></li>

                            <li><a href="{{ route('gallery') }}">Gallery</a></li>

                            <li><a href="{{ route('video') }}">Videos</a></li>


                        </ul>

                    </div>

                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-xl-block d-lg-block d-none">

                    <div class="footer-link">

                        <h5 class="heading-1">Shop</h5>

                        <ul>
                            @if (!empty($categories))
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('subcategory', $category->category_slug) }}">{{ $category->category_name }}</a>
                                    </li>
                                @endforeach

                            @endif
                        </ul>

                    </div>

                </div>



                <div class="col-xl-3 col-lg-3 col-md-6 col-12 d-xl-block d-lg-block d-none">

                    <div class="footer-link">

                        <h5 class="heading-1">Help</h5>

                        <ul>

                            <li><a href="{{ route('blog') }}">Blog</a></li>

                            <li><a href="{{ route('contact') }}">Contact Us</a></li>

                            <!-- <li><a href="{{ route('payment') }}">Payment Policy</a></li>

                        <li><a href="{{ route('shipping') }}">Shipping Policy</a></li>

                        <li><a href="{{ route('cancellation') }}">Cancellation Policy</a></li> -->

                            <li><a href="{{ route('faqs') }}">FAQs</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12">

                    <div class="footer-link">

                        <h5 class="heading-1">Contact Us</h5>

                        <ul>

                            <li> <i class="fa-light fa-phone"></i>+91 9811214397, 9810143875, 9811348362</li>

                            <li><i class="fa-light fa-envelope"></i> nuformenterprises@gmail.com</li>

                        </ul>

                        <h5 class="heading-1">Follow Us</h5>

                        <ul class="footer-social-media">

                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>

                            <li><a href="#"><i class="fa-brands fa-instagram"></i> </a> </li>

                            <li><a href="#"><i class="fa-brands fa-twitter"></i> </a> </li>

                            <li><a href="#"><i class="fa-brands fa-google"></i> </a> </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>



        <div class="copy-right-section mt-5">

            <div class="container">

                <div class="copyright d-flex">

                    <div class="copyright-left">

                        <p>Copyright ©️ 2022 Laurete Premium Kitchen Sink. All Rights Reserved.</p>

                    </div>

                    <div class="copyright-right ml-auto">

                        <ul class="payment-option ml-auto">

                            <li>

                                <img src="{{ asset('public/frontend/img/payment/visa.svg') }}">

                            </li>

                            <li>

                                <img src="{{ asset('public/frontend/img/payment/upi.svg') }}">

                            </li>

                            <li>

                                <img src="{{ asset('public/frontend/img/payment/paytm.svg') }}" class="paymentsection">

                            </li>

                            <li>

                                <img src="{{ asset('public/frontend/img/payment/paypal.svg') }}">

                            </li>

                            <li>

                                <img src="{{ asset('public/frontend/img/payment/mastercard.svg') }}">

                            </li>

                            <li>

                                <img src="{{ asset('public/frontend/img/payment/google.svg') }}"
                                    class="paymentsection">

                            </li>

                            <li>

                                <img src="{{ asset('public/frontend/img/payment/american-express.svg') }}">

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>



<div class="card cookie-alert">

    <div class="card-body">

        <h5 class="card-title">&#x1F36A; Do you like cookies?</h5>

        <p class="card-text">We use cookies to ensure you get the best experience on our website.</p>

        <div class="btn-toolbar justify-content-end">

            <a href="http://cookiesandyou.com/" target="_blank" class="btn text-dark-color-1 btn-link">Learn more</a>

            <a href="#" class="btn bg-color-dark-2 accept-cookies text-white">Accept</a>

        </div>

    </div>

</div>





<script type="text/javascript">
    (function() {

        "use strict";



        var cookieAlert = document.querySelector(".cookie-alert");

        var acceptCookies = document.querySelector(".accept-cookies");



        cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)



        if (!getCookie("acceptCookies")) {

            cookieAlert.classList.add("show");

        }



        acceptCookies.addEventListener("click", function() {

            setCookie("acceptCookies", true, 60);

            cookieAlert.classList.remove("show");

        });

    })();



    // Cookie functions stolen from w3schools

    function setCookie(cname, cvalue, exdays) {

        var d = new Date();

        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));

        var expires = "expires=" + d.toUTCString();

        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

    }



    function getCookie(cname) {

        var name = cname + "=";

        var decodedCookie = decodeURIComponent(document.cookie);

        var ca = decodedCookie.split(';');

        for (var i = 0; i < ca.length; i++) {

            var c = ca[i];

            while (c.charAt(0) === ' ') {

                c = c.substring(1);

            }

            if (c.indexOf(name) === 0) {

                return c.substring(name.length, c.length);

            }

        }

        return "";

    }
</script>
