@extends('layout')
@section('content')


<!-- Slider Alanı -->
<section class="hero">
        <div class="container">
            <div class="row gy-5 gy-lg-0 align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="section__content">
                        <h1 style="color:#1f2130 !important;" class="section__content-title display-3 wow fadeInUp" data-wow-duration="0.8s">Markaları Keşfedin ve Yorumlayın!
                        </h1>
                            <input class="form-control custom-input" style="width: 100%;" type="text" placeholder="Aradığın Kurum/Markayı Bul">
                </div>
                <div class="col-12 col-lg-6 col-xxl-5 mt-5">
                    <div class="hero__thumb wow fadeInUp" data-wow-duration="0.8s">
                        <h1 style="color:#1f2130 !important; font-size: 48px; !important">Hızlı Çözüm İçin <br>İfşa Et</h1>
                        <div class="input-single" style="margin-top: 40px !important;">
                        <div style="display: grid; grid-template-columns: 1fr auto;">
                            <label class="label" for="message">İfşa Detayı</label>
                            <div style="display: grid; grid-template-columns: 1fr auto;
                            align-items: center;">
                                <label style="z-index:9;" class="label"><a target="blank" href="https://www.youtube.com/watch?v=XZPezAinMo4&embeds_referring_euri=https%3A%2F%2Fwww.ifsaet.com%2F&source_ve_path=MjM4NTE&feature=emb_title&ab_channel=%C4%B0f%C5%9FaEt">Nasıl Yazılır?</a></label>
                                <a target="blank" href="https://www.youtube.com/watch?v=XZPezAinMo4&embeds_referring_euri=https%3A%2F%2Fwww.ifsaet.com%2F&source_ve_path=MjM4NTE&feature=emb_title&ab_channel=%C4%B0f%C5%9FaEt" class="btn_theme social_box"><i class="bi bi-youtube"></i><span></span></a>
                              </div>

                        </div>
                            <textarea style="z-index: 9;" class="form-control" id="message" name="message" rows="8" placeholder="Ürün veya hizmetle ilgili nasıl bir sorun yaşadınız?" required></textarea>
                            <button type="submit" class="btn_theme btn_theme_active mt-3 " name="gonder" id="submit">Devam Et<i class="bi bi-arrow-up-right"></i><span></span></button>
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
                            <span class="section__header-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/finview/images/title_vector.png" alt="vector">Client Testimonials</span>
                            <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Success Stories Shared by Our Customers</h2>
                            <p class="section__header-content wow fadeInDown" data-wow-duration="0.8s">Feel free to customize the text with actual client testimonials, ensuring you have their permission to use their names and occupations</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonials-slider wow fadeInUp" data-wow-duration="0.8s">
                            <div class="card card--custom">
                                <div class="testimonials__author-review">
                                    <div class="star_review mb-3">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                    <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. Here are some of their testimonials highlighting their positive experiences and the value they received</p>
                                </div>
                                <div class="testimonials__author">
                                    <div class="author__thumg">
                                        <img src="assets/finview/images/testimonials.png" alt="">
                                    </div>
                                    <div class="author__content">
                                        <h5 class="author__title">Balogh Imre</h5>
                                        <p class="author__desi">Account Executive</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--custom">
                                <div class="testimonials__author-review">
                                    <div class="star_review mb-3">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                    <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. Here are some of their testimonials highlighting their positive experiences and the value they received</p>
                                </div>
                                <div class="testimonials__author">
                                    <div class="author__thumg">
                                        <img src="assets/finview/images/testimonials2.png" alt="">
                                    </div>
                                    <div class="author__content">
                                        <h5 class="author__title">Kende Attila</h5>
                                        <p class="author__desi">President of Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--custom">
                                <div class="testimonials__author-review">
                                    <div class="star_review mb-3">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                    <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. Here are some of their testimonials highlighting their positive experiences and the value they received</p>
                                </div>
                                <div class="testimonials__author">
                                    <div class="author__thumg">
                                        <img src="assets/finview/images/testimonials3.png" alt="">
                                    </div>
                                    <div class="author__content">
                                        <h5 class="author__title">Eleanor Pena</h5>
                                        <p class="author__desi">Medical Assistant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12">
    
                        <div class="slider-navigation wow fadeInRight" data-wow-duration="1.2s">
                            <button class="prev-testimonials pagination-button">
                                <i class="bi bi-chevron-left"></i>
                            </button>
    
                            <button class="next-testimonials pagination-button">
                                <i class="bi bi-chevron-right"></i>
                            </button>
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
                    <span class="section__header-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/finview/images/title_vector.png" alt="vector">Loan Reviews</span>
                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">In-depth Analysis for Informed Borrowing Decisions</h2>
                    <p class="section__header-content wow fadeInDown" data-wow-duration="0.8s">Welcome to our comprehensive loan reviews section, where we provide you with detailed and unbiased analyses of various loan options.</p>
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
                            <div class="loan-reviews__review">
                                <p class="rating"> 4.9</p>
                                <div class="d-flex gap-2 flex-column">
                                    <div class="star_review">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                    <p class="fs-small">Average Review</p>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews__part-two">
                            <div class="reviews-heading">
                                <h4 class="reviews-heading__title">Home Loans Mortgages</h4>
                                <p class="reviews-heading__content">America’s Largest online mortgage lender</p>
                            </div>
                            <div class="reviews-inner">
                                <ul>
                                    <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                    <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                    <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="loan-reviews__part-three">
                            <div class="btn-group">
                                <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                        <div class="loan-reviews__part-one">
                            <div class="loan-reviews__thumb">
                                <img src="assets/finview/images/loan_reviews_logo2.png" alt="image">
                            </div>
                            <div class="loan-reviews__review">
                                <p class="rating"> 4.9</p>
                                <div class="d-flex gap-2 flex-column">
                                    <div class="star_review">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                    <p class="fs-small">Average Review</p>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews__part-two">
                            <div class="reviews-heading">
                                <h4 class="reviews-heading__title">Student Loans</h4>
                                <p class="reviews-heading__content">Canada Largest online mortgage lender</p>
                            </div>
                            <div class="reviews-inner">
                                <ul>
                                    <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                    <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                    <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="loan-reviews__part-three">
                            <div class="btn-group">
                                <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                        <div class="loan-reviews__part-one">
                            <div class="loan-reviews__thumb">
                                <img src="assets/finview/images/loan_reviews_logo3.png" alt="image">
                            </div>
                            <div class="loan-reviews__review">
                                <p class="rating"> 4.9</p>
                                <div class="d-flex gap-2 flex-column">
                                    <div class="star_review">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                    <p class="fs-small">Average Review</p>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews__part-two">
                            <div class="reviews-heading">
                                <h4 class="reviews-heading__title">Business Loans</h4>
                                <p class="reviews-heading__content">Japanes Largest online mortgage lender</p>
                            </div>
                            <div class="reviews-inner">
                                <ul>
                                    <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                    <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                    <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="loan-reviews__part-three">
                            <div class="btn-group">
                                <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                        <div class="loan-reviews__part-one">
                            <div class="loan-reviews__thumb">
                                <img src="assets/finview/images/loan_reviews_logo4.png" alt="image">
                            </div>
                            <div class="loan-reviews__review">
                                <p class="rating"> 4.9</p>
                                <div class="d-flex gap-2 flex-column">
                                    <div class="star_review">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                    <p class="fs-small">Average Review</p>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews__part-two">
                            <div class="reviews-heading">
                                <h4 class="reviews-heading__title">Construction Loans</h4>
                                <p class="reviews-heading__content">America’s Largest online mortgage lender</p>
                            </div>
                            <div class="reviews-inner">
                                <ul>
                                    <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                    <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                    <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                    <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="loan-reviews__part-three">
                            <div class="btn-group">
                                <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="section__cta">
                    <a href="loan-reviews.html" class="btn_theme see_all wow fadeInDown" data-wow-duration="0.8s">See All Review Loan<i class="bi bi-arrow-up-right"></i><span></span></a>
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
                    <span class="section__header-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/finview/images/title_vector.png" alt="vector">Client Testimonials</span>
                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Success Stories Shared by Our Customers</h2>
                    <p class="section__header-content wow fadeInDown" data-wow-duration="0.8s">Feel free to customize the text with actual client testimonials, ensuring you have their permission to use their names and occupations</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonials-slider wow fadeInUp" data-wow-duration="0.8s">
                    <div class="card card--custom">
                        <div class="testimonials__author-review">
                            <div class="star_review mb-3">
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-half star-active"></i>
                            </div>
                            <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. Here are some of their testimonials highlighting their positive experiences and the value they received</p>
                        </div>
                        <div class="testimonials__author">
                            <div class="author__thumg">
                                <img src="assets/finview/images/testimonials.png" alt="">
                            </div>
                            <div class="author__content">
                                <h5 class="author__title">Balogh Imre</h5>
                                <p class="author__desi">Account Executive</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card--custom">
                        <div class="testimonials__author-review">
                            <div class="star_review mb-3">
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-half star-active"></i>
                            </div>
                            <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. Here are some of their testimonials highlighting their positive experiences and the value they received</p>
                        </div>
                        <div class="testimonials__author">
                            <div class="author__thumg">
                                <img src="assets/finview/images/testimonials2.png" alt="">
                            </div>
                            <div class="author__content">
                                <h5 class="author__title">Kende Attila</h5>
                                <p class="author__desi">President of Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card--custom">
                        <div class="testimonials__author-review">
                            <div class="star_review mb-3">
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-fill star-active"></i>
                                <i class="bi bi-star-half star-active"></i>
                            </div>
                            <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. Here are some of their testimonials highlighting their positive experiences and the value they received</p>
                        </div>
                        <div class="testimonials__author">
                            <div class="author__thumg">
                                <img src="assets/finview/images/testimonials3.png" alt="">
                            </div>
                            <div class="author__content">
                                <h5 class="author__title">Eleanor Pena</h5>
                                <p class="author__desi">Medical Assistant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <div class="slider-navigation wow fadeInRight" data-wow-duration="1.2s">
                    <button class="prev-testimonials pagination-button">
                        <i class="bi bi-chevron-left"></i>
                    </button>

                    <button class="next-testimonials pagination-button">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popüler İfşalar -->


<!-- Video Alanı -->
<section class="about-us section">
        <div class="animation">
            <img src="assets/finview/images/hero_vector_dollar.png" alt="Image">
            <img src="assets/finview/images/hero_vector_message.png" alt="Image">
        </div>
        <div class="container">
            <div class="row gy-5 gy-lg-0 justify-content-between align-items-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__content ms-lg-4 ms-xl-0">
                        <span class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/finview/images/title_vector.png" alt="vector"> About Us</span>
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Your Trusted Source for Loan Reviews and Comparison</h2>
                        <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">We are dedicated to providing you with a reliable and user-friendly platform for loan reviews and comparison. With a mission to simplify the loan selection</p>
                        <div class="section__content-inner">
                            <div class="card card--small wow fadeInUp" data-wow-duration="0.8s">
                                <div class="card--small-icon">
                                    <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1043_1743)">
                                            <path d="M33.8586 23.1412C34.105 24.0141 34.2368 24.935 34.2368 25.8867C34.2368 31.4571 29.7211 35.9727 24.1508 35.9727C21.1377 35.9727 18.4331 34.6515 16.585 32.5566M20.0112 8.86448C19.5936 8.65945 19.0752 8.72955 18.7279 9.07683L17.5345 10.2702C17.2107 10.594 16.7204 10.6918 16.3017 10.5063C16.1716 10.4486 16.0399 10.3941 15.9065 10.3429C15.479 10.1785 15.2016 9.76209 15.2016 9.30415V7.6163C15.2016 6.99874 14.7009 6.49805 14.0834 6.49805H11.536C10.9185 6.49805 10.4179 6.99867 10.4179 7.6163V9.30415C10.4179 9.76216 10.1403 10.1785 9.71291 10.3429C9.5796 10.3941 9.44783 10.4486 9.31775 10.5063C8.89904 10.6918 8.40875 10.5941 8.08497 10.2702L6.89162 9.07676C6.45491 8.64012 5.74693 8.64012 5.31022 9.07676L3.50903 10.878C3.07232 11.3147 3.07232 12.0227 3.50903 12.4594L4.70244 13.6528C5.02623 13.9766 5.12396 14.4669 4.93848 14.8856C4.88082 15.0157 4.82633 15.1474 4.77507 15.2808C4.61068 15.7083 4.19429 15.9857 3.73635 15.9857H2.04836C1.4308 15.9857 0.930176 16.4864 0.930176 17.1039V19.6513C0.930176 20.2688 1.4308 20.7694 2.04836 20.7694H3.73621C4.19422 20.7694 4.61054 21.047 4.77493 21.4744C4.82607 21.6075 4.88055 21.7392 4.93834 21.8696C5.12389 22.2883 5.02616 22.7785 4.7023 23.1023L3.50889 24.2958C3.07218 24.7325 3.07218 25.4404 3.50889 25.8772L5.31008 27.6784C5.74679 28.1151 6.45477 28.1151 6.89148 27.6784L8.08489 26.485C8.40868 26.1612 8.89897 26.0635 9.31768 26.249C9.44776 26.3066 9.57946 26.3611 9.71284 26.4124C10.1403 26.5768 10.4178 26.9932 10.4178 27.4511V29.139C10.4178 29.7565 10.9184 30.2572 11.536 30.2572H14.0833C14.7009 30.2572 15.2015 29.7566 15.2015 29.139V27.4511C15.2015 26.9931 15.479 26.5768 15.9065 26.4124C16.0398 26.3611 16.1715 26.3066 16.3016 26.249C16.683 26.0799 17.1234 26.1467 17.4436 26.4045" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.95215 19.608C8.50066 21.7801 10.4672 23.3878 12.8097 23.3878C15.5768 23.3878 17.82 21.1447 17.82 18.3775C17.82 15.6104 15.5768 13.3672 12.8098 13.3672C10.4673 13.3672 8.50073 14.975 7.95222 17.147" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.8098 20.8231C14.16 20.8231 15.2545 19.7286 15.2545 18.3784C15.2545 17.0282 14.16 15.9336 12.8098 15.9336C11.4595 15.9336 10.365 17.0282 10.365 18.3784C10.365 19.7286 11.4595 20.8231 12.8098 20.8231Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M29.0801 7.31662H24.2771C24.2154 7.31662 24.1543 7.30447 24.0973 7.28087C24.0404 7.25726 23.9886 7.22267 23.945 7.17905C23.9014 7.13544 23.8668 7.08366 23.8432 7.02668C23.8196 6.96969 23.8074 6.90861 23.8074 6.84693V4.10165C23.8074 2.39102 22.411 1.00938 20.7004 1.02752C20.517 1.02948 20.3417 1.10374 20.2127 1.23416C20.0836 1.36458 20.0112 1.54064 20.0112 1.72411V3.52347M28.5142 20.7675H29.7309M20.0112 5.98441V16.9815C20.0112 18.1035 20.4998 19.1111 21.2752 19.8043" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M20.5332 31.5588C21.5778 32.2265 22.8191 32.6136 24.1508 32.6136C27.8658 32.6136 30.8775 29.602 30.8775 25.8869C30.8775 22.1718 27.8659 19.1602 24.1508 19.1602C20.4357 19.1602 17.4241 22.1718 17.4241 25.8869C17.4241 27.3806 17.9113 28.7604 18.735 29.8767" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M20.8257 25.5615L23.3699 28.4703L27.476 23.823M33.8234 19.0857C33.8234 18.1571 33.0706 17.4043 32.142 17.4043H29.7308C28.8021 17.4043 28.0494 18.1571 28.0494 19.0857C28.0494 20.0143 28.8021 20.7671 29.7308 20.7671H32.142C33.0706 20.767 33.8234 20.0142 33.8234 19.0857Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M33.3887 14.0419H29.0801C28.1514 14.0419 27.3987 14.7946 27.3987 15.7233C27.3987 16.6519 28.1514 17.4046 29.0801 17.4046H33.3887C34.3174 17.4046 35.0701 16.6519 35.0701 15.7233C35.0701 14.7946 34.3174 14.0419 33.3887 14.0419ZM33.3887 7.31641H29.0801C28.1514 7.31641 27.3987 8.06917 27.3987 8.99779C27.3987 9.92641 28.1514 10.6792 29.0801 10.6792H33.3887C34.3174 10.6792 35.0701 9.92641 35.0701 8.99779C35.0701 8.06917 34.3174 7.31641 33.3887 7.31641Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M33.3887 10.6797H29.0801C28.1514 10.6797 27.3987 11.4325 27.3987 12.3611C27.3987 13.2897 28.1514 14.0425 29.0801 14.0425H33.3887C34.3174 14.0425 35.0701 13.2897 35.0701 12.3611C35.0701 11.4325 34.3174 10.6797 33.3887 10.6797Z" stroke="#074C3E" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1043_1743">
                                                <rect width="36" height="36" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Expertise & Objectivity</h5>
                                    <p class="card--small-text">With years of experience in the financial industry</p>
                                </div>
                            </div>
                            <div class="card card--small wow fadeInUp" data-wow-duration="0.8s">
                                <div class="card--small-icon">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1043_1750)">
                                            <path d="M2.6557 32.4587H3.83603V33.6319C3.83141 33.9402 3.8885 34.2464 4.00394 34.5323C4.11938 34.8182 4.29084 35.0781 4.50822 35.2968C4.72856 35.5206 4.99145 35.6981 5.28143 35.8189C5.5714 35.9396 5.88259 36.0011 6.19668 35.9997H25.6721C26.2982 35.9997 26.8986 35.751 27.3413 35.3083C27.784 34.8656 28.0327 34.2651 28.0327 33.639V26.5571C28.0327 26.4005 27.9706 26.2504 27.8599 26.1397C27.7492 26.0291 27.5991 25.9669 27.4426 25.9669C27.2861 25.9669 27.136 26.0291 27.0253 26.1397C26.9146 26.2504 26.8524 26.4005 26.8524 26.5571V33.639C26.8524 33.9521 26.7281 34.2523 26.5067 34.4736C26.2854 34.695 25.9851 34.8194 25.6721 34.8194H6.19668C6.03873 34.8201 5.88223 34.7892 5.73645 34.7283C5.59068 34.6675 5.45859 34.5781 5.34803 34.4653C5.24026 34.3567 5.15538 34.2277 5.0984 34.0858C5.04143 33.9439 5.01353 33.7919 5.01636 33.639V32.4587H22.1311C22.7572 32.4587 23.3576 32.21 23.8003 31.7673C24.2431 31.3246 24.4918 30.7241 24.4918 30.098V27.8908C24.4918 27.7343 24.4296 27.5842 24.3189 27.4735C24.2082 27.3628 24.0581 27.3007 23.9016 27.3007C23.7451 27.3007 23.595 27.3628 23.4843 27.4735C23.3736 27.5842 23.3114 27.7343 23.3114 27.8908V30.098C23.3114 30.4111 23.1871 30.7113 22.9657 30.9327C22.7444 31.154 22.4442 31.2784 22.1311 31.2784H2.6557C2.34266 31.2784 2.04244 31.154 1.82108 30.9327C1.59973 30.7113 1.47537 30.4111 1.47537 30.098V2.9505C1.47537 2.63746 1.59973 2.33724 1.82108 2.11588C2.04244 1.89453 2.34266 1.77017 2.6557 1.77017H22.1311C22.4442 1.77017 22.7444 1.89453 22.9657 2.11588C23.1871 2.33724 23.3114 2.63746 23.3114 2.9505V7.67181C23.3114 7.82833 23.3736 7.97844 23.4843 8.08912C23.595 8.1998 23.7451 8.26198 23.9016 8.26198C24.0581 8.26198 24.2082 8.1998 24.3189 8.08912C24.4296 7.97844 24.4918 7.82833 24.4918 7.67181V2.9505C24.4918 2.32441 24.2431 1.72397 23.8003 1.28126C23.3576 0.838555 22.7572 0.589844 22.1311 0.589844H2.6557C2.02961 0.589844 1.42917 0.838555 0.986464 1.28126C0.543755 1.72397 0.295044 2.32441 0.295044 2.9505L0.295044 30.098C0.295044 30.7241 0.543755 31.3246 0.986464 31.7673C1.42917 32.21 2.02961 32.4587 2.6557 32.4587Z" fill="#074C3E"/>
                                            <path d="M3.2458 4.13112C3.08928 4.13112 2.93917 4.1933 2.82849 4.30397C2.71782 4.41465 2.65564 4.56476 2.65564 4.72128V10.0328C2.65564 10.1893 2.71782 10.3394 2.82849 10.4501C2.93917 10.5607 3.08928 10.6229 3.2458 10.6229H5.60646C5.76298 10.6229 5.91309 10.5607 6.02377 10.4501C6.13444 10.3394 6.19662 10.1893 6.19662 10.0328C6.19662 9.87624 6.13444 9.72613 6.02377 9.61545C5.91309 9.50477 5.76298 9.44259 5.60646 9.44259H3.83597V4.72128C3.83597 4.56476 3.77379 4.41465 3.66311 4.30397C3.55244 4.1933 3.40232 4.13112 3.2458 4.13112ZM11.5081 7.37702C11.5081 5.55696 10.4712 4.13112 9.14744 4.13112C7.8237 4.13112 6.78679 5.55696 6.78679 7.37702C6.78679 9.19709 7.8237 10.6229 9.14744 10.6229C10.4712 10.6229 11.5081 9.19709 11.5081 7.37702ZM7.96711 7.37702C7.96711 6.1601 8.58915 5.31145 9.14744 5.31145C9.70574 5.31145 10.3278 6.1601 10.3278 7.37702C10.3278 8.59394 9.70574 9.44259 9.14744 9.44259C8.58915 9.44259 7.96711 8.59453 7.96711 7.37702ZM15.019 4.53479C14.9802 4.41672 14.9051 4.31391 14.8044 4.24103C14.7037 4.16815 14.5826 4.12891 14.4583 4.12891C14.334 4.12891 14.2129 4.16815 14.1123 4.24103C14.0116 4.31391 13.9365 4.41672 13.8977 4.53479L12.1272 9.84627C12.0777 9.99496 12.0894 10.1572 12.1595 10.2973C12.2297 10.4374 12.3526 10.544 12.5013 10.5934C12.65 10.6429 12.8123 10.6312 12.9524 10.5611C13.0925 10.4909 13.199 10.3679 13.2485 10.2192L13.5076 9.44259H15.4103L15.6693 10.2192C15.6938 10.2929 15.7326 10.361 15.7834 10.4196C15.8342 10.4783 15.896 10.5263 15.9654 10.5611C16.0348 10.5958 16.1103 10.6166 16.1877 10.6221C16.2651 10.6277 16.3429 10.6179 16.4165 10.5934C16.4901 10.5689 16.5582 10.5302 16.6168 10.4794C16.6755 10.4286 16.7236 10.3667 16.7583 10.2973C16.7931 10.228 16.8138 10.1524 16.8193 10.075C16.8249 9.99762 16.8151 9.91989 16.7907 9.84627L15.019 4.53479ZM13.9006 8.26227L14.4589 6.58738L15.0172 8.26227H13.9006ZM19.1802 10.0328V6.99873L21.0251 10.3196C21.0886 10.4338 21.1883 10.5238 21.3084 10.5753C21.4286 10.6268 21.5625 10.6369 21.689 10.6041C21.8156 10.5712 21.9277 10.4973 22.0077 10.3939C22.0877 10.2905 22.1311 10.1635 22.131 10.0328V4.72128C22.131 4.56476 22.0689 4.41465 21.9582 4.30397C21.8475 4.1933 21.6974 4.13112 21.5409 4.13112C21.3844 4.13112 21.2343 4.1933 21.1236 4.30397C21.0129 4.41465 20.9507 4.56476 20.9507 4.72128V7.75532L19.1059 4.43446C19.0423 4.3202 18.9427 4.23027 18.8225 4.17878C18.7023 4.12729 18.5685 4.11715 18.4419 4.14997C18.3154 4.18279 18.2033 4.2567 18.1233 4.36011C18.0433 4.46351 17.9999 4.59055 17.9999 4.72128V10.0328C17.9999 10.1893 18.0621 10.3394 18.1728 10.4501C18.2834 10.5607 18.4335 10.6229 18.5901 10.6229C18.7466 10.6229 18.8967 10.5607 19.0074 10.4501C19.1181 10.3394 19.1802 10.1893 19.1802 10.0328ZM3.2458 14.7541H10.9179C11.0745 14.7541 11.2246 14.6919 11.3352 14.5812C11.4459 14.4705 11.5081 14.3204 11.5081 14.1639C11.5081 14.0074 11.4459 13.8573 11.3352 13.7466C11.2246 13.6359 11.0745 13.5737 10.9179 13.5737H3.2458C3.08928 13.5737 2.93917 13.6359 2.82849 13.7466C2.71782 13.8573 2.65564 14.0074 2.65564 14.1639C2.65564 14.3204 2.71782 14.4705 2.82849 14.5812C2.93917 14.6919 3.08928 14.7541 3.2458 14.7541ZM3.2458 17.7049H10.9179C11.0745 17.7049 11.2246 17.6427 11.3352 17.532C11.4459 17.4214 11.5081 17.2712 11.5081 17.1147C11.5081 16.9582 11.4459 16.8081 11.3352 16.6974C11.2246 16.5867 11.0745 16.5246 10.9179 16.5246H3.2458C3.08928 16.5246 2.93917 16.5867 2.82849 16.6974C2.71782 16.8081 2.65564 16.9582 2.65564 17.1147C2.65564 17.2712 2.71782 17.4214 2.82849 17.532C2.93917 17.6427 3.08928 17.7049 3.2458 17.7049ZM3.2458 20.6557H10.9179C11.0745 20.6557 11.2246 20.5935 11.3352 20.4829C11.4459 20.3722 11.5081 20.2221 11.5081 20.0655C11.5081 19.909 11.4459 19.7589 11.3352 19.6482C11.2246 19.5376 11.0745 19.4754 10.9179 19.4754H3.2458C3.08928 19.4754 2.93917 19.5376 2.82849 19.6482C2.71782 19.7589 2.65564 19.909 2.65564 20.0655C2.65564 20.2221 2.71782 20.3722 2.82849 20.4829C2.93917 20.5935 3.08928 20.6557 3.2458 20.6557ZM13.2786 14.1639C13.2786 14.3204 13.3408 14.4705 13.4514 14.5812C13.5621 14.6919 13.7122 14.7541 13.8688 14.7541H19.3809C19.5374 14.7541 19.6875 14.6919 19.7982 14.5812C19.9089 14.4705 19.971 14.3204 19.971 14.1639C19.971 14.0074 19.9089 13.8573 19.7982 13.7466C19.6875 13.6359 19.5374 13.5737 19.3809 13.5737H13.8688C13.7122 13.5737 13.5621 13.6359 13.4514 13.7466C13.3408 13.8573 13.2786 14.0074 13.2786 14.1639ZM13.8688 17.7049H16.1586C16.3151 17.7049 16.4652 17.6427 16.5759 17.532C16.6866 17.4214 16.7488 17.2712 16.7488 17.1147C16.7488 16.9582 16.6866 16.8081 16.5759 16.6974C16.4652 16.5867 16.3151 16.5246 16.1586 16.5246H13.8688C13.7122 16.5246 13.5621 16.5867 13.4514 16.6974C13.3408 16.8081 13.2786 16.9582 13.2786 17.1147C13.2786 17.2712 13.3408 17.4214 13.4514 17.532C13.5621 17.6427 13.7122 17.7049 13.8688 17.7049ZM13.8688 20.6557H16.2707C16.4272 20.6557 16.5774 20.5935 16.688 20.4829C16.7987 20.3722 16.8609 20.2221 16.8609 20.0655C16.8609 19.909 16.7987 19.7589 16.688 19.6482C16.5774 19.5376 16.4272 19.4754 16.2707 19.4754H13.8688C13.7122 19.4754 13.5621 19.5376 13.4514 19.6482C13.3408 19.7589 13.2786 19.909 13.2786 20.0655C13.2786 20.2221 13.3408 20.3722 13.4514 20.4829C13.5621 20.5935 13.7122 20.6557 13.8688 20.6557ZM3.2458 23.6065H10.9179C11.0745 23.6065 11.2246 23.5443 11.3352 23.4337C11.4459 23.323 11.5081 23.1729 11.5081 23.0164C11.5081 22.8598 11.4459 22.7097 11.3352 22.5991C11.2246 22.4884 11.0745 22.4262 10.9179 22.4262H3.2458C3.08928 22.4262 2.93917 22.4884 2.82849 22.5991C2.71782 22.7097 2.65564 22.8598 2.65564 23.0164C2.65564 23.1729 2.71782 23.323 2.82849 23.4337C2.93917 23.5443 3.08928 23.6065 3.2458 23.6065ZM17.9232 23.0164C17.9232 22.8598 17.861 22.7097 17.7503 22.5991C17.6396 22.4884 17.4895 22.4262 17.333 22.4262H13.8688C13.7122 22.4262 13.5621 22.4884 13.4514 22.5991C13.3408 22.7097 13.2786 22.8598 13.2786 23.0164C13.2786 23.1729 13.3408 23.323 13.4514 23.4337C13.5621 23.5443 13.7122 23.6065 13.8688 23.6065H17.333C17.4895 23.6065 17.6396 23.5443 17.7503 23.4337C17.861 23.323 17.9232 23.1729 17.9232 23.0164ZM3.83597 28.3278H5.68495C5.94846 28.3287 6.20693 28.2558 6.43109 28.1172C6.65525 27.9787 6.83612 27.7802 6.95321 27.5441C6.97285 27.4995 7.00659 27.4626 7.04923 27.439C7.09188 27.4155 7.14108 27.4066 7.18928 27.4137C7.28843 27.4196 7.37223 27.4886 7.39584 27.5848L7.50029 27.949C7.57272 28.2102 7.71939 28.4448 7.9225 28.6244C8.12562 28.8039 8.37647 28.9207 8.64462 28.9605C8.91212 29.0044 9.18661 28.9697 9.43478 28.8606C9.68295 28.7516 9.89414 28.5729 10.0427 28.3461L10.722 27.3275C10.7435 27.2946 10.7728 27.2676 10.8073 27.2489C10.8418 27.2302 10.8804 27.2204 10.9197 27.2204C10.959 27.2204 10.9976 27.2302 11.0321 27.2489C11.0666 27.2676 11.096 27.2946 11.1174 27.3275L11.3629 27.697C11.4924 27.8913 11.6679 28.0505 11.8739 28.1606C12.0798 28.2707 12.3097 28.3281 12.5432 28.3278H14.4589C14.6154 28.3278 14.7655 28.2657 14.8762 28.155C14.9869 28.0443 15.0491 27.8942 15.0491 27.7377C15.0491 27.5812 14.9869 27.431 14.8762 27.3204C14.7655 27.2097 14.6154 27.1475 14.4589 27.1475H12.5409C12.5019 27.1476 12.4634 27.1379 12.429 27.1195C12.3946 27.1011 12.3653 27.0744 12.3438 27.0419L12.0983 26.6754C11.9691 26.4806 11.7937 26.3208 11.5877 26.2103C11.3818 26.0998 11.1517 26.0419 10.9179 26.0419C10.6842 26.0419 10.4541 26.0998 10.2482 26.2103C10.0422 26.3208 9.86681 26.4806 9.73761 26.6754L9.05892 27.6916C9.03413 27.73 8.99877 27.7603 8.95712 27.7789C8.91546 27.7975 8.8693 27.8037 8.82422 27.7966C8.77914 27.7896 8.73706 27.7696 8.7031 27.7391C8.66913 27.7087 8.64472 27.669 8.63282 27.625L8.52895 27.2608C8.45105 26.9857 8.29172 26.7407 8.07191 26.5578C7.8521 26.375 7.58211 26.263 7.29743 26.2365C7.01276 26.21 6.72673 26.2702 6.47695 26.4093C6.22717 26.5485 6.02534 26.7599 5.898 27.0159C5.87841 27.0556 5.84804 27.089 5.81036 27.1123C5.77269 27.1356 5.72923 27.1478 5.68495 27.1475H3.83597C3.67945 27.1475 3.52934 27.2097 3.41866 27.3204C3.30798 27.431 3.2458 27.5812 3.2458 27.7377C3.2458 27.8942 3.30798 28.0443 3.41866 28.155C3.52934 28.2657 3.67945 28.3278 3.83597 28.3278Z" fill="#074C3E"/>
                                            <path d="M16.8197 28.3284H20.0856C20.3397 28.328 20.5841 28.2312 20.7696 28.0575C22.1134 26.8182 24.8719 24.7261 28.2482 24.657C28.5066 24.656 28.7547 24.5558 28.9414 24.3771C29.1281 24.1984 29.2391 23.9549 29.2515 23.6968C29.2621 23.4796 29.5341 18.3517 31.0219 15.5632L35.637 6.89958C35.7106 6.76137 35.7262 6.5996 35.6805 6.44985C35.6348 6.30011 35.5315 6.17465 35.3933 6.10109C35.2551 6.02752 35.0933 6.01187 34.9436 6.05758C34.7938 6.10329 34.6684 6.20662 34.5948 6.34483L30.2577 14.4891L28.0186 13.297L25.0501 11.7147L30.5115 1.45827C30.553 1.38966 30.5801 1.31331 30.5911 1.23388C30.6022 1.15445 30.5969 1.0736 30.5756 0.996271C30.5544 0.918942 30.5176 0.846756 30.4675 0.78412C30.4174 0.721484 30.3551 0.669711 30.2844 0.631964C30.2136 0.594216 30.1359 0.571286 30.056 0.564572C29.9761 0.557858 29.8956 0.567502 29.8196 0.592915C29.7435 0.618327 29.6734 0.658976 29.6136 0.712378C29.5538 0.765781 29.5054 0.830817 29.4716 0.903515L23.7299 11.6775C22.2427 14.4678 18.1381 17.5509 17.964 17.6807C17.7572 17.8353 17.6175 18.0633 17.5736 18.3177C17.5297 18.5721 17.5849 18.8337 17.7279 19.0487C19.617 21.9948 19.2983 25.6898 19.0723 27.1481H16.8197C16.6631 27.1481 16.513 27.2103 16.4023 27.321C16.2917 27.4316 16.2295 27.5817 16.2295 27.7383C16.2295 27.8948 16.2917 28.0449 16.4023 28.1556C16.513 28.2663 16.6631 28.3284 16.8197 28.3284ZM18.7949 18.5317C19.4984 17.9929 22.8446 15.3584 24.4741 12.7481L27.9147 14.5776L29.7218 15.5413C28.4618 18.3493 28.139 22.5979 28.0841 23.4832C25.6724 23.6414 23.3619 24.5119 21.4454 25.9843L23.354 22.3625C23.9156 22.5023 24.5089 22.4324 25.0227 22.1659C25.5364 21.8993 25.9352 21.4545 26.1443 20.9148C26.3534 20.3751 26.3583 19.7777 26.1582 19.2346C25.9581 18.6915 25.5667 18.2402 25.0575 17.9651C24.5482 17.6901 23.9561 17.6104 23.3923 17.7409C22.8284 17.8714 22.3315 18.2032 21.9949 18.674C21.6583 19.1448 21.505 19.7223 21.5639 20.298C21.6228 20.8738 21.8897 21.4083 22.3147 21.8012L20.4197 25.3906C20.5655 22.9942 20.0003 20.6081 18.7949 18.5317ZM23.3469 21.1078C23.0706 20.9603 22.8643 20.709 22.7732 20.4094C22.6822 20.1097 22.7139 19.7862 22.8615 19.5099C23.009 19.2336 23.2602 19.0273 23.5599 18.9363C23.8595 18.8452 24.1831 18.877 24.4593 19.0245C24.7356 19.1722 24.9419 19.4235 25.0328 19.7233C25.1237 20.0231 25.0918 20.3467 24.9441 20.623C24.7965 20.8992 24.5451 21.1055 24.2453 21.1964C23.9456 21.2873 23.6219 21.2555 23.3457 21.1078H23.3469Z" fill="#074C3E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1043_1750">
                                                <rect width="36" height="36" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Loan Database</h5>
                                    <p class="card--small-text">We have curated a comprehensive database of loan products </p>
                                </div>
                            </div>
                            <div class="card card--small wow fadeInUp" data-wow-duration="0.8s">
                                <div class="card--small-icon">
                                    <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1043_1758)">
                                            <path d="M13.366 24.1259C13.3227 23.834 13.0504 23.6324 12.7594 23.6759L1.27488 25.3772C1.26912 25.3784 1.25964 25.3719 1.25865 25.3651L1.06837 24.0812C1.06782 24.0774 1.06878 24.0736 1.07105 24.0705C1.07332 24.0674 1.07671 24.0654 1.08048 24.0648L12.5653 22.3634C12.6347 22.3531 12.7013 22.3293 12.7615 22.2933C12.8217 22.2572 12.8742 22.2097 12.916 22.1534C12.9578 22.097 12.988 22.033 13.0051 21.965C13.0221 21.8969 13.0256 21.8262 13.0153 21.7568C12.9721 21.4649 12.6998 21.2633 12.4088 21.3068L9.12211 21.7936C9.27347 21.5514 9.38178 21.2847 9.44227 21.0056C10.2296 20.9438 10.8517 20.2847 10.8517 19.4817V19.2974C10.8517 18.6048 10.3888 18.0191 9.75638 17.8313V17.0886L11.1555 14.6201C11.1905 14.5591 11.2132 14.4917 11.2222 14.4219C11.2311 14.3521 11.2262 14.2811 11.2076 14.2132C11.189 14.1453 11.1572 14.0817 11.114 14.0262C11.0708 13.9706 11.017 13.9241 10.9558 13.8894C10.8945 13.8547 10.827 13.8324 10.7571 13.8239C10.6873 13.8153 10.6164 13.8207 10.5486 13.8396C10.4808 13.8586 10.4174 13.8908 10.3621 13.9343C10.3067 13.9779 10.2606 14.0319 10.2262 14.0934L8.81548 16.5822C8.73209 16.7296 8.68822 16.8961 8.68816 17.0655V17.7674H4.65516V17.0655C4.65516 16.8964 4.61116 16.7292 4.5277 16.582L2.47798 12.9656L2.47349 12.9572C2.08497 12.2518 1.8806 11.4506 1.88231 10.6401C1.888 8.0225 4.02189 5.87885 6.63908 5.86148L6.67205 5.86134C7.94551 5.86134 9.14305 6.35482 10.0471 7.25278C10.9591 8.15865 11.4613 9.36545 11.4613 10.6508C11.4618 11.1639 11.3797 11.6737 11.2182 12.1607C11.1961 12.2273 11.1873 12.2976 11.1923 12.3675C11.1974 12.4375 11.2161 12.5057 11.2476 12.5684C11.279 12.6311 11.3225 12.687 11.3755 12.7329C11.4285 12.7788 11.4901 12.8138 11.5566 12.8359C11.6232 12.8581 11.6935 12.8669 11.7634 12.8619C11.8334 12.8568 11.9017 12.8381 11.9644 12.8066C12.0271 12.7752 12.083 12.7317 12.1289 12.6787C12.1748 12.6256 12.2097 12.564 12.2318 12.4974C12.4295 11.9018 12.53 11.2783 12.5295 10.6507C12.5295 9.07876 11.9152 7.60278 10.7999 6.49489C9.69422 5.39655 8.22971 4.79318 6.67234 4.79318L6.63203 4.79332C3.43106 4.81462 0.821131 7.43644 0.814224 10.6378C0.812088 11.623 1.0594 12.5975 1.52967 13.4575C1.53323 13.4645 1.53701 13.4714 1.54085 13.4783L3.58708 17.0886V17.8313C2.95473 18.0191 2.4918 18.6048 2.4918 19.2974V19.4817C2.4918 20.287 3.11766 20.9474 3.90824 21.0059C4.03271 21.5803 4.35558 22.0812 4.80136 22.4337L0.923888 23.0081C0.333555 23.0956 -0.0756195 23.6472 0.0117555 24.2376L0.202029 25.5216C0.222463 25.6623 0.270617 25.7976 0.343701 25.9196C0.416785 26.0416 0.513348 26.1478 0.627796 26.2322C0.813376 26.3708 1.03879 26.4457 1.2704 26.4457C1.3238 26.4457 1.37764 26.4417 1.4314 26.4337L12.9159 24.7323C12.9853 24.722 13.052 24.6982 13.1121 24.6622C13.1723 24.6262 13.2248 24.5787 13.2666 24.5224C13.3084 24.466 13.3387 24.4021 13.3557 24.334C13.3728 24.266 13.3763 24.1953 13.366 24.1259ZM5.02432 21.0117H8.32627C8.11442 21.5336 7.6027 21.9029 7.00567 21.9029H6.34498C5.74781 21.9029 5.23617 21.5336 5.02432 21.0117ZM3.55988 19.4818V19.2975C3.55999 19.1751 3.60866 19.0577 3.69521 18.9712C3.78177 18.8846 3.89912 18.8359 4.02153 18.8358H9.32193C9.44434 18.8359 9.5617 18.8846 9.64825 18.9712C9.7348 19.0577 9.78347 19.1751 9.78358 19.2975V19.4818C9.78347 19.6042 9.7348 19.7216 9.64825 19.8081C9.5617 19.8947 9.44434 19.9434 9.32193 19.9435H4.02161C3.89919 19.9434 3.78184 19.8947 3.69528 19.8081C3.60872 19.7216 3.56003 19.6042 3.55988 19.4818ZM35.9883 20.22L35.7981 18.9358C35.7105 18.3454 35.1581 17.9362 34.5685 18.0238L31.5081 18.4772C31.8363 18.1423 32.0633 17.7216 32.163 17.2635C32.9536 17.2051 33.5794 16.5447 33.5794 15.7394V15.555C33.5794 14.8625 33.1166 14.2768 32.4841 14.089V13.3462L34.5304 9.73596C34.5343 9.72905 34.538 9.72222 34.5415 9.71517C35.0118 8.85537 35.2591 7.88072 35.257 6.89545C35.2499 3.69412 32.6401 1.0723 29.4392 1.05094C27.8652 1.03955 26.3865 1.64483 25.2713 2.75258C24.156 3.86054 23.5418 5.33644 23.5418 6.90841C23.5418 7.76002 23.7213 8.58221 24.0753 9.35214C24.1345 9.48083 24.2424 9.58075 24.3753 9.62991C24.5081 9.67907 24.655 9.67344 24.7837 9.61426C24.9124 9.55508 25.0124 9.4472 25.0615 9.31435C25.1107 9.1815 25.1051 9.03456 25.0459 8.90586C24.7565 8.27686 24.6099 7.60485 24.6099 6.90841C24.6099 5.62307 25.1122 4.41627 26.0241 3.5104C26.9359 2.60453 28.144 2.11026 29.4321 2.11902C32.0492 2.13647 34.1831 4.28025 34.1888 6.89773C34.1906 7.70817 33.9862 8.50943 33.5977 9.21484L33.5932 9.22317L31.5435 12.8396C31.46 12.987 31.4161 13.1536 31.416 13.323V14.025H27.3828V13.323C27.3827 13.1536 27.3388 12.987 27.2553 12.8396L26.1307 10.8555C26.0608 10.7323 25.9449 10.6419 25.8084 10.6041C25.6719 10.5664 25.5259 10.5844 25.4027 10.6543C25.3417 10.6889 25.2881 10.7351 25.2449 10.7904C25.2018 10.8457 25.17 10.909 25.1513 10.9766C25.1326 11.0442 25.1274 11.1148 25.136 11.1844C25.1446 11.254 25.1669 11.3213 25.2015 11.3823L26.3146 13.3462V14.0889C25.6823 14.2767 25.2193 14.8625 25.2193 15.555V15.7393C25.2193 16.5422 25.8414 17.2013 26.6287 17.2631C26.7952 18.0318 27.3169 18.6694 28.013 18.9949L23.0839 19.7251C23.0145 19.7354 22.9478 19.7592 22.8877 19.7953C22.8275 19.8313 22.775 19.8789 22.7332 19.9352C22.6914 19.9915 22.6612 20.0555 22.6441 20.1236C22.6271 20.1916 22.6236 20.2623 22.6339 20.3317C22.6771 20.6236 22.9494 20.8253 23.2405 20.7817L34.7251 19.0803C34.7325 19.0786 34.7402 19.0847 34.7414 19.0924L34.9316 20.3763C34.9321 20.3801 34.9312 20.384 34.9289 20.387C34.9266 20.3901 34.9232 20.3921 34.9195 20.3927L23.4347 22.0941C23.3653 22.1044 23.2986 22.1282 23.2384 22.1643C23.1782 22.2003 23.1258 22.2479 23.084 22.3042C23.0422 22.3605 23.0119 22.4245 22.9948 22.4926C22.9778 22.5606 22.9743 22.6313 22.9846 22.7007C23.0054 22.8408 23.0809 22.9669 23.1947 23.0513C23.3084 23.1357 23.451 23.1715 23.5911 23.1508L35.076 21.4493C35.6665 21.3619 36.0757 20.8104 35.9883 20.22ZM27.745 17.2693H31.047C30.8351 17.7912 30.3234 18.1606 29.7264 18.1606H29.0657C28.4686 18.1606 27.9569 17.7912 27.745 17.2693ZM26.2876 15.7394V15.555C26.2877 15.4327 26.3364 15.3153 26.4229 15.2288C26.5095 15.1422 26.6268 15.0935 26.7492 15.0934H32.0496C32.172 15.0935 32.2894 15.1422 32.3759 15.2288C32.4625 15.3153 32.5111 15.4327 32.5113 15.555V15.7394C32.5111 15.8618 32.4625 15.9792 32.3759 16.0657C32.2894 16.1523 32.172 16.2009 32.0496 16.2011H26.7492C26.6268 16.2009 26.5095 16.1523 26.4229 16.0657C26.3364 15.9792 26.2877 15.8618 26.2876 15.7394ZM18 24.0034C18.9785 24.0034 19.7746 23.2073 19.7746 22.2288C19.7746 21.2503 18.9785 20.4542 18 20.4542C17.0215 20.4542 16.2255 21.2503 16.2255 22.2288C16.2255 23.2073 17.0215 24.0034 18 24.0034ZM18 21.5224C18.3896 21.5224 18.7064 21.8393 18.7064 22.2288C18.7064 22.6183 18.3896 22.9352 18 22.9352C17.6105 22.9352 17.2936 22.6183 17.2936 22.2288C17.2936 21.8393 17.6105 21.5224 18 21.5224Z" fill="#074C3E"/>
                                            <path d="M24.5564 32.237L23.0626 29.7181C22.9897 29.5976 22.8722 29.5107 22.7356 29.4764C22.5989 29.4421 22.4543 29.4631 22.3331 29.535C22.212 29.6068 22.1241 29.7236 22.0886 29.86C22.0532 29.9963 22.073 30.1411 22.1438 30.2629L23.2958 32.2054H12.7041L16.4752 25.8464C16.9577 26.0504 17.4762 26.1552 18 26.1546C18.5405 26.1546 19.0557 26.0448 19.5247 25.8464L20.9828 28.3051C21.0186 28.3655 21.0659 28.4182 21.122 28.4603C21.1781 28.5023 21.242 28.5329 21.3099 28.5503C21.3779 28.5677 21.4486 28.5715 21.5181 28.5615C21.5875 28.5515 21.6543 28.5279 21.7146 28.4921C21.8364 28.4199 21.9246 28.3022 21.9596 28.1649C21.9947 28.0277 21.9738 27.8822 21.9016 27.7603L20.4421 25.2994C21.3456 24.5794 21.9263 23.4708 21.9263 22.2284C21.9263 20.0635 20.165 18.3021 18 18.3021C15.835 18.3021 14.0737 20.0634 14.0737 22.2284C14.0737 23.4708 14.6543 24.5795 15.5578 25.2994L11.4436 32.237C10.6738 32.3879 10.0911 33.0674 10.0911 33.8807V35.08C10.0911 35.5593 10.4811 35.9493 10.9604 35.9493H25.0396C25.5189 35.9493 25.9089 35.5593 25.9089 35.08V33.8807C25.9088 33.0675 25.3262 32.3879 24.5564 32.237ZM15.1418 22.2284C15.1418 20.6524 16.4239 19.3703 18 19.3703C19.576 19.3703 20.8581 20.6524 20.8581 22.2284C20.8581 23.8045 19.576 25.0866 18 25.0866C16.4239 25.0866 15.1418 23.8045 15.1418 22.2284ZM24.8407 34.8812H11.1592V33.8808C11.1592 33.5463 11.4312 33.2742 11.7655 33.2737H11.7659L11.7669 33.2736H24.2328L24.2339 33.2737H24.2342C24.5686 33.2742 24.8405 33.5463 24.8405 33.8808V34.8812H24.8407ZM7.2881 7.82709C7.2388 7.70665 7.15471 7.60365 7.04657 7.53125C6.93844 7.45884 6.81117 7.42033 6.68103 7.42062H6.6801C6.54982 7.4205 6.42247 7.45927 6.31437 7.53198C6.20626 7.60469 6.12233 7.70802 6.07332 7.82873C6.07175 7.83272 6.07012 7.8367 6.06862 7.84076L4.03963 13.1681C3.9892 13.3004 3.99342 13.4474 4.05137 13.5767C4.10932 13.7059 4.21624 13.8069 4.34861 13.8573C4.48098 13.9077 4.62796 13.9035 4.75722 13.8456C4.88648 13.7876 4.98743 13.6807 5.03785 13.5483L5.4122 12.5654H7.9349L8.30526 13.5468C8.34359 13.6483 8.41194 13.7358 8.50122 13.7976C8.5905 13.8593 8.69647 13.8924 8.80502 13.8924C8.89142 13.8924 8.97653 13.8715 9.05305 13.8313C9.12957 13.7912 9.19521 13.7331 9.24433 13.662C9.29346 13.591 9.3246 13.509 9.33509 13.4233C9.34558 13.3375 9.3351 13.2505 9.30456 13.1696L7.29408 7.84205C7.29211 7.83705 7.29012 7.83207 7.2881 7.82709ZM5.81889 11.4973L6.67925 9.23834L7.53171 11.4973H5.81889ZM29.5904 4.34961H28.0208C27.9507 4.3496 27.8812 4.36341 27.8164 4.39024C27.7516 4.41708 27.6928 4.45642 27.6432 4.50602C27.5936 4.55561 27.5542 4.61449 27.5274 4.67929C27.5006 4.74409 27.4867 4.81355 27.4868 4.88369V10.2871C27.4868 10.4288 27.5431 10.5646 27.6432 10.6647C27.7434 10.7649 27.8792 10.8211 28.0208 10.8212H28.0232C28.0233 10.8212 29.4667 10.8148 29.8645 10.8148C30.9609 10.8148 31.853 9.92274 31.853 8.82624C31.853 8.15452 31.5178 7.55991 31.0063 7.19973C31.2411 6.89142 31.3681 6.51453 31.3677 6.12702C31.3678 5.14695 30.5704 4.34961 29.5904 4.34961ZM29.5904 5.41776C29.9815 5.41776 30.2996 5.73593 30.2996 6.12702C30.2996 6.5181 29.9815 6.83627 29.5904 6.83627C29.4752 6.83627 28.5549 6.83777 28.5549 6.83777V5.41783L29.5904 5.41776ZM29.8645 9.74664C29.6255 9.74664 29.0099 9.74892 28.5549 9.75084V7.9077C28.7038 7.90713 29.8645 7.90592 29.8645 7.90592C30.3721 7.90592 30.7849 8.3188 30.7849 8.82631C30.7849 9.33383 30.3721 9.74664 29.8645 9.74664Z" fill="#074C3E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1043_1758">
                                                <rect width="36" height="36" fill="white" transform="translate(0 0.5)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Transparent Comparison</h5>
                                    <p class="card--small-text">Our user-friendly loan comparison tools allow you to effortlessly</p>
                                </div>
                            </div>
                            <div class="card card--small wow fadeInUp" data-wow-duration="0.8s">
                                <div class="card--small-icon">
                                    <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 35.626H6.05458C4.96367 35.626 4.09094 34.7533 4.09094 33.6624V22.9715C4.09094 21.8805 4.96367 21.0078 6.05458 21.0078H12C12.3273 21.0078 12.5455 21.226 12.5455 21.5533V35.0805C12.5455 35.4078 12.3273 35.626 12 35.626ZM6.05458 22.0987C5.56367 22.0987 5.18185 22.4805 5.18185 22.9715V33.6624C5.18185 34.1533 5.56367 34.5351 6.05458 34.5351H11.4546V22.0987H6.05458Z" fill="#074C3E"/>
                                        <path d="M29.7273 24.8822H28.6364C28.3091 24.8822 28.0909 24.664 28.0909 24.3367C28.0909 24.0094 28.3091 23.7913 28.6364 23.7913H29.7273C30.4364 23.7913 31.0364 23.1913 31.0364 22.4822C31.0364 21.7731 30.4364 21.1731 29.7273 21.1731H18.9818C18.8182 21.1731 18.6546 21.064 18.5455 20.9549C18.4364 20.7913 18.4364 20.6276 18.4909 20.464C19.2546 18.664 19.5273 17.1913 19.3091 15.8822V15.8276C19.3091 13.9731 17.9455 12.4458 16.1455 12.2276C15.7091 16.4276 14.4546 20.0822 12.3273 23.3549C12.1637 23.6276 11.8364 23.6822 11.5637 23.5185C11.2909 23.3549 11.2364 23.0276 11.4 22.7549C13.5273 19.5367 14.7273 15.8822 15.0546 11.6276C15.0546 11.3549 15.3273 11.1367 15.6 11.1367C18.2182 11.1367 20.3455 13.264 20.3455 15.8276C20.5091 17.1367 20.3455 18.5549 19.7455 20.1913H29.6728C31.0364 20.1913 32.0728 21.2276 32.0728 22.5913C32.1273 23.8458 31.0909 24.8822 29.7273 24.8822Z" fill="#074C3E"/>
                                        <path d="M29.1818 28.591H28.0909C27.7636 28.591 27.5454 28.3728 27.5454 28.0456C27.5454 27.7183 27.7636 27.5001 28.0909 27.5001H29.1818C29.8909 27.5001 30.4909 26.9001 30.4909 26.191C30.4909 25.4819 29.8909 24.8819 29.1818 24.8819C28.8545 24.8819 28.6363 24.6637 28.6363 24.3365C28.6363 24.0092 28.8545 23.791 29.1818 23.791C30.5454 23.791 31.5818 24.8274 31.5818 26.191C31.5818 27.5547 30.5454 28.591 29.1818 28.591Z" fill="#074C3E"/>
                                        <path d="M28.5818 32.3H27.4909C27.1636 32.3 26.9454 32.0818 26.9454 31.7545C26.9454 31.4273 27.1636 31.2091 27.4909 31.2091H28.5818C29.2909 31.2091 29.8909 30.6091 29.8909 29.8455C29.8909 29.0273 29.4545 28.5909 28.5818 28.5909C28.2545 28.5909 28.0363 28.3727 28.0363 28.0455C28.0363 27.7182 28.2545 27.5 28.5818 27.5C30 27.5 30.9273 28.3182 30.9818 29.7364V30.0091C30.8727 31.2636 29.8363 32.3 28.5818 32.3Z" fill="#074C3E"/>
                                        <path d="M28.0364 35.954H15C14.2909 35.954 13.6909 35.7904 13.0909 35.5176L11.7818 34.8631C11.5091 34.754 11.4 34.4267 11.5636 34.154C11.6727 33.8813 12 33.7722 12.2727 33.9358L13.5818 34.5904C14.0182 34.8086 14.5091 34.9176 15.0545 34.9176H28.0909C28.8 34.9176 29.4 34.3176 29.4 33.6086C29.4 32.8995 28.8 32.2995 28.0909 32.2995C27.7636 32.2995 27.5455 32.0813 27.5455 31.754C27.5455 31.4267 27.7636 31.2086 28.0909 31.2086C29.4545 31.2086 30.4909 32.2449 30.4909 33.6086C30.4364 34.9176 29.4 35.954 28.0364 35.954ZM10.0364 33.3358H6.6C6.27273 33.3358 6.05455 33.1176 6.05455 32.7904C6.05455 32.4631 6.27273 32.2449 6.6 32.2449H10.0364C10.3636 32.2449 10.5818 32.4631 10.5818 32.7904C10.5818 33.1176 10.3636 33.3358 10.0364 33.3358ZM19.4727 9.49947C19.3636 9.49947 19.2545 9.49947 19.2 9.44492L17.1818 8.24492L15 9.28129C14.8364 9.39038 14.5636 9.33583 14.4 9.22674C14.2364 9.11765 14.1818 8.89947 14.2364 8.68128L14.7818 6.33583L13.1455 4.64492C12.9818 4.48129 12.9273 4.2631 13.0364 4.09947C13.0909 3.88129 13.3091 3.77219 13.4727 3.71765L15.8182 3.44492L16.9091 1.37219C17.0182 1.15401 17.2364 1.04492 17.4 1.04492C17.6182 1.04492 17.7818 1.15401 17.8909 1.37219L18.8727 3.55401L21.2182 3.99038C21.4364 4.04492 21.6 4.15401 21.6545 4.37219C21.7091 4.59038 21.6545 4.80856 21.4909 4.91765L19.7455 6.49947L20.0182 8.89947C20.0182 9.11765 19.9636 9.33583 19.8 9.44492C19.6909 9.44492 19.5818 9.49947 19.4727 9.49947ZM17.1818 7.04492C17.2909 7.04492 17.4 7.04492 17.4545 7.09947L18.7636 7.91765L18.5455 6.33583C18.5455 6.17219 18.6 5.95401 18.7091 5.84492L19.9091 4.8631L18.3818 4.59038C18.2182 4.53583 18.0545 4.42674 18 4.2631L17.3455 2.84492L16.6364 4.20856C16.5273 4.37219 16.4182 4.48129 16.2 4.48129L14.6727 4.64492L15.7636 5.73583C15.8727 5.84492 15.9273 6.0631 15.9273 6.22674L15.6 7.75401L17.0182 7.09947C17.0182 7.04492 17.1273 7.04492 17.1818 7.04492ZM10.3636 12.8813C10.2545 12.8813 10.1455 12.8813 10.0909 12.8267L8.07273 11.6267L5.89091 12.6631C5.72728 12.7722 5.45455 12.7176 5.29091 12.6086C5.12728 12.4995 5.07273 12.2813 5.12728 12.0631L5.67273 9.77219L4.03637 8.02674C3.87273 7.8631 3.87273 7.64492 3.92728 7.48129C3.92728 7.20856 4.09091 7.04492 4.30909 7.04492L6.70909 6.82674L7.8 4.75401C7.90909 4.59038 8.12728 4.48129 8.29091 4.48129C8.50909 4.48129 8.67273 4.59038 8.78182 4.80856L9.76364 6.99038L12.1091 7.42674C12.3273 7.48129 12.4909 7.59038 12.5455 7.80856C12.6 8.02674 12.5455 8.24492 12.3818 8.35401L10.6364 9.99038L10.9091 12.3358C10.9091 12.554 10.8545 12.7722 10.6909 12.8813C10.5818 12.8267 10.4727 12.8813 10.3636 12.8813ZM8.07273 10.4267C8.18182 10.4267 8.29091 10.4267 8.34546 10.4813L9.65455 11.2995L9.49091 9.77219C9.49091 9.60856 9.54546 9.44492 9.65455 9.28129L10.8 8.24492L9.27273 7.97219C9.10909 7.91765 8.94546 7.80856 8.89091 7.64492L8.23637 6.22674L7.52728 7.59038C7.41818 7.75401 7.30909 7.8631 7.09091 7.8631L5.50909 8.02674L6.6 9.17219C6.70909 9.28128 6.76364 9.49947 6.70909 9.6631L6.38182 11.1358L7.8 10.4813C7.90909 10.4267 8.01819 10.4267 8.07273 10.4267ZM28.8 12.8813C28.6909 12.8813 28.5818 12.8813 28.5273 12.8267L26.5091 11.6267L24.3818 12.6631C24.2182 12.7722 23.9455 12.7176 23.8364 12.6086C23.6727 12.4995 23.6182 12.2813 23.6182 12.0631L24.1091 9.77219L22.4727 8.02674C22.3091 7.8631 22.3091 7.64492 22.3636 7.48129C22.4182 7.2631 22.6364 7.15401 22.8 7.15401L25.1455 6.93583L26.2909 4.8631C26.4 4.69947 26.5636 4.59038 26.7818 4.59038C27 4.59038 27.1636 4.75401 27.2727 4.91765L28.2 7.09947L30.5455 7.53583C30.7636 7.59038 30.9273 7.69947 30.9818 7.91765C31.0364 8.13583 30.9818 8.35401 30.8182 8.4631L29.0727 10.0995L29.3455 12.4449C29.3455 12.6631 29.2909 12.8813 29.1273 12.9904C29.0182 12.8267 28.9091 12.8813 28.8 12.8813ZM26.5091 10.4267C26.6182 10.4267 26.7273 10.4267 26.7818 10.4813L28.0909 11.2995L27.9273 9.77219C27.9273 9.60856 27.9818 9.44492 28.0909 9.28129L29.2364 8.24492L27.7091 7.97219C27.5455 7.91765 27.3818 7.80856 27.3273 7.64492L26.7273 6.22674L25.9636 7.59038C25.8545 7.75401 25.7455 7.8631 25.5273 7.8631L24 8.02674L25.0909 9.17219C25.2 9.28128 25.2545 9.49947 25.2 9.6631L24.8727 11.1358L26.2909 10.4813C26.3455 10.4267 26.4545 10.4267 26.5091 10.4267Z" fill="#074C3E"/>
                                    </svg>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Reviews and Ratings</h5>
                                    <p class="card--small-text">We pride ourselves on providing unbiased loan reviews</p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="btn_theme btn_theme_active mt_40">Read More <i class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5 mx-auto mx-lg-0">
                    <div class="choose-us__thumb unset-xxl me-xl-4 me-xxl-0 wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/finview/images/about_us.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Video Alanı -->


<!-- Rakamlarla İfşa Et -->
<section class="working-process section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-xxl-5">
                <div class="section__header">
                    <span class="section__header-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/finview/images/title_vector.png" alt="vector">Our Working Process</span>
                    <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Simplified Steps to Find Your Ideal Loan</h2>
                    <p class="section__header-content ch-xxl wow fadeInDown" data-wow-duration="0.8s">Our working process is designed to make your loan search and selection as seamless as possible.</p>
                </div>
            </div>
        </div>
        <div class="row g-2 g-md-4  wow fadeInUp" data-wow-duration="0.8s">
            <div class="col-12 col-sm-6 col-xxl-3">
                <div class="card card--custom">
                    <div class="card__icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1034_1738)">
                                <path d="M4 22C3.73478 22 3.48043 22.1054 3.29289 22.2929C3.10536 22.4804 3 22.7348 3 23V27C3 27.2652 3.10536 27.5196 3.29289 27.7071C3.48043 27.8946 3.73478 28 4 28H6.18038C6.49397 29.359 7.01401 30.6619 7.72237 31.8634L5.29287 34.2929C5.20001 34.3857 5.12635 34.496 5.07609 34.6173C5.02583 34.7386 4.99996 34.8687 4.99996 35C4.99996 35.1313 5.02583 35.2614 5.07609 35.3827C5.12635 35.504 5.20001 35.6143 5.29287 35.7071L8.29288 38.7071C8.38573 38.8 8.49598 38.8737 8.6173 38.9239C8.73863 38.9742 8.86867 39 9 39C9.13133 39 9.26137 38.9742 9.3827 38.9239C9.50402 38.8737 9.61427 38.8 9.70712 38.7071L12.1366 36.2776C13.3381 36.986 14.641 37.506 16 37.8196V41C16 41.2652 16.1054 41.5196 16.2929 41.7071C16.4804 41.8946 16.7348 42 17 42H20.5063C21.1467 44.4843 22.3755 46.778 24.0888 48.6876C25.8021 50.5971 27.9497 52.0665 30.3503 52.9716C32.7508 53.8767 35.3339 54.191 37.8815 53.8879C40.429 53.5849 42.8663 52.6734 44.9875 51.2304L54.8786 61.1214C55.1572 61.4 55.4879 61.6209 55.8519 61.7717C56.2159 61.9225 56.606 62.0001 57 62.0001C57.394 62.0001 57.7841 61.9225 58.1481 61.7717C58.5121 61.6209 58.8428 61.4 59.1214 61.1214C59.4 60.8428 59.6209 60.5121 59.7717 60.1481C59.9225 59.7841 60.0001 59.394 60.0001 59C60.0001 58.606 59.9225 58.2159 59.7717 57.8519C59.6209 57.4879 59.4 57.1572 59.1214 56.8786L49.2303 46.9875C51.4231 43.7668 52.3631 39.8557 51.8732 35.9903C51.3834 32.1249 49.4975 28.5719 46.5706 26H48C48.2652 26 48.5196 25.8946 48.7071 25.7071C48.8946 25.5196 49 25.2652 49 25V21.1825C49.1971 20.66 52 13.2155 52 13C52 10.801 51.3799 9.066 50.157 7.843C48.9341 6.62 47.199 6 45 6C42.801 6 41.066 6.62012 39.843 7.843C38.62 9.06587 38 10.801 38 13C38 13.1199 41 21.1812 41 21.1812V22.8009C39.3867 22.2692 37.6987 21.9988 36 22H31.8196C31.506 20.641 30.986 19.3381 30.2776 18.1366L32.7071 15.7071C32.8 15.6143 32.8737 15.504 32.9239 15.3827C32.9742 15.2614 33 15.1313 33 15C33 14.8687 32.9742 14.7386 32.9239 14.6173C32.8737 14.496 32.8 14.3857 32.7071 14.2929L29.7071 11.2929C29.6143 11.2 29.504 11.1263 29.3827 11.0761C29.2614 11.0258 29.1313 11 29 11C28.8687 11 28.7386 11.0258 28.6173 11.0761C28.496 11.1263 28.3857 11.2 28.2929 11.2929L25.8634 13.7224C24.6619 13.014 23.359 12.494 22 12.1804V9C22 8.73478 21.8946 8.48043 21.7071 8.29289C21.5196 8.10536 21.2652 8 21 8H17C16.7348 8 16.4804 8.10536 16.2929 8.29289C16.1054 8.48043 16 8.73478 16 9V12.1804C14.641 12.494 13.3381 13.014 12.1366 13.7224L9.70712 11.2929C9.61427 11.2 9.50402 11.1263 9.3827 11.0761C9.26137 11.0258 9.13133 11 9 11C8.86867 11 8.73863 11.0258 8.6173 11.0761C8.49598 11.1263 8.38573 11.2 8.29288 11.2929L5.29287 14.2929C5.20001 14.3857 5.12635 14.496 5.07609 14.6173C5.02583 14.7386 4.99996 14.8687 4.99996 15C4.99996 15.1313 5.02583 15.2614 5.07609 15.3827C5.12635 15.504 5.20001 15.6143 5.29287 15.7071L7.72237 18.1366C7.01401 19.3381 6.49397 20.641 6.18038 22H4ZM57.7071 58.293C57.8022 58.3854 57.878 58.4957 57.93 58.6176C57.9821 58.7395 58.0094 58.8705 58.0104 59.0031C58.0113 59.1356 57.9859 59.267 57.9357 59.3897C57.8854 59.5123 57.8112 59.6237 57.7175 59.7175C57.6237 59.8112 57.5123 59.8854 57.3897 59.9356C57.267 59.9859 57.1356 60.0113 57.003 60.0103C56.8705 60.0093 56.7395 59.982 56.6176 59.9299C56.4957 59.8779 56.3853 59.8021 56.293 59.707L46.5785 49.9927C47.0786 49.551 47.5509 49.0788 47.9926 48.5786L57.7071 58.293ZM40.0016 12.823C40.0609 9.62238 41.7419 8 45 8C48.2625 8 49.9433 9.62625 49.9985 12.8346C49.7174 13.6068 48.3507 17.2379 47.3086 20H42.6929L40.0016 12.823ZM43 22H47V24H43.7385C43.4962 23.8655 43.25 23.737 43 23.6146V22ZM50 38C50 40.7685 49.1792 43.4749 47.6412 45.777C46.1033 48.0791 43.9174 49.8735 41.3598 50.9334C38.8022 51.9933 35.9877 52.2711 33.2723 51.7317C30.5568 51.1923 28.0622 49.8599 26.1039 47.9029C24.1456 45.9459 22.8115 43.4523 22.2702 40.7372C21.7289 38.0221 22.0048 35.2074 23.0629 32.6491C24.1211 30.0908 25.914 27.9036 28.215 26.3641C30.516 24.8246 33.2218 24.0019 35.9904 24H36C39.7117 24.0042 43.2703 25.4805 45.8949 28.1051C48.5195 30.7297 49.9958 34.2883 50 38ZM19 30C18.0111 30 17.0444 29.7068 16.2221 29.1573C15.3999 28.6079 14.759 27.827 14.3806 26.9134C14.0022 25.9998 13.9031 24.9945 14.0961 24.0245C14.289 23.0546 14.7652 22.1637 15.4645 21.4645C16.1637 20.7652 17.0546 20.289 18.0245 20.0961C18.9945 19.9031 19.9998 20.0022 20.9134 20.3806C21.827 20.759 22.6079 21.3999 23.1573 22.2221C23.7068 23.0444 24 24.0111 24 25C23.9985 26.3256 23.4712 27.5965 22.5339 28.5339C21.5965 29.4712 20.3256 29.9985 19 30ZM7.98637 23.1646C8.26116 21.5202 8.88643 19.9542 9.81975 18.5728C9.95433 18.3802 10.0168 18.1464 9.99624 17.9124C9.97567 17.6783 9.87336 17.459 9.70725 17.2929L7.41412 15L9 13.4141L11.2929 15.7071C11.459 15.8732 11.6783 15.9755 11.9124 15.9961C12.1464 16.0167 12.3802 15.9542 12.5728 15.8196C13.9542 14.8863 15.5202 14.261 17.1646 13.9862C17.3981 13.9473 17.6101 13.8268 17.7631 13.6462C17.916 13.4656 18 13.2367 18 13V10H20V13C20 13.2367 20.0839 13.4657 20.2369 13.6463C20.3899 13.8269 20.6019 13.9474 20.8354 13.9864C22.4798 14.2612 24.0458 14.8864 25.4272 15.8197C25.6198 15.9543 25.8536 16.0168 26.0876 15.9962C26.3217 15.9757 26.541 15.8734 26.7071 15.7072L29 13.4141L30.5859 15L28.2929 17.2929C28.1268 17.459 28.0245 17.6783 28.0039 17.9124C27.9833 18.1464 28.0458 18.3802 28.1804 18.5728C29.1133 19.9536 29.7384 21.5189 30.0134 23.1625C28.5589 23.7521 27.199 24.5523 25.9772 25.5375C25.9909 25.3596 26 25.1806 26 24.9994C26.0006 23.5123 25.5279 22.0637 24.6503 20.8633C23.7726 19.6629 22.5357 18.773 21.1185 18.3225C19.7014 17.872 18.1776 17.8843 16.7679 18.3576C15.3582 18.831 14.1358 19.7407 13.2777 20.9552C12.4196 22.1696 11.9703 23.6257 11.995 25.1126C12.0196 26.5994 12.5169 28.0398 13.4149 29.2251C14.3128 30.4104 15.5647 31.2791 16.9894 31.7054C18.414 32.1317 19.9373 32.0935 21.3388 31.5963C20.4536 33.615 19.9977 35.7957 20 38C20.0001 38.6686 20.0419 39.3366 20.125 40H18V37C18 36.7633 17.9161 36.5343 17.7631 36.3537C17.6101 36.1731 17.3981 36.0526 17.1646 36.0136C15.5202 35.7388 13.9542 35.1136 12.5728 34.1802C12.3802 34.0457 12.1464 33.9832 11.9124 34.0038C11.6783 34.0243 11.459 34.1266 11.2929 34.2928L9 36.5859L7.41412 35L9.70712 32.7071C9.87323 32.541 9.97554 32.3217 9.99611 32.0876C10.0167 31.8536 9.9542 31.6198 9.81962 31.4272C8.8863 30.0458 8.26104 28.4798 7.98625 26.8354C7.94729 26.6019 7.82681 26.3899 7.64622 26.2369C7.46564 26.084 7.23666 26 7 26H5V24H7C7.23668 24 7.46569 23.9161 7.6463 23.7631C7.82691 23.6101 7.94741 23.3981 7.98637 23.1646Z" fill="#074C3E"/>
                                <path d="M34.1056 5.55275C33.987 5.78996 33.9675 6.06456 34.0513 6.31616C34.1352 6.56776 34.3156 6.77575 34.5527 6.89438L36.5527 7.89438C36.6703 7.95432 36.7986 7.9904 36.9302 8.00054C37.0618 8.01067 37.1941 7.99465 37.3194 7.95341C37.4448 7.91218 37.5608 7.84653 37.6607 7.76025C37.7605 7.67398 37.8423 7.56879 37.9014 7.45075C37.9604 7.33271 37.9955 7.20415 38.0046 7.07249C38.0137 6.94083 37.9966 6.80866 37.9544 6.68362C37.9122 6.55857 37.8457 6.44312 37.7586 6.34392C37.6716 6.24472 37.5657 6.16373 37.4473 6.10563L35.4473 5.10563C35.21 4.98702 34.9354 4.96749 34.6838 5.05134C34.4322 5.13519 34.2242 5.31555 34.1056 5.55275ZM44 1V3C44 3.26522 44.1054 3.51957 44.2929 3.70711C44.4804 3.89464 44.7348 4 45 4C45.2652 4 45.5196 3.89464 45.7071 3.70711C45.8946 3.51957 46 3.26522 46 3V1C46 0.734784 45.8946 0.48043 45.7071 0.292893C45.5196 0.105357 45.2652 0 45 0C44.7348 0 44.4804 0.105357 44.2929 0.292893C44.1054 0.48043 44 0.734784 44 1ZM38.5527 1.10563C38.3156 1.22425 38.1352 1.43224 38.0513 1.68384C37.9675 1.93544 37.987 2.21005 38.1056 2.44725L39.1056 4.44725C39.1637 4.56575 39.2447 4.67157 39.3439 4.75862C39.4431 4.84567 39.5586 4.91222 39.6836 4.95444C39.8087 4.99665 39.9408 5.0137 40.0725 5.00459C40.2042 4.99548 40.3327 4.96041 40.4508 4.90138C40.5688 4.84235 40.674 4.76054 40.7603 4.66066C40.8465 4.56078 40.9122 4.44482 40.9534 4.31945C40.9947 4.19408 41.0107 4.06179 41.0005 3.9302C40.9904 3.79861 40.9543 3.67033 40.8944 3.55275L39.8944 1.55275C39.7758 1.31555 39.5678 1.13519 39.3162 1.05134C39.0646 0.967489 38.79 0.987015 38.5527 1.10563ZM50.1056 1.55275L49.1056 3.55275C49.0457 3.67033 49.0096 3.79861 48.9995 3.9302C48.9893 4.06179 49.0053 4.19408 49.0466 4.31945C49.0878 4.44482 49.1535 4.56078 49.2397 4.66066C49.326 4.76054 49.4312 4.84235 49.5492 4.90138C49.6673 4.96041 49.7958 4.99548 49.9275 5.00459C50.0592 5.0137 50.1913 4.99665 50.3164 4.95444C50.4414 4.91222 50.5569 4.84567 50.6561 4.75862C50.7553 4.67157 50.8363 4.56575 50.8944 4.44725L51.8944 2.44725C51.9543 2.32967 51.9904 2.20139 52.0005 2.0698C52.0107 1.93821 51.9947 1.80592 51.9534 1.68055C51.9122 1.55518 51.8465 1.43922 51.7603 1.33934C51.674 1.23946 51.5688 1.15765 51.4508 1.09862C51.3327 1.0396 51.2042 1.00452 51.0725 0.99541C50.9408 0.986303 50.8087 1.00335 50.6836 1.04557C50.5586 1.08778 50.4431 1.15433 50.3439 1.24138C50.2447 1.32843 50.1637 1.43425 50.1056 1.55275ZM54.5527 5.10563L52.5527 6.10563C52.4343 6.16373 52.3284 6.24472 52.2414 6.34392C52.1543 6.44312 52.0878 6.55857 52.0456 6.68362C52.0034 6.80866 51.9863 6.94083 51.9954 7.07249C52.0045 7.20415 52.0396 7.33271 52.0986 7.45075C52.1577 7.56879 52.2395 7.67398 52.3393 7.76025C52.4392 7.84653 52.5552 7.91218 52.6806 7.95341C52.8059 7.99465 52.9382 8.01067 53.0698 8.00054C53.2014 7.9904 53.3297 7.95432 53.4473 7.89438L55.4473 6.89438C55.5657 6.83627 55.6716 6.75528 55.7586 6.65608C55.8457 6.55688 55.9122 6.44143 55.9544 6.31638C55.9966 6.19134 56.0137 6.05918 56.0046 5.92751C55.9955 5.79585 55.9604 5.66729 55.9014 5.54925C55.8423 5.43121 55.7605 5.32602 55.6607 5.23975C55.5608 5.15347 55.4448 5.08783 55.3194 5.04659C55.1941 5.00535 55.0618 4.98933 54.9302 4.99947C54.7986 5.0096 54.6703 5.04568 54.5527 5.10563ZM24 38C24 40.3734 24.7038 42.6935 26.0224 44.6668C27.3409 46.6402 29.2151 48.1783 31.4078 49.0866C33.6005 49.9948 36.0133 50.2325 38.3411 49.7694C40.6689 49.3064 42.8071 48.1635 44.4853 46.4853C46.1635 44.8071 47.3064 42.6689 47.7694 40.3411C48.2324 38.0133 47.9948 35.6005 47.0866 33.4078C46.1783 31.2151 44.6402 29.3409 42.6668 28.0224C40.6935 26.7038 38.3734 26 36 26C32.8185 26.0036 29.7683 27.269 27.5187 29.5187C25.269 31.7683 24.0036 34.8185 24 38ZM46 38C46 39.9778 45.4135 41.9112 44.3147 43.5557C43.2159 45.2002 41.6541 46.4819 39.8268 47.2388C37.9996 47.9957 35.9889 48.1937 34.0491 47.8079C32.1093 47.422 30.3275 46.4696 28.9289 45.0711C27.5304 43.6725 26.578 41.8907 26.1921 39.9509C25.8063 38.0111 26.0043 36.0004 26.7612 34.1732C27.5181 32.3459 28.7998 30.7841 30.4443 29.6853C32.0888 28.5865 34.0222 28 36 28C38.6512 28.003 41.193 29.0575 43.0677 30.9323C44.9425 32.807 45.997 35.3488 46 38Z" fill="#074C3E"/>
                                <path d="M30 38C30 37.7348 29.8946 37.4804 29.7071 37.2929C29.5196 37.1054 29.2652 37 29 37C28.7348 37 28.4804 37.1054 28.2929 37.2929C28.1054 37.4804 28 37.7348 28 38C28.0024 40.121 28.846 42.1544 30.3458 43.6542C31.8456 45.154 33.879 45.9976 36 46C36.2652 46 36.5196 45.8946 36.7071 45.7071C36.8946 45.5196 37 45.2652 37 45C37 44.7348 36.8946 44.4804 36.7071 44.2929C36.5196 44.1054 36.2652 44 36 44C34.4092 43.9982 32.8841 43.3655 31.7593 42.2407C30.6345 41.1159 30.0018 39.5908 30 38Z" fill="#074C3E"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1034_1738">
                                    <rect width="64" height="64" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="number-bullet">01</span>
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Research & Explore</h4>
                        <p class="fs-small"> An online quote is an estimate of the cost of a product or service provided</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3">
                <div class="card card--custom">
                    <div class="card__icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1034_1748)">
                                <mask id="path-1-inside-1_1034_1748" fill="white">
                                    <path d="M23.7617 42.001C23.6849 41.4821 23.2006 41.1235 22.6834 41.2009L2.26646 44.2255C2.2562 44.2276 2.23937 44.216 2.2376 44.204L1.89933 41.9215C1.89835 41.9148 1.90006 41.9079 1.90409 41.9025C1.90812 41.897 1.91415 41.8934 1.92085 41.8924L22.3383 38.8676C22.4616 38.8494 22.5802 38.807 22.6871 38.7429C22.7941 38.6789 22.8874 38.5943 22.9617 38.4942C23.036 38.3941 23.0899 38.2803 23.1202 38.1593C23.1505 38.0383 23.1567 37.9126 23.1383 37.7893C23.0615 37.2703 22.5774 36.9118 22.06 36.9892L16.2171 37.8547C16.4862 37.424 16.6787 36.95 16.7863 36.4537C18.1859 36.3439 19.2919 35.1721 19.2919 33.7446V33.417C19.2919 32.1857 18.469 31.1445 17.3447 30.8105V29.4901L19.8319 25.1018C19.8943 24.9933 19.9346 24.8735 19.9505 24.7494C19.9664 24.6252 19.9576 24.4991 19.9246 24.3784C19.8916 24.2577 19.8351 24.1447 19.7583 24.0458C19.6814 23.947 19.5858 23.8644 19.4769 23.8027C19.3681 23.7409 19.2481 23.7014 19.1238 23.6862C18.9996 23.671 18.8736 23.6806 18.753 23.7143C18.6325 23.748 18.5198 23.8052 18.4215 23.8826C18.3231 23.96 18.241 24.0561 18.18 24.1654L15.672 28.5899C15.5237 28.852 15.4457 29.148 15.4456 29.4491V30.697H8.27585V29.4491C8.27585 29.1486 8.19761 28.8513 8.04924 28.5895L4.4053 22.1603L4.39732 22.1455C3.70662 20.8915 3.34329 19.467 3.34632 18.0262C3.35645 13.3727 7.15003 9.56176 11.8028 9.53087L11.8614 9.53061C14.1253 9.53061 16.2543 10.4079 17.8616 12.0043C19.4829 13.6147 20.3756 15.7602 20.3756 18.0452C20.3766 18.9574 20.2306 19.8638 19.9434 20.7296C19.9041 20.8479 19.8885 20.9728 19.8974 21.0971C19.9064 21.2215 19.9398 21.3429 19.9957 21.4543C20.0515 21.5658 20.1288 21.6652 20.2231 21.7467C20.3174 21.8283 20.4268 21.8905 20.5452 21.9298C20.6635 21.9692 20.7884 21.9849 20.9128 21.976C21.0372 21.9671 21.1586 21.9337 21.2701 21.8778C21.3815 21.8219 21.4809 21.7446 21.5625 21.6503C21.644 21.556 21.7062 21.4465 21.7454 21.3281C22.0968 20.2692 22.2755 19.1607 22.2746 18.0451C22.2746 15.2505 21.1826 12.6265 19.1998 10.6569C17.2342 8.70432 14.6306 7.63167 11.8619 7.63167L11.7903 7.63193C6.09966 7.66978 1.45979 12.3308 1.44751 18.022C1.44371 19.7736 1.88338 21.5061 2.71942 23.0349C2.72575 23.0474 2.73246 23.0596 2.7393 23.0718L6.37703 29.4901V30.8105C5.25286 31.1444 4.42986 32.1857 4.42986 33.417V33.7446C4.42986 35.1763 5.54251 36.3504 6.94798 36.4543C7.16927 37.4754 7.74326 38.3659 8.53575 38.9926L1.64247 40.0137C0.592986 40.1693 -0.134435 41.1499 0.0208987 42.1996L0.359163 44.4821C0.39549 44.7323 0.481096 44.9728 0.611024 45.1897C0.740952 45.4066 0.912619 45.5955 1.11608 45.7456C1.446 45.9919 1.84673 46.125 2.25848 46.125C2.35343 46.125 2.44914 46.1179 2.54472 46.1037L22.9616 43.0789C23.085 43.0608 23.2035 43.0184 23.3105 42.9544C23.4174 42.8904 23.5107 42.8059 23.5851 42.7058C23.6594 42.6057 23.7132 42.4919 23.7435 42.371C23.7738 42.25 23.78 42.1243 23.7617 42.001ZM8.93212 36.4646H14.8023C14.4256 37.3924 13.5159 38.049 12.4545 38.049H11.28C10.2183 38.049 9.30874 37.3924 8.93212 36.4646ZM6.32867 33.7448V33.4171C6.32887 33.1995 6.4154 32.9909 6.56927 32.837C6.72314 32.6831 6.93178 32.5965 7.14939 32.5963H16.5723C16.7899 32.5965 16.9986 32.6831 17.1524 32.837C17.3063 32.9909 17.3928 33.1995 17.393 33.4171V33.7448C17.3928 33.9624 17.3063 34.171 17.1524 34.3249C16.9986 34.4788 16.7899 34.5654 16.5723 34.5656H7.14952C6.9319 34.5653 6.72327 34.4788 6.56939 34.3249C6.41551 34.171 6.32894 33.9624 6.32867 33.7448ZM63.9791 35.0571L63.641 32.7742C63.4854 31.7245 62.5033 30.997 61.4552 31.1527L56.0145 31.9587C56.5979 31.3635 57.0014 30.6156 57.1786 29.8012C58.5842 29.6974 59.6968 28.5233 59.6968 27.0916V26.7639C59.6968 25.5327 58.8739 24.4915 57.7496 24.1575V22.8371L61.3873 16.4188C61.3943 16.4066 61.4009 16.3944 61.4072 16.3819C62.2432 14.8533 62.6829 13.1206 62.6791 11.369C62.6666 5.67779 58.0268 1.01678 52.3363 0.978796C49.5382 0.958541 46.9094 2.03461 44.9268 4.00394C42.944 5.97364 41.852 8.59747 41.852 11.3921C41.852 12.906 42.1712 14.3677 42.8006 15.7365C42.9058 15.9653 43.0976 16.1429 43.3338 16.2303C43.57 16.3177 43.8312 16.3077 44.06 16.2025C44.2888 16.0973 44.4664 15.9055 44.5538 15.6693C44.6412 15.4331 44.6312 15.1719 44.526 14.9431C44.0116 13.8249 43.751 12.6302 43.751 11.3921C43.751 9.10702 44.6439 6.9616 46.265 5.35117C47.8861 3.74074 50.0338 2.86204 52.3237 2.87761C56.9763 2.90863 60.7699 6.7198 60.7802 11.3731C60.7832 12.8139 60.4199 14.2383 59.7292 15.4924L59.7212 15.5072L56.0772 21.9364C55.9288 22.1985 55.8508 22.4946 55.8506 22.7959V24.0438H48.6805V22.7959C48.6804 22.4946 48.6023 22.1985 48.4539 21.9364L46.4546 18.4092C46.3304 18.1901 46.1243 18.0294 45.8815 17.9623C45.6388 17.8952 45.3794 17.9272 45.1604 18.0514C45.0519 18.1129 44.9566 18.1951 44.8799 18.2934C44.8032 18.3918 44.7466 18.5042 44.7134 18.6244C44.6802 18.7446 44.671 18.8701 44.6863 18.9939C44.7016 19.1176 44.7411 19.2371 44.8026 19.3456L46.7816 22.837V24.1574C45.6574 24.4912 44.8344 25.5326 44.8344 26.7638V27.0915C44.8344 28.5189 45.9403 29.6905 47.34 29.8004C47.6358 31.167 48.5634 32.3004 49.8009 32.8792L41.038 34.1773C40.9147 34.1956 40.7961 34.238 40.6892 34.3021C40.5822 34.3661 40.4889 34.4507 40.4146 34.5508C40.3403 34.6509 40.2865 34.7647 40.2562 34.8857C40.2259 35.0066 40.2197 35.1324 40.2381 35.2557C40.3149 35.7746 40.7989 36.1331 41.3164 36.0558L61.7334 33.031C61.7466 33.028 61.7603 33.0387 61.7624 33.0524L62.1006 35.3351C62.1015 35.3418 62.0998 35.3486 62.0958 35.3541C62.0918 35.3595 62.0857 35.3632 62.079 35.3642L41.6616 38.3889C41.5383 38.4072 41.4197 38.4495 41.3127 38.5136C41.2058 38.5777 41.1125 38.6622 41.0382 38.7624C40.9639 38.8625 40.91 38.9763 40.8797 39.0972C40.8494 39.2182 40.8432 39.3439 40.8615 39.4673C40.8984 39.7164 41.0328 39.9406 41.235 40.0906C41.4372 40.2407 41.6907 40.3042 41.9398 40.2674L62.3574 37.2426C63.4072 37.0872 64.1346 36.1067 63.9791 35.0571ZM49.3245 29.8114H55.1946C54.818 30.7392 53.9083 31.396 52.8469 31.396H51.6723C50.6108 31.3959 49.7011 30.7392 49.3245 29.8114ZM46.7334 27.0916V26.7639C46.7337 26.5463 46.8202 26.3377 46.9741 26.1838C47.128 26.0299 47.3366 25.9434 47.5542 25.9432H56.9771C57.1947 25.9434 57.4033 26.0299 57.5572 26.1838C57.711 26.3377 57.7976 26.5463 57.7978 26.7639V27.0916C57.7976 27.3092 57.711 27.5179 57.5572 27.6717C57.4033 27.8256 57.1947 27.9121 56.9771 27.9124H47.5542C47.3366 27.9121 47.128 27.8256 46.9741 27.6717C46.8202 27.5179 46.7337 27.3092 46.7334 27.0916ZM32.0001 41.7831C33.7396 41.7831 35.1548 40.3679 35.1548 38.6283C35.1548 36.8888 33.7396 35.4736 32.0001 35.4736C30.2605 35.4736 28.8453 36.8888 28.8453 38.6283C28.8453 40.3679 30.2604 41.7831 32.0001 41.7831ZM32.0001 37.3725C32.6925 37.3725 33.2559 37.9359 33.2559 38.6283C33.2559 39.3208 32.6925 39.8842 32.0001 39.8842C31.3076 39.8842 30.7442 39.3208 30.7442 38.6283C30.7442 37.9359 31.3076 37.3725 32.0001 37.3725Z"/>
                                </mask>
                                <path d="M23.7617 42.001C23.6849 41.4821 23.2006 41.1235 22.6834 41.2009L2.26646 44.2255C2.2562 44.2276 2.23937 44.216 2.2376 44.204L1.89933 41.9215C1.89835 41.9148 1.90006 41.9079 1.90409 41.9025C1.90812 41.897 1.91415 41.8934 1.92085 41.8924L22.3383 38.8676C22.4616 38.8494 22.5802 38.807 22.6871 38.7429C22.7941 38.6789 22.8874 38.5943 22.9617 38.4942C23.036 38.3941 23.0899 38.2803 23.1202 38.1593C23.1505 38.0383 23.1567 37.9126 23.1383 37.7893C23.0615 37.2703 22.5774 36.9118 22.06 36.9892L16.2171 37.8547C16.4862 37.424 16.6787 36.95 16.7863 36.4537C18.1859 36.3439 19.2919 35.1721 19.2919 33.7446V33.417C19.2919 32.1857 18.469 31.1445 17.3447 30.8105V29.4901L19.8319 25.1018C19.8943 24.9933 19.9346 24.8735 19.9505 24.7494C19.9664 24.6252 19.9576 24.4991 19.9246 24.3784C19.8916 24.2577 19.8351 24.1447 19.7583 24.0458C19.6814 23.947 19.5858 23.8644 19.4769 23.8027C19.3681 23.7409 19.2481 23.7014 19.1238 23.6862C18.9996 23.671 18.8736 23.6806 18.753 23.7143C18.6325 23.748 18.5198 23.8052 18.4215 23.8826C18.3231 23.96 18.241 24.0561 18.18 24.1654L15.672 28.5899C15.5237 28.852 15.4457 29.148 15.4456 29.4491V30.697H8.27585V29.4491C8.27585 29.1486 8.19761 28.8513 8.04924 28.5895L4.4053 22.1603L4.39732 22.1455C3.70662 20.8915 3.34329 19.467 3.34632 18.0262C3.35645 13.3727 7.15003 9.56176 11.8028 9.53087L11.8614 9.53061C14.1253 9.53061 16.2543 10.4079 17.8616 12.0043C19.4829 13.6147 20.3756 15.7602 20.3756 18.0452C20.3766 18.9574 20.2306 19.8638 19.9434 20.7296C19.9041 20.8479 19.8885 20.9728 19.8974 21.0971C19.9064 21.2215 19.9398 21.3429 19.9957 21.4543C20.0515 21.5658 20.1288 21.6652 20.2231 21.7467C20.3174 21.8283 20.4268 21.8905 20.5452 21.9298C20.6635 21.9692 20.7884 21.9849 20.9128 21.976C21.0372 21.9671 21.1586 21.9337 21.2701 21.8778C21.3815 21.8219 21.4809 21.7446 21.5625 21.6503C21.644 21.556 21.7062 21.4465 21.7454 21.3281C22.0968 20.2692 22.2755 19.1607 22.2746 18.0451C22.2746 15.2505 21.1826 12.6265 19.1998 10.6569C17.2342 8.70432 14.6306 7.63167 11.8619 7.63167L11.7903 7.63193C6.09966 7.66978 1.45979 12.3308 1.44751 18.022C1.44371 19.7736 1.88338 21.5061 2.71942 23.0349C2.72575 23.0474 2.73246 23.0596 2.7393 23.0718L6.37703 29.4901V30.8105C5.25286 31.1444 4.42986 32.1857 4.42986 33.417V33.7446C4.42986 35.1763 5.54251 36.3504 6.94798 36.4543C7.16927 37.4754 7.74326 38.3659 8.53575 38.9926L1.64247 40.0137C0.592986 40.1693 -0.134435 41.1499 0.0208987 42.1996L0.359163 44.4821C0.39549 44.7323 0.481096 44.9728 0.611024 45.1897C0.740952 45.4066 0.912619 45.5955 1.11608 45.7456C1.446 45.9919 1.84673 46.125 2.25848 46.125C2.35343 46.125 2.44914 46.1179 2.54472 46.1037L22.9616 43.0789C23.085 43.0608 23.2035 43.0184 23.3105 42.9544C23.4174 42.8904 23.5107 42.8059 23.5851 42.7058C23.6594 42.6057 23.7132 42.4919 23.7435 42.371C23.7738 42.25 23.78 42.1243 23.7617 42.001ZM8.93212 36.4646H14.8023C14.4256 37.3924 13.5159 38.049 12.4545 38.049H11.28C10.2183 38.049 9.30874 37.3924 8.93212 36.4646ZM6.32867 33.7448V33.4171C6.32887 33.1995 6.4154 32.9909 6.56927 32.837C6.72314 32.6831 6.93178 32.5965 7.14939 32.5963H16.5723C16.7899 32.5965 16.9986 32.6831 17.1524 32.837C17.3063 32.9909 17.3928 33.1995 17.393 33.4171V33.7448C17.3928 33.9624 17.3063 34.171 17.1524 34.3249C16.9986 34.4788 16.7899 34.5654 16.5723 34.5656H7.14952C6.9319 34.5653 6.72327 34.4788 6.56939 34.3249C6.41551 34.171 6.32894 33.9624 6.32867 33.7448ZM63.9791 35.0571L63.641 32.7742C63.4854 31.7245 62.5033 30.997 61.4552 31.1527L56.0145 31.9587C56.5979 31.3635 57.0014 30.6156 57.1786 29.8012C58.5842 29.6974 59.6968 28.5233 59.6968 27.0916V26.7639C59.6968 25.5327 58.8739 24.4915 57.7496 24.1575V22.8371L61.3873 16.4188C61.3943 16.4066 61.4009 16.3944 61.4072 16.3819C62.2432 14.8533 62.6829 13.1206 62.6791 11.369C62.6666 5.67779 58.0268 1.01678 52.3363 0.978796C49.5382 0.958541 46.9094 2.03461 44.9268 4.00394C42.944 5.97364 41.852 8.59747 41.852 11.3921C41.852 12.906 42.1712 14.3677 42.8006 15.7365C42.9058 15.9653 43.0976 16.1429 43.3338 16.2303C43.57 16.3177 43.8312 16.3077 44.06 16.2025C44.2888 16.0973 44.4664 15.9055 44.5538 15.6693C44.6412 15.4331 44.6312 15.1719 44.526 14.9431C44.0116 13.8249 43.751 12.6302 43.751 11.3921C43.751 9.10702 44.6439 6.9616 46.265 5.35117C47.8861 3.74074 50.0338 2.86204 52.3237 2.87761C56.9763 2.90863 60.7699 6.7198 60.7802 11.3731C60.7832 12.8139 60.4199 14.2383 59.7292 15.4924L59.7212 15.5072L56.0772 21.9364C55.9288 22.1985 55.8508 22.4946 55.8506 22.7959V24.0438H48.6805V22.7959C48.6804 22.4946 48.6023 22.1985 48.4539 21.9364L46.4546 18.4092C46.3304 18.1901 46.1243 18.0294 45.8815 17.9623C45.6388 17.8952 45.3794 17.9272 45.1604 18.0514C45.0519 18.1129 44.9566 18.1951 44.8799 18.2934C44.8032 18.3918 44.7466 18.5042 44.7134 18.6244C44.6802 18.7446 44.671 18.8701 44.6863 18.9939C44.7016 19.1176 44.7411 19.2371 44.8026 19.3456L46.7816 22.837V24.1574C45.6574 24.4912 44.8344 25.5326 44.8344 26.7638V27.0915C44.8344 28.5189 45.9403 29.6905 47.34 29.8004C47.6358 31.167 48.5634 32.3004 49.8009 32.8792L41.038 34.1773C40.9147 34.1956 40.7961 34.238 40.6892 34.3021C40.5822 34.3661 40.4889 34.4507 40.4146 34.5508C40.3403 34.6509 40.2865 34.7647 40.2562 34.8857C40.2259 35.0066 40.2197 35.1324 40.2381 35.2557C40.3149 35.7746 40.7989 36.1331 41.3164 36.0558L61.7334 33.031C61.7466 33.028 61.7603 33.0387 61.7624 33.0524L62.1006 35.3351C62.1015 35.3418 62.0998 35.3486 62.0958 35.3541C62.0918 35.3595 62.0857 35.3632 62.079 35.3642L41.6616 38.3889C41.5383 38.4072 41.4197 38.4495 41.3127 38.5136C41.2058 38.5777 41.1125 38.6622 41.0382 38.7624C40.9639 38.8625 40.91 38.9763 40.8797 39.0972C40.8494 39.2182 40.8432 39.3439 40.8615 39.4673C40.8984 39.7164 41.0328 39.9406 41.235 40.0906C41.4372 40.2407 41.6907 40.3042 41.9398 40.2674L62.3574 37.2426C63.4072 37.0872 64.1346 36.1067 63.9791 35.0571ZM49.3245 29.8114H55.1946C54.818 30.7392 53.9083 31.396 52.8469 31.396H51.6723C50.6108 31.3959 49.7011 30.7392 49.3245 29.8114ZM46.7334 27.0916V26.7639C46.7337 26.5463 46.8202 26.3377 46.9741 26.1838C47.128 26.0299 47.3366 25.9434 47.5542 25.9432H56.9771C57.1947 25.9434 57.4033 26.0299 57.5572 26.1838C57.711 26.3377 57.7976 26.5463 57.7978 26.7639V27.0916C57.7976 27.3092 57.711 27.5179 57.5572 27.6717C57.4033 27.8256 57.1947 27.9121 56.9771 27.9124H47.5542C47.3366 27.9121 47.128 27.8256 46.9741 27.6717C46.8202 27.5179 46.7337 27.3092 46.7334 27.0916ZM32.0001 41.7831C33.7396 41.7831 35.1548 40.3679 35.1548 38.6283C35.1548 36.8888 33.7396 35.4736 32.0001 35.4736C30.2605 35.4736 28.8453 36.8888 28.8453 38.6283C28.8453 40.3679 30.2604 41.7831 32.0001 41.7831ZM32.0001 37.3725C32.6925 37.3725 33.2559 37.9359 33.2559 38.6283C33.2559 39.3208 32.6925 39.8842 32.0001 39.8842C31.3076 39.8842 30.7442 39.3208 30.7442 38.6283C30.7442 37.9359 31.3076 37.3725 32.0001 37.3725Z" stroke="#074C3E" stroke-width="2.02554" mask="url(#path-1-inside-1_1034_1748)"/>
                                <path d="M11.8787 12.8097L11.8775 12.8097L11.8759 12.8097H11.8754C11.7446 12.8096 11.6168 12.8485 11.5083 12.9215C11.4003 12.9941 11.3163 13.0973 11.267 13.2177L11.2655 13.2214L11.2638 13.2258C11.2637 13.2261 11.2636 13.2264 11.2635 13.2266L11.2621 13.2305L11.262 13.2305L7.65493 22.7013L7.65492 22.7013C7.61308 22.8111 7.61659 22.9331 7.66466 23.0403L7.20259 23.2474L7.66466 23.0403C7.71274 23.1475 7.80144 23.2313 7.91127 23.2731C8.0211 23.315 8.14305 23.3115 8.25029 23.2634C8.35753 23.2153 8.44128 23.1266 8.48312 23.0168L9.14862 21.2694L9.27284 20.9433H9.62185H14.1066H14.4568L14.5804 21.2708L15.2388 23.0155L15.2388 23.0155C15.2706 23.0998 15.3274 23.1724 15.4015 23.2236C15.4756 23.2749 15.5635 23.3023 15.6535 23.3024L11.8787 12.8097ZM11.8787 12.8097C12.0093 12.8094 12.1371 12.8481 12.2457 12.9208C12.3539 12.9932 12.4381 13.0962 12.4877 13.2167L12.4953 13.2357L16.0678 22.7026L16.0679 22.7028M11.8787 12.8097L16.0679 22.7028M16.0679 22.7028C16.0932 22.7699 16.1019 22.8421 16.0932 22.9132C16.0845 22.9843 16.0587 23.0523 16.0179 23.1113C15.9772 23.1702 15.9227 23.2184 15.8593 23.2517C15.7958 23.285 15.7253 23.3024 15.6536 23.3024L16.0679 22.7028ZM43.2204 56.6796L43.336 56.8746L43.5585 56.9182C44.6945 57.141 45.5539 58.145 45.554 59.3435V61.4755C45.554 62.048 45.0874 62.5146 44.515 62.5146H19.4853C18.9129 62.5146 18.4464 62.048 18.4464 61.4755V59.3435C18.4464 58.1449 19.3057 57.141 20.4417 56.9182L20.6642 56.8746L20.7798 56.6796L28.094 44.3461L28.3191 43.9667L27.9741 43.6918C26.4826 42.5033 25.5264 40.6755 25.5264 38.6283C25.5264 35.0591 28.4309 32.1546 32.0001 32.1546C35.5693 32.1546 38.4739 35.0592 38.4739 38.6283C38.4739 40.6754 37.5176 42.5032 36.0261 43.6918L35.6812 43.9667L35.9062 44.3461L38.5007 48.7211C38.5606 48.8222 38.578 48.9429 38.5489 49.0568C38.5198 49.1706 38.4467 49.2682 38.3456 49.3282L38.3453 49.3283C38.2953 49.358 38.24 49.3776 38.1824 49.3858C38.1248 49.3941 38.0662 49.391 38.0099 49.3766C37.9535 49.3622 37.9006 49.3368 37.8541 49.3019C37.8075 49.267 37.7683 49.2233 37.7387 49.1733L37.7385 49.173L35.1463 44.802L34.9208 44.4217L34.5135 44.5939C33.7409 44.9208 32.8918 45.1018 32.0001 45.1018H31.9996C31.1363 45.1028 30.2817 44.93 29.4866 44.5939L29.0794 44.4217L28.8539 44.802L22.1496 56.1068L21.6961 56.8715H22.5852H41.4149H42.304L41.8505 56.1068L39.8047 52.6572C39.8045 52.6568 39.8042 52.6563 39.8039 52.6559C39.7458 52.5551 39.7296 52.4355 39.7589 52.3229C39.7883 52.2098 39.8612 52.1129 39.9617 52.0533C40.0623 51.9937 40.1823 51.9762 40.2956 52.0047L40.4189 51.5135L40.2956 52.0047C40.4084 52.033 40.5055 52.1045 40.566 52.2037C40.5663 52.2042 40.5666 52.2047 40.5669 52.2053L43.2204 56.6796ZM19.3324 61.1222V61.6286H19.8388H43.6547H44.1611H44.1613V61.1222H44.6674V59.3436C44.6674 58.4755 43.9673 57.7688 43.1017 57.758L43.0979 57.7578H43.0807H20.9192H20.9019L20.8981 57.758C20.0327 57.7688 19.3324 58.4754 19.3324 59.3436V61.1222ZM9.87161 19.3705L9.6101 20.0571H10.3448H13.3899H14.1222L13.8636 19.3719L12.3481 15.356L11.8766 14.1064L11.4011 15.3546L9.87161 19.3705ZM49.8149 7.35013H49.815H52.6053C54.0679 7.35013 55.2587 8.54091 55.2586 10.0036V10.004C55.2591 10.582 55.0697 11.1441 54.7196 11.6039L54.4012 12.022L54.831 12.3247C55.6121 12.8747 56.1213 13.7806 56.1213 14.8022C56.1213 16.4719 54.7621 17.831 53.0925 17.831C52.7377 17.831 51.9183 17.8339 51.1888 17.8367C50.457 17.8396 49.818 17.8424 49.8191 17.8424H49.8152C49.6976 17.8424 49.5849 17.7956 49.5018 17.7125C49.4186 17.6294 49.3719 17.5167 49.3719 17.3991V7.79322V7.79316C49.3719 7.73497 49.3833 7.67736 49.4056 7.62361C49.4278 7.56986 49.4605 7.52102 49.5016 7.47987C49.5428 7.43873 49.5916 7.4061 49.6453 7.38384C49.6991 7.36158 49.7567 7.35013 49.8149 7.35013ZM52.6053 8.23631L52.6052 8.23631L50.7644 8.23643L50.258 8.23647V8.74282V11.2671V11.7743L50.7653 11.7735H50.7653L50.7655 11.7735L50.7664 11.7735L50.7699 11.7735L50.7837 11.7735L50.8359 11.7734L51.0241 11.7731L51.6088 11.7722C52.0437 11.7715 52.5033 11.7709 52.6053 11.7709C53.5802 11.7709 54.3725 10.9785 54.3725 10.0036C54.3725 9.02866 53.5802 8.23631 52.6053 8.23631ZM50.258 16.4459V16.9545L50.7666 16.9523C51.5758 16.9489 52.669 16.9448 53.0927 16.9448C54.2745 16.9448 55.2353 15.9843 55.2353 14.8023C55.2353 13.6204 54.2746 12.6597 53.0927 12.6597L53.0921 12.6597H53.092L53.0918 12.6597L53.0906 12.6597L53.0862 12.6597L53.0689 12.6597L53.0029 12.6598L52.7655 12.6601L52.0272 12.6609C51.4788 12.6616 50.8957 12.6624 50.7625 12.6629L50.258 12.6648V13.1692V16.4459ZM32.0001 33.0408C28.9186 33.0408 26.4125 35.5469 26.4125 38.6283C26.4125 41.7098 28.9186 44.2159 32.0001 44.2159C35.0816 44.2159 37.5877 41.7098 37.5877 38.6283C37.5877 35.5469 35.0816 33.0408 32.0001 33.0408Z" stroke="#074C3E" stroke-width="1.01277"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1034_1748">
                                    <rect width="64" height="64" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="number-bullet">02</span>
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Comparison Tools</h4>
                        <p class="fs-small">Picking a product refers to the process of selecting a specific from a range</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3">
                <div class="card card--custom">
                    <div class="card__icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.3333 62.4469H10.7636C8.82422 62.4469 7.27271 60.8954 7.27271 58.956V39.9499C7.27271 38.0105 8.82422 36.459 10.7636 36.459H21.3333C21.9151 36.459 22.303 36.8469 22.303 37.4287V61.4772C22.303 62.059 21.9151 62.4469 21.3333 62.4469ZM10.7636 38.3984C9.89089 38.3984 9.2121 39.0772 9.2121 39.9499V58.956C9.2121 59.8287 9.89089 60.5075 10.7636 60.5075H20.3636V38.3984H10.7636Z" fill="#074C3E"/>
                            <path d="M52.8485 43.3446H50.9091C50.3273 43.3446 49.9394 42.9567 49.9394 42.3749C49.9394 41.7931 50.3273 41.4052 50.9091 41.4052H52.8485C54.1091 41.4052 55.1758 40.3385 55.1758 39.0779C55.1758 37.8173 54.1091 36.7506 52.8485 36.7506H33.7455C33.4545 36.7506 33.1636 36.5567 32.9697 36.3627C32.7758 36.0718 32.7758 35.7809 32.8727 35.49C34.2303 32.29 34.7151 29.6718 34.3273 27.3446V27.2476C34.3273 23.9506 31.903 21.2355 28.703 20.8476C27.9273 28.3143 25.697 34.8112 21.9151 40.6294C21.6242 41.1143 21.0424 41.2112 20.5576 40.9203C20.0727 40.6294 19.9758 40.0476 20.2667 39.5627C24.0485 33.8415 26.1818 27.3446 26.7636 19.7809C26.7636 19.2961 27.2485 18.9082 27.7333 18.9082C32.3879 18.9082 36.1697 22.69 36.1697 27.2476C36.4606 29.5749 36.1697 32.0961 35.103 35.0052H52.7515C55.1758 35.0052 57.0182 36.8476 57.0182 39.2718C57.1151 41.5021 55.2727 43.3446 52.8485 43.3446Z" fill="#074C3E"/>
                            <path d="M51.8788 49.9376H49.9394C49.3576 49.9376 48.9697 49.5498 48.9697 48.9679C48.9697 48.3861 49.3576 47.9982 49.9394 47.9982H51.8788C53.1394 47.9982 54.2061 46.9316 54.2061 45.671C54.2061 44.4104 53.1394 43.3437 51.8788 43.3437C51.297 43.3437 50.9091 42.9558 50.9091 42.374C50.9091 41.7922 51.297 41.4043 51.8788 41.4043C54.3031 41.4043 56.1455 43.2467 56.1455 45.671C56.1455 48.0952 54.3031 49.9376 51.8788 49.9376Z" fill="#074C3E"/>
                            <path d="M50.8122 56.5333H48.8728C48.291 56.5333 47.9031 56.1455 47.9031 55.5636C47.9031 54.9818 48.291 54.5939 48.8728 54.5939H50.8122C52.0728 54.5939 53.1394 53.5273 53.1394 52.1697C53.1394 50.7152 52.3637 49.9394 50.8122 49.9394C50.2303 49.9394 49.8425 49.5515 49.8425 48.9697C49.8425 48.3879 50.2303 48 50.8122 48C53.3334 48 54.9819 49.4545 55.0788 51.9758V52.4606C54.8849 54.6909 53.0425 56.5333 50.8122 56.5333Z" fill="#074C3E"/>
                            <path d="M49.8424 63.0294H26.6667C25.4061 63.0294 24.3394 62.7384 23.2727 62.2536L20.9455 61.09C20.4606 60.896 20.2667 60.3142 20.5576 59.8294C20.7515 59.3445 21.3333 59.1506 21.8182 59.4415L24.1455 60.6051C24.9212 60.993 25.7939 61.1869 26.7636 61.1869H49.9394C51.2 61.1869 52.2667 60.1203 52.2667 58.8597C52.2667 57.5991 51.2 56.5324 49.9394 56.5324C49.3576 56.5324 48.9697 56.1445 48.9697 55.5627C48.9697 54.9809 49.3576 54.593 49.9394 54.593C52.3636 54.593 54.2061 56.4354 54.2061 58.8597C54.1091 61.1869 52.2667 63.0294 49.8424 63.0294ZM17.8424 58.3748H11.7333C11.1515 58.3748 10.7636 57.9869 10.7636 57.4051C10.7636 56.8233 11.1515 56.4354 11.7333 56.4354H17.8424C18.4242 56.4354 18.8121 56.8233 18.8121 57.4051C18.8121 57.9869 18.4242 58.3748 17.8424 58.3748ZM34.6182 15.9991C34.4242 15.9991 34.2303 15.9991 34.1333 15.9021L30.5455 13.7688L26.6667 15.6112C26.3758 15.8051 25.8909 15.7081 25.6 15.5142C25.3091 15.3203 25.2121 14.9324 25.3091 14.5445L26.2788 10.3748L23.3697 7.36875C23.0788 7.07784 22.9818 6.68996 23.1758 6.39905C23.2727 6.01117 23.6606 5.81723 23.9515 5.72027L28.1212 5.23542L30.0606 1.55057C30.2546 1.16269 30.6424 0.96875 30.9333 0.96875C31.3212 0.96875 31.6121 1.16269 31.8061 1.55057L33.5515 5.42936L37.7212 6.20511C38.1091 6.30208 38.4 6.49602 38.497 6.8839C38.5939 7.27178 38.497 7.65966 38.2061 7.8536L35.103 10.6657L35.5879 14.9324C35.5879 15.3203 35.4909 15.7081 35.2 15.9021C35.0061 15.9021 34.8121 15.9991 34.6182 15.9991ZM30.5455 11.6354C30.7394 11.6354 30.9333 11.6354 31.0303 11.7324L33.3576 13.1869L32.9697 10.3748C32.9697 10.0839 33.0667 9.69602 33.2606 9.50208L35.3939 7.75663L32.6788 7.27178C32.3879 7.17481 32.097 6.98087 32 6.68996L30.8364 4.16875L29.5758 6.59299C29.3818 6.8839 29.1879 7.07784 28.8 7.07784L26.0849 7.36875L28.0242 9.30814C28.2182 9.50208 28.3152 9.88996 28.3152 10.1809L27.7333 12.896L30.2546 11.7324C30.2546 11.6354 30.4485 11.6354 30.5455 11.6354ZM18.4242 22.0112C18.2303 22.0112 18.0364 22.0112 17.9394 21.9142L14.3515 19.7809L10.4727 21.6233C10.1818 21.8172 9.69697 21.7203 9.40607 21.5263C9.11516 21.3324 9.01819 20.9445 9.11516 20.5566L10.0849 16.4839L7.17576 13.3809C6.88485 13.09 6.88485 12.7021 6.98182 12.4112C6.98182 11.9263 7.27273 11.6354 7.66061 11.6354L11.9273 11.2475L13.8667 7.56269C14.0606 7.27178 14.4485 7.07784 14.7394 7.07784C15.1273 7.07784 15.4182 7.27178 15.6121 7.65966L17.3576 11.5384L21.5273 12.3142C21.9152 12.4112 22.2061 12.6051 22.303 12.993C22.4 13.3809 22.303 13.7688 22.0121 13.9627L18.9091 16.8718L19.3939 21.0415C19.3939 21.4294 19.297 21.8172 19.0061 22.0112C18.8121 21.9142 18.6182 22.0112 18.4242 22.0112ZM14.3515 17.6475C14.5455 17.6475 14.7394 17.6475 14.8364 17.7445L17.1636 19.1991L16.8727 16.4839C16.8727 16.193 16.9697 15.9021 17.1636 15.6112L19.2 13.7688L16.4849 13.2839C16.1939 13.1869 15.903 12.993 15.8061 12.7021L14.6424 10.1809L13.3818 12.6051C13.1879 12.896 12.9939 13.09 12.6061 13.09L9.79395 13.3809L11.7333 15.4172C11.9273 15.6112 12.0242 15.9991 11.9273 16.29L11.3455 18.9081L13.8667 17.7445C14.0606 17.6475 14.2546 17.6475 14.3515 17.6475ZM51.2 22.0112C51.0061 22.0112 50.8121 22.0112 50.7152 21.9142L47.1273 19.7809L43.3455 21.6233C43.0546 21.8172 42.5697 21.7203 42.3758 21.5263C42.0849 21.3324 41.9879 20.9445 41.9879 20.5566L42.8606 16.4839L39.9515 13.3809C39.6606 13.09 39.6606 12.7021 39.7576 12.4112C39.8545 12.0233 40.2424 11.8294 40.5333 11.8294L44.703 11.4415L46.7394 7.75663C46.9333 7.46572 47.2242 7.27178 47.6121 7.27178C48 7.27178 48.2909 7.56269 48.4849 7.8536L50.1333 11.7324L54.303 12.5081C54.6909 12.6051 54.9818 12.7991 55.0788 13.1869C55.1758 13.5748 55.0788 13.9627 54.7879 14.1566L51.6849 17.0657L52.1697 21.2354C52.1697 21.6233 52.0727 22.0112 51.7818 22.2051C51.5879 21.9142 51.3939 22.0112 51.2 22.0112ZM47.1273 17.6475C47.3212 17.6475 47.5152 17.6475 47.6121 17.7445L49.9394 19.1991L49.6485 16.4839C49.6485 16.193 49.7455 15.9021 49.9394 15.6112L51.9758 13.7688L49.2606 13.2839C48.9697 13.1869 48.6788 12.993 48.5818 12.7021L47.5152 10.1809L46.1576 12.6051C45.9636 12.896 45.7697 13.09 45.3818 13.09L42.6667 13.3809L44.6061 15.4172C44.8 15.6112 44.897 15.9991 44.8 16.29L44.2182 18.9081L46.7394 17.7445C46.8364 17.6475 47.0303 17.6475 47.1273 17.6475Z" fill="#074C3E"/>
                        </svg>
                        <span class="number-bullet">03</span>
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Reviews & Feedback</h4>
                        <p class="fs-small">Product packaging refers to the materials and design used to protect</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3">
                <div class="card card--custom">
                    <div class="card__icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 23C24 22.7348 23.8946 22.4804 23.7071 22.2929C23.5196 22.1054 23.2652 22 23 22C22.7348 22 22.4804 22.1054 22.2929 22.2929C22.1054 22.4804 22 22.7348 22 23C22 23.5304 22.2107 24.0391 22.5858 24.4142C22.9609 24.7893 23.4696 25 24 25H25C25 25.2652 25.1054 25.5196 25.2929 25.7071C25.4804 25.8946 25.7348 26 26 26C26.2652 26 26.5196 25.8946 26.7071 25.7071C26.8946 25.5196 27 25.2652 27 25H28C28.5304 25 29.0391 24.7893 29.4142 24.4142C29.7893 24.0391 30 23.5304 30 23V21C30 20.4696 29.7893 19.9609 29.4142 19.5858C29.0391 19.2107 28.5304 19 28 19H24V17H28C28 17.2652 28.1054 17.5196 28.2929 17.7071C28.4804 17.8946 28.7348 18 29 18C29.2652 18 29.5196 17.8946 29.7071 17.7071C29.8946 17.5196 30 17.2652 30 17C30 16.4696 29.7893 15.9609 29.4142 15.5858C29.0391 15.2107 28.5304 15 28 15H27C27 14.7348 26.8946 14.4804 26.7071 14.2929C26.5196 14.1054 26.2652 14 26 14C25.7348 14 25.4804 14.1054 25.2929 14.2929C25.1054 14.4804 25 14.7348 25 15H24C23.4696 15 22.9609 15.2107 22.5858 15.5858C22.2107 15.9609 22 16.4696 22 17V19C22 19.5304 22.2107 20.0391 22.5858 20.4142C22.9609 20.7893 23.4696 21 24 21H28V23H24ZM15 32H30C30.2652 32 30.5196 31.8946 30.7071 31.7071C30.8946 31.5196 31 31.2652 31 31C31 30.7348 30.8946 30.4804 30.7071 30.2929C30.5196 30.1054 30.2652 30 30 30H15C14.7348 30 14.4804 30.1054 14.2929 30.2929C14.1054 30.4804 14 30.7348 14 31C14 31.2652 14.1054 31.5196 14.2929 31.7071C14.4804 31.8946 14.7348 32 15 32ZM31 34H28C27.7348 34 27.4804 34.1054 27.2929 34.2929C27.1054 34.4804 27 34.7348 27 35C27 35.2652 27.1054 35.5196 27.2929 35.7071C27.4804 35.8946 27.7348 36 28 36H31C31.2652 36 31.5196 35.8946 31.7071 35.7071C31.8946 35.5196 32 35.2652 32 35C32 34.7348 31.8946 34.4804 31.7071 34.2929C31.5196 34.1054 31.2652 34 31 34ZM37 32C37.2652 32 37.5196 31.8946 37.7071 31.7071C37.8946 31.5196 38 31.2652 38 31C38 30.7348 37.8946 30.4804 37.7071 30.2929C37.5196 30.1054 37.2652 30 37 30H34C33.7348 30 33.4804 30.1054 33.2929 30.2929C33.1054 30.4804 33 30.7348 33 31C33 31.2652 33.1054 31.5196 33.2929 31.7071C33.4804 31.8946 33.7348 32 34 32H37ZM15 36H24C24.2652 36 24.5196 35.8946 24.7071 35.7071C24.8946 35.5196 25 35.2652 25 35C25 34.7348 24.8946 34.4804 24.7071 34.2929C24.5196 34.1054 24.2652 34 24 34H15C14.7348 34 14.4804 34.1054 14.2929 34.2929C14.1054 34.4804 14 34.7348 14 35C14 35.2652 14.1054 35.5196 14.2929 35.7071C14.4804 35.8946 14.7348 36 15 36ZM15 40H18C18.2652 40 18.5196 39.8946 18.7071 39.7071C18.8946 39.5196 19 39.2652 19 39C19 38.7348 18.8946 38.4804 18.7071 38.2929C18.5196 38.1054 18.2652 38 18 38H15C14.7348 38 14.4804 38.1054 14.2929 38.2929C14.1054 38.4804 14 38.7348 14 39C14 39.2652 14.1054 39.5196 14.2929 39.7071C14.4804 39.8946 14.7348 40 15 40ZM31 38H22C21.7348 38 21.4804 38.1054 21.2929 38.2929C21.1054 38.4804 21 38.7348 21 39C21 39.2652 21.1054 39.5196 21.2929 39.7071C21.4804 39.8946 21.7348 40 22 40H31C31.2652 40 31.5196 39.8946 31.7071 39.7071C31.8946 39.5196 32 39.2652 32 39C32 38.7348 31.8946 38.4804 31.7071 38.2929C31.5196 38.1054 31.2652 38 31 38ZM27 42H15C14.7348 42 14.4804 42.1054 14.2929 42.2929C14.1054 42.4804 14 42.7348 14 43C14 43.2652 14.1054 43.5196 14.2929 43.7071C14.4804 43.8946 14.7348 44 15 44H27C27.2652 44 27.5196 43.8946 27.7071 43.7071C27.8946 43.5196 28 43.2652 28 43C28 42.7348 27.8946 42.4804 27.7071 42.2929C27.5196 42.1054 27.2652 42 27 42ZM25 49H23.57L22.86 47.82C22.776 47.6778 22.658 47.5586 22.5167 47.4731C22.3753 47.3876 22.215 47.3384 22.05 47.33C21.8864 47.322 21.7233 47.3542 21.5751 47.424C21.4269 47.4937 21.2981 47.5988 21.2 47.73L20.2 49.11L18.92 46.55C18.8226 46.3409 18.6559 46.1719 18.4481 46.0717C18.2403 45.9714 18.0043 45.9461 17.78 46C16.7487 46.1784 15.8102 46.706 15.1219 47.4945C14.4336 48.2829 14.0375 49.2841 14 50.33C14 50.5952 14.1054 50.8496 14.2929 51.0371C14.4804 51.2246 14.7348 51.33 15 51.33C15.2652 51.33 15.5196 51.2246 15.7071 51.0371C15.8946 50.8496 16 50.5952 16 50.33C16.0249 49.8738 16.1779 49.4338 16.4414 49.0606C16.705 48.6874 17.0684 48.3961 17.49 48.22L19.11 51.45C19.1868 51.6013 19.3008 51.7307 19.4414 51.8258C19.5819 51.9209 19.7444 51.9787 19.9134 51.9937C20.0824 52.0087 20.2525 51.9804 20.4076 51.9115C20.5627 51.8427 20.6978 51.7355 20.8 51.6L21.91 50.12L22.14 50.51C22.2285 50.6593 22.3543 50.783 22.5051 50.8689C22.6559 50.9548 22.8265 51 23 51H25C25.2652 51 25.5196 50.8946 25.7071 50.7071C25.8946 50.5196 26 50.2652 26 50C26 49.7348 25.8946 49.4804 25.7071 49.2929C25.5196 49.1054 25.2652 49 25 49Z" fill="#074C3E"/>
                            <path d="M55.43 34.9L45.43 30.1C45.2957 30.036 45.1488 30.0028 45 30.0028C44.8512 30.0028 44.7043 30.036 44.57 30.1L44 30.37V17C44.0008 16.8684 43.9755 16.7379 43.9258 16.6161C43.876 16.4943 43.8027 16.3835 43.71 16.29L35.71 8.29002C35.6166 8.19734 35.5057 8.12401 35.3839 8.07425C35.2621 8.02448 35.1316 7.99926 35 8.00002H9C8.73478 8.00002 8.48043 8.10537 8.29289 8.29291C8.10536 8.48045 8 8.7348 8 9.00002V55C8 55.2652 8.10536 55.5196 8.29289 55.7071C8.48043 55.8947 8.73478 56 9 56H43C43.1701 55.9966 43.3366 55.9497 43.4836 55.864C43.6306 55.7783 43.7532 55.6564 43.84 55.51L44.55 55.89C44.6896 55.9604 44.8437 55.997 45 55.997C45.1563 55.997 45.3104 55.9604 45.45 55.89C52.75 52.25 56 46.05 56 35.8C55.9995 35.6115 55.9457 35.427 55.8448 35.2678C55.744 35.1086 55.6002 34.9811 55.43 34.9ZM36 11.41L40.59 16H36V11.41ZM10 54V10H34V17C34 17.2652 34.1054 17.5196 34.2929 17.7071C34.4804 17.8947 34.7348 18 35 18H42V31.33L34.57 34.9C34.3998 34.9811 34.256 35.1086 34.1552 35.2678C34.0543 35.427 34.0005 35.6115 34 35.8C34 44.46 36.34 50.22 41.46 54H10ZM45 53.88C40.56 51.55 36.16 47.54 36 36.43L45 32.11L54 36.43C53.84 47.54 49.44 51.55 45 53.88Z" fill="#074C3E"/>
                            <path d="M44.55 34.1109L38.55 37.1109C38.3851 37.194 38.2464 37.3211 38.1493 37.4782C38.0522 37.6353 38.0006 37.8162 38 38.0009C38 46.0009 41.56 49.4009 44.55 50.8909C44.6896 50.9612 44.8437 50.9978 45 50.9978C45.1563 50.9978 45.3104 50.9612 45.45 50.8909C48.44 49.4009 52 46.0009 52 38.0009C51.9994 37.8162 51.9478 37.6353 51.8507 37.4782C51.7536 37.3211 51.6149 37.194 51.45 37.1109L45.45 34.1109C45.3104 34.0405 45.1563 34.0039 45 34.0039C44.8437 34.0039 44.6896 34.0405 44.55 34.1109ZM50 38.6109C49.87 43.5409 48.15 47.0709 45 48.8709C41.86 47.0709 40.14 43.5409 40 38.6109L45 36.1209L50 38.6109Z" fill="#074C3E"/>
                        </svg>
                        <span class="number-bullet">04</span>
                    </div>
                    <div class="card__content">
                        <h4 class="card__title">Secure Your Loan</h4>
                        <p class="fs-small">Product transport refers to the process of moving products from one location</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rakamlarla İfşa Et -->


<!-- Birlikte Çalışalım -->
<section class="download-app section">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-5 gy-lg-0">
                <div class="col-12 col-md-8 col-lg-5 order-1 order-lg-0">
                    <div class="download-app__thumb me-lg-5 me-xxl-0  wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/finview/images/download_app.png" alt="images">
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__content ms-lg-4 ms-xl-0">
                        <span class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/finview/images/title_vector.png" alt="vector">Download Our Apps</span>
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Get Our Apps for Easy Financial Management</h2>
                        <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">Take advantage of our convenient mobile apps to access our services anytime, anywhere. Download our apps today and experience the ease of managing your finances</p>
                        <ul class="section__content-list wow fadeInUp" data-wow-duration="0.8s">
                            <li class="headingFive">Quick Loan Application</li>
                            <li class="headingFive">Secure and Private</li>
                            <li class="headingFive">User-Friendly Interface</li>
                            <li class="headingFive">Stay Connected</li>
                        </ul>
                        <div class="btn-group mt_40 wow fadeInDown" data-wow-duration="0.8s">
                            <a href="#" class="btn_theme">
                                <svg width="135" height="33" viewBox="0 0 135 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M43.1134 4.25806C43.1134 5.29032 42.8763 6.19355 42.2835 6.83871C41.5722 7.6129 40.7423 8 39.6753 8C38.6082 8 37.7783 7.6129 37.067 6.83871C36.3557 6.06452 36 5.16129 36 4C36 2.83871 36.3557 1.93548 37.067 1.16129C37.7783 0.387097 38.6082 0 39.6753 0C40.1495 0 40.6237 0.129032 41.0979 0.387096C41.5722 0.645161 41.9278 0.903226 42.1649 1.29032L41.5722 1.93548C41.0979 1.29032 40.5052 1.03226 39.6753 1.03226C38.9639 1.03226 38.2526 1.29032 37.7784 1.93548C37.1856 2.45161 36.9485 3.22581 36.9485 4.12903C36.9485 5.03226 37.1856 5.80645 37.7784 6.32258C38.3711 6.83871 38.9639 7.22581 39.6753 7.22581C40.5052 7.22581 41.0979 6.96774 41.6907 6.32258C42.0464 5.93548 42.2835 5.41935 42.2835 4.77419H39.6753V3.74194H43.1134V4.25806ZM48.567 1.03226H45.366V3.48387H48.3299V4.3871H45.366V6.83871H48.567V7.87097H44.4175V0.129032H48.567V1.03226ZM52.4794 7.87097H51.5309V1.03226H49.5155V0.129032H54.4948V1.03226H52.4794V7.87097ZM57.933 7.87097V0.129032H58.8814V7.87097H57.933ZM62.9124 7.87097H61.9639V1.03226H59.9485V0.129032H64.8093V1.03226H62.7938V7.87097H62.9124ZM74.1753 6.83871C73.4639 7.6129 72.634 8 71.567 8C70.5 8 69.6701 7.6129 68.9588 6.83871C68.2474 6.06452 67.8918 5.16129 67.8918 4C67.8918 2.83871 68.2474 1.93548 68.9588 1.16129C69.6701 0.387097 70.5 0 71.567 0C72.634 0 73.4639 0.387097 74.1753 1.16129C74.8866 1.93548 75.2423 2.83871 75.2423 4C75.2423 5.16129 74.8866 6.06452 74.1753 6.83871ZM69.6701 6.19355C70.1443 6.70968 70.8557 7.09677 71.567 7.09677C72.2784 7.09677 72.9897 6.83871 73.4639 6.19355C73.9381 5.67742 74.2938 4.90322 74.2938 4C74.2938 3.09677 74.0567 2.32258 73.4639 1.80645C72.9897 1.29032 72.2784 0.903225 71.567 0.903225C70.8557 0.903225 70.1443 1.16129 69.6701 1.80645C69.1959 2.32258 68.8402 3.09677 68.8402 4C68.8402 4.90322 69.0773 5.67742 69.6701 6.19355ZM76.5464 7.87097V0.129032H77.6134L81.0516 6.19355V0.129032H82V7.87097H81.0516L77.3763 1.54839V7.87097H76.5464Z" fill="#074C3E"/>
                                    <path d="M67.5957 17.8402C64.7872 17.8402 62.5638 20.0769 62.5638 23.1834C62.5638 26.1657 64.7872 28.5266 67.5957 28.5266C70.4043 28.5266 72.6277 26.2899 72.6277 23.1834C72.6277 19.9527 70.4043 17.8402 67.5957 17.8402ZM67.5957 26.2899C66.0745 26.2899 64.7872 24.9231 64.7872 23.0592C64.7872 21.1953 66.0745 19.8284 67.5957 19.8284C69.117 19.8284 70.4043 21.071 70.4043 23.0592C70.4043 24.9231 69.117 26.2899 67.5957 26.2899ZM56.7128 17.8402C53.9043 17.8402 51.6809 20.0769 51.6809 23.1834C51.6809 26.1657 53.9043 28.5266 56.7128 28.5266C59.5213 28.5266 61.7447 26.2899 61.7447 23.1834C61.7447 19.9527 59.5213 17.8402 56.7128 17.8402ZM56.7128 26.2899C55.1915 26.2899 53.9043 24.9231 53.9043 23.0592C53.9043 21.1953 55.1915 19.8284 56.7128 19.8284C58.234 19.8284 59.5213 21.071 59.5213 23.0592C59.5213 24.9231 58.234 26.2899 56.7128 26.2899ZM43.7234 19.4556V21.6923H48.7553C48.6383 22.9349 48.1702 23.929 47.5851 24.5503C46.883 25.2959 45.7128 26.1657 43.7234 26.1657C40.5638 26.1657 38.2234 23.5562 38.2234 20.2012C38.2234 16.8462 40.6809 14.2367 43.7234 14.2367C45.3617 14.2367 46.6489 14.9822 47.5851 15.8521L49.1064 14.2367C47.8191 12.9941 46.1809 12 43.8404 12C39.6277 12 36 15.7278 36 20.2012C36 24.6746 39.6277 28.4024 43.8404 28.4024C46.1809 28.4024 47.8192 27.6568 49.2234 26.0414C50.6277 24.5503 51.0957 22.4379 51.0957 20.8225C51.0957 20.3254 51.0957 19.8284 50.9787 19.4556H43.7234V19.4556ZM96.8511 21.1953C96.383 19.9527 95.2128 17.8402 92.6383 17.8402C90.0638 17.8402 87.9574 19.9527 87.9574 23.1834C87.9574 26.1657 90.0638 28.5266 92.8723 28.5266C95.0957 28.5266 96.5 27.0355 96.9681 26.1657L95.3298 24.9231C94.7447 25.7929 94.0426 26.4142 92.8723 26.4142C91.7021 26.4142 91 25.9172 90.4149 24.7988L97.0851 21.8166L96.8511 21.1953V21.1953ZM90.0638 22.9349C90.0638 20.9467 91.5851 19.8284 92.6383 19.8284C93.4574 19.8284 94.2766 20.3254 94.5106 20.9467L90.0638 22.9349ZM84.5638 28.0296H86.7872V12.497H84.5638V28.0296ZM81.0532 18.9586C80.4681 18.3373 79.5319 17.716 78.3617 17.716C75.9043 17.716 73.5638 20.0769 73.5638 23.0592C73.5638 26.0414 75.7872 28.2781 78.3617 28.2781C79.5319 28.2781 80.4681 27.6568 80.9362 27.0355H81.0532V27.7811C81.0532 29.7692 80 30.8876 78.3617 30.8876C77.0745 30.8876 76.1383 29.8935 75.9043 29.0237L74.0319 29.8935C74.617 31.2604 76.0213 33 78.4787 33C81.0532 33 83.1596 31.3846 83.1596 27.5325V18.0888H81.0532V18.9586V18.9586ZM78.4787 26.2899C76.9574 26.2899 75.6702 24.9231 75.6702 23.0592C75.6702 21.1953 76.9574 19.8284 78.4787 19.8284C80 19.8284 81.1702 21.1953 81.1702 23.0592C81.1702 24.9231 80 26.2899 78.4787 26.2899ZM107.032 12.497H101.766V28.0296H103.989V22.1893H107.032C109.489 22.1893 111.83 20.3254 111.83 17.3432C111.83 14.3609 109.489 12.497 107.032 12.497V12.497ZM107.149 19.9527H103.989V14.6095H107.149C108.787 14.6095 109.723 16.1006 109.723 17.2189C109.606 18.5858 108.67 19.9527 107.149 19.9527ZM120.606 17.716C118.968 17.716 117.33 18.4615 116.745 20.0769L118.734 20.9467C119.202 20.0769 119.904 19.8284 120.723 19.8284C121.894 19.8284 122.947 20.574 123.064 21.8166V21.9408C122.713 21.6923 121.777 21.3195 120.84 21.3195C118.734 21.3195 116.628 22.5621 116.628 24.7988C116.628 26.9112 118.383 28.2781 120.255 28.2781C121.777 28.2781 122.479 27.5325 123.064 26.787H123.181V28.0296H125.287V22.0651C125.053 19.3314 123.064 17.716 120.606 17.716V17.716ZM120.372 26.2899C119.67 26.2899 118.617 25.9172 118.617 24.9231C118.617 23.6805 119.904 23.3077 120.957 23.3077C121.894 23.3077 122.362 23.5562 122.947 23.8047C122.713 25.2959 121.543 26.2899 120.372 26.2899V26.2899ZM132.66 18.0888L130.202 24.7988H130.085L127.511 18.0888H125.17L129.032 27.5325L126.809 32.7515H129.032L135 18.0888H132.66V18.0888ZM113 28.0296H115.223V12.497H113V28.0296Z" fill="#074C3E"/>
                                    <path d="M20 19.9878L16.7887 17L5 28L20 19.9878Z" fill="#074C3E"/>
                                    <path d="M20 12.0122L5 4L16.7887 15L20 12.0122Z" fill="#074C3E"/>
                                    <path d="M24.3284 18.1481C25.2337 17.3727 25.2337 15.625 24.2682 14.8495L21.3056 13L18 16.5L21.3056 20L24.3284 18.1481Z" fill="#074C3E"/>
                                    <path d="M2.09105 29L15 15.9978L2.09105 3.00108V3C1.4379 3.34558 1 3.975 1 4.79292V27.2071C1 28.025 1.4379 28.6544 2.09105 29V29Z" fill="#074C3E"/>
                                </svg>
                                <span></span>
                            </a>
                            <a href="#" class="btn_theme">
                                <svg width="136" height="35" viewBox="0 0 136 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.716 16.4857C21.6796 12.5694 25.0217 10.664 25.1745 10.5753C23.2818 7.89837 20.3481 7.53262 19.3171 7.50346C16.8532 7.25192 14.4631 8.93367 13.208 8.93367C11.9278 8.93367 9.99497 7.52776 7.91182 7.56907C5.23116 7.60917 2.72337 9.11472 1.34796 11.4526C-1.49053 16.2196 0.626442 23.2249 3.34593 27.0781C4.7063 28.9652 6.29591 31.0722 8.37655 30.9981C10.4121 30.9167 11.1725 29.7392 13.6289 29.7392C16.0628 29.7392 16.7768 30.9981 18.8988 30.9507C21.0834 30.9167 22.4588 29.0551 23.7715 27.151C25.3436 24.988 25.9749 22.8579 26 22.7485C25.9486 22.7315 21.7573 21.1798 21.716 16.4857Z" fill="#074C3E"/>
                                    <path d="M17.7075 4.96869C18.8023 3.64054 19.5514 1.83364 19.3434 0C17.7589 0.0680475 15.7772 1.06324 14.636 2.36222C13.6264 3.50688 12.7245 5.38305 12.9575 7.14742C14.7375 7.27623 16.5651 6.27617 17.7075 4.96869Z" fill="#074C3E"/>
                                    <path d="M50.9476 30.2845H48.1283L46.5839 25.5703H41.2159L39.7448 30.2845H37L42.3183 14.2351H45.6032L50.9476 30.2845ZM46.1184 23.5925L44.7218 19.4016C44.574 18.9735 44.2972 17.9653 43.8888 16.3782H43.8391C43.6765 17.0608 43.4145 18.069 43.0545 19.4016L41.6827 23.5925H46.1184Z" fill="#074C3E"/>
                                    <path d="M64.6246 24.3559C64.6246 26.3241 64.0771 27.8798 62.9821 29.0219C62.0014 30.0385 60.7835 30.5463 59.3298 30.5463C57.7606 30.5463 56.6334 29.9987 55.9469 28.9037H55.8972V35H53.2505V22.5216C53.2505 21.2842 53.2169 20.0143 53.1524 18.7118H55.4801L55.6278 20.5461H55.6775C56.5601 19.1641 57.8997 18.4742 59.6973 18.4742C61.1026 18.4742 62.2757 19.0133 63.2143 20.0927C64.1553 21.1733 64.6246 22.5939 64.6246 24.3559ZM61.9281 24.45C61.9281 23.3236 61.6674 22.3949 61.1436 21.6641C60.5712 20.9019 59.8028 20.5208 58.8394 20.5208C58.1864 20.5208 57.593 20.7331 57.0629 21.1516C56.5316 21.5737 56.184 22.1248 56.0214 22.8074C55.9394 23.1258 55.8985 23.3863 55.8985 23.5913V25.5209C55.8985 26.3627 56.1641 27.073 56.6955 27.6531C57.2268 28.2332 57.917 28.5226 58.7662 28.5226C59.7631 28.5226 60.539 28.1487 61.0939 27.4034C61.6501 26.6569 61.9281 25.6728 61.9281 24.45Z" fill="#074C3E"/>
                                    <path d="M78.3264 24.3559C78.3264 26.3241 77.7789 27.8798 76.6827 29.0219C75.7032 30.0385 74.4853 30.5463 73.0316 30.5463C71.4624 30.5463 70.3352 29.9987 69.6499 28.9037H69.6003V35H66.9535V22.5216C66.9535 21.2842 66.92 20.0143 66.8554 18.7118H69.1831L69.3309 20.5461H69.3805C70.262 19.1641 71.6015 18.4742 73.4003 18.4742C74.8044 18.4742 75.9776 19.0133 76.9186 20.0927C77.8559 21.1733 78.3264 22.5939 78.3264 24.3559ZM75.63 24.45C75.63 23.3236 75.368 22.3949 74.8441 21.6641C74.2718 20.9019 73.5058 20.5208 72.5412 20.5208C71.887 20.5208 71.2948 20.7331 70.7635 21.1516C70.2322 21.5737 69.8858 22.1248 69.7232 22.8074C69.6425 23.1258 69.6003 23.3863 69.6003 23.5913V25.5209C69.6003 26.3627 69.8659 27.073 70.3948 27.6531C70.9261 28.232 71.6164 28.5226 72.468 28.5226C73.4649 28.5226 74.2408 28.1487 74.7957 27.4034C75.3519 26.6569 75.63 25.6728 75.63 24.45Z" fill="#074C3E"/>
                                    <path d="M93.6457 25.7838C93.6457 27.149 93.1579 28.2597 92.1784 29.1171C91.102 30.0542 89.6036 30.5221 87.6781 30.5221C85.9004 30.5221 84.4752 30.1893 83.3964 29.5224L84.0097 27.3793C85.1717 28.0619 86.4466 28.4044 87.8358 28.4044C88.8327 28.4044 89.6086 28.1849 90.166 27.7483C90.7209 27.3118 90.9977 26.7257 90.9977 25.9948C90.9977 25.3436 90.7693 24.7949 90.3112 24.3499C89.8556 23.9048 89.0946 23.4912 88.0319 23.1089C85.1394 22.0609 83.6944 20.5256 83.6944 18.5068C83.6944 17.1874 84.2009 16.1057 85.2151 15.2639C86.2257 14.4209 87.5739 14 89.2597 14C90.7631 14 92.012 14.2545 93.0089 14.7622L92.3472 16.8582C91.4161 16.3662 90.3634 16.1201 89.1852 16.1201C88.2542 16.1201 87.5267 16.3432 87.0053 16.7871C86.5646 17.1838 86.3436 17.6674 86.3436 18.2403C86.3436 18.8746 86.5956 19.3992 87.1021 19.8117C87.5428 20.1928 88.3436 20.6052 89.5055 21.0502C90.927 21.6062 91.971 22.2562 92.6427 23.0015C93.3118 23.7444 93.6457 24.6743 93.6457 25.7838Z" fill="#074C3E"/>
                                    <path d="M102.397 20.6414H99.4793V26.2601C99.4793 27.6892 99.9932 28.4032 101.024 28.4032C101.497 28.4032 101.889 28.3634 102.199 28.2838L102.273 30.2363C101.751 30.4256 101.065 30.5209 100.214 30.5209C99.1689 30.5209 98.3521 30.211 97.7624 29.5923C97.1752 28.9724 96.8797 27.9328 96.8797 26.4724V20.639H95.1417V18.7094H96.8797V16.5905L99.4793 15.8283V18.7094H102.397V20.6414Z" fill="#074C3E"/>
                                    <path d="M115.56 24.4029C115.56 26.1817 115.036 27.6422 113.99 28.7843C112.894 29.9601 111.439 30.5462 109.626 30.5462C107.878 30.5462 106.486 29.983 105.448 28.8566C104.41 27.7302 103.891 26.3084 103.891 24.5947C103.891 22.8013 104.425 21.3324 105.497 20.1904C106.565 19.0471 108.008 18.4754 109.822 18.4754C111.57 18.4754 112.976 19.0386 114.038 20.1662C115.053 21.2601 115.56 22.6723 115.56 24.4029ZM112.814 24.4861C112.814 23.4188 112.579 22.5035 112.103 21.7401C111.549 20.8163 110.755 20.3556 109.727 20.3556C108.663 20.3556 107.855 20.8175 107.3 21.7401C106.825 22.5047 106.59 23.4345 106.59 24.5344C106.59 25.6017 106.825 26.517 107.3 27.2792C107.873 28.203 108.672 28.6637 109.704 28.6637C110.714 28.6637 111.508 28.1934 112.08 27.2551C112.568 26.4772 112.814 25.5522 112.814 24.4861Z" fill="#074C3E"/>
                                    <path d="M124.163 20.9731C123.901 20.926 123.622 20.9019 123.329 20.9019C122.398 20.9019 121.678 21.2432 121.171 21.927C120.73 22.53 120.509 23.2922 120.509 24.2124V30.2846H117.864L117.889 22.3563C117.889 21.0225 117.855 19.8081 117.789 18.713H120.095L120.191 20.9272H120.265C120.544 20.1663 120.985 19.5536 121.588 19.0941C122.178 18.6805 122.815 18.4742 123.501 18.4742C123.746 18.4742 123.967 18.4911 124.163 18.5213V20.9731Z" fill="#074C3E"/>
                                    <path d="M136 23.9507C136 24.4113 135.969 24.7997 135.903 25.1169H127.963C127.994 26.2601 128.378 27.1345 129.115 27.7375C129.784 28.2766 130.649 28.5467 131.712 28.5467C132.888 28.5467 133.96 28.3646 134.925 27.9992L135.34 29.7841C134.212 30.2616 132.882 30.4992 131.346 30.4992C129.499 30.4992 128.049 29.971 126.993 28.9157C125.941 27.8605 125.413 26.4434 125.413 24.6658C125.413 22.9207 125.903 21.4675 126.885 20.3086C127.913 19.0712 129.302 18.4525 131.05 18.4525C132.767 18.4525 134.067 19.0712 134.95 20.3086C135.649 21.2914 136 22.5071 136 23.9507ZM133.476 23.2837C133.494 22.5216 133.321 21.8631 132.962 21.3071C132.504 20.592 131.8 20.235 130.853 20.235C129.988 20.235 129.284 20.5835 128.746 21.283C128.306 21.839 128.044 22.5059 127.963 23.2825H133.476V23.2837Z" fill="#074C3E"/>
                                    <path d="M44.6542 3.95533C44.6542 5.30356 44.2171 6.31845 43.3441 7C42.5356 7.62887 41.3865 7.94388 39.8982 7.94388C39.1602 7.94388 38.5287 7.91409 38 7.85453V0.487978C38.6897 0.384885 39.4326 0.332194 40.235 0.332194C41.6527 0.332194 42.7213 0.617417 43.442 1.18786C44.2493 1.83277 44.6542 2.75487 44.6542 3.95533ZM43.2859 3.98855C43.2859 3.11455 43.0358 2.44445 42.5356 1.9771C42.0353 1.51089 41.3048 1.27721 40.3427 1.27721C39.9341 1.27721 39.5862 1.30241 39.2977 1.3551V6.95533C39.4574 6.97824 39.7496 6.98855 40.1743 6.98855C41.1674 6.98855 41.9338 6.73311 42.4737 6.22223C43.0135 5.71134 43.2859 4.96679 43.2859 3.98855Z" fill="#074C3E"/>
                                    <path d="M51.9089 5.13288C51.9089 5.96335 51.6526 6.64376 51.1399 7.17755C50.6026 7.72623 49.8906 8 49.0015 8C48.1447 8 47.4624 7.73769 46.9535 7.21077C46.4459 6.685 46.192 6.02176 46.192 5.22222C46.192 4.38603 46.4533 3.69989 46.9783 3.16724C47.5033 2.6346 48.2091 2.3677 49.0981 2.3677C49.955 2.3677 50.6434 2.63001 51.1647 3.15579C51.66 3.66667 51.9089 4.32646 51.9089 5.13288ZM50.5629 5.17182C50.5629 4.67354 50.4465 4.24628 50.215 3.89004C49.9426 3.45934 49.555 3.24399 49.0511 3.24399C48.5298 3.24399 48.1336 3.45934 47.8611 3.89004C47.6284 4.24628 47.5132 4.68041 47.5132 5.19359C47.5132 5.69187 47.6296 6.11913 47.8611 6.47537C48.1422 6.90607 48.5335 7.12142 49.0387 7.12142C49.534 7.12142 49.9228 6.90264 50.2026 6.46392C50.4428 6.1008 50.5629 5.6701 50.5629 5.17182Z" fill="#074C3E"/>
                                    <path d="M61.6363 2.47766L59.8099 7.87743H58.6212L57.8647 5.53265C57.6728 4.94731 57.5167 4.36541 57.3954 3.78809H57.3719C57.2592 4.38144 57.1032 4.9622 56.9026 5.53265L56.099 7.87743H54.8967L53.1793 2.47766H54.5128L55.1728 5.04467C55.3325 5.65178 55.4638 6.23024 55.569 6.77778H55.5926C55.6891 6.32646 55.8489 5.75143 56.0742 5.05613L56.9026 2.47881H57.96L58.7537 5.00115C58.9456 5.61627 59.1016 6.20848 59.2218 6.77892H59.2577C59.3456 6.22337 59.4781 5.63116 59.6539 5.00115L60.3622 2.47881H61.6363V2.47766Z" fill="#074C3E"/>
                                    <path d="M68.3635 7.87744H67.0658V4.78466C67.0658 3.83162 66.6746 3.35511 65.8895 3.35511C65.5045 3.35511 65.1937 3.48569 64.9522 3.74801C64.7132 4.01032 64.5919 4.3196 64.5919 4.67355V7.8763H63.2942V4.02063C63.2942 3.5464 63.2782 3.03208 63.2472 2.47538H64.3876L64.4483 3.3196H64.4842C64.6352 3.05728 64.8606 2.84079 65.1565 2.66782C65.5082 2.46622 65.9019 2.36427 66.3328 2.36427C66.8776 2.36427 67.3308 2.52693 67.6911 2.85339C68.1394 3.25316 68.3635 3.84995 68.3635 4.64262V7.87744Z" fill="#074C3E"/>
                                    <path d="M71.9419 7.87743H70.6455V0H71.9419V7.87743Z" fill="#074C3E"/>
                                    <path d="M79.5817 5.13288C79.5817 5.96335 79.3254 6.64376 78.8128 7.17755C78.2754 7.72623 77.5622 8 76.6744 8C75.8163 8 75.1341 7.73769 74.6264 7.21077C74.1187 6.685 73.8649 6.02176 73.8649 5.22222C73.8649 4.38603 74.1262 3.69989 74.6512 3.16724C75.1762 2.6346 75.8819 2.3677 76.7697 2.3677C77.6278 2.3677 78.315 2.63001 78.8376 3.15579C79.3328 3.66667 79.5817 4.32646 79.5817 5.13288ZM78.2346 5.17182C78.2346 4.67354 78.1182 4.24628 77.8866 3.89004C77.6154 3.45934 77.2266 3.24399 76.7239 3.24399C76.2014 3.24399 75.8052 3.45934 75.534 3.89004C75.3012 4.24628 75.1861 4.68041 75.1861 5.19359C75.1861 5.69187 75.3025 6.11913 75.534 6.47537C75.8151 6.90607 76.2064 7.12142 76.7116 7.12142C77.2068 7.12142 77.5944 6.90264 77.8742 6.46392C78.1157 6.1008 78.2346 5.6701 78.2346 5.17182Z" fill="#074C3E"/>
                                    <path d="M85.862 7.87743H84.6968L84.6002 7.25544H84.5643C84.1656 7.75143 83.5973 8 82.8593 8C82.3083 8 81.8625 7.8362 81.527 7.51088C81.2224 7.21535 81.0701 6.84765 81.0701 6.41123C81.0701 5.75143 81.3672 5.24857 81.9653 4.90035C82.5621 4.55212 83.4016 4.38144 84.4826 4.38946V4.28866C84.4826 3.57732 84.0789 3.22223 83.2704 3.22223C82.6946 3.22223 82.1869 3.35625 81.7486 3.622L81.4849 2.83391C82.0272 2.52348 82.6971 2.3677 83.4871 2.3677C85.0125 2.3677 85.7778 3.11226 85.7778 4.60138V6.58992C85.7778 7.12944 85.8062 7.55899 85.862 7.87743ZM84.5148 6.02176V5.18901C83.0834 5.1661 82.3677 5.52921 82.3677 6.27721C82.3677 6.55899 82.4494 6.76976 82.6166 6.91065C82.7838 7.05155 82.9967 7.12142 83.2506 7.12142C83.5353 7.12142 83.8016 7.0378 84.0443 6.87171C84.2882 6.70447 84.438 6.49256 84.4937 6.23253C84.5073 6.17411 84.5148 6.10309 84.5148 6.02176Z" fill="#074C3E"/>
                                    <path d="M93.2355 7.87743H92.084L92.0233 7.01031H91.9874C91.6197 7.6701 90.9931 8 90.1127 8C89.4094 8 88.8238 7.74456 88.3594 7.23368C87.8951 6.72279 87.6636 6.05956 87.6636 5.24513C87.6636 4.37113 87.9149 3.66323 88.4201 3.12256C88.9092 2.61856 89.5085 2.36655 90.2217 2.36655C91.0055 2.36655 91.554 2.61054 91.8661 3.09966H91.8908V0H93.1897V6.42268C93.1897 6.94845 93.2046 7.43299 93.2355 7.87743ZM91.8908 5.60023V4.69988C91.8908 4.5441 91.8784 4.4181 91.8549 4.32188C91.7819 4.03322 91.6246 3.79038 91.3856 3.5945C91.1442 3.39862 90.8532 3.30011 90.5176 3.30011C90.0335 3.30011 89.6546 3.47766 89.376 3.8339C89.0999 4.19015 88.96 4.6449 88.96 5.20046C88.96 5.73425 89.0925 6.16724 89.3587 6.50057C89.6397 6.85567 90.0186 7.03322 90.4929 7.03322C90.9188 7.03322 91.2593 6.88545 91.5181 6.58877C91.7682 6.315 91.8908 5.98511 91.8908 5.60023Z" fill="#074C3E"/>
                                    <path d="M104.334 5.13288C104.334 5.96335 104.077 6.64376 103.565 7.17755C103.027 7.72623 102.317 8 101.426 8C100.571 8 99.8885 7.73769 99.3783 7.21077C98.8706 6.685 98.6168 6.02176 98.6168 5.22222C98.6168 4.38603 98.8781 3.69989 99.4031 3.16724C99.9281 2.6346 100.634 2.3677 101.524 2.3677C102.38 2.3677 103.069 2.63001 103.589 3.15579C104.085 3.66667 104.334 4.32646 104.334 5.13288ZM102.989 5.17182C102.989 4.67354 102.873 4.24628 102.641 3.89004C102.367 3.45934 101.981 3.24399 101.476 3.24399C100.956 3.24399 100.56 3.45934 100.286 3.89004C100.053 4.24628 99.938 4.68041 99.938 5.19359C99.938 5.69187 100.054 6.11913 100.286 6.47537C100.567 6.90607 100.958 7.12142 101.463 7.12142C101.959 7.12142 102.349 6.90264 102.629 6.46392C102.868 6.1008 102.989 5.6701 102.989 5.17182Z" fill="#074C3E"/>
                                    <path d="M111.311 7.87744H110.015V4.78466C110.015 3.83162 109.623 3.35511 108.837 3.35511C108.452 3.35511 108.141 3.48569 107.901 3.74801C107.661 4.01032 107.541 4.3196 107.541 4.67355V7.8763H106.242V4.02063C106.242 3.5464 106.227 3.03208 106.196 2.47538H107.335L107.396 3.3196H107.432C107.584 3.05728 107.809 2.84079 108.104 2.66782C108.457 2.46622 108.849 2.36427 109.282 2.36427C109.825 2.36427 110.278 2.52693 110.639 2.85339C111.088 3.25316 111.311 3.84995 111.311 4.64262V7.87744Z" fill="#074C3E"/>
                                    <path d="M120.044 3.37687H118.615V6.00001C118.615 6.66667 118.869 7.00001 119.372 7.00001C119.605 7.00001 119.798 6.98168 119.95 6.94388L119.983 7.85453C119.727 7.94388 119.39 7.98855 118.976 7.98855C118.463 7.98855 118.064 7.84422 117.776 7.55556C117.486 7.2669 117.342 6.78122 117.342 6.09966V3.37687H116.489V2.47767H117.342V1.48798L118.614 1.13288V2.47653H120.043V3.37687H120.044Z" fill="#074C3E"/>
                                    <path d="M126.914 7.87743H125.615V4.80756C125.615 3.83963 125.224 3.3551 124.44 3.3551C123.838 3.3551 123.427 3.63574 123.202 4.19702C123.163 4.315 123.141 4.45933 123.141 4.62886V7.87629H121.844V0H123.141V3.25429H123.166C123.574 2.66208 124.16 2.36655 124.919 2.36655C125.456 2.36655 125.901 2.52921 126.254 2.85567C126.693 3.26231 126.914 3.86712 126.914 4.66667V7.87743Z" fill="#074C3E"/>
                                    <path d="M134 4.9221C134 5.13745 133.983 5.31844 133.952 5.4662H130.06C130.077 5.99999 130.263 6.40664 130.623 6.68843C130.953 6.94043 131.377 7.06643 131.898 7.06643C132.473 7.06643 132.998 6.98167 133.471 6.81099L133.674 7.6449C133.121 7.86712 132.47 7.97823 131.715 7.97823C130.812 7.97823 130.1 7.73195 129.585 7.2394C129.067 6.74684 128.811 6.08591 128.811 5.25658C128.811 4.44215 129.05 3.76403 129.531 3.22336C130.034 2.64604 130.714 2.35739 131.572 2.35739C132.411 2.35739 133.049 2.64604 133.48 3.22336C133.828 3.68155 134 4.24856 134 4.9221ZM132.762 4.61168C132.772 4.25544 132.686 3.94845 132.51 3.68957C132.285 3.35624 131.942 3.189 131.478 3.189C131.054 3.189 130.709 3.35166 130.445 3.67812C130.23 3.93814 130.102 4.24856 130.06 4.61168H132.762Z" fill="#074C3E"/>
                                </svg>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Birlikte Çalışalım -->


@endsection