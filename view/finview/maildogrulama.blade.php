@extends('layout')
@section('content')
<section class="sign-up section">
    <div class="container mt-5">
        <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
            <div class="col-12 col-lg-7 col-xxl-6">
                <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form me-lg-4 me-xxl-0">
                    <h3 class="sign-up__title text-center">Kodu Giriniz</h3>
                    <div class="sign-up__form-part mt-4">
                        <div class="input-single">
                            <input type="text" class="form-control" name="dogrulamakodu" id="dogrulamakodu" placeholder="Mailinize Gelen Doğrulama Kodunu Giriniz">
                        </div>
                    </div>
                    <button type="submit" class="btn_theme mt-32 d-block mx-auto mt-4" name="submit" id="submit">Kodu Gönder<i class="bi bi-arrow-up-right"></i><span></span></button>
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