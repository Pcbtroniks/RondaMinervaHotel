@extends('layout.layout')

@section('content')

<!-- Hero Area Section Begin -->
    {{-- {# <div class="hero-area set-bg other-page" data-setbg="{{ base_url() }}custom/img/about_bg.png">
    </div> #} --}}
    <!-- Hero Area Section End -->

    <!-- Room Section Begin -->
    <section class="room-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/senc/senc-1.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/senc/senc-2.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/senc/senc-3.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/senc/senc-4.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/senc/senc-5.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2 class="text-md-ronda">Habitación Estándar</h2>
                            </div>
                            <p>La Habitación Estándar cuenta con dos camas matrimoniales con capacidad de hasta 4 personas. Baño, aire acondicionado, TV por cable, clóset, secadora de cabello y kit para higiene personal. Además de servicio a la habitación en horario de nuestro restaurante Al Edén.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Alberca</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/ssenc/ssenc-1.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/ssenc/ssenc-2.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/ssenc/ssenc-3.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/ssenc/ssenc-4.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2 class="text-md-ronda">Superior Sencilla</h2>
                            </div>
                            <p>La habitación Superior Sencilla cuenta con una cama King Size con capacidad de hasta 2 personas. El baño está equipado con tocador, secadora de cabello y kit para higiene personal. Es una habitación con amenidades como caja fuerte, cafetera, plancha, tabla para planchar, entre otras. Cuenta con servicio a la habitación en horario de nuestro restaurante Al Edén.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Alberca</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/sdob/sdobl-1.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/sdob/sdobl-2.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/hab/sdob/sdobl-3.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2 class="text-md-ronda">Superior Doble</h2>
                            </div>
                            <p>La habitación Superior Doble cuenta con 2 camas Queen Size con capacidad de hasta 4 personas. El baño está equipado con tocador, secadora de cabello y kit para higiene personal. Es una habitación con amenidades como caja fuerte, cafetera, plancha, tabla para planchar, entre otras. Cuenta con servicio a la habitación en horario de nuestro restaurante Al Edén.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Alberca</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Section End -->
@endsection