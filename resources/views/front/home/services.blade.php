<section>

    <div class="space-y"></div>
    <div class="bg-main-light flex md:grid md:grid-cols-2 flex-col-reverse">

        <div class="px-4 md:mx-auto">
            <h3 class="font-bold text-3xl my-11">Contamos con</h3>

            <ul>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-ronda-orange">~</span> Al Edén restaurante</li>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-ronda-orange">~</span> Alberca al aire libre</li>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-ronda-orange">~</span> Salon de eventos</li>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-ronda-orange">~</span> Gimnasio</li>
                <li class="text-xl mb-2"> <span class="font-bold text-3xl text-ronda-orange">~</span> Estacionamiento</li>
            </ul>

            <div class="my-16">
                <a href="{{ route('services') }}">
                    <button class="w-36 h-12 font-bold bg-ronda-orange text-white text-sm">ver todos</button>
                </a>
            </div>
        </div>

        <div>
            <img class="w-full max-h-[630px] object-cover" src="{{ asset('custom/img/ins/alberca-1.png') }}" alt="Servicio">
        </div>

    </div>
</section>