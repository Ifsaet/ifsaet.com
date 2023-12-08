@extends('layout')
@section('content')
    <section class="sign-up section">
        <div class="container mt-5">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form me-lg-4 me-xxl-0 wow fadeInUp" data-wow-duration="0.8s">
                        <h3 class="sign-up__title wow fadeInUp" data-wow-duration="0.8s">Hesap Oluşturun</h3>
                        <p class="sign-up__sub-title mb_40">Hesabınız Var Mı? <a style="color: #00D9DA !important; " href="">
                            Oturum Aç</a></p>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <input type="text" class="form-control" name="adsoyad" id="adsoyad" placeholder="Ad Soyad" >
                            </div>
                            <div class="input-single">
                                <input type="text" class="form-control" name="rumuz" id="rumuz" placeholder="Rumuz" >
                            </div>
                            <div class="input-single">
                                <input type="email" class="form-control" name="eposta" id="eposta" placeholder="E-Posta" >
                            </div>
                            <div class="input-single">
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefon" >
                            </div>
                            <div class="input-single">
                                <div class="input-pass">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Parola">
                                    <span class="password-eye-icon"></span>
                                </div>
                            </div>
                        </div>
                       <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for="">İfşanızda İsim ve Soyisminizin Görünmesini İstemiyorsanız Rumuz Kullanabilirsiniz. Rumuz Kullanımını Aktif Etmek İçin Tıklayınız. İsim ve Soy İsim Kayıt Esnasında Gereklidir. Rumuz Kullanımı İsteğe Bağlıdır.</label>
                       </div>
                       <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id=""
                            checked
                        />
                        <label class="form-check-label" for=""><a style="color: #00D9DA !important; " href="kkvk">Kişisel Verilerin Korunması Kanununu</a> ve <a style="color: #00D9DA !important; " href="kullanim-sartlari">Kullanıcı Sözleşmesini</a> okudum ve onaylıyorum.</label>
                       </div>
                       <button type="submit" class="btn_theme mt_32" name="gonder" id="gonder">Gönder<i class="bi bi-arrow-up-right"></i><span></span></button> 
                       <hr>
                       <button style="background-color: #3664A2 !important; border:#3664A2 !important;;" type="submit" class="btn_theme mt_32" name="gonder" id="gonder">Facebook ile Kayıt Ol<i class="bi bi-arrow-up-right"></i><span></span></button>
                       <button style="background-color: #EA4436 !important; border:#EA4436 !important;" type="submit" class="btn_theme mt_32" name="gonder" id="gonder">Google ile Kayıt Ol<i class="bi bi-arrow-up-right"></i><span></span></button>
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
    <script>
        // +90 ile başlayan telefon numarası için input mask
        $(document).ready(function(){
          $('#phone').mask('+90 (000) 000-00-00');
        });
      </script>
@endsection