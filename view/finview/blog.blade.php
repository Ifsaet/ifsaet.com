@extends('layout')
@section('content')
    <section class="blog section mt-5">
        <h1 class="text-center mt-5">Yazılar</h1>
        <div class="container mt-5">
            <div class="row gy-5 gy-lg-0">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="row g-4">
                        <div class="col-12 col-xl-4">
                            <div class="card card--secondary wow fadeInUp" data-wow-duration="0.8s">
                                <a href="blog-details.html" class="card--secondary__thumb zoom_effect">
                                    <img src="assets/finview/images/blog5.png" alt="image">
                                </a>
                                <div class="card--secondary__content">
                                    <p class="card--secondary__time mb-4"><span class="gap-6"><i
                                                class="bi bi-person-circle"></i>By Admin</span><i class="bi bi-dot"></i>
                                        <span class="gap-6"><i class="bi bi-calendar3"></i>12 Jan, 2023 </span>
                                    </p>
                                    <h4><a href="blog-details.html">Top 10 Tips for Getting a Personal Loan</a></h4>
                                    <p class="mt-4">Additionally, conduct thorough research to provide valuable and
                                        accurate information...</p>
                                    <a href="blog-details.html" class="mt_32 read_more">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation" class="nav_pagination wow fadeInUp" data-wow-duration="0.8s">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">
                                            <span class="prev-icon"></span>
                                        </a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link three_dots_box" href="#">
                                            <span class="three-dots"> </span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">
                                            <span class="next-icon"></span>
                                        </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
