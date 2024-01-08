@extends('layout')
@section('content')
    <section class="sign-up section">
        <div class="container mt-5">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <form method="POST" autocomplete="off" id="formkayitol" class="sign-up__form me-lg-4 me-xxl-0 wow fadeInUp"
                        data-wow-duration="0.8s">
                        @token('kayitol', 3000)
                        <h3 style="color: #FF8541 !important" class="sign-up__title wow fadeInUp text-center"
                            data-wow-duration="0.8s">Kurumsal Üye Kayıt</h3>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Yetkili İsim Soyisim">
                            </div>
                            <div class="input-single">
                                <input type="email" class="form-control" name="mail" id="mail"
                                    placeholder="Mail Adresiniz">
                            </div>
                            <div class="input-single">
                                <input type="number" class="form-control" name="phone" id="phone"
                                    placeholder="Yetkili Telefon Numarası">
                            </div>
                            <div class="input-single">
                                <div class="input-pass">
                                    <input type="password" class="form-control" name="pass" id="pass"
                                        placeholder="Parola">
                                    <span class="password-eye-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="" id="" required />
                            <label class="form-check-label" for=""><a style="color: #00D9DA !important; "
                                    href="kkvk">Kişisel Verilerin Korunması Kanununu</a> ve <a
                                    style="color: #00D9DA !important; " href="kullanim-sartlari">Kullanıcı Sözleşmesini</a>
                                okudum ve onaylıyorum.</label>
                        </div>
                        <button type="button" id="kayitolbuton" class="btn_theme mt_32">Gönder<i
                                class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                </div>
                <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                    <div class="sign-up__thumb previewShapeY unset-xxl wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/finview/images/logo.png" alt="images">
                        <img src="assets/finview/images/sign-up.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
