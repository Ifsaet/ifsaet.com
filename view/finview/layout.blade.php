<base href="http://localhost/ifsa/">
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/finview/images/favicon.png" type="image/x-icon">
    <title>{{ $seo['title'] }}</title>
    <meta name="keywords" content="{{ $seo['keywords'] }}">
    <meta name="description" content="{{ $seo['description'] }}">
    <link rel="canonical" href="{{ $seo['canonical'] }}">
    <meta name="robots" content="{{ $seo['robots'] }}">
    <meta property="og:title" content="{{ $seo['title'] }}">
    <meta property="og:description" content="{{ $seo['description'] }}">
    <meta property="og:image" content="{{ $seo['image'] }}">
    <meta property="og:url" content="{{ $seo['canonical'] }}">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="assets/finview/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/finview/vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assets/finview/vendor/magnific-popup/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/finview/vendor/slick/css/slick.css">
    <link rel="stylesheet" href="assets/finview/vendor/odometer/css/odometer.css">
    <link rel="stylesheet" href="assets/finview/vendor/animate/animate.css">
    <link rel="stylesheet" href="assets/finview/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @yield('addHead')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="assets/finview/js/autocomplete.js"></script>
</head>

<body>
    <div class="preloader">
        <span class="loader"></span>
    </div>
    <header class="header-section index ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl nav-shadow" id="navbar">
                        <a class="navbar-brand" href="index"><img width="200" src="assets/finview/images/logo.png"
                                class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">
                            <i class="bi bi-list"></i>
                        </a>
                        <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                            <div class="main-menu index-page">
                                <ul class="navbar-nav mb-lg-0 d-flex align-items-center" style="">
                                    <li class="nav-item">
                                        <a style="color: white !important; font-size: 20px;" class="nav-link"
                                            href="">İfşalar</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="search-box">
                                            <div class="row">
                                                <input autocomplete="off" id="input-box" class="form-control"
                                                    style=" margin-left:10px;" type="text"
                                                    placeholder="Kurum/Marka Bul">
                                            </div>
                                            <div class="result-box">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @empty($_SESSION['user']['user'])
                                    <ul class="navbar-nav mb-lg-0 ms-auto" style="">
                                        <li class="nav-item">
                                            <a style="color: white !important; font-size: 20px;" class="nav-link ml-auto"
                                                href="kayitol">Kayıt Ol</a>
                                        </li>
                                        <li class="nav-item">
                                            <a style="color: white !important; font-size: 20px;" class="nav-link ml-auto"
                                                href="giris">Giriş Yap</a>
                                        </li>
                                    </ul>
                                @else
                                    <ul class="navbar-nav mb-lg-0 ms-auto" style="">
                                        <li class="nav-item">

                                            <a style="color: white !important; font-size: 20px;" class="nav-link ml-auto"
                                                href="hesabim">{{ mb_strtoupper($_SESSION['user']['user'], 'UTF-8') }}</a>
                                        </li>
                                    </ul>
                                @endempty
                                <div class="nav-right d-none d-xl-block">
                                    <div class="nav-right__search">
                                        <a href="sign-in.html" class="btn_theme btn_theme_active headerbuton"><i
                                                class="bi bi-pencil"></i>İfşa Et<span></span></a>
                                    </div>
                                </div>
                            </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas"
                            aria-label="Close"><i class="bi bi-x"></i></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="menu_item">
                                <a class="menu_link" href="ifsaet">İfşa Et</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="kayitol">Kayıt Ol</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="giris">Giriş Yap</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="loan-comparison.html">İfşalar</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="loan-comparison.html">Markalar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="custom-nevbar__right">
                        <div class="custom-nevbar__top d-none d-md-block">
                            <button type="button" class="close-icon ms-auto" data-bs-dismiss="offcanvas"
                                aria-label="Close"><i class="bi bi-x"></i></button>
                            <div class="custom-nevbar__right-thumb mb-auto">
                                <img src="assets/finview/images/logo.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="footer footer-secondary">
        <div class="container mt-3">
            <div class="row section" style="margin-bottom: -50px !important; margin-top:-50px !important;">
                <div class="col-12">
                    <div class="footer-secondary__content d-flex justify-content-center">
                        <div class="quick-link order-1 order-lg-0 text-center">
                            <ul class="quick-link__list">
                                <li><a href="hakkimizda">Hakkımızda</a></li>
                                <li><a href="kurumsal-uyelik">Kurumsal Üyelik</a></li>
                                <li><a href="blog">Blog</a></li>
                                <li><a href="reklam-cozumleri">Reklam Çözümleri</a></li>
                                <li><a href="sss">Sıkça Sorulan Sorular</a></li>
                                <li><a href="iletisim">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="social d-flex justify-content-center mt-4">
                        <a href="#" class="btn_theme social_box"><i
                                class="bi bi-facebook"></i><span></span></a>
                        <a href="#" class="btn_theme social_box"><i class="bi bi-twitter"></i><span></span></a>
                        <a href="#" class="btn_theme social_box"><i
                                class="bi bi-instagram"></i><span></span></a>
                        <a href="#" class="btn_theme social_box"><i class="bi bi-youtube"></i><span></span></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top:-30px !important;">
                <div class="col-12">
                    <div class="footer__copyright">
                        <p class="copyright text-start" style="color:#1f2130;">© İfşa Et Her Hakkı Saklıdır.</p>
                        <p>
                            <a id="footeraltmetin" href="gizlilik">Gizlilik</a>
                            <a id="footeraltmetin" href="kullanim-sartlari">Kullanım
                                Şartları</a>
                            <a id="footeraltmetin" href="kkvk">KKVK</a>
                        </p>
                        <div class="dropup text-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Türkçe
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">İngilizce</a></li>
                                <li><a class="dropdown-item" href="#">Rusça</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright justify-content-center">
                        <img src="assets/finview/images/iyzico.png">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>
    <script src="assets/finview/vendor/jquery/jquery-3.6.3.min.js"></script>
    <script src="assets/finview/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/finview/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/finview/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"></script>
    <script src="assets/finview/vendor/slick/js/slick.min.js"></script>
    <script src="assets/finview/vendor/odometer/js/odometer.min.js"></script>
    <script src="assets/finview/vendor/viewport/viewport.jquery.js"></script>
    <script src="assets/finview/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/finview/vendor/wow/wow.min.js"></script>
    <script src="assets/finview/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/finview/js/plugins.js"></script>
    <script src="assets/finview/js/main.js"></script>
    <script src="view/global.js"></script>
    @yield('addFooter')
</body>

</html>
