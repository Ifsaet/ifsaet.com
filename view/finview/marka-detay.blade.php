@extends('layout')
@section('content')
        <section class="banner">
            <div class="container ">
                <div class="row gy-4 gy-sm-0 align-items-center">
                    <div class="col-12 col-sm-6">
                        <div class="banner__content">
                            <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">{{$brand['name']}}</h1> 
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                    <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
                                    <li class="breadcrumb-item"><a href="marka">Markalar</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$brand['name']}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="banner__thumb text-end">
                            <img src="assets/finview/images/service_banner.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-details section">
            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-12 col-lg-7 col-xl-8">
                        <div class="card card--secondary wow fadeInDown" data-wow-duration="0.8s">
                            <div class="card--secondary__content">
                                <div class="card--secondary__content-part wow fadeInUp" data-wow-duration="0.8s">
                                    <div class="content-part__thumb flex-wrap flex-xxl-nowrap mt-3">
                                        <img class="w-25 h-25" src="assets/finview/images/service_details_sub.png" alt="image">
                                        <div class="content-part__thumb-text">
                                            <h3>{{$brand['name']}}</h3>
                                            <p class="mt_20">{{$brand['aciklama']}}</p>
                                        </div>
                                        <div class="average-reviews ms-auto">
                                            <div class="gap-9 flex-wrap flex-md-nowrap average-reviews__content">
                                                <div class="average-reviews__card">
                                                    <p class="average-reviews__count"><span class="headingTwo">4.9</span>/5</p>
                                                    <div class="star_review">
                                                        <i class="bi bi-star-fill star-active"></i>
                                                        <i class="bi bi-star-fill star-active"></i>
                                                        <i class="bi bi-star-fill star-active"></i>
                                                        <i class="bi bi-star-fill star-active"></i>
                                                        <i class="bi bi-star-half star-active"></i>
                                                    </div>
                                                    <p>26 Rating</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tag text-center">
                                    <div class="tag-content">
                                        <a href="#" class="btn_theme">İfşa Sayısı<span></span>9</a>
                                        <a href="#" class="btn_theme">Çözüm Sayısı<span></span>0</a>
                                        <a href="#" class="btn_theme">Marka Karnesini Gör<span></span></a> 
                                    </div>
                                </div>
                                <hr>
                                <div class="tag-area wow fadeInUp justify-content-center" data-wow-duration="0.8s">
                                    <div class="tag">
                                        <div class="social">
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-facebook"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-twitter"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-envelope"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-telegram"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-whatsapp"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-skype"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-instagram"></i><span></span></a>
                                        </div>
                                    </div>
                                </div>
                                <hr>    
                                <div class="tag text-center">
                                    <div class="tag-content">
                                        <a href="#" class="btn_theme">Marka ile İlgili İfşan mı Var?<span></span>İfşa Yaz</a>
                                    </div>
                                </div>
                                <hr>
                            <h3>9 İfşa</h3>
                            <hr>
                            <div class="reviews-details__part wow fadeInUp" data-wow-duration="0.8s">
                                <div class="comments-area">
                                    <div class="author__content wow fadeInUp" data-wow-duration="0.8s">
                                        <p class="author__submit-time">Mar 03, 2023 <i class="bi bi-dot"></i> 09:01 am</p>
                                        <div class="author__text">
                                            <div class="star_review">
                                                <i class="bi bi-star-fill star-active"></i>
                                                <i class="bi bi-star-fill star-active"></i>
                                                <i class="bi bi-star-fill star-active"></i>
                                                <i class="bi bi-star-fill star-active"></i>
                                                <i class="bi bi-star-half star-active"></i>
                                            </div>
                                            <p>Our satisfied clients have experienced success with our services and loan recommendations. Here are some of their testimonials highlighting their positive experiences and the value they received</p>  
                                        </div>
                                        <div class="gap-7">
                                            <div class="author__thumbs">
                                                <img src="assets/finview/images/author4.png" alt="image">
                                            </div>
                                            <div class="author__info">
                                                <h5 class="author__name">Annette Black</h5>
                                            </div>
                                        </div>
                                        <div class="feedback">
                                            <div class="gap-9 feedback__content">
                                                <a href="" class="reply">
                                                    <i class="bi bi-chat-left-text"></i>Yanıtla
                                                </a>
                                                <a href="" class="reply">
                                                    <i class="bi bi-download"></i>Kaydet
                                                </a>
                                            </div>
                                            <div class="reply__content">
                                                <div class="gap-7">
                                                    <div class="author__thumbs">
                                                        <img src="assets/images/author2.png" alt="Author">
                                                    </div>
                                                    <form method="POST" class="reply__form">
                                                        <div >
                                                            <input type="text" class="form-control" name="reply__text" placeholder="Join the discussion..." required>
                                                            <button type="submit" class="d-none" name="reply__submit">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-xl-4">
                        <div class="sidebar cus_scrollbar wow fadeInUp" data-wow-duration="0.8s">
                            <div class="sidebar__part">
                                <h4 class="sidebar__part-title">Search</h4>
                                <form method="POST" id="filter_search" class="filter__search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" required>
                                        <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar__part">
                                <h4 class="sidebar__part-title">Category</h4>
                                <ul class="category">
                                    <li><a href="#">
                                        <span class="caregory__icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1164_4636)">
                                                <path d="M7.79992 13.9338C10.4255 13.9338 12.5539 11.8058 12.5539 9.18074C12.5539 6.55573 10.4255 4.42774 7.79992 4.42774C5.17435 4.42773 3.0459 6.55573 3.0459 9.18074C3.0459 11.8058 5.17435 13.9338 7.79992 13.9338Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.10573 12.6919C6.40948 12.5558 5.76977 12.2148 5.26866 11.7126C3.87268 10.3169 3.87269 8.04594 5.26866 6.65028C6.66464 5.25461 8.93608 5.25458 10.3321 6.65028C11.728 8.04598 11.728 10.3169 10.3321 11.7126C9.82759 12.2182 9.18273 12.5603 8.48128 12.6946M11.162 12.5423L12.5664 13.9465M16.5924 16.3426L17.1285 16.8786C17.3306 17.0807 17.3306 17.4084 17.1285 17.6105L16.231 18.5077C16.029 18.7097 15.7014 18.7097 15.4993 18.5077L12.1178 15.1269C11.9156 14.9248 11.9156 14.597 12.1178 14.395L13.0152 13.4977C13.2173 13.2957 13.5449 13.2957 13.7469 13.4977L15.6255 15.3759" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M1.73602 4.22531C2.53299 4.22531 3.17906 3.57938 3.17906 2.78258C3.17906 1.98578 2.53299 1.33984 1.73602 1.33984C0.939043 1.33984 0.292969 1.98578 0.292968 2.78258C0.292968 3.57938 0.939042 4.22531 1.73602 4.22531Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.2116 4.22531C13.0086 4.22531 13.6546 3.57938 13.6546 2.78258C13.6546 1.98578 13.0086 1.33984 12.2116 1.33984C11.4146 1.33984 10.7686 1.98578 10.7686 2.78258C10.7686 3.57938 11.4146 4.22531 12.2116 4.22531Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.78875 9.61398C8.58572 9.61398 9.2318 8.96805 9.2318 8.17125C9.2318 7.37445 8.58572 6.72852 7.78875 6.72852C6.99178 6.72852 6.3457 7.37445 6.3457 8.17125C6.3457 8.96805 6.99178 9.61398 7.78875 9.61398Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M18.2643 9.61398C19.0613 9.61398 19.7074 8.96805 19.7074 8.17125C19.7074 7.37445 19.0613 6.72852 18.2643 6.72852C17.4674 6.72852 16.8213 7.37445 16.8213 8.17125C16.8213 8.96805 17.4674 9.61398 18.2643 9.61398Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.78965 5.50168L2.81348 3.7423M6.71074 7.21145L5.68105 6.29465M17.1862 7.21153L13.2888 3.74211M17.1862 7.21153L17.1862 6.20215M17.1862 7.21153L16.1768 7.21153M9.53144 6.04738L8.70371 7.05598M11.2959 3.89777L10.2857 5.12863M17.8627 1.33985L17.8627 1.59739M17.8627 3.02274L17.8627 3.28028M18.8329 2.31004L18.5754 2.31004M17.15 2.31004L16.8925 2.31004" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_1164_4636">
                                                <rect width="20" height="20" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>                                            
                                      </span> 
                                      <span class="caregory__content">Loan Application Tracking</span> 
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection