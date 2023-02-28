@extends('base.template')

@section('page')

@include('front.home.aside')

{{-- TopNavbar --}}
@include('front._partials.header')

{{-- Restaurant Media --}}

<section class="bg-pattern-diamonds">
    
    @include('front.survey-counter.sections.satisfaction-results')

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

    async function sendFeedback(value){
        const url = "{{ route('satisfaction-survey.store') }}";

        // make a function to send the data to the server
        const data = {
            satisfaction: value,
            _token: "{{ csrf_token() }}"
        }

        try {
            
            const response = await fetch(url, {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': data._token
                }
            });

            const result = await response.json();
            console.log(result);
        } catch (error) {
            console.log(error);
        }

    }

    function userFeedback(value){
        sendFeedback(value);
        alerta('Gracias por tu opinión', 'Tu opinión es muy importante para nosotros', 'success').then((result) => {
            window.location.href = "{{ route('home') }}";
        })
    }
    function niceUserFeedback(value){
        sendFeedback(value);
        alerta('Gracias por tu opinión', 'Tu opinión es muy importante para nosotros, recuerda recomendarnos y dejarnos una reseña en nuestras redes.', 'success').then((result) => {
            window.location.href = "{{ route('socials') }}";
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