@extends('layout')
@section('content')
    <section class="blog-details section mt-5">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="gap-4 flex-column">
                        <div class="card card--secondary">
                            <div class="card--secondary__thumb wow fadeInUp text-center" data-wow-duration="0.8s">
                                <img id="blogdetailresim" src="assets/finview/images/blog_details.png" alt="image">
                            </div>
                            <div class="card--secondary__content">
                                <div class="card--secondary__content-part wow fadeInDown" data-wow-duration="0.8s">
                                    <p class="card--secondary__time mb-4 justify-content-center"><span class="gap-6"><i
                                                class="bi bi-person-circle"></i>By Admin</span><i class="bi bi-dot"></i>
                                        <span class="gap-6"><i class="bi bi-calendar3"></i>12 Jan, 2023 </span>
                                    </p>
                                    <h2 class="mb-4 text-center">The Benefits of Consolidating Your Student Loans</h2>
                                    <p class="card--secondary__text">Managing multiple student loans can be overwhelming,
                                        with varying interest rates, payment due dates, and loan servicers to keep track of.
                                        Consolidating your student loans offers several benefits that can simplify repayment
                                        and potentially save you money. In this article, we will explore the advantages of
                                        consolidating your student loans and how it can positively impact your financial
                                        situation.</p>
                                </div>
                                <div class="tag-area wow fadeInDown justify-content-center" data-wow-duration="0.8s">
                                    <div class="tag">
                                        <p class="tag__name">Share -</p>
                                        <div class="social">
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i
                                                    class="bi bi-facebook"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i
                                                    class="bi bi-twitter"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i
                                                    class="bi bi-pinterest"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i
                                                    class="bi bi-twitch"></i><span></span></a>
                                            <a href="#" class="btn_theme social_box btn_bg_white"><i
                                                    class="bi bi-skype"></i><span></span></a>
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
