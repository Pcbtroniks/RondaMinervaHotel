@extends('base.template')

@section('page')

@include('front.home.aside')

{{-- TopNavbar --}}
@include('front._partials.header')

{{-- Hero --}}
@include('front.home.hero')

{{-- About --}}

@include('front.home.about')

</section>

{{-- Rooms --}}
@include('front.home.rooms')

{{-- Comments --}}

@include('front.home.comments')

{{-- services --}}

@include('front.home.services')

{{-- Footer --}}
@include('front._partials.footer')

<span class="w-0"></span>
@endsection

@section('css')

<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.default.min.css') }}">


<!-- AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- DatePicker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }

        .nth-rm li {
            margin-right: .7rem;
    }

    input[type="date"]::-webkit-inner-spin-button,
    input[type="date"]::-webkit-calendar-picker-indicator {
        display: none;
        -webkit-appearance: none;
    }


    .shadow-card {
        box-shadow: 0px 4px 4px 0px #00000040;
    }
    .text-shadow {
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    }
    .servs:hover {
        animate__animated animate__bounce
    }

    .inner-shadow {
        box-shadow: 0px 0px 14px 3px rgba(0,0,0,0.49) inset;
        -webkit-box-shadow: 0px 0px 14px 3px rgba(0,0,0,0.49) inset;
        -moz-box-shadow: 0px 0px 14px 3px rgba(0,0,0,0.49) inset;
    }
/* 
    .inner-shadow {
        box-shadow: 0px 0px 18px 6px rgba(0,0,0,0.49) inset;
        -webkit-box-shadow: 0px 0px 18px 6px rgba(0,0,0,0.49) inset;
        -moz-box-shadow: 0px 0px 18px 6px rgba(0,0,0,0.49) inset;
    } */

    .rounded-shadow:hover {
        text-shadow: 0px 0px 15px rgba(255,255,255,1);
    }
</style>

@endsection
@section('js')

{{-- Slide --}}

<script src="{{ asset('assets/js/libs/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script>

<script>
    $(document).ready(function(){

// $('#hero-carousel').owlCarousel({
//     items: 1,
//     autoplay: true,
//     loop: true,
//     autoplayTimeout: 4000,
//     autoplayHoverPause: true,
//     animateOut: 'fadeOut',
//     animateIn: 'fadeIn',
//     autoWidth:true,
//     responsive:{
//         1200: {
//             autoWidth:false,
//         }
//     }

// });

$('#comments-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    loop: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    navdots: true,
    responsive:{
        600: {
            items: 2
        }
    }
});

});
</script>

<!-- DatePicker -->

<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/locales/es.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();

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