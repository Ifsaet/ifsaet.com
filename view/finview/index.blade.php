@extends('layout')
@section('content')
    <!-- Slider Alanı -->
    <section class="hero">
        <div class="container">
            <div class="row gy-5 gy-lg-0 align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="section__content">
                        <h1 style="color:#1f2130 !important;" class="section__content-title display-3 wow fadeInUp"
                            data-wow-duration="0.8s">Markaları Keşfedin ve Yorumlayın!
                        </h1>
                        <input class="form-control custom-input" style="width: 100%;" type="text"
                            placeholder="Aradığın Kurum/Markayı Bul">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xxl-5 mt-5">
                    <div class="hero__thumb wow fadeInUp" data-wow-duration="0.8s">
                        <h1 style="color:#1f2130 !important; font-size: 48px;">Hızlı Çözüm İçin <br>İfşa Et</h1>
                        <div class="input-single" style="margin-top: 40px;">
                            <div style="display: grid; grid-template-columns: 1fr auto;">
                                <label class="label" for="message">İfşa Detayı</label>
                                <div style="display: grid; grid-template-columns: 1fr auto; align-items: center;">
                                    <label style="z-index:9;" class="label"><a target="blank"
                                            href="https://www.youtube.com/watch?v=XZPezAinMo4&embeds_referring_euri=https%3A%2F%2Fwww.ifsaet.com%2F&source_ve_path=MjM4NTE&feature=emb_title&ab_channel=%C4%B0f%C5%9FaEt">Nasıl
                                            Yazılır?</a></label>
                                    <a target="blank"
                                        href="https://www.youtube.com/watch?v=XZPezAinMo4&embeds_referring_euri=https%3A%2F%2Fwww.ifsaet.com%2F&source_ve_path=MjM4NTE&feature=emb_title&ab_channel=%C4%B0f%C5%9FaEt"
                                        class="btn_theme social_box"><i class="bi bi-youtube"></i><span></span></a>
                                </div>
                            </div>
                            <textarea style="z-index: 9;" class="form-control" id="message" name="message" rows="8"
                                placeholder="Ürün veya hizmetle ilgili nasıl bir sorun yaşadınız?" required></textarea>
                            <button type="submit" class="btn_theme btn_theme_active mt-3 " name="gonder"
                                id="submit">Devam Et<i class="bi bi-arrow-up-right"></i><span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Alanı -->


    <!-- Gündemdeki İfşalar -->
    <section class="testimonials section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xxl-5">
                    <div class="section__header">
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Gündemdeki İfşalar</h2>
                        <a style="color: #00d9da;" href="">Tümünü Görüntüle</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slider wow fadeInUp" data-wow-duration="0.8s">
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gündemdeki İfşalar -->


    <!-- En Çok İfşa Edilen Markalar -->
    <section class="loan-reviews section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__header">
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">En Çok İfşa Edilen Markalar
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">
                    <div class="d-flex flex-column gap-4">
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/finview/images/loan_reviews_logo.png" alt="image">
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Marka Adı</h4>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <h1>1 İfşa</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- En Çok İfşa Edilen Markalar -->


    <!-- Popüler İfşalar -->
    <section class="testimonials section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xxl-5">
                    <div class="section__header">
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Popüler İfşalar</h2>
                        <a style="color: #00d9da;" href="">Tümünü Görüntüle</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slider wow fadeInUp" data-wow-duration="0.8s">
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popüler İfşalar -->


    <!-- Video Alanı -->
    <section class="about-us section">
        <div class="container">
            <div class="row gy-5 gy-lg-0 justify-content-between align-items-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__content ms-lg-4 ms-xl-0">
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Hızlı Çözüm İçin İfşa Et
                        </h2>
                        <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">Unutmayın. İfşa sadece
                            kötü durumlar için değildir. İyi olanları da ifşa edebilirsiniz. Metin, fotoğraf ve video
                            kullanarak bildiğinizi tüm dünyaya ifşa edebilirsiniz.</p>
                        <a href="ifsaet" class="btn_theme btn_theme_active mt_40">İfşa Et<i
                                class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5 mx-auto mx-lg-0">
                    <div class="choose-us__thumb unset-xxl me-xl-4 me-xxl-0 wow fadeInDown" data-wow-duration="0.8s">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/XZPezAinMo4?si=JtgBeUISUpZtrx8Y" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Alanı -->


    <!-- Rakamlarla İfşa Et -->
    <section class="working-process section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xxl-5">
                    <div class="section__header">
                        <h2 style="color: #FF8541 !important;" class="section__header-title wow fadeInUp"
                            data-wow-duration="0.8s">Rakamlarla İfşa Et</h2>
                    </div>
                </div>
            </div>
            <div class="row g-2 g-md-4  wow fadeInUp" data-wow-duration="0.8s">
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg viewBox="-12 -12 48.00 48.00" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-12" y="-12" width="48.00" height="48.00" rx="24" fill="#00D9DA "
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                                        stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>

                        </div>
                        <div class="card__content">
                            <p>Üye Sayımız</p>
                            <h4 class="card__title mt-2">14.456</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg viewBox="-12 -12 48.00 48.00" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-12" y="-12" width="48.00" height="48.00" rx="24" fill="#00D9DA"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M20.91 11.12C20.91 16.01 17.36 20.59 12.51 21.93C12.18 22.02 11.82 22.02 11.49 21.93C6.63996 20.59 3.08997 16.01 3.08997 11.12V6.72997C3.08997 5.90997 3.70998 4.97998 4.47998 4.66998L10.05 2.39001C11.3 1.88001 12.71 1.88001 13.96 2.39001L19.53 4.66998C20.29 4.97998 20.92 5.90997 20.92 6.72997L20.91 11.12Z"
                                        stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M12 12.5C13.1046 12.5 14 11.6046 14 10.5C14 9.39543 13.1046 8.5 12 8.5C10.8954 8.5 10 9.39543 10 10.5C10 11.6046 10.8954 12.5 12 12.5Z"
                                        stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 12.5V15.5" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>

                        </div>
                        <div class="card__content">
                            <p>Partner Markalarımız</p>
                            <h4 class="card__title mt-2">2.456</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg fill="#ffffff" viewBox="-32 -32 128.00 128.00" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xml:space="preserve" xmlns:serif="http://www.serif.com/"
                                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                stroke="#ffffff" stroke-width="3.2">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-32" y="-32" width="128.00" height="128.00" rx="64" fill="#00D9DA"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect id="Icons" x="-512" y="-64" width="1280" height="800"
                                        style="fill:none;"></rect>
                                    <g id="Icons1" serif:id="Icons">
                                        <g id="Strike"> </g>
                                        <g id="H1"> </g>
                                        <g id="H2"> </g>
                                        <g id="H3"> </g>
                                        <g id="list-ul"> </g>
                                        <g id="hamburger-1"> </g>
                                        <g id="hamburger-2"> </g>
                                        <g id="list-ol"> </g>
                                        <g id="list-task"> </g>
                                        <g id="trash"> </g>
                                        <g id="vertical-menu"> </g>
                                        <g id="horizontal-menu"> </g>
                                        <g id="sidebar-2"> </g>
                                        <g id="Pen"> </g>
                                        <g id="Pen1" serif:id="Pen"> </g>
                                        <g id="clock"> </g>
                                        <g id="external-link"> </g>
                                        <g id="hr"> </g>
                                        <path id="success"
                                            d="M56.103,16.824l-33.296,33.297l-14.781,-14.78l2.767,-2.767l11.952,11.952l30.53,-30.53c0.943,0.943 1.886,1.886 2.828,2.828Z"
                                            style="fill-rule:nonzero;"></path>
                                        <g id="info"> </g>
                                        <g id="warning"> </g>
                                        <g id="plus-circle"> </g>
                                        <g id="minus-circle"> </g>
                                        <g id="vue"> </g>
                                        <g id="cog"> </g>
                                        <g id="logo"> </g>
                                        <g id="radio-check"> </g>
                                        <g id="eye-slash"> </g>
                                        <g id="eye"> </g>
                                        <g id="toggle-off"> </g>
                                        <g id="shredder"> </g>
                                        <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g>
                                        <g id="react"> </g>
                                        <g id="check-selected"> </g>
                                        <g id="turn-off"> </g>
                                        <g id="code-block"> </g>
                                        <g id="user"> </g>
                                        <g id="coffee-bean"> </g>
                                        <g id="coffee-beans">
                                            <g id="coffee-bean1" serif:id="coffee-bean"> </g>
                                        </g>
                                        <g id="coffee-bean-filled"> </g>
                                        <g id="coffee-beans-filled">
                                            <g id="coffee-bean2" serif:id="coffee-bean"> </g>
                                        </g>
                                        <g id="clipboard"> </g>
                                        <g id="clipboard-paste"> </g>
                                        <g id="clipboard-copy"> </g>
                                        <g id="Layer1"> </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="card__content">
                            <p>Sonuçlanan İfşalar</p>
                            <h4 class="card__title mt-2">12.456</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg viewBox="-12 -12 48.00 48.00" fill="none" xmlns="http://www.w3.org/2000/svg"
                                stroke="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-12" y="-12" width="48.00" height="48.00" rx="24" fill="#00D9DA"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                        stroke="#ffffff" stroke-width="1.224" stroke-linecap="round"></path>
                                    <path
                                        d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                        stroke="#ffffff" stroke-width="1.224"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="card__content">
                            <p>Toplam Görüntüleme Sayısı</p>
                            <h4 class="card__title mt-2">24.456</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rakamlarla İfşa Et -->


    <!-- Birlikte Çalışalım -->
    <section class="loan-solution section mb-5">
        <div class="container position-relative ">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-12 col-lg-8 col-xxl-8">
                    <div class="section__content ms-xl-4 ms-xl-0">
                        <h2 id="birliktecalisalim" style="color: white !important;"
                            class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Markanızın çözüm ortağı:
                            İfşa Et
                        </h2>
                        <p style="color: white !important;">İfşa sadece olumsuzluk olmadığı gibi markanızın olumlu
                            yönleri
                            de ifşa edilebilmektedir. İfşa Et'in sunduğu ayrıcalıklarla rakiplerinizin olumsuz
                            ifşalarının
                            arasında reklamınızın gösterilmesini sağlayın.</p>
                        <div class="sidebar cus_scrollbar wow fadeInUp" data-wow-duration="0.8s">

                            <div id="birliktecalisalim2" class="sidebar__part">
                                <ul class="category">
                                    <li><a id="birliktecalisalimbuton" href="#">
                                            <span class="caregory__content">Birlikte Çalışalım</span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Birlikte Çalışalım -->
@endsection
