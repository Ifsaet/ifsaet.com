@extends('layout')
@section('addHeader')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.css">
@endsection
@section('content')
<section class="sign-up contact section">
    <div class="container mt-5">
        <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-5 col-xxl-4">
                <div class="more-help wow fadeInUp" data-wow-duration="0.8s">
                    <div class="more-help__content">
                        <div class="card card--small" id="ifsacard1">
                            <div class="card--small-icon">
                                <i class="bi bi-1-circle"></i>
                            </div>
                            <div class="card--small-content">
                                <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;" href="">İfşa Detayı</a></h5>
                            </div>
                        </div>
                        <div class="card card--small" id="ifsacard2">
                            <div class="card--small-icon">
                                <i class="bi bi-2-circle"></i>
                            </div>
                            <div class="card--small-content">
                                <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;" href="">Başlık</a></h5>
                            </div>
                        </div>
                        <div class="card card--small" id="ifsacard3">
                            <div class="card--small-icon">
                                <i class="bi bi-3-circle"></i>
                            </div>
                            <div class="card--small-content">
                                <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;" href="">Hesap</a></h5>
                            </div>
                        </div>
                        <div class="card card--small" id="ifsacard3">
                            <div class="card--small-icon">
                                <i class="bi bi-3-circle"></i>
                            </div>
                            <div class="card--small-content">
                                <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;" href="">Medya</a></h5>
                            </div>
                        </div>
                        <div class="card card--small" id="ifsacard3">
                            <div class="card--small-icon">
                                <i class="bi bi-4-circle"></i>
                            </div>
                            <div class="card--small-content">
                                <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;" href="">Marka</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xxl-8">
                <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form wow fadeInDown" data-wow-duration="0.8s">
                    <div class="sign-up__form-part">
                        <!-- Birinci Div -->
                        <div id="ifsadetayi" class="input-single">
                            <div class="input-single d-flex flex-column align-items-center">
                                <label style="color: black;" class="label mb-3" for="ifsa">İfşa Oluştur</label>
                                <textarea class="form-control mb-3" id="ifsa" name="ifsa" rows="8" placeholder="Ürün veya hizmetle ilgili nasıl bir sorun yaşadınız?" required></textarea>
                                <button style="width: 150px;" type="submit" class="btn_theme btn_theme_active" name="submit" id="submit">Devam Et<i class="bi bi-arrow-up-right"></i><span></span></button>
                            </div>
                        </div>
                        <!-- İkinci Div -->
                            <div id="ifsabaslik" class="input-single">
                                <div class="tag">
                                    <div class="tag-content text-center">
                                        <a href="#" class="btn_theme mt-2">Bireysel Olarak İfşa Et<span></span></a>
                                        <a href="#" class="btn_theme mt-2">Kurumsal Olarak İfşa Et<span></span></a>
                                        <a style="background-color:transparent; color:gray;" href="#" class="btn_theme mt-2">Geri Dön<span></span></a> 
                                    </div>
                                </div>
                                <label style="color: black;" class="label text-center" for="baslik">İfşa Başlığı</label>
                                <input type="text" class="form-control" name="baslik" id="baslik" required>
                                <button style="width: 150px;" type="submit" class="btn_theme btn_theme_active" name="submit" id="submit">Devam Et<i class="bi bi-arrow-up-right"></i><span></span></button>
                            </div>
                        <!-- Üçüncü Div -->
                        <div id="ifsamedya" class="input-single">
                            <div class="input-single">
                                <a style="background-color:transparent; color:gray; width:120px;" href="#" class="btn_theme mt-2">Geri Dön<span></span></a> 
                                <label style="color: black;" class="label" for="youtube">Youtube Videosu</label>
                                <p style="font-size: 14px;">İfşanızla ilgili bir videonuz varsa YouTube'a yükleyin ve adresini bizimle paylaşın.</p>
                                <input type="text" class="form-control" name="youtube" id="youtube" placeholder="https://www.youtube.com/watch?v=">
                            </div><hr>
                            <div class="input-single">
                                <label style="color: black;" class="label" for="youtube">Medya</label>
                                <p style="font-size: 14px;">Fatura, ürün fotoğrafı, video vb. belge varsa ifşaya ekleyin.</p>
                                <!-- BURAYA DROPZONE EKLENECEK -->
                                <button style="width: 150px;" type="submit" class="btn_theme btn_theme_active mt_40" name="submit" id="submit">Devam Et<i class="bi bi-arrow-up-right"></i><span></span></button>
                            </div>
                        </div>
                        <!-- Dördüncü Div -->
                        <div id="ifsamarka" class="input-single">
                            <div class="input-single">
                                <a style="background-color:transparent; color:gray; width:120px;" href="#" class="btn_theme mt-2">Geri Dön<span></span></a> 
                                <label style="color: black;" class="label text-center" for="youtube">Platform</label>
                                <p class="text-center" style="font-size: 14px;">İfşa edeceğiniz markayı nasıl bulmak istiyorsunuz?</p>
                                <div id="search-autocomplete" class="form-outline" data-mdb-input-init>
                                    <input type="search" id="form1" class="form-control" />
                                  </div>
                            </div>
                            <div class="input-single">
                                <button style="width: 150px;" type="submit" class="btn_theme btn_theme_active mt_40" name="submit" id="submit">Devam Et<i class="bi bi-arrow-up-right"></i><span></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('addFooter')
<script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.js"></script>
@endsection
