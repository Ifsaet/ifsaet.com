@extends('layout')
@section('content')
    <section class="sign-up contact section mt-5">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center">
                <div class="col-8 col-lg-8 col-xxl-8">
                    <form method="POST" autocomplete="off" class="sign-up__form wow fadeInDown"
                        data-wow-duration="0.8s">
                        <h3 class="contact__title wow fadeInDown text-center" data-wow-duration="0.8s">İş Başvuru Formu</h3>
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
                                <select class="form-control cus-sel-active">
                                    <option data-display="boş">Şuanda Uygun Pozisyon Yoktur.</option>
                                  </select>
                            </div>
                            <div class="input-single">
                                <label for="ozgecmis">Özgeçmiş:</label>
                                <input type="file" class="form-control" name="ozgecmis" id="ozgecmis" required>
                            </div>
                        </div>
                        <button type="submit" class="btn_theme btn_theme_active mt-3" name="gonder" id="gonder">Gönder<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
