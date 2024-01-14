@extends('layout')
@section('content')
<section class="error-page text-center section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xxl-8">
                <div class="error-page__thumb wow fadeInDown" data-wow-duration="0.8s">
                    <img src="assets/finview/images/404.gif">
                </div>
            </div>
            <div class="col-12 col-md-8 col-xxl-6">
                <div class="section__content">
                    <h2 style="margin-top: -50px;" class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Sayfa Bulunamadı</h2> 
                    <a href="index" class="btn_theme btn_theme_active wow fadeInUp" data-wow-duration="0.8s">Geri Dön<i class="bi bi-arrow-up-right"></i><span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection