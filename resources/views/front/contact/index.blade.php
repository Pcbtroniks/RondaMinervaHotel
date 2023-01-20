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


    <!-- Hero Area Section Begin -->
    {{-- {# <div class="hero-area set-bg other-page" data-setbg="{{asset('img/about_bg.jpg')}}">
    </div> #} --}}
    <!-- Hero Area Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <div class="section-title">
                            <span>un hospedaje inolvidable</span>
                            <h2>Ubicado en el corazón de <br />Guadalajara</h2>
                        </div>
                        <a href="https://www.google.com.mx/maps/dir//Arborea+Hotel,+Av.+Adolfo+L%C3%B3pez+Mateos+Sur+265,+Jardines+del+Bosque,+44520+Guadalajara,+Jal./@20.6701069,-103.3916311,17z/data=!4m19!1m9!3m8!1s0x80d93819465554a7:0x56a11423a2e9cc6b!2sArborea+Hotel!5m2!4m1!1i2!8m2!3d20.6701069!4d-103.3894424!4m8!1m0!1m5!1m1!1s0x80d93819465554a7:0x56a11423a2e9cc6b!2m2!1d-103.3894424!2d20.6701069!3e2" class="primary-btn bg-orange-ronda">Como llegar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
                        @csrf
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="name" type="text" placeholder="Nombre" required>
                            </div>
                            <div class="col-lg-6">
                                <input name="email" type="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12">
                                <input name="subject" type="text" class="subject" placeholder="Asunto">
                                <textarea name="message" placeholder="Mensaje" required></textarea>
                                <button type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="info-box">
                        <img src="{{asset('/img/logos/Ronda_Minerva-logo-blackandorange.png')}}" style="width: 13rem" alt="">
                        {{-- <img src="{{asset('custom/img/contact-logo.png')}}" alt=""> --}}
                        <ul>
                            <li>265 Av. Adolfo López Mateos Sur, <br />Guadalajara, Jal.</li>
                            <li>+52 3331214700</li>
                            <li>reservaciones@hotelarborea.com</li>
                            <li>24 Horas</li>
                        </ul>
                        <div class="social-links">
                            <a href="https://www.facebook.com/Hotel-Ronda-Minerva-108156711973719/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/hotelrondaminerva/"><i class="fa fa-instagram"></i></a>
                            {{-- {# <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a> #} --}}
                            {{-- <a href="https://twitter.com/HotelArboreaGdl"><i class="fa fa-twitter"></i></a> --}}
                            {{-- {# <a href="#"><i class="fa fa-youtube-play"></i></a> #} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map" id="mapa">

    <div class="capa-anti-eventos" onclick="this.style.display='none'"></div>
    {{-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1hkAWMc7q9Wm3iz4QaNxYf3Cm2ww0G_QC" height="910" frameborder="0" style="border:0"></iframe> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3732.987024146618!2d-103.3916311!3d20.6701069!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smx!4v1656624486945!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <!-- Map Section End -->
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session()->has('success'))
<script>
    Swal.fire(
    'Muchas gracias!',
    '{{ session()->get("success") }}',
    'success'
    )
</script>
@endif
@endsection

