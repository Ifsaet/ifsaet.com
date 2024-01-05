@extends('layout')
@section('content')
    <section class="sign-up contact section mt-5">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center">
                <div class="col-8 col-lg-8 col-xxl-8">
                    <form method="POST" autocomplete="off" class="sign-up__form wow fadeInDown"
                        data-wow-duration="0.8s">
                        <h3 class="contact__title wow fadeInDown text-center" data-wow-duration="0.8s">Bireysel İletişim Formu</h3>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <input type="text" class="form-control" name="adsoyad" id="adsoyad"
                                    placeholder="Ad Soyad" required>
                            </div>
                            <div class="input-single">
                                <input type="tel" class="form-control" name="telefon" id="telefon"
                                    placeholder="Telefon" required>
                            </div>
                            <div class="input-single">
                                <input type="text" class="form-control" name="konu" id="konu" placeholder="Konu"
                                    required>
                            </div>
                            <div class="input-single">
                                <textarea class="form-control" id="mesaj" name="mesaj" rows="8" placeholder="Mesajınız" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn_theme btn_theme_active mt-3" name="gonder" id="gonder">Gönder<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
