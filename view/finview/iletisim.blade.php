@extends('layout')
@section('content')
    <section class="sign-up contact section mt-5">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5 col-xxl-4">
                    <div class="more-help wow fadeInUp" data-wow-duration="0.8s">
                        <h3 class="contact__title wow fadeInUp" data-wow-duration="0.8s">Need more help?</h3>
                        <div class="more-help__content">
                            <div class="card card--small">
                                <div class="card--small-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Call Now</h5>
                                    <div class="gap-1 flex-column">
                                        <a href="tel:+1234567891" class="card--small-call">(123) 456-7891</a>
                                        <a href="tel:+1234567891" class="card--small-call">(907) 456-7891</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--small">
                                <div class="card--small-icon">
                                    <i class="bi bi-envelope-open"></i>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Email Address</h5>
                                    <div class="gap-1 flex-column">
                                        <a href="mailto:info@example.com" class="card--small-call">info@example.com</a>
                                        <a href="mailto:info@example.com" class="card--small-call">info@example.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--small">
                                <div class="card--small-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Location</h5>
                                    <div class="gap-1 flex-column">
                                        <p>Royal Ln. Mesa, New Jersey 45463</p>
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
