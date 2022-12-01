@extends('layout.layout')

@section('app-head')
    
<style media="screen">
#mapa .capa-anti-eventos {
    background: rgba(0,0,0,0.3);
    width: 100%;
    height: 910px;
    position: absolute;
    cursor: pointer;
}
</style>
@endsection

@section('content')

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <div class="section-title">
                            <span>Disfruta de nuestras promociones</span>
                            <h2>Canjea Tu Codigo Promocional</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="info-box">
                        <h2 class="mb-4">Guarda bien este codigo ya que sera necesario para poder hacer valida tu promoción</h2>
                        <h3 class="mb-4">Puedes mostrar este codigo QR a la hora de hacer tu reserva</h3>
                        {!! QrCode::size(208)->generate($promoCodeUrl); !!}
                        <ul>
                            <br>
                            @if (isset($promoCode))
                                <li>Tu codigo Promocional es: <br> {{$promoCode}}</li>
                            @endif
                            <br>
                            <li>265 Av. Adolfo López Mateos Sur, <br />Guadalajara, Jal.</li>
                            <li>+52 3331214700</li>
                            <li>reservaciones@rondaminervahotel.com</li>
                            <li>24 Horas</li>
                        </ul>
                        <div class="social-links">
                            <a href="https://www.facebook.com/Hotel-Ronda-Minerva-108156711973719/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/hotelrondaminerva/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
@endsection