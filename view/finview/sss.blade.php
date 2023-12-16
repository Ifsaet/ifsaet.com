@extends('layout')
@section('content')
<section class="section faq-section wow fadeInUp mt-5" data-wow-duration="0.8s" id="faqa">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__header">
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Sıkça Sorulan Sorular</h2>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-between gy-4 gy-lg-0">
                <div class="col-12 col-lg-12 col-xxl-12">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-1" aria-expanded="true" aria-controls="faq-accordion-1"> 
                                    How do I apply for a loan through your platform?
                                </button>
                            </h5>
                            <div id="faq-accordion-1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>

        
          
                    </div>
                </div>

            </div>
        </div>
</section>
@endsection