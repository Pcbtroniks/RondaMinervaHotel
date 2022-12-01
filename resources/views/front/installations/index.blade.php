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
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/restaurante-1.jpg')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/restaurante-2.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/restaurante-3.jpg')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>Restaurante</span>
                                <h2 class="text-md-ronda">Al Edén </h2>
                            </div>
                            <p>En nuestro restaurante <a href="http://aleden.hotelarborea.com/"></a> ‘‘Al Edén’’ podrás degustar de deliciosos platillos de la cocina mexicana e internacionales y de tus bebidas favoritas.
                            Contamos con servicio a la habitación sin costo alguno. <b>
                            Horario de 07:00 a 21:00 hrs lunes a domingo</b></p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
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
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/alberca-1.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/alberca-2.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/alberca-3.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>Calida</span>
                                <h2 class="text-md-ronda">Alberca</h2>
                            </div>
                            <p>Disfruta de nuestra alberca al aire libre, se encuentra rodeada de jardines y áreas de descanso para mayor comodidad de nuestros huéspedes.
                            <b>Horario de 08:00 a 20:00 hrs</b> </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>Wi-fi</p>
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
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/evento-1.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/evento-2.png')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('custom/img/ins/evento-3.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>juntas, reuniones y eventos</span>
                                <h2 class="text-md-ronda">Salones</h2>
                            </div>
                            <p>Contamos con espacios ideales para conferencias, reuniones, eventos o juntas, ponemos suma atención en los pequeños detalles y una atención especializada de parte de nuestro equipo. Con capacidad de hasta 65 personas.</p>
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
            <!-- {# <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="{{asset('assets/img/rooms/room-4.jpg')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('assets/img/rooms/room-3.jpg')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('assets/img/rooms/room-2.jpg')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Twin Room With Seaview</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas. Donec in sodales dui, a blandit nunc. Pellentesque id eros venenatis,
                                sollicitudin neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur
                                non, ultricies volutpat tellus.</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
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
                                    <p>Pool</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div> #} -->
        </div>
    </section>
    <!-- Room Section End -->
@endsection
