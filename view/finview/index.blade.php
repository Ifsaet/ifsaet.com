@extends('layout')
@section('content')
    <!-- Slider Alanı -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6 mt-5">
                    <div class="section__content" style="z-index: 4">
                        <h1 id="sliderh1" style="color:white !important; font-size:45px;"
                            class="section__content-title display-3 wow fadeInUp" data-wow-duration="0.8s">Markaları <span
                                style="color: #00d9da">Keşfedin</span> ve <span style="color: #FF8541">Yorumlayın!</span>
                        </h1>
                        <div class="search-box2">
                            <div class="row">
                                <input autocomplete="off" id="input-box2" class="form-control"
                                    style="height:60px; width:100%;" type="text"
                                    placeholder="Aradığın Kurum/Markayı Bul">
                            </div>
                            <div class="result-box2">
                            </div>
                        </div>
                    </div>
                    <div id="sliderkart" class="container mt-3">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg width="45px" height="45px" viewBox="0 0 281.25 281.25" id="svg2"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:cc="http://creativecommons.org/ns#"
                                            xmlns:dc="http://purl.org/dc/elements/1.1/"
                                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                            xmlns:svg="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000"
                                            stroke-width="0.0028125">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <defs id="defs4"></defs>
                                                <g id="layer1" transform="translate(6402.3564,-4296.9987)">
                                                    <g id="g31697" transform="translate(-2269.2425,-389.12259)">
                                                        <path
                                                            d="m -4043.383,4779.0067 a 4.6875,4.6875 0 0 0 -0.3699,0.073 4.6875,4.6875 0 0 0 -0.2563,-0.033 c -14.1652,1.9133 -27.2426,9.7973 -35.5481,21.4307 -8.5118,11.9223 -11.5086,26.7027 -11.0285,40.7995 0.7792,22.88 10.0958,44.0304 20.149,63.5102 3.9318,7.6184 8.2455,15.5866 14.6392,22.3352 6.4503,6.8084 15.1917,12.2452 25.2228,12.865 8.0253,0.4958 16.0288,-2.2669 22.0606,-7.5733 a 4.6875,4.6875 0 0 0 0.024,-0.015 c 4.226,-3.2432 9.5407,-5.1768 14.8626,-5.4071 6.066,-0.2625 12.322,1.7106 17.1387,5.4071 a 4.6875,4.6875 0 0 0 0.029,0.018 c 6.0312,5.3041 14.0315,8.0653 22.0551,7.5696 10.0311,-0.6198 18.7724,-6.0566 25.2227,-12.865 6.3937,-6.7486 10.7094,-14.7168 14.6412,-22.3352 10.0531,-19.4798 19.3697,-40.6302 20.1489,-63.5102 0.4801,-14.0968 -2.5185,-28.8791 -11.0303,-40.8014 -8.3055,-11.6334 -21.381,-19.5155 -35.5463,-21.4288 a 4.6875,4.6875 0 0 0 -0.6244,-0.04 z m 0.3589,9.375 h 101.0705 c 11.4053,1.6203 22.2087,8.1689 28.9014,17.5434 6.9696,9.7622 9.7175,22.5003 9.2908,35.0317 -0.6986,20.5116 -9.2527,40.4295 -19.1107,59.5313 -3.8579,7.4751 -7.828,14.6059 -13.1159,20.1873 -5.2315,5.5218 -12.0718,9.5278 -18.9935,9.9555 -5.552,0.343 -11.3828,-1.6969 -15.5091,-5.4273 a 4.6875,4.6875 0 0 0 -0.015,-0.01 4.6875,4.6875 0 0 0 -0.2765,-0.2325 c -6.6134,-5.0754 -14.9202,-7.6994 -23.2489,-7.3389 -7.2877,0.3154 -14.3822,2.8979 -20.1691,7.3389 a 4.6875,4.6875 0 0 0 -0.1886,0.1886 4.6875,4.6875 0 0 0 -0.1007,0.051 c -4.1263,3.7304 -9.9552,5.7703 -15.5072,5.4273 -6.9217,-0.4277 -13.762,-4.4337 -18.9935,-9.9555 -5.2879,-5.5814 -9.2579,-12.7122 -13.1158,-20.1873 -9.8581,-19.1018 -18.4122,-39.0197 -19.1108,-59.5313 -0.4267,-12.5314 2.3194,-25.2695 9.289,-35.0317 6.6927,-9.3745 17.4979,-15.9231 28.9032,-17.5434 z m 89.0368,16.6425 c -2.6446,0.059 -5.2816,0.5031 -7.8186,1.3348 a 4.6875,4.6875 0 0 0 -2.9956,5.9143 4.6875,4.6875 0 0 0 5.9143,2.9938 c 3.7291,-1.2225 7.9835,-1.1387 11.662,0.2289 3.6784,1.3676 6.9548,4.0833 8.9795,7.4451 2.6048,4.3249 3.2169,10.0401 1.5875,14.8187 a 4.6875,4.6875 0 0 0 2.9242,5.9491 4.6875,4.6875 0 0 0 5.9491,-2.9242 c 2.559,-7.5046 1.661,-15.8874 -2.4298,-22.6795 -3.1485,-5.2276 -8.022,-9.2698 -13.742,-11.3964 -2.86,-1.0633 -5.8746,-1.6254 -8.8971,-1.6846 -0.3778,-0.01 -0.7556,-0.01 -1.1335,0 z"
                                                            id="path8912"
                                                            style="color:#000000;fill:#000000;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none">
                                                        </path>
                                                        <path
                                                            d="m -4027.4034,4713.4495 c -5.2285,0.042 -10.4418,1.027 -15.3332,2.9278 a 4.6875,4.6875 0 0 0 -0.1923,0.1117 4.6875,4.6875 0 0 0 -0.6281,0.3662 4.6875,4.6875 0 0 0 -0.5969,0.4267 4.6875,4.6875 0 0 0 -0.4852,0.5438 4.6875,4.6875 0 0 0 -0.4303,0.5841 4.6875,4.6875 0 0 0 -0.2985,0.6775 4.6875,4.6875 0 0 0 -0.2252,0.683 4.6875,4.6875 0 0 0 -0.071,0.2142 c -1.5322,9.3059 0.7687,19.0187 6.3116,26.6492 5.5429,7.6305 14.0661,12.8184 23.3899,14.2383 5.9354,0.9039 11.9993,0.232 17.569,-1.8055 -1.3937,6.5458 -1.4701,13.3591 -0.1794,19.9402 h 9.6112 c -2.3214,-9.5013 -1.045,-19.9938 3.6071,-28.5717 5.7994,-10.6935 17.0215,-18.5596 29.0516,-20.365 a 4.6875,4.6875 0 0 0 3.9404,-5.3321 4.6875,4.6875 0 0 0 -5.3302,-3.9386 c -11.8552,1.7792 -22.7709,8.0402 -30.4285,17.1497 -2.4139,-5.013 -5.7826,-9.5566 -9.9243,-13.3099 -5.9255,-5.37 -13.3089,-9.0235 -21.1725,-10.4773 -1.9658,-0.3634 -3.9525,-0.5871 -5.9436,-0.6739 -0.7466,-0.033 -1.4943,-0.044 -2.2412,-0.038 z m 0.6647,9.3786 c 1.953,0.016 3.9027,0.1994 5.8154,0.553 6.1208,1.1316 11.9698,4.0252 16.582,8.205 4.4159,4.0019 7.7574,9.2581 9.56,14.9542 -5.5522,4.1615 -12.9447,6.1023 -19.7699,5.0629 -6.7585,-1.0292 -13.1991,-4.95 -17.2174,-10.481 -3.4843,-4.7971 -5.2509,-10.951 -4.9347,-16.9006 3.2228,-0.9494 6.5988,-1.4214 9.9646,-1.3935 z"
                                                            id="path9362"
                                                            style="color:#000000;fill:#333333;fill-opacity:1;stroke-linecap:round;stroke-linejoin:round;-inkscape-stroke:none">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">Yeme-İçme</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg width="45px" height="45px" viewBox="0 0 32.00 32.00" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                stroke="#CCCCCC" stroke-width="0.768"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title>airplane</title>
                                                <desc>Created with Sketch Beta.</desc>
                                                <defs> </defs>
                                                <g id="Page-1" stroke-width="0.00032" fill="none" fill-rule="evenodd"
                                                    sketch:type="MSPage">
                                                    <g id="Icon-Set" sketch:type="MSLayerGroup"
                                                        transform="translate(-308.000000, -307.000000)" fill="#000000">
                                                        <path
                                                            d="M337.854,311.163 L330.402,318.642 L334.908,331.037 C335.13,331.747 334.992,332.627 334.705,332.914 C333.89,333.73 333.309,333.342 333,333 L325.795,323.266 L317.819,331.27 L319.255,336.6 C318.688,336.032 315.38,331.602 315.301,331.521 C315.248,331.469 310.896,328.225 310.427,327.753 L315.538,329.133 L323.665,321.152 L314,314 C313.723,313.752 313.358,313.02 314.104,312.271 C314.392,311.984 315.262,311.897 315.97,312.12 L328.311,316.592 L335.864,309.175 C336.392,308.647 337.425,308.701 337.888,309.164 C338.35,309.627 338.382,310.636 337.854,311.163 L337.854,311.163 Z M339.207,307.82 C337.961,306.57 335.771,306.863 334.518,308.119 L328.141,314.481 L316.313,310.061 C315.18,309.768 314.039,309.389 312.634,310.798 C311.917,311.516 310.427,313.01 312.634,315.221 L320.744,321.861 L315.467,327.127 L310.543,325.896 C309.813,325.708 309.321,325.855 308.946,326.269 C308.757,326.505 307.386,327.521 308.342,328.479 L314.067,332.933 L318.521,338.658 C319.213,339.352 319.856,338.919 320.735,338.084 C321.292,337.526 321.172,337.239 321.004,336.426 L319.892,331.536 L325.133,326.277 L331.763,334.389 C333.969,336.6 335.46,335.105 336.177,334.389 C337.583,332.979 337.205,331.837 336.912,330.702 L332.529,318.854 L338.88,312.481 C340.133,311.226 340.454,309.069 339.207,307.82 L339.207,307.82 Z"
                                                            id="airplane" sketch:type="MSShapeGroup"> </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">Turizm-Seyahat</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M9 11V6C9 4.34315 10.3431 3 12 3C13.6569 3 15 4.34315 15 6V10.9673M10.4 21H13.6C15.8402 21 16.9603 21 17.816 20.564C18.5686 20.1805 19.1805 19.5686 19.564 18.816C20 17.9603 20 16.8402 20 14.6V12.2C20 11.0799 20 10.5198 19.782 10.092C19.5903 9.71569 19.2843 9.40973 18.908 9.21799C18.4802 9 17.9201 9 16.8 9H7.2C6.0799 9 5.51984 9 5.09202 9.21799C4.71569 9.40973 4.40973 9.71569 4.21799 10.092C4 10.5198 4 11.0799 4 12.2V14.6C4 16.8402 4 17.9603 4.43597 18.816C4.81947 19.5686 5.43139 20.1805 6.18404 20.564C7.03968 21 8.15979 21 10.4 21Z"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">Giyim</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg fill="#000000" width="45px" height="45px" viewBox="0 0 1069 1069"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <rect height="1066.67" id="Chip-set" style="fill:none;" width="1066.67"
                                                    x="1.397" y="0.245"></rect>
                                                <g>
                                                    <path
                                                        d="M688.577,148.161l-279.947,0l-0,-64.765c-0,-17.247 -14.003,-31.25 -31.25,-31.25c-17.248,0 -31.25,14.003 -31.25,31.25l-0,64.768c-52.094,0.29 -101.991,21.109 -138.847,57.966c-33.572,33.572 -53.838,77.963 -57.402,124.974l-65.332,0c-17.247,0 -31.25,14.003 -31.25,31.25c0,17.247 14.003,31.25 31.25,31.25l64.765,0l0,279.948l-64.765,-0c-17.247,-0 -31.25,14.002 -31.25,31.25c0,17.247 14.003,31.25 31.25,31.25l65.332,-0c3.564,47.011 23.83,91.402 57.402,124.974c36.856,36.857 86.753,57.676 138.847,57.965l-0,64.768c-0,17.248 14.002,31.25 31.25,31.25c17.247,0 31.25,-14.002 31.25,-31.25l-0,-64.764l279.947,-0l-0,64.764c-0,17.248 14.003,31.25 31.25,31.25c17.247,0 31.25,-14.002 31.25,-31.25l-0,-66.877c41.818,-6.159 80.852,-25.606 111.102,-55.856c33.572,-33.572 53.837,-77.963 57.401,-124.974l65.332,-0c17.248,-0 31.25,-14.003 31.25,-31.25c0,-17.248 -14.002,-31.25 -31.25,-31.25l-64.765,-0l0,-279.948l64.765,0c17.248,0 31.25,-14.003 31.25,-31.25c0,-17.247 -14.002,-31.25 -31.25,-31.25l-65.332,0c-3.564,-47.011 -23.829,-91.402 -57.401,-124.974c-30.25,-30.25 -69.284,-49.697 -111.102,-55.856l-0,-66.878c-0,-17.247 -14.003,-31.25 -31.25,-31.25c-17.247,0 -31.25,14.003 -31.25,31.25l-0,64.765Zm33.654,708.334l-375,-0c-35.915,-0 -70.359,-14.268 -95.754,-39.663c-25.396,-25.396 -39.663,-59.84 -39.663,-95.754c0,-113.06 0,-261.94 0,-375c0,-35.915 14.267,-70.359 39.663,-95.754c25.395,-25.396 59.839,-39.663 95.754,-39.663l374.999,0c35.915,0 70.359,14.267 95.755,39.663c25.395,25.395 39.662,59.839 39.662,95.754l0,375c0,35.914 -14.267,70.358 -39.662,95.754c-25.396,25.395 -59.84,39.663 -95.754,39.663Zm-364.584,-322.917c0,-0 0,29.825 0,62.5c0.001,63.283 51.301,114.583 114.584,114.583c39.191,0 85.809,0 125,0c63.282,0 114.583,-51.3 114.583,-114.583c0,-39.191 0,-85.809 0,-125c-0,-63.283 -51.301,-114.583 -114.583,-114.583c-32.675,-0 -62.5,-0 -62.5,-0c-17.248,-0 -31.25,14.002 -31.25,31.25c-0,17.247 14.002,31.25 31.25,31.25l62.498,-0c28.767,0 52.084,23.318 52.085,52.081c0,0.003 0,125.002 0,125.002c-0.001,28.765 -23.318,52.082 -52.082,52.083c-0.003,0 -125.001,0 -125.001,0c-28.765,-0.001 -52.083,-23.318 -52.084,-52.081c0,-0.004 0,-62.502 0,-62.502c0,-17.248 -14.002,-31.25 -31.25,-31.25c-17.247,-0 -31.25,14.002 -31.25,31.25Zm385.417,-241.407c18.254,0 33.073,14.82 33.073,33.074c0,18.253 -14.819,33.073 -33.073,33.073c-18.254,-0 -33.073,-14.82 -33.073,-33.073c-0,-18.254 14.819,-33.074 33.073,-33.074Z">
                                                    </path>
                                                    <path
                                                        d="M920.147,346.078c0.001,-52.491 -20.851,-102.832 -57.968,-139.948c-37.117,-37.117 -87.458,-57.969 -139.949,-57.969c-113.059,0 -261.939,0 -374.999,0c-52.491,0 -102.832,20.852 -139.948,57.969c-37.117,37.116 -57.969,87.457 -57.969,139.948c0,113.06 0,261.94 0,375c-0,52.49 20.852,102.831 57.969,139.948c37.116,37.117 87.457,57.969 139.948,57.969c70.055,-0 147.677,-0 201.797,-0c52.491,-0 102.832,-20.852 139.949,-57.969c49.034,-49.034 124.168,-124.168 173.202,-173.202c37.117,-37.117 57.969,-87.458 57.968,-139.949l0,-201.797Zm-62.5,0l0,201.797c0,35.915 -14.267,70.359 -39.662,95.755c-49.035,49.034 -124.168,124.167 -173.202,173.202c-25.396,25.396 -59.84,39.663 -95.755,39.663c-54.12,-0 -131.742,-0 -201.797,-0c-35.915,-0 -70.359,-14.267 -95.754,-39.663c-25.396,-25.396 -39.663,-59.84 -39.663,-95.754c0,-113.06 0,-261.94 0,-375c0,-35.915 14.267,-70.359 39.663,-95.754c25.395,-25.396 59.839,-39.663 95.754,-39.663l374.999,0c35.915,0 70.359,14.267 95.755,39.663c25.395,25.395 39.662,59.839 39.662,95.754Zm-500,250c0.001,63.283 51.301,114.583 114.584,114.583c39.191,0 85.809,0 125,0c63.282,0 114.583,-51.3 114.583,-114.583c0,-39.191 0,-85.809 0,-125c-0,-63.283 -51.301,-114.583 -114.583,-114.583l-125,-0c-63.283,-0 -114.583,51.3 -114.584,114.583l0,125Zm62.5,0.002l0,-125.002c0.001,-28.765 23.319,-52.083 52.082,-52.083c0.003,-0 125.001,-0 125.001,-0c28.766,0 52.083,23.318 52.084,52.081c0,0.003 0,125.002 0,125.002c-0.001,28.765 -23.318,52.082 -52.082,52.083c-0.003,0 -125.001,0 -125.001,0c-28.765,-0.001 -52.083,-23.318 -52.084,-52.081Z"
                                                        style="fill-opacity:0.5;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">Teknoloji</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M10.1497 8.80219L9.70794 9.40825L10.1497 8.80219ZM12 3.10615L11.4925 3.65833C11.7794 3.9221 12.2206 3.9221 12.5075 3.65833L12 3.10615ZM13.8503 8.8022L14.2921 9.40826L13.8503 8.8022ZM12 9.67598L12 10.426H12L12 9.67598ZM10.5915 8.19612C9.90132 7.69298 9.16512 7.08112 8.60883 6.43627C8.03452 5.77053 7.75 5.18233 7.75 4.71476H6.25C6.25 5.73229 6.82845 6.66885 7.47305 7.41607C8.13569 8.18419 8.97435 8.87349 9.70794 9.40825L10.5915 8.19612ZM7.75 4.71476C7.75 3.65612 8.27002 3.05231 8.8955 2.84182C9.54754 2.62238 10.5199 2.76435 11.4925 3.65833L12.5075 2.55398C11.2302 1.37988 9.70254 0.987559 8.41707 1.42016C7.10502 1.8617 6.25 3.09623 6.25 4.71476H7.75ZM14.2921 9.40826C15.0257 8.8735 15.8643 8.18421 16.527 7.41608C17.1716 6.66886 17.75 5.73229 17.75 4.71475H16.25C16.25 5.18234 15.9655 5.77055 15.3912 6.43629C14.8349 7.08113 14.0987 7.69299 13.4085 8.19613L14.2921 9.40826ZM17.75 4.71475C17.75 3.09622 16.895 1.8617 15.5829 1.42016C14.2975 0.987559 12.7698 1.37988 11.4925 2.55398L12.5075 3.65833C13.4801 2.76435 14.4525 2.62238 15.1045 2.84181C15.73 3.0523 16.25 3.65612 16.25 4.71475H17.75ZM9.70794 9.40825C10.463 9.95869 11.0618 10.426 12 10.426L12 8.92598C11.635 8.92598 11.4347 8.81074 10.5915 8.19612L9.70794 9.40825ZM13.4085 8.19613C12.5653 8.81074 12.365 8.92598 12 8.92598L12 10.426C12.9382 10.426 13.537 9.9587 14.2921 9.40826L13.4085 8.19613Z"
                                                    fill="#000000"></path>
                                                <path
                                                    d="M4 21.3884H6.25993C7.27079 21.3884 8.29253 21.4937 9.27633 21.6964C11.0166 22.0549 12.8488 22.0983 14.6069 21.8138M13.6764 18.5172C13.7962 18.5033 13.911 18.4874 14.0206 18.4699C14.932 18.3245 15.697 17.8375 16.3974 17.3084L18.2046 15.9433C18.8417 15.462 19.7873 15.4619 20.4245 15.943C20.9982 16.3762 21.1736 17.0894 20.8109 17.6707C20.388 18.3487 19.7921 19.216 19.2199 19.7459M13.6764 18.5172C13.6403 18.5214 13.6038 18.5254 13.5668 18.5292M13.6764 18.5172C13.8222 18.486 13.9669 18.396 14.1028 18.2775C14.746 17.7161 14.7866 16.77 14.2285 16.1431C14.0991 15.9977 13.9475 15.8764 13.7791 15.7759C10.9817 14.1074 6.62942 15.3782 4 17.2429M13.6764 18.5172C13.6399 18.525 13.6033 18.5292 13.5668 18.5292M13.5668 18.5292C13.0434 18.5829 12.4312 18.5968 11.7518 18.5326"
                                                    stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">Kozmetik</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M5.13891 12.7686L8.15456 9.08664C8.46255 8.69065 8.61655 8.49264 8.69726 8.27058C8.76867 8.07409 8.79821 7.86484 8.784 7.65625C8.76793 7.42053 8.67477 7.18763 8.48846 6.72184L7.77776 4.9451C7.50204 4.25579 7.36417 3.91113 7.12635 3.68522C6.91678 3.48615 6.65417 3.35188 6.37009 3.29854C6.0477 3.238 5.68758 3.32804 4.96733 3.5081L3 4C3 14 9.99969 21 20 21L20.4916 19.0324C20.6717 18.3121 20.7617 17.952 20.7012 17.6296C20.6478 17.3456 20.5136 17.0829 20.3145 16.8734C20.0886 16.6355 19.7439 16.4977 19.0546 16.222L17.4691 15.5877C16.9377 15.3752 16.672 15.2689 16.4071 15.2608C16.1729 15.2536 15.9404 15.3013 15.728 15.4001C15.4877 15.512 15.2854 15.7143 14.8807 16.119L11.7709 19.1451M20.9997 3L15.9997 8M15.9997 3L20.9997 8"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">İletişim</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5285 6C16.5098 5.9193 16.4904 5.83842 16.4701 5.75746C16.2061 4.70138 15.7904 3.55383 15.1125 2.65C14.4135 1.71802 13.3929 1 12 1C10.6071 1 9.58648 1.71802 8.88749 2.65C8.20962 3.55383 7.79387 4.70138 7.52985 5.75747C7.50961 5.83842 7.49016 5.9193 7.47145 6H5.8711C4.29171 6 2.98281 7.22455 2.87775 8.80044L2.14441 19.8004C2.02898 21.532 3.40238 23 5.13777 23H18.8622C20.5976 23 21.971 21.532 21.8556 19.8004L21.1222 8.80044C21.0172 7.22455 19.7083 6 18.1289 6H16.5285ZM8 11C8.57298 11 8.99806 10.5684 9.00001 9.99817C9.00016 9.97438 9.00044 9.9506 9.00084 9.92682C9.00172 9.87413 9.00351 9.79455 9.00718 9.69194C9.01451 9.48652 9.0293 9.18999 9.05905 8.83304C9.08015 8.57976 9.10858 8.29862 9.14674 8H14.8533C14.8914 8.29862 14.9198 8.57976 14.941 8.83305C14.9707 9.18999 14.9855 9.48652 14.9928 9.69194C14.9965 9.79455 14.9983 9.87413 14.9992 9.92682C14.9996 9.95134 14.9999 9.97587 15 10.0004C15 10.0004 15 11 16 11C17 11 17 9.99866 17 9.99866C16.9999 9.9636 16.9995 9.92854 16.9989 9.89349C16.9978 9.829 16.9957 9.7367 16.9915 9.62056C16.9833 9.38848 16.9668 9.06001 16.934 8.66695C16.917 8.46202 16.8953 8.23812 16.8679 8H18.1289C18.6554 8 19.0917 8.40818 19.1267 8.93348L19.86 19.9335C19.8985 20.5107 19.4407 21 18.8622 21H5.13777C4.55931 21 4.10151 20.5107 4.13998 19.9335L4.87332 8.93348C4.90834 8.40818 5.34464 8 5.8711 8H7.13208C7.10465 8.23812 7.08303 8.46202 7.06595 8.66696C7.0332 9.06001 7.01674 9.38848 7.00845 9.62056C7.0043 9.7367 7.00219 9.829 7.00112 9.89349C7.00054 9.92785 7.00011 9.96221 7 9.99658C6.99924 10.5672 7.42833 11 8 11ZM9.53352 6H14.4665C14.2353 5.15322 13.921 4.39466 13.5125 3.85C13.0865 3.28198 12.6071 3 12 3C11.3929 3 10.9135 3.28198 10.4875 3.85C10.079 4.39466 9.76472 5.15322 9.53352 6Z"
                                                    fill="#0F0F0F"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content">
                                        <h5 class="card__title mt-2"><a href="service-details.html">Alışveriş</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg fill="#000000" width="45px" height="45px" viewBox="0 0 200 200"
                                            data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title></title>
                                                <path
                                                    d="M181.75,42.5c-3-13-15-22.5-29-22.5h-105a30.6,30.6,0,0,0-29.5,22.5l-10.5,40c-2,7,1,14,7,18l2,1.5c3,1.5,5.5,3,8.5,3.5V160a20.06,20.06,0,0,0,20,20h23.5a20.06,20.06,0,0,0,20-20V140h27.5v20a20.06,20.06,0,0,0,20,20h19a20.06,20.06,0,0,0,20-20V105.5a22.09,22.09,0,0,0,8-3l2-1.5a16.87,16.87,0,0,0,7-18.5ZM156.25,160h-20V140a20.06,20.06,0,0,0-20-20H88.75a20.06,20.06,0,0,0-20,20v20H45.25V100c6.5-2.5,13.5-1.5,19.5,2a21.07,21.07,0,0,0,24,0,21.07,21.07,0,0,1,24,0,21.07,21.07,0,0,0,24,0,20.87,20.87,0,0,1,19.5-2Zm14.5-74.5a40.69,40.69,0,0,0-46,0,.94.94,0,0,1-1.5,0,40.69,40.69,0,0,0-46,0,.94.94,0,0,1-1.5,0,40.69,40.69,0,0,0-46,0,.94.94,0,0,1-1.5,0l9.5-38c1-4.5,5-7.5,10-7.5h105.5a9.64,9.64,0,0,1,9.5,7.5l9.5,38S171.25,86,170.75,85.5Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">Market</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-4 mt-2">
                                <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s"
                                    style="padding: 5px; gap:1px;">
                                    <div class="card__icon mt-2">
                                        <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M17 21V16M7 21V16" stroke="#000000" stroke-width="1.5"
                                                    stroke-linecap="round"></path>
                                                <path
                                                    d="M15.4998 12H8.49977C6.84985 12 6.02489 12 5.51233 12.5858C5.22645 12.9125 5.10002 13.3503 5.0441 14.0008C4.96666 14.9018 4.92793 15.3523 5.22514 15.6762C5.52235 16 6.01482 16 6.99977 16H16.9998C17.9847 16 18.4772 16 18.7744 15.6762C19.0716 15.3523 19.0329 14.9018 18.9554 14.0008C18.8995 13.3503 18.7731 12.9125 18.4872 12.5858C17.9746 12 17.1497 12 15.4998 12Z"
                                                    stroke="#000000" stroke-width="1.5"></path>
                                                <path
                                                    d="M7 8C7 6.13077 7 5.19615 7.40192 4.5C7.66523 4.04394 8.04394 3.66523 8.5 3.40192C9.19615 3 10.1308 3 12 3C13.8692 3 14.8038 3 15.5 3.40192C15.9561 3.66523 16.3348 4.04394 16.5981 4.5C17 5.19615 17 6.13077 17 8V12H7V8Z"
                                                    stroke="#000000" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card__content mt-2">
                                        <h5 class="card__title"><a href="service-details.html">Mobilya</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sliderikincidiv" class="col-12 col-lg-6 col-xxl-5">
                    <div class="hero__thumb wow fadeInUp" data-wow-duration="0.8s">
                        <h1 style="color:white !important; font-size: 45px;">Hızlı Çözüm İçin <span
                                style="color:#FF8541">İfşa Et</span></h1>
                        <div class="input-single mt-2">
                            <div style="display: grid; grid-template-columns: 1fr auto;">
                                <div style="display: grid; grid-template-columns: 1fr auto; align-items: center;">
                                    <label style="z-index:9; margin-right:5px;" class="label text-end"><a
                                            style=" color:white !important;" target="blank"
                                            href="https://www.youtube.com/watch?v=XZPezAinMo4&embeds_referring_euri=https%3A%2F%2Fwww.ifsaet.com%2F&source_ve_path=MjM4NTE&feature=emb_title&ab_channel=%C4%B0f%C5%9FaEt">Nasıl
                                            Yazılır?</a></label>
                                    <a target="blank"
                                        href="https://www.youtube.com/watch?v=XZPezAinMo4&embeds_referring_euri=https%3A%2F%2Fwww.ifsaet.com%2F&source_ve_path=MjM4NTE&feature=emb_title&ab_channel=%C4%B0f%C5%9FaEt"
                                        class="btn_theme social_box"><i class="bi bi-youtube"></i><span></span></a>
                                </div>
                            </div>
                            <textarea style="z-index: 9; color:white;" class="form-control" id="message" name="message" rows="8"
                                placeholder="Ürün veya hizmetle ilgili nasıl bir sorun yaşadınız?" required></textarea>
                            <button type="submit" class="btn_theme btn_theme_active mt-3 " name="gonder"
                                id="submit">Devam Et<i class="bi bi-arrow-up-right"></i><span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Alanı -->

    <!-- Gündemdeki İfşalar -->
    <section id="gundemdekiifsalarsection" class="testimonials section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xxl-5">
                    <div class="section__header">
                        <h1 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Gündemdeki İfşalar</h1>
                        <a style="color: white; font-size:25px;" href="#">Tümünü Görüntüle</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="gundemdekiifsalar" class="testimonials-slider wow fadeInUp" data-wow-duration="0.8s">
                        <div class="col-sm-12 col-md-4">
                            <div class="card card--custom">
                                <div class="testimonials__author-review">
                                    <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                        porta accumsan ex, in consequat leo. Praesent id massa fringilla, lacinia arcu non,
                                        rutrum nisl. Nunc varius laoreet urna et consequat. Etiam faucibus tincidunt
                                        tincidunt. Pellentesque et tellus efficitur, sollicitudin arcu ullamcorper,
                                        ultricies tellus.
                                    </p>
                                </div>
                                <div class="testimonials__author">
                                    <div class="author__thumg">
                                        <img src="assets/finview/images/testimonials2.png" alt="">
                                    </div>
                                    <div class="author__content">
                                        <h5 class="author__title">Marka Adı</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card card--custom">
                                <div class="testimonials__author-review">
                                    <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                        porta accumsan ex, in consequat leo. Praesent id massa fringilla, lacinia arcu non,
                                        rutrum nisl. Nunc varius laoreet urna et consequat. Etiam faucibus tincidunt
                                        tincidunt. Pellentesque et tellus efficitur, sollicitudin arcu ullamcorper,
                                        ultricies tellus.
                                    </p>
                                </div>
                                <div class="testimonials__author">
                                    <div class="author__thumg">
                                        <img src="assets/finview/images/testimonials2.png" alt="">
                                    </div>
                                    <div class="author__content">
                                        <h5 class="author__title">Marka Adı</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card card--custom">
                                <div class="testimonials__author-review">
                                    <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                        porta accumsan ex, in consequat leo. Praesent id massa fringilla, lacinia arcu non,
                                        rutrum nisl. Nunc varius laoreet urna et consequat. Etiam faucibus tincidunt
                                        tincidunt. Pellentesque et tellus efficitur, sollicitudin arcu ullamcorper,
                                        ultricies tellus.
                                    </p>
                                </div>
                                <div class="testimonials__author">
                                    <div class="author__thumg">
                                        <img src="assets/finview/images/testimonials2.png" alt="">
                                    </div>
                                    <div class="author__content">
                                        <h5 class="author__title">Marka Adı</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card card--custom">
                                <div class="testimonials__author-review">
                                    <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                        porta accumsan ex, in consequat leo. Praesent id massa fringilla, lacinia arcu non,
                                        rutrum nisl. Nunc varius laoreet urna et consequat. Etiam faucibus tincidunt
                                        tincidunt. Pellentesque et tellus efficitur, sollicitudin arcu ullamcorper,
                                        ultricies tellus.
                                    </p>
                                </div>
                                <div class="testimonials__author">
                                    <div class="author__thumg">
                                        <img src="assets/finview/images/testimonials2.png" alt="">
                                    </div>
                                    <div class="author__content">
                                        <h5 class="author__title">Marka Adı</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#gundemdekiifsalar').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    draggable: true,
                    pauseOnDotsHover: true,
                    dots: false,
                    responsive: [{
                            breakpoint: 992, // Orta boy ekran ve küçük
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 768, // Küçük ekranlar (mobil)
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        </script>

    </section>
    <!-- Gündemdeki İfşalar -->

    <!-- En Çok İfşa Edilen Markalar -->
    <section class="loan-reviews section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__header">
                        <h2 style="color: white" class="section__header-title wow fadeInUp" data-wow-duration="0.8s">En
                            Çok İfşa Edilen
                            Markalar
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">
                    <div class="d-flex flex-column gap-4">
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/finview/images/loan_reviews_logo.png" alt="image">
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Marka Adı</h4>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <h1>1 İfşa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/finview/images/loan_reviews_logo.png" alt="image">
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Marka Adı</h4>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <h1>1 İfşa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/finview/images/loan_reviews_logo.png" alt="image">
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Marka Adı</h4>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <h1>1 İfşa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/finview/images/loan_reviews_logo.png" alt="image">
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Marka Adı</h4>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <h1>1 İfşa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/finview/images/loan_reviews_logo.png" alt="image">
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Marka Adı</h4>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <h1>1 İfşa</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- En Çok İfşa Edilen Markalar -->

    <!-- Popüler İfşalar -->
    <section id="gundemdekiifsalarsection" class="testimonials section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xxl-5">
                    <div class="section__header">
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Popüler İfşalar</h2>
                        <a style="color: #00d9da;" href="">Tümünü Görüntüle</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="populerifsalar" class="testimonials-slider wow fadeInUp" data-wow-duration="0.8s">
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <p class="text-start">Our satisfied clients have experienced success with our services and
                                    loan recommendations. Here are some of their testimonials highlighting their positive
                                    experiences and the value they received</p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/finview/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Marka Adı</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#populerifsalar').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    draggable: true,
                    pauseOnDotsHover: true,
                    dots: false,
                    responsive: [{
                            breakpoint: 992, // Orta boy ekran ve küçük
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 768, // Küçük ekranlar (mobil)
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        </script>
    </section>
    <!-- Popüler İfşalar -->

    <!-- Video Alanı -->
    <section class="about-us section">
        <div class="container">
            <div class="row gy-5 gy-lg-0 justify-content-between align-items-center">
                <div class="col-12 col-lg-4">
                    <div class="section__content">
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Hızlı Çözüm İçin İfşa Et
                        </h2>
                        <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">Unutmayın. İfşa sadece
                            kötü durumlar için değildir. İyi olanları da ifşa edebilirsiniz.</p>
                        <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">Metin, fotoğraf ve video
                            kullanarak bildiğinizi tüm dünyaya ifşa edebilirsiniz.</p>
                        <a href="ifsaet" class="btn_theme btn_theme_active mt_40">İfşa Et<i
                                class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto">
                    <div class="choose-us__thumb unset-xxl me-xl-4 me-xxl-0 wow fadeInDown" data-wow-duration="0.8s">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/XZPezAinMo4?si=JtgBeUISUpZtrx8Y" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Alanı -->

    <!-- Rakamlarla İfşa Et -->
    <section class="working-process section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xxl-5">
                    <div class="section__header">
                        <h2 style="color: #FF8541 !important;" class="section__header-title wow fadeInUp"
                            data-wow-duration="0.8s">Rakamlarla İfşa Et</h2>
                    </div>
                </div>
            </div>
            <div class="row g-2 g-md-4  wow fadeInUp" data-wow-duration="0.8s">
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg viewBox="-12 -12 48.00 48.00" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-12" y="-12" width="48.00" height="48.00" rx="24" fill="#00D9DA "
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                                        stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>

                        </div>
                        <div class="card__content">
                            <p>Üye Sayımız</p>
                            <h4 class="card__title mt-2">14.456</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg viewBox="-12 -12 48.00 48.00" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-12" y="-12" width="48.00" height="48.00" rx="24" fill="#00D9DA"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M20.91 11.12C20.91 16.01 17.36 20.59 12.51 21.93C12.18 22.02 11.82 22.02 11.49 21.93C6.63996 20.59 3.08997 16.01 3.08997 11.12V6.72997C3.08997 5.90997 3.70998 4.97998 4.47998 4.66998L10.05 2.39001C11.3 1.88001 12.71 1.88001 13.96 2.39001L19.53 4.66998C20.29 4.97998 20.92 5.90997 20.92 6.72997L20.91 11.12Z"
                                        stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M12 12.5C13.1046 12.5 14 11.6046 14 10.5C14 9.39543 13.1046 8.5 12 8.5C10.8954 8.5 10 9.39543 10 10.5C10 11.6046 10.8954 12.5 12 12.5Z"
                                        stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 12.5V15.5" stroke="#ffffff" stroke-width="1.2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>

                        </div>
                        <div class="card__content">
                            <p>Partner Markalarımız</p>
                            <h4 class="card__title mt-2">2.456</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg fill="#ffffff" viewBox="-32 -32 128.00 128.00" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xml:space="preserve" xmlns:serif="http://www.serif.com/"
                                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                stroke="#ffffff" stroke-width="3.2">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-32" y="-32" width="128.00" height="128.00" rx="64" fill="#00D9DA"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect id="Icons" x="-512" y="-64" width="1280" height="800"
                                        style="fill:none;"></rect>
                                    <g id="Icons1" serif:id="Icons">
                                        <g id="Strike"> </g>
                                        <g id="H1"> </g>
                                        <g id="H2"> </g>
                                        <g id="H3"> </g>
                                        <g id="list-ul"> </g>
                                        <g id="hamburger-1"> </g>
                                        <g id="hamburger-2"> </g>
                                        <g id="list-ol"> </g>
                                        <g id="list-task"> </g>
                                        <g id="trash"> </g>
                                        <g id="vertical-menu"> </g>
                                        <g id="horizontal-menu"> </g>
                                        <g id="sidebar-2"> </g>
                                        <g id="Pen"> </g>
                                        <g id="Pen1" serif:id="Pen"> </g>
                                        <g id="clock"> </g>
                                        <g id="external-link"> </g>
                                        <g id="hr"> </g>
                                        <path id="success"
                                            d="M56.103,16.824l-33.296,33.297l-14.781,-14.78l2.767,-2.767l11.952,11.952l30.53,-30.53c0.943,0.943 1.886,1.886 2.828,2.828Z"
                                            style="fill-rule:nonzero;"></path>
                                        <g id="info"> </g>
                                        <g id="warning"> </g>
                                        <g id="plus-circle"> </g>
                                        <g id="minus-circle"> </g>
                                        <g id="vue"> </g>
                                        <g id="cog"> </g>
                                        <g id="logo"> </g>
                                        <g id="radio-check"> </g>
                                        <g id="eye-slash"> </g>
                                        <g id="eye"> </g>
                                        <g id="toggle-off"> </g>
                                        <g id="shredder"> </g>
                                        <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g>
                                        <g id="react"> </g>
                                        <g id="check-selected"> </g>
                                        <g id="turn-off"> </g>
                                        <g id="code-block"> </g>
                                        <g id="user"> </g>
                                        <g id="coffee-bean"> </g>
                                        <g id="coffee-beans">
                                            <g id="coffee-bean1" serif:id="coffee-bean"> </g>
                                        </g>
                                        <g id="coffee-bean-filled"> </g>
                                        <g id="coffee-beans-filled">
                                            <g id="coffee-bean2" serif:id="coffee-bean"> </g>
                                        </g>
                                        <g id="clipboard"> </g>
                                        <g id="clipboard-paste"> </g>
                                        <g id="clipboard-copy"> </g>
                                        <g id="Layer1"> </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="card__content">
                            <p>Sonuçlanan İfşalar</p>
                            <h4 class="card__title mt-2">12.456</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card card--custom">
                        <div class="card__icon">
                            <svg viewBox="-12 -12 48.00 48.00" fill="none" xmlns="http://www.w3.org/2000/svg"
                                stroke="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-12" y="-12" width="48.00" height="48.00" rx="24" fill="#00D9DA"
                                        strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                        stroke="#ffffff" stroke-width="1.224" stroke-linecap="round"></path>
                                    <path
                                        d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                        stroke="#ffffff" stroke-width="1.224"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="card__content">
                            <p>Toplam Görüntüleme Sayısı</p>
                            <h4 class="card__title mt-2">24.456</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rakamlarla İfşa Et -->

    <!-- Birlikte Çalışalım -->
    <section class="loan-solution section">
        <div class="container position-relative ">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-12 col-lg-8 col-xxl-8">
                    <div class="section__content ms-xl-4 ms-xl-0">
                        <h2 id="birliktecalisalim" style="color: white !important;"
                            class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Markanızın çözüm ortağı:
                            İfşa Et
                        </h2>
                        <p style="color: white !important;">İfşa sadece olumsuzluk olmadığı gibi markanızın olumlu
                            yönleri
                            de ifşa edilebilmektedir. İfşa Et'in sunduğu ayrıcalıklarla rakiplerinizin olumsuz
                            ifşalarının
                            arasında reklamınızın gösterilmesini sağlayın.</p>
                        <div class="sidebar cus_scrollbar wow fadeInUp" data-wow-duration="0.8s">
                            <div id="birliktecalisalim2" class="sidebar__part">
                                <ul class="category">
                                    <li><a id="birliktecalisalimbuton" href="kurumsal-uyelik">
                                            <span class="caregory__content">Birlikte Çalışalım</span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Birlikte Çalışalım -->
@endsection
