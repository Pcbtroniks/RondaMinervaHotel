<aside id="aside" class="overflow-hidden fixed top-0 h-screen bg-black bg-opacity-50 z-30 transition-all duration-300">
    <section id="lateral-menu" class="w-0 bg-white h-screen opacity-100 shadow-inner transition-all duration-300">
        <ul>
            
            <li class="relative border-black border-opacity-30 border-b-2">
                <div class="bg-ronda-dark-medium w-full h-28 inner-shadow">
                    <img class="w-32 mx-auto pt-3" src="{{ asset('img/logos/logo-white.png') }}" alt="">
                    <br>
                    <br>
                </div>
                <a href="javascript:void(0)" class="absolute top-0 right-0   focus:bg-red-500 text-white float-right w-14 h-14 leading-tight text-[2.5rem] text-center transition-all duration-150 rounded-xl rounded-shadow" onclick="closeNav()">&times;</a>
            </li>

            <li class="relative hover:bg-ronda-ligth hover:text-ronda-dark text-ronda-dark-medium border-black border-opacity-30 border-b p-4 cursor-pointer transition">
                <a class="text-lg font-light" href="{{route('home')}}">Inicio</a>
            </li>

            <li class="relative hover:bg-ronda-ligth hover:text-ronda-dark text-ronda-dark-medium border-black border-opacity-30 border-b p-4 cursor-pointer transition">
                <a class="text-lg font-light" href="{{route('rooms')}}">Habitaciones</a>
            </li>

            <li class="relative hover:bg-ronda-ligth hover:text-ronda-dark text-ronda-dark-medium border-black border-opacity-30 border-b p-4 cursor-pointer transition">
                <a class="text-lg font-light" href="{{route('installations')}}">Instalaciones</a>
            </li>

            <li class="relative hover:bg-ronda-ligth hover:text-ronda-dark text-ronda-dark-medium border-black border-opacity-30 border-b p-4 cursor-pointer transition">
                <a class="text-lg font-light" href="{{route('services')}}">Servicios</a>

            <li class="relative hover:bg-ronda-ligth hover:text-ronda-dark text-ronda-dark-medium border-black border-opacity-30 border-b p-4 cursor-pointer transition">
                <a class="text-lg font-light" href="{{route('contact')}}">Contacto</a></a>
            </li>
        </ul>
    </section>
</aside>