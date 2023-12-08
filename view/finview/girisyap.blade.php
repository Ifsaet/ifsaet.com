@extends('layout')
@section('content')
<section class="sign-up section">
            <div class="container mt-5">
                <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-12 col-lg-7 col-xxl-6">
                        <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form me-lg-4 me-xxl-0">
                            <h3 class="sign-up__title">Giriş Yap</h3>
                            <div class="sign-up__form-part mt-5">
                                <div class="input-single">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-Posta Adresinizi Girin">
                                </div>
                                <div class="input-single">
                                    <div class="input-pass">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Şifrenizi Girin">
                                        <span class="password-eye-icon"></span>
                                    </div>
                                </div>
                                <a href="#" class="fs-small forget-pass">Şifrenizi mi Unuttunuz?</a>
                            </div>
                            <p class="have_account">Hesabınız Yok Mu? <a href="sign-up.html" class="signin">Kayıt Ol</a></p>
                            <span id="msg"></span> 
                            <button type="submit" class="btn_theme mt_32" name="submit" id="submit">Giriş Yap<i class="bi bi-arrow-up-right"></i><span></span></button>
                        </form>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                        <div class="sign-up__thumb previewShapeY unset-xxl">
                            <img src="assets/finview/images/sign_up.png" alt="images">
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection