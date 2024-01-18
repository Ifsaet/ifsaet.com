@extends('layout')
@section('content')
        <section class="service-details section mt-5">
            <div class="container mt-5">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-12 col-lg-12">
                        <div class="card card--secondary wow fadeInDown" data-wow-duration="0.8s">
                            <div class="card--secondary__content">
                                <div class="card--secondary__content-part wow fadeInUp" data-wow-duration="0.8s">
                                    <div class="content-part__thumb flex-wrap flex-xxl-nowrap mt-3">
                                        <img class="w-25 h-25" src="assets/finview/images/service_details_sub.png" alt="image">
                                        <div class="content-part__thumb-text">
                                            <h3>{{$brand['name']}}</h3>
                                            <p class="mt-3 mx-2">{{$brand['aciklama']}}</p>
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
                                        <a href="#" class="btn_theme mt-2">Marka Karnesini Gör<span></span></a> 
                                    </div>
                                    <div class="tag text-center mt-4">
                                        <div class="tag-content">
                                            <a href="#" class="btn_theme">Marka ile İlgili İfşan mı Var?<span></span>İfşa Yaz</a>
                                        </div>
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
                            <h3>9 İfşa</h3>
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
                </div>
            </div>
        </section>
@endsection