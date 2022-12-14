@extends('layout.layout')
@section('content')
    <!-- Hero Area Section Begin -->
    {{-- {# <div class="hero-area set-bg other-page" data-setbg="{{asset('/img/about_bg.jpg">
    </div')}}> #} --}}
    <!-- Hero Area Section End -->

    <!-- Room Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-1.png')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('img/services/service-icon-1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>Al Edén Restaurante</h3>
                            <p>En nuestro restaurante <a href="https://aleden.hotelarborea.com/">‘‘Al Edén’’</a>  podrás degustar de deliciosos platillos de la cocina mexicana e internacionales y de tus bebidas favoritas. Contamos con servicio a la habitación sin costo alguno.<br>
                            <b>Horario de 07:00 a 21:00 hrs lunes a domingo</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-2.png')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('img/services/service-icon-2.png')}} " alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>Alberca al aire libre</h3>
                            <p>Disfruta de nuestra alberca al aire libre, se encuentra rodeada de jardines y áreas de descanso para mayor comodidad de nuestros huéspedes.<br>
                            <b>Horario de 08:00 a 20:00 hrs</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-3.png')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('/img/services/service-icon-3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>Salones de eventos</h3>
                            <p>Contamos con espacios ideales para conferencias, reuniones, eventos o juntas, ponemos suma atención en los pequeños detalles y una atención especializada de parte de nuestro equipo. Con capacidad de hasta 65 personas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-4.png')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('/img/services/service-icon-4.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>Gimnasio</h3>
                            <p>Mantén tu rutina de ejercicio en nuestro gimnasio equipado con lo básico para tener un entrenamiento profesional durante tu estadía.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-5.png')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('/img/services/service-icon-5.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>Estacionamiento</h3>
                            <p>Estacionamiento disponible para nuestros huéspedes o comensales, vigilado las 24 hrs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-6.png')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('/img/services/service-icon-6.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>Lavandería*</h3>
                            <p>Para mayor comodidad durante tu estancia con nosotros contamos con servicios de lavandería tintorería con los más altos estándares de calidad.<br>
                            <b>*Costo Adicional.</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-7.jpg')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('/img/services/service-icon-7.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>DayPass</h3>
                            <p>El mejor DayPass para los tapatíos sin salir de la ciudad, ven y conoce nuestras instalaciones somos tu pase a la diversión.br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-8.png')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('img/services/service-icon-8.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>Check-In || Check-Out</h3>
                            <p>Nuestro horario de entrega de habitaciones es a partir de las 15:00 hrs y de salida a las 12:00 hrs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="services-item">
                        <div class="si-pic set-bg" data-setbg="{{asset('custom/img/serv/service-9.jpg')}}">
                            <div class="service-icon bg-orange-ronda">
                                <img src="{{asset('img/services/service-icon-9.png')}}" alt="">
                            </div>
                        </div>
                        <div class="si-text">
                            <h3>#EscapadaArbórea</h3>
                            <p>Merecen esa escapada romántica esa persona especial y tú, pregunta por nuestros paquetes lunamieleros no te arrepentirás. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Section End -->

    <!-- Kids Section Begin -->
    {{-- {# <section class="kids-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="kid-pic">
                        <img src="{{asset('img/services/kid-img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kid-text">
                        <div class="section-title">
                            <span>a memorable holliday</span>
                            <h2>Activities for Children</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas. Donec in sodales dui, a blandit nunc. Pellentesque id eros venenatis,
                            sollicitudin neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non,
                            ultricies volutpat tellus.</p>
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </section> #} --}}
    <!-- Kids Section End -->
@endsection
