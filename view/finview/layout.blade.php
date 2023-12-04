<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    <!--  css dependencies start  -->
    <!-- bootstrap five css -->
    <link rel="stylesheet" href="assets/finview/vendor/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap-icons css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="assets/finview/vendor/nice-select/css/nice-select.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/finview/vendor/magnific-popup/css/magnific-popup.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/finview/vendor/slick/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="assets/finview/vendor/odometer/css/odometer.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/finview/vendor/animate/animate.css">
    <!-- css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="assets/finview/css/style.css">
</head>
<body>
<!--  Preloader  -->
<div class="preloader">
    <span class="loader"></span>
</div>

<!--header-section start-->
<header class="header-section index ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                    <a class="navbar-brand" href="index.html"><img src="assets/finview/images/logo2.png" class="logo" alt="logo"></a>
                    <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="bi bi-list"></i>
                    </a>

                    <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                        <div class="main-menu index-page">
                            <ul class="navbar-nav mb-lg-0 mx-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Home </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.html">Home One</a></li>
                                        <li><a class="dropdown-item" href="index-2.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Loan Reviews </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="loan-reviews.html">Loan Reviews</a></li>
                                        <li><a class="dropdown-item" href="loan-reviews-details.html">Loan Reviews Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="loan-comparison.html">Loan Comparison</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about.html">about Us</a></li>
                                        <li><a class="dropdown-item" href="service.html">service</a></li>
                                        <li><a class="dropdown-item" href="service-details.html">service details</a></li>
                                        <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                        <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                                        <li><a class="dropdown-item" href="faq.html">FAQs</a></li>
                                        <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                        <li><a class="dropdown-item" href="error.html">404 Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact us</a>
                                </li>
                            </ul>
                            <div class="nav-right d-none d-xl-block">
                                <div class="nav-right__search">
                                    <a href="javascript:void(0)" class="nav-right__search-icon btn_theme icon_box btn_bg_white"> <i class="bi bi-search"></i> <span></span> </a>
                                    <a href="sign-in.html" class="btn_theme btn_theme_active">Sign In <i class="bi bi-arrow-up-right"></i><span></span></a>
                                </div>
                                <div class="nav-right__search-inner">
                                    <div class="nav-search-inner__form">
                                        <form method="POST" id="search" class="inner__form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search" required>
                                                <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('content')
<!-- Footer Area Start -->
<footer class="footer footer-secondary">
    <div class="container">
        <div class="row section">
            <div class="col-12">
                <div class="footer-secondary__content">
                    <div class="footer__logo">
                        <a href="index.html">
                            <img src="assets/finview/images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="quick-link order-1 order-lg-0">
                        <ul class="quick-link__list">
                            <li><a href="contact.html">Help & Support</a></li>
                            <li><a href="loan-reviews.html">Privacy policy</a></li>
                            <li><a href="loan-comparison.html">Terms & Conditions</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <a href="#" class="btn_theme social_box"><i class="bi bi-facebook"></i><span></span></a>
                        <a href="#" class="btn_theme social_box"><i class="bi bi-twitter"></i><span></span></a>
                        <a href="#" class="btn_theme social_box"><i class="bi bi-pinterest"></i><span></span></a>
                        <a href="#" class="btn_theme social_box"><i class="bi bi-twitch"></i><span></span></a>
                        <a href="#" class="btn_theme social_box"><i class="bi bi-skype"></i><span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer__copyright">
                    <p class="copyright text-center">Copyright © <span id="copyYear"></span> <a href="#" class="secondary_color">FINVIEW</a>. Designed By <a href="#" class="secondary_color">Pixelaxis</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<!-- scroll to top -->
<a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>
<!--  js dependencies start  -->
<!-- jquery -->
<script src="assets/finview/vendor/jquery/jquery-3.6.3.min.js"></script>
<!-- bootstrap five js -->
<script src="assets/finview/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- nice select js -->
<script src="assets/finview/vendor/nice-select/js/jquery.nice-select.min.js"></script>
<!-- magnific popup js -->
<script src="assets/finview/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<!-- circular-progress-bar -->
<script
        src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"></script>
<!-- slick js -->
<script src="assets/finview/vendor/slick/js/slick.min.js"></script>
<!-- odometer js -->
<script src="assets/finview/vendor/odometer/js/odometer.min.js"></script>
<!-- viewport js -->
<script src="assets/finview/vendor/viewport/viewport.jquery.js"></script>
<!-- jquery ui js -->
<script src="assets/finview/vendor/jquery-ui/jquery-ui.min.js"></script>
<!-- wow js -->
<script src="assets/finview/vendor/wow/wow.min.js"></script>

<script src="assets/finview/vendor/jquery-validate/jquery.validate.min.js"></script>

<!--  / js dependencies end  -->

<!-- plugins js -->
<script src="assets/finview/js/plugins.js"></script>
<!-- main js -->
<script src="assets/finview/js/main.js"></script>

</body>
</html>