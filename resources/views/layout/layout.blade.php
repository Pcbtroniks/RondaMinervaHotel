<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ronda Minerva Hotel en Guadalajara, Jalisco">
    <meta name="keywords" content="Hotel, comfort, alberca, minerva, gdl, barato, tequila, centro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ronda Minerva Hotel | En Guadalajara, Jalisco</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('custom/css/custom.css')}}" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    @yield('app-head')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div id="wrapper" class="toggled">
    {{-- Sidebar --}}
    @include('layout.sidebar')

    <!-- Header Section Begin -->
    <header class="header-section flex items-center">
        
        <div class="container-fluid">
            <div class="inner-header">
                
                <div class="logo">
                    
                    <i id="toggle-lateral-menu" class="text-orange-ronda text-lg open-sidebar fa fa-solid fa-bars "></i>

                    <a href="{{route('home')}}"><img src="{{ asset('/img/logos/Ronda_Minerva-logo-blackandorange.png')}}" loading="lazy" alt="Ronda Minerva Hotel Logo" width="60px" style="padding-bottom: .3rem"></a>

                </div>

                <div class="nav-right" style="margin-top: .1rem;">
                    <a style="border-radius: 25%; padding: 9px 14px" href="#" class="primary-btn bg-orange-ronda">
                        <svg style="width: 2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path style="fill: #ffffff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                    </a>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
        <div class="hamburguer-menu-ronda">

            <i id="toggle-lateral-menu-mobile" class="text-orange-ronda text-lg open-sidebar fa fa-solid fa-bars "></i>

        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="#"><img loading="lazy" alt="Ronda Minerva Hotel Logo" src="{{ asset('/img/logos/logo-white.png')}}"></a>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h4 class="text-white">Informacion de contacto</h4>
                        <ul class="text-white mt-4">
                            <li class="mt-4"><img src="{{ asset('assets/icons/call-outline.svg')}}" alt=""><span class="font-weight-bold">+52 33 3121 4700</span></li>
                            <li class="mt-4"><img src="{{ asset('assets/icons/location-outline.svg')}}" alt=""><span class="font-weight-bold">Av. Adolfo López Mateos Sur 265, <br />Jardines del Bosque, 44520 Guadalajara, Jal.</span></li>
                        </ul>
                        {{-- <div id="cont_8d8e1c72dacd1b1f56f1fc2535609b62">
                          <script type="text/javascript" async src="https://www.theweather.com/wid_loader/8d8e1c72dacd1b1f56f1fc2535609b62">
                          </script>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <ul class="social-networks mx-auto">
                            <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B523334410641&text=Hola,%20quiero%20hacer%20una%20nueva%20reserva."><img src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="WhatsApp"></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100083949546299"><img src="{{ asset('assets/icons/socials/Facebook.svg') }}" alt="Facebook"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/hotelrondaminerva/"><img src="{{ asset('assets/icons/socials/Instagram.svg') }}" alt="Instagram"></a></li>
                            <li><a target="_blank" href="https://twitter.com/RondaMinervaHtl"><img src="{{ asset('assets/icons/socials/Twitter.svg') }}" alt="Twitter"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li><a href="{{route('home')}}">Inicio</a></li>
                            <li><a href="{{route('rooms')}}">Habitaciones</a></li>
                            <li><a href="{{route('installations')}}">Instalaciones</a></li>
                            <li><a href="{{route('services')}}">Servicios</a></li>
                            <li><a href="{{route('contact')}}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
<div class="row pt-5">
                    <div class="col-lg-12 ">
                        <div class="small text-white text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Powered by <a href="https://pcbtroniks.com/" target="_blank">PCBTRONIKS</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
 </div> {{-- Wrapper End --}}

    <!-- Js Plugins -->
    <script src="{{ asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/js/main.js')}}"></script>
    <script src="{{ asset('/js/reservation.js')}}"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('body').css('overflow-x','hidden');
    });
    $("#toggle-lateral-menu").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('body').css('overflow-x','hidden');
    });
    $("#toggle-lateral-menu-mobile").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('body').css('overflow-x','hidden');
    });
    $(".slicknav_btn").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('body').css('overflow-x','hidden');
    });

    $("#close-navbar").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('body').css('overflow-x','show');
    });

    </script>
    @yield('js')
</body>

</html>
