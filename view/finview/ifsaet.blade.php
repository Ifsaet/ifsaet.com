@extends('layout')
@section('addHead')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.css">
    @include('static.ifsaetcontent.ifsaetstyle')
@endsection
@section('content')
    <section class="sign-up contact section">
        <div class="container mt-5">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5 col-xxl-4">
                    <div class="more-help wow fadeInUp" data-wow-duration="0.8s">
                        <div class="more-help__content list">
                            <div class="card card--small secili tabbutton" after="ifsabaslik" before="" content="ifsadetayi">
                                <div class="card--small-icon">
                                    <i class="bi bi-1-circle"></i>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;"
                                            href="">İfşa Detayı</a></h5>
                                </div>
                            </div>
                            <div class="card card--small tabbutton" after="ifsamedya" before="ifsadetayi" content="ifsabaslik">
                                <div class="card--small-icon">
                                    <i class="bi bi-2-circle"></i>
                                </div>
                                <div class="card--small-content ">
                                    <h5 class="card--small-title">
                                        <a id="ifsaetsola"  style="z-index: 5; color:white;"
                                            href="">Başlık</a></h5>
                                </div>
                            </div>
                            <div class="card card--small tabbutton" after="ifsamarka" before="ifsamarka" content="ifsamedya">
                                <div class="card--small-icon">
                                    <i class="bi bi-3-circle"></i>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;"
                                            href="">Medya</a></h5>
                                </div>
                            </div>
                            <div class="card card--small tabbutton" after="" before="ifsamedya" content="ifsamarka">
                                <div class="card--small-icon">
                                    <i class="bi bi-4-circle"></i>
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title"><a id="ifsaetsola" style="z-index: 5; color:white;"
                                            href="">Marka</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xxl-8">
                        <div class="sign-up__form-part">
                            @token('ifsaSaved',10000)
                            <!-- Birinci Div -->
                            @include('static.ifsaetcontent.ifsadetayi')
                            <!-- İkinci Div -->
                            @include('static.ifsaetcontent.ifsabaslik')
                            <!-- Üçüncü Div -->
                            @include('static.ifsaetcontent.medya')
                            <!-- Dördüncü Div -->
                            @include('static.ifsaetcontent.marka')
                        </div>
                    <div class="col-6 m-5">
                        <button style="width: 150px; display: block !important;" type="button" class="btn_theme btn_theme_active save">Kayıt Et<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('addFooter')
    @include('static.ifsaetcontent.ifsaetscript')
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.js"></script>
    <script>
        Dropzone.autoDiscover = false; // Dropzone'ın otomatik başlatılmasını devre dışı bırak
        var myDropzone = new Dropzone("#myDropzone", {
            paramName: "file",
            maxFilesize: 5,
            acceptedFiles: ".jpg, .jpeg, .png, .gif",
            addRemoveLinks: true,
            autoProcessQueue: false, // Otomatik yükleme modunu devre dışı bırakın
            dictDefaultMessage: '<p style="font-size: 14px;"> Fatura, ürün fotoğrafı, video vb. belge varsa ifşaya ekleyin.</p>',
            init: function () {
                var myDropzone = this;
                // Yükleme işlemini başlatmak için bir düğmeye veya başka bir tetikleyiciye bir tıklama olayı ekleyin
                $(document).off("click",".save").on("click",".save", function () {
                    myDropzone.processQueue(); // Yükleme işlemini başlatır
                });
            },
            success: function (file, response) {

            },
            error: function (file, errorMessage) {
                // Dosya yükleme hatası olduğunda yapılacak işlemler
            }
        });
    </script>
@endsection
