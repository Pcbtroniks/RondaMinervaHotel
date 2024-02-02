<section>
    <div class="relative z-10 w-full">

        <img class="md:w-full relative h-screen object-cover object-top -mt-10 -z-50" src="{{ asset('assets/img/RondaMinerva_hospedaje_en_guadalajara_portada-hero.png') }}" alt="Hero Home Page Hotel Ronda Minerva">

        <form action="#" method="GET" id="ReservationEngine">
        <div id="dateInput" class="md:h-[100px] lg:flex lg:w-full lg:px-12 2xl:w-fit  absolute md:top-[73%] top-[59%] left-1/2 -translate-x-1/2">

            <div class="bg-white md:w-full lg:w-[340px] w-[340px] flex flex-col py-5 px-7 relative">

                <label for="checkin" class="font-bold">Del dia
                    <input class="md:w-full my-1 border-b-2 border-ronda-dark-ligth focus:outline-none" type="text" id="checkin" name="checkin" autocomplete="off" required>
                    <img class="absolute right-6 bottom-11" src="{{ asset('assets/icons/calendar-outline.svg') }}" alt="calendar icon">
                </label>

            </div>

            <div class="bg-white md:w-full lg:w-[340px] w-[340px] flex flex-col py-5 px-7 relative">

                <label for="checkout" class="font-bold">Hasta el dia
                    <input class="md:w-full my-1 border-b-2 border-ronda-dark-ligth focus:outline-none" type="text" id="checkout" name="checkout" autocomplete="off" required>
                    <img class="absolute right-6 bottom-11" src="{{ asset('assets/icons/calendar-outline.svg') }}" alt="calendar icon">
                </label>
            </div>

            <div class="bg-white md:w-full lg:w-[340px] w-[340px] flex justify-between py-5 px-7 relative">
            
                <div class="w-28 md:w-1/2  text-center">
                    <label for="adults" class="font-bold">Adultos</label>
                    <div class="flex h-6 my-1">
                        <span class="md:bg-white bg-ronda-orange w-20 h-full leading-8 md:text-black text-white cursor-pointer" onclick="setCount('#adults', -1)">-</span>
                        <input class="w-full border-b-2 border-ronda-dark-ligth text-center" type="number" name="adults" id="adults" value="1" min="0" required>
                        <span class="md:bg-white bg-ronda-orange w-20 h-full leading-8 md:text-black text-white cursor-pointer" onclick="setCount('#adults', 1)">+</span>
                    </div>
                </div>
                <div class="w-28 md:w-1/2 text-center">
                    <label for="minors" class="font-bold">Niños</label>
                    <div class="flex h-6 my-1">
                        <span class="md:bg-white bg-ronda-orange w-20 h-full leading-8 md:text-black text-white cursor-pointer" onclick="setCount('#minors', -1)">-</span>
                        <input class="w-full border-b-2 border-ronda-dark-ligth text-center" type="number" name="minors" id="minors" value="0" min="0">
                        <span class="md:bg-white bg-ronda-orange w-20 h-full leading-8 md:text-black text-white cursor-pointer" onclick="setCount('#minors', 1)">+</span>
                    </div>
                </div>

            </div>

            <div>
                {{-- <a href="https://direct-book.com/properties/HotelarboreaDirect?locale=es"> --}}
                    <button type="button" id="submitReservationEngine" class="md:w-full lg:w-[136px] md:h-full w-[340px] h-16 bg-ronda-orange font-bold text-xl text-white leading-[64px]">Reservar</button>
                {{-- </a> --}}
            </div>
            <noscript class="bg-ronda-orange text-white">
                Esta pagina requiere JavaScript para funcionar correctamente, por favor habilite los scripts
            </noscript>

        </div>
        </form>
    </div>
</section>