@extends('base.template')

@section('page')

@include('front.home.aside')

{{-- TopNavbar --}}
@include('front._partials.header')

{{-- Restaurant Media --}}

<section class="bg-pattern-diamonds">
    
    @include('front.survey.sections.satisfaction-form')

</section>


{{-- Footer --}}
@include('front._partials.footer')

<span class="w-0"></span>
@endsection


@section('js')


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function alerta(titulo, texto, icono) {
        return Swal.fire({
            title: titulo,
            text: texto,
            icon: icono,
            confirmButtonText: 'Ok'
        })
    }

    function userFeedback(){
        alerta('Gracias por tu opinión', 'Tu opinión es muy importante para nosotros', 'success').then((result) => {
            window.location.href = "{{ route('home') }}";
        })
    }
    function niceUserFeedback(){
        alerta('Gracias por tu opinión', 'Tu opinión es muy importante para nosotros, recuerda recomendarnos y dejarnos una reseña en nuestras redes.', 'success').then((result) => {
            window.location.href = "{{ route('restaurant-media') }}";
        })
    }
</script>
<script>

    const aside = document.querySelector('#aside');
    const lateralMenu = document.querySelector('#lateral-menu');

    function closeNav(){

        aside.classList.toggle('w-full');
        document.body.classList.remove('overflow-hidden');
        lateralMenu.classList.toggle('w-72');

    }

    function openNav(){

        aside.classList.toggle('w-full');
        document.body.classList.add('overflow-hidden');
        lateralMenu.classList.toggle('w-72');
    
    }

</script>
<script src="{{ asset('/assets/js/home.js') }}"></script>

@endsection