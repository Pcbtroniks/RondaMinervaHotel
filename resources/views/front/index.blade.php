@extends('layout.layout')

@section('app-head')
        
    <style media="screen">
        .fondo1 {
            background-image: url("{{asset('custom/img/section-us-new.png')}}");
            background-size: contain;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .fondo2 {
            background-image: url("{{asset('custom/img/section-coment.png')}}");
        }

        .texto-blanco{
            color: white !important;
        }

        .boton-azul{
            background: #2F2E3C !important;
        }
    </style>
@endsection


@section('content')
    
    <!-- Hero Area Section Begin -->
    <section class="hero-area set-bg" data-setbg="{{ asset('/img/hero-op.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        {{-- {# <h1><img style="width: 30%; height: 30%; text-align: top;" src="{{asset('custom/img/logo1.png')}}" alt=""></h1> #} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <section class="search-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{route('recomended-rooms')}}" method="GET" autocomplete="off" class="check-form">
                        @csrf
                        {{-- <h4>Reservar</h4> --}}
                        <div class="datepicker">
                            <p>Del día</p>
                            <input type="text" class="datepicker-1" name="check_in" required>
                            <img src="{{asset('/img/calendar.png')}}" alt="">
                        </div>
                        <div class="datepicker">
                            <p>Hasta el día</p>
                            <input type="text" class="datepicker-2" name="check_out" required>
                            <img src="{{asset('/img/calendar.png')}}" alt="">
                        </div>
                        <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Adultos</p>
                                <div class="pro-qty"><input type="number" min="1" value="1" name="adults" required></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Niños</p>
                                <div class="pro-qty"><input type="number" min="0" value="0" name="kids" required></div>
                            </div>
                            {{-- {# <div class="single-quantity last">
                                <p>Cuartos</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div> #} --}}
                        </div>
                        {{-- {# <div class="room-selector">
                            <p>Tipo</p>
                            <select class="suit-select">
                                <option>Eg. Master suite</option>
                                <option value="">Simple</option>
                                <option value="">Doble</option>
                            </select>
                        </div> #} --}}
                        <button class="bg-orange-ronda" type="submit">Ir</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->

    <!-- Intro Text Section Begin -->
    <section class="intro-section spad fondo1">
        <div class="container">
            <div class="row intro-text">
                <div class="col-lg-6">
                    <div class="intro-left">
                        <div class="section-title">
                            <span>En la ciudad más bonita de México:</span>
                            <h2 class="text-md-ronda">Ronda Minerva Hotel</h2>
                        </div>
                        <p>Ronda Minerva Hotel es una joya de la cultura de Jalisco, ubicado en el corazón de la capital tapatía, es un referente de la historia de la ciudad. A menos de 3 cuadras de La Minerva, uno de los sitios más representativos del país. Bajando al centro, a menos de 800 metros se encuentra Av. Chapultepec, el lugar en donde estar si se trata de la vida nocturna. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-right">
                        <p>Las opciones de comida son infinitas, la variedad de la zona es una de sus características principales. En fin, Guadalajara es una ciudad de ensueño, te invitamos a vivir la mejor experiencia en Ronda Minerva Hotel.
                        </p>
                        <a href="#" class="primary-btn bg-orange-ronda">Reservar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="facilities-item set-bg" data-setbg="{{asset('custom/img/hab-2.png')}}">
                        <div class="fi-title">
                            <h2 class="text-md-ronda">Superior Sencilla</h2>
                        </div>
                        <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Smart TV</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Parking</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Reservar</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="facilities-item set-bg" data-setbg="{{asset('custom/img/hab-1.png')}}">
                        <div class="fi-title">
                            <h2 class="text-md-ronda">Superior Doble</h2>
                            {{-- {# <p>From $399</p> #} --}}
                        </div>
                        <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Smart TV</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Parking</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Reservar</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="facilities-item set-bg" data-setbg="{{asset('custom/img/hab-3.png')}}">
                        <div class="fi-title">
                            <h2>Estándar</h2>
                            {{-- {# <p>From $399</p> #} --}}
                        </div>
                        <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Smart TV</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Parking</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 class="text-md-ronda">Comentarios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            31 / 03 / 2020
                        </div>
                        <h4>Buen hotel a precios justos</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Muy amplios cuartos y cómodos, con buena instalación y personal atento, la seguridad muy bien.</p>
                        {{-- {# <div class="ti-author">
                            <div class="author-pic">
                                <img src="{{asset('/img/author-1.png')}}" alt="">
                            </div>
                            <div class="author-text">
                                <h6>Tania <span>México</span></h6>
                            </div>
                        </div> #} --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            15 / 05 / 2020
                        </div>
                        <h4>Sin duda volveria</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Las habitaciones dobles me parecieron modernas muy comodas y muy traquilo, el servicio de restaurante me parecio excelente, la comida muy buena, las areas comunes tienen musica y en la noche la vista es espectacular.</p>
                        {{-- {# <div class="ti-author">
                            <div class="author-pic">
                                <img src="{{ base_url() }}assets/img/author-2.png" alt="">
                            </div>
                            <div class="author-text">
                                <h6>Eduardo Ramirez <span>Madrid </span></h6>
                            </div>
                        </div> #} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Video Section Begin -->
    <div style="display: none" class="video-section">
        <div class="video-bg set-bg" data-setbg="{{asset('custom/img/section-coment.png')}}"></div>
        <div class="container">
            <div class="video-text set-bg" data-setbg="{{asset('custom/img/video-inside-bg.png')}}">
                <a href="{{asset('custom/vid/ARB-Recepcion.mp4')}}" class="pop-up"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- Video Section End -->

    <!-- Home Page About Section Begin -->
    <section class="homepage-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2 class="text-md-ronda">Servicios</h2>
                        </div>

                        {{-- <p class="texto-blanco">Ven a disfrutar de una estadía única con una gran diversidad de amenidades y servicios que ofrecemos dentro de Guadalajara, Jalisco, México. </p> --}}
                        
                        <div class="service-icon d-flex mb-4">
                            {{-- <img class="mr-4" src="http://rondaminervahotel.test/img/services/service-icon-1.png" alt=""> --}}
                            <span class="service-list-tilde text-orange-ronda">~</span>
                            <h3>Al Edén Restaurante</h3>
                        </div>
                        <div class="service-icon d-flex mb-4">
                            {{-- <img class="mr-4" src="http://rondaminervahotel.test/img/services/service-icon-2.png" alt=""> --}}
                            <span class="service-list-tilde text-orange-ronda">~</span>
                            <h3>Alberca al aire libre</h3>
                        </div>
                        <div class="service-icon d-flex mb-4">
                            {{-- <img class="mr-4" src="http://rondaminervahotel.test/img/services/service-icon-3.png" alt=""> --}}
                            <span class="service-list-tilde text-orange-ronda">~</span>
                            <h3>Salon de Eventos</h3>
                        </div>
                        <div class="service-icon d-flex mb-4">
                            {{-- <img class="mr-4" src="http://rondaminervahotel.test/img/services/service-icon-4.png" alt=""> --}}
                            <span class="service-list-tilde text-orange-ronda">~</span>
                            <h3>Gimnasio</h3>
                        </div>
                        <div class="service-icon d-flex mb-4">
                            {{-- <img class="mr-4" src="http://rondaminervahotel.test/img/services/service-icon-5.png" alt=""> --}}
                            <span class="service-list-tilde text-orange-ronda">~</span>
                            <h3>Estacionamiento</h3>
                        </div>
                        <a href="{{route('services')}}" class="primary-btn bg-orange-ronda">Ver todos.</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="about-carousel" class="about-img owl-carousel">
                        <img class="img-thumbnail"  src="{{asset('custom/img/home-about-1.png')}}"  alt="Ronda Minerva Hotel">
                        <img class="img-thumbnail"  src="{{asset('custom/img/home-about-2.png')}}"  alt="Ronda Minerva Hotel">
                        <img class="img-thumbnail"  src="{{asset('custom/img/home-about-3.png')}}"  alt="Ronda Minerva Hotel">
                        <img class="img-thumbnail"  src="{{asset('custom/img/home-about-4.png')}}"  alt="Ronda Minerva Hotel">
                    </div>
                    {{-- <div class="row d-none">
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('custom/img/home-about-1.png')}}" loading="lazy" alt="Ronda Minerva Hotel">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('custom/img/home-about-2.png')}}" loading="lazy" alt="Ronda Minerva Hotel">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('custom/img/home-about-3.png')}}" loading="lazy" alt="Ronda Minerva Hotel">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('custom/img/home-about-4.png')}}" loading="lazy" alt="Ronda Minerva Hotel">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page About Section End -->
@endsection

@section('js')
    <script>
    $(document).ready(function(){
        $('#about-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            loop: true,
            layLoad: true,
            items: 1
        });
    });
    </script>
@endsection
