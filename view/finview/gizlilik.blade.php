@extends('layout')
@section('content')
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">about us</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/finview/images/about_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="calculator section" id="calculator">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-between align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="section__content ms-lg-12 ms-xxl-0 text-center">
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Empower Yourself with Accurate Loan Estimates</h2>
                        <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">Our loan calculators are powerful tools designed to assist you in making informed financial decisions. Whether you're planning a major purchase, estimating monthly payments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection