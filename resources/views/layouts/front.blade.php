<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/geco/Geco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 13:19:41 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="{{ asset('front/img/icon/preloader.svg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-area -->
        <header>
            <div class="header-top-area s-header-top-area d-none d-lg-block">
                <div class="container-fluid s-container-full-padding">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="header-top-offer">
                                <p>Find the latest tournaments !</p>
                                <span class="coming-time" data-countdown="2022/12/15"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-top-right">
                                <div class="header-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="header-top-action">
                                    <ul>
                                        <li>
                                            <div class="header-top-mail">
                                                <p><span>|</span><i class="far fa-envelope"></i>info@tournify.id</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="transparent-header">
                <div class="container-fluid s-container-full-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-menu menu-style-two">
                                <nav>
                                    <div class="logo">
                                        <a href="index-2.html"><img src="{{ asset('front/img/icon/logo.png') }}" alt="Logo"></a>
                                    </div>
                                    <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                        <ul>
                                            <li class="show"><a href="/">Home</a></li>
                                            <li><a href="#">Tournament</a> </li>
                                            <li><a href="#">Top Up</a></li>
                                            <li><a href="#">Berita</a></li>
                                            <li><a href="#">Community</a></li>
                                            <li><a href="#">Live Streaming</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action">
                                        <ul>
                                            {{-- <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a>
                                                <ul class="minicart">
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="{{ asset('front/img/product/cart_p01.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">Xbox One Controller</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$239.9</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="cart.html">Shopping Cart</a>
                                                            <a class="red-color" href="checkout.html">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li> --}}
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form>
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->

        {{ $slot }}

        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg s-footer-bg">
                <!-- newsletter-area -->
                <div class="newsletter-area s-newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-wrap">
                                    <div class="section-title newsletter-title">
                                        <h2>Our <span>Newsletter</span></h2>
                                    </div>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <div class="newsletter-form-grp">
                                                <i class="far fa-envelope"></i>
                                                <input type="email" placeholder="Enter your email...">
                                            </div>
                                            <button>SUBSCRIBE <i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- newsletter-area-end -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="{{ asset('front/img/icon/logo.png') }}" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>Portal untuk kalian para gamers menemukan tournament dan mengiklankan tournament.</p>
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Alamat : </span>Jl. Jend Sudirman No 269 Kab. Ciamis</li>
                                            <li><i class="fas fa-headphones"></i> <span>Telp : </span>+62 1245 654 235</li>
                                            <li><i class="fas fa-envelope-open"></i><span>Email : </span>info@tournify.id</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Topup</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Mobile Legends</a></li>
                                        <li><a href="#">Fire Fire</a></li>
                                        <li><a href="#">PUBG Mobile</a></li>
                                        <li><a href="#">Garena</a></li>
                                        <li><a href="#">Unipin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Butuh Bantuan?</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Syarat & Ketentuan</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Follow Kami</h5>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Ikuti Newsletter Kami</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Masukan email kamu">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-fire"><img src="{{ asset('front/img/images/footer_fire.png') }}" alt=""></div>
                <div class="footer-fire footer-fire-right"><img src="{{ asset('front/img/images/footer_fire.png') }}" alt=""></div>
            </div>
            <div class="copyright-wrap s-copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2022 <a href="#">Tournify</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="{{ asset('front/img/images/card_img.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

		<!-- JS here -->
        <script data-cfasync="false" src="https://themebeyond.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ asset('front/js/vendor/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('front/js/popper.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/js/slick.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('front/js/wow.min.js') }}"></script>
        <script src="{{ asset('front/js/aos.js') }}"></script>
        <script src="{{ asset('front/js/jquery.lettering.js') }}"></script>
        <script src="{{ asset('front/js/jquery.textillate.js') }}"></script>
        <script src="{{ asset('front/js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('front/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/js/plugins.js') }}"></script>
        <script src="{{ asset('front/js/main.js') }}"></script>
    </body>

</html>

