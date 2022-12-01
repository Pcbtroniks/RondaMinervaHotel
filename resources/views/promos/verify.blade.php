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
                            <h2>Verifica Tu Codigo</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @if (isset($promo) && $promo->code)
                    
                <div class="col-lg-12">
                    <div class="info-box">
                        <h2 class="mb-4 text-success">Felicidades este codigo es valido!</h2>
                        {!! QrCode::size(208)->generate($promo->code); !!}
                        <ul>
                            <br>
                                <li>Tu codigo Promocional es: <br> {{$promo->code}}</li>
                            <br>
                            <li>Nombre: {{$promo->name}}.</li>
                            <li>Telefono: {{$promo->phone}}</li>
                            <li>Email: {{$promo->email}}</li>
                            <li>Numero de Personas: {{$promo->amount_of_people}}</li>
                            <li>Ultimos 4: {{substr($promo->card, -4)}}</li>
                        </ul>
                        <div class="social-links">
                            <a href="https://www.facebook.com/Hotel-Ronda-Minerva-108156711973719/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/hotelrondaminerva/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div> 
                </div>

                @else

                <div class="col-lg-12">
                    <div class="info-box">
                        <h2 class="mb-4">Ingrese un codigo promocional valido</h2>
                        <div>
                            <form action="{{route('promos.verify.manual')}}" method="GET">
                                @csrf
                                <input name="code" type="text" placeholder="Ingrese el codigo manualmente">
                                <input type="submit" value="Verificar">
                            </form>
                        </div>
                        <div class="social-links">
                            <a href="https://www.facebook.com/Hotel-Ronda-Minerva-108156711973719/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/hotelrondaminerva/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                @endif

            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    {{-- <div class="map" id="mapa"> --}}

    {{-- <div class="capa-anti-eventos" onclick="this.style.display='none'"></div> --}}
    {{-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1hkAWMc7q9Wm3iz4QaNxYf3Cm2ww0G_QC" height="910" frameborder="0" style="border:0"></iframe> --}}
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3732.987024146618!2d-103.3916311!3d20.6701069!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1656624486945!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

    </div>
    <!-- Map Section End -->
@endsection