@extends('layout')
@section('addHead')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
@endsection
@section('content')
    <section class="sign-up section">
        <div class="container mt-5">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <form method="POST" autocomplete="off" id="formkayitol" class="sign-up__form me-lg-4 me-xxl-0 wow fadeInUp" data-wow-duration="0.8s">
                        @token('kayitol',3000)
                        <h3 class="sign-up__title wow fadeInUp" data-wow-duration="0.8s">Hesap Oluşturun</h3>
                        <p class="sign-up__sub-title mb_40">Hesabınız Var Mı? <a style="color: #00D9DA !important; " href="">
                                Oturum Aç</a></p>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Ad Soyad" >
                            </div>
                            <div class="input-single">
                                <input type="text" class="form-control" name="user" id="user" placeholder="Kullanıcı Adı" >
                            </div>
                            <div class="input-single rumuzdiv" style="display: none;">
                                <input type="text" class="form-control" name="rumuz" id="rumuz" placeholder="Rumuz" >
                            </div>
                            <div class="input-single">
                                <input type="email" class="form-control" name="mail" id="mail" placeholder="E-Posta" >
                            </div>
                            <div class="input-single">
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefon" >
                            </div>
                            <div class="input-single">
                                <div class="input-pass">
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Parola">
                                    <span class="password-eye-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="rumuzchk"/>
                            <label class="form-check-label" for="">İfşanızda İsim ve Soyisminizin Görünmesini İstemiyorsanız Rumuz Kullanabilirsiniz. Rumuz Kullanımını Aktif Etmek İçin Tıklayınız. İsim ve Soy İsim Kayıt Esnasında Gereklidir. Rumuz Kullanımı İsteğe Bağlıdır.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" required/>
                            <label class="form-check-label" for=""><a style="color: #00D9DA !important; " href="kkvk">Kişisel Verilerin Korunması Kanununu</a> ve <a style="color: #00D9DA !important; " href="kullanim-sartlari">Kullanıcı Sözleşmesini</a> okudum ve onaylıyorum.</label>
                        </div>
                        <button type="button" id="kayitolbuton" class="btn_theme mt_32">Gönder<i class="bi bi-arrow-up-right"></i><span></span></button>
                        <hr>
                        <button style="background-color: #3664A2 !important; border:#3664A2 !important;;" type="button" class="btn_theme mt_32">Facebook ile Kayıt Ol<i class="bi bi-arrow-up-right"></i><span></span></button>
                        <button style="background-color: #EA4436 !important; border:#EA4436 !important;" type="button" class="btn_theme mt_32">Google ile Kayıt Ol<i class="bi bi-arrow-up-right"></i><span></span></button>
                        <span id="msg"></span>

                    </form>
                </div>
                <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                    <div class="sign-up__thumb previewShapeY unset-xxl wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/finview/images/sign_up.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('addFooter')
        <script>
            $(document).ready(function() {
                //$("#phone").inputmask({"mask": "(999) 999-9999"});
                $("#rumuzchk").change(function() {
                    if ($(this).is(":checked")) {
                        $('.rumuzdiv').css('display', 'block');
                    } else {
                        $('.rumuzdiv').css('display', 'none');
                    }
                });
            });
        </script>
@endsection