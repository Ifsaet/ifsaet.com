@extends('layout')
@section('content')

    
    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Sign Up</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/signin_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
  
    <!-- sign-up start -->
    <section class="sign-up section">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form me-lg-4 me-xxl-0 wow fadeInUp" data-wow-duration="0.8s">
                        <h3 class="sign-up__title wow fadeInUp" data-wow-duration="0.8s">Let’s Get Started!</h3>
                        <p class="sign-up__sub-title mb_40">Please enter your email address to join us</p>
                        <div class="sign-up__form-part">
                            <div class="input-group">
                                <div class="input-single">
                                    <label class="label" for="fname">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name..." required>
                                </div>
                                <div class="input-single">
                                    <label class="label" for="lname">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name..." required>
                                </div>
                            </div>
                            <div class="input-single">
                                <label class="label" for="email">Enter Your Email ID</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email..." required>
                            </div>
                            <div class="input-single">
                                <label class="label" for="password">Enter Your Password</label>
                                <div class="input-pass">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password..." required>
                                    <span class="password-eye-icon"></span>
                                </div>
                            </div>
                        </div>
                        <p class="have_account mt_24">Do you have an account? <a href="sign-in.html" class="signin">Signin</a></p>
                        <span id="msg"></span> 
                        <button type="submit" class="btn_theme mt_32" name="submit" id="submit">Sign Up<i class="bi bi-arrow-up-right"></i><span></span></button> 
                    </form>
                </div>
                <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                    <div class="sign-up__thumb previewShapeY unset-xxl wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/images/sign_up.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign-up end -->   
@endsection