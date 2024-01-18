@extends('layout')
@section('content')
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-12">
                    <div class="banner__content mt-2">
                        <nav id="profilnavbar" aria-label="breadcrumb">
                            <a id="profilnavbara" href="index"><svg fill="#9399A1" width="25px" height="25px" viewBox="-6.4 -6.4 44.80 44.80" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#9399A1" stroke-width="0.64">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>return</title>
                                        <path
                                            d="M0 21.984q0.032-0.8 0.608-1.376l4-4q0.448-0.48 1.056-0.576t1.12 0.128 0.864 0.736 0.352 1.12v1.984h18.016q0.8 0 1.408-0.576t0.576-1.408v-8q0-0.832-0.576-1.408t-1.408-0.608h-16q-0.736 0-1.248-0.416t-0.64-0.992 0-1.152 0.64-1.024 1.248-0.416h16q2.464 0 4.224 1.76t1.76 4.256v8q0 2.496-1.76 4.224t-4.224 1.76h-18.016v2.016q0 0.64-0.352 1.152t-0.896 0.704-1.12 0.096-1.024-0.544l-4-4q-0.64-0.608-0.608-1.44z">
                                        </path>
                                    </g>
                                </svg>Siteye Geri Dön</a>
                            <a id="profilnavbara" href="profil"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#9399A1">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M3 16.5L9 10L13 16L21 6.5" stroke="##9399A1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>Profilim</a>
                            <a id="profilnavbara" href="ifsalarim"><svg width="25px" height="25px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.1631 5H15.8381C17.8757 5.01541 19.5151 6.67943 19.5001 8.717V13.23C19.5073 14.2087 19.1254 15.1501 18.4384 15.8472C17.7515 16.5442 16.8158 16.9399 15.8371 16.947H9.1631L5.5001 19V8.717C5.49291 7.73834 5.8748 6.79692 6.56175 6.09984C7.24871 5.40276 8.18444 5.00713 9.1631 5Z" stroke="#9399A1" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.50009 11C7.50009 10.4477 7.94781 10 8.50009 10C9.05238 10 9.50009 10.4477 9.50009 11C9.50009 11.5523 9.05238 12 8.50009 12C8.23488 12 7.98052 11.8946 7.79298 11.7071C7.60545 11.5196 7.50009 11.2652 7.50009 11Z" stroke="#9399A1" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5001 11C11.5001 10.4477 11.9478 10 12.5001 10C13.0524 10 13.5001 10.4477 13.5001 11C13.5001 11.5523 13.0524 12 12.5001 12C11.9478 12 11.5001 11.5523 11.5001 11Z" stroke="#9399A1" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5001 11C15.5001 10.4477 15.9478 10 16.5001 10C17.0524 10 17.5001 10.4477 17.5001 11C17.5001 11.5523 17.0524 12 16.5001 12C15.9478 12 15.5001 11.5523 15.5001 11Z" stroke="#9399A1" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>İfşalarım</a>
                            <a id="profilnavbara" href="bildirimlerim"> <svg width="25px" height="25px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9399A1" stroke="#9399A1">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>notice-active</title>
                                        <desc>Created with sketchtool.</desc>
                                        <g id="web-app" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="notice-active" fill="#9399A1">
                                                <path
                                                    d="M15.0846417,4.85258583 C15.3698859,3.78571001 16.3431867,3 17.5,3 C18.8807119,3 20,4.11928813 20,5.5 C20,6.82802369 18.9645064,7.9141949 17.6568748,7.99515796 C17.8790698,8.62208363 18,9.29691944 18,10 L18,16 L19,16 C19.5499992,16 20,16.4500008 20,17 C20,17.5499992 19.5499992,18 19,18 L15,18 L15,19 C15,20.6568542 13.6568542,22 12,22 C10.3431458,22 9,20.6568542 9,19 L9,18 L5,18 C4.44999981,18 4,17.5499992 4,17 C4,16.4500008 4.44999981,16 5,16 L6,16 L6,10 C6,7.02700371 8.16228666,4.55903653 11,4.08295844 L11,3 C11,2.44771525 11.4477153,2 12,2 C12.5522847,2 13,2.44771525 13,3 L13,4.08295844 C13.7514465,4.20902728 14.4555302,4.47477291 15.0846417,4.85258583 Z M12,20 C12.5522847,20 13,19.5522847 13,19 C13,18.7251922 13,18.3918589 13,18 L11,18 C11,18.470365 11,18.8036984 11,19 C11,19.5522847 11.4477153,20 12,20 Z M8,16 L16,16 L16,10 C16,7.790861 14.209139,6 12,6 C9.790861,6 8,7.790861 8,10 L8,16 Z"
                                                    id="Shape"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>Bildirimlerim</a>
                            <a id="profilnavbara" href="bildirim-tercihlerim"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M16 10.5H8M16 10.5L13 13.5M16 10.5L13 7.5M12 20H16M12 20H8M12 20V16M12 16H5C4.44772 16 4 15.5523 4 15V6C4 5.44771 4.44772 5 5 5H19C19.5523 5 20 5.44772 20 6V7M12 16H19C19.5523 16 20 15.5523 20 15V11" stroke="#9399A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>Bildirim Tercihlerim</a>
                            <a id="profilnavbara" href="kaydedilenler"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M17 20.75H7C6.27065 20.75 5.57118 20.4603 5.05546 19.9445C4.53973 19.4288 4.25 18.7293 4.25 18V6C4.25 5.27065 4.53973 4.57118 5.05546 4.05546C5.57118 3.53973 6.27065 3.25 7 3.25H14.5C14.6988 3.25018 14.8895 3.32931 15.03 3.47L19.53 8C19.6707 8.14052 19.7498 8.33115 19.75 8.53V18C19.75 18.7293 19.4603 19.4288 18.9445 19.9445C18.4288 20.4603 17.7293 20.75 17 20.75ZM7 4.75C6.66848 4.75 6.35054 4.8817 6.11612 5.11612C5.8817 5.35054 5.75 5.66848 5.75 6V18C5.75 18.3315 5.8817 18.6495 6.11612 18.8839C6.35054 19.1183 6.66848 19.25 7 19.25H17C17.3315 19.25 17.6495 19.1183 17.8839 18.8839C18.1183 18.6495 18.25 18.3315 18.25 18V8.81L14.19 4.75H7Z"
                                            fill="#9399A1"></path>
                                        <path d="M16.75 20H15.25V13.75H8.75V20H7.25V13.5C7.25 13.1685 7.3817 12.8505 7.61612 12.6161C7.85054 12.3817 8.16848 12.25 8.5 12.25H15.5C15.8315 12.25 16.1495 12.3817 16.3839 12.6161C16.6183 12.8505 16.75 13.1685 16.75 13.5V20Z" fill="#9399A1"></path>
                                        <path
                                            d="M12.47 8.75H8.53001C8.3606 8.74869 8.19311 8.71403 8.0371 8.64799C7.88109 8.58195 7.73962 8.48582 7.62076 8.36511C7.5019 8.24439 7.40798 8.10144 7.34437 7.94443C7.28075 7.78741 7.24869 7.61941 7.25001 7.45V4H8.75001V7.25H12.25V4H13.75V7.45C13.7513 7.61941 13.7193 7.78741 13.6557 7.94443C13.592 8.10144 13.4981 8.24439 13.3793 8.36511C13.2604 8.48582 13.1189 8.58195 12.9629 8.64799C12.8069 8.71403 12.6394 8.74869 12.47 8.75Z"
                                            fill="#9399A1"></path>
                                    </g>
                                </svg>Kaydedilenler</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="loan-reviews loan-reviews--tertiary section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">
                    <div class="d-flex flex-column gap-4">
                        <div id="ifsalarimcard" class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs justify-content-end my-2">
                                    <li class="nav-item">
                                        <a class="btn btn-danger" href="#">Sil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-primary" style="margin-left: 10px;" href="#">Düzenle</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <img src="assets/finview/images/testimonials2.png">
                                <a class="link-primary" style="margin-left: 10px;" href="">Firma Adı</a>
                                <h5 class="card-title mt-3"><a href="">İfşa Başlığı</a></h5>
                                <p class="card-text">İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği.
                                    İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa
                                    İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa
                                    İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa
                                    İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa
                                    İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa
                                    İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa İçeriği. İfşa
                                    İçeriği.</p>
                            </div>
                        </div>
                        <div id="ifsalarimcard" class="card">
                            <div class="card-body">
                                <h5 class="card-title mt-3 text-center">İfşanız Bulunmamaktadır.</h5>
                                <img class="mt-2" src="assets/finview/images/null.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
