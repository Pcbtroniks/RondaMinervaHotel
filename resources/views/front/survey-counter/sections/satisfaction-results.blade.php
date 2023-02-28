<section>

    <div class="px-4 grid items-center py-16">
        <div class="shadow-card bg-white rounded-xl sm:p-10 p-4 max-w-3xl mx-auto">
            <div class="mb-4 sm:mb-8 md:mb-10 xl:mb-12">
                <h1 class="text-2xl font-bold">Resultados Encuesta de satisfacción</h1>
            </div>

            <div class="mb-4 sm:mb-8 md:mb-10 xl:mb-12">
                <p class="text-xl">Resultado de las encuestas que dejo la gente en la web del hotel</p>
            </div>
            
            <div class="flex justify-between items-center gap-2">
                <div class="text-5xl sm:text-8xl md:text-9xl bg-ronda-orange/30 hover:bg-ronda-orange/70 duration-300 p-2 lg:p-4 rounded-xl cursor-pointer">
                    <span>
                        🙁
                    </span>
                    <p class="text-xs text-center mt-4">Result: <span class="font-bold text-lg">{{ $badCount }}</span></p>
                </div>
                <div class="text-5xl sm:text-8xl md:text-9xl bg-ronda-orange/30 hover:bg-ronda-orange/70 duration-300 p-2 lg:p-4 rounded-xl cursor-pointer">
                    <span>
                        😐
                    </span>
                    <p class="text-xs text-center mt-4">Result: <span class="font-bold text-lg">{{ $regularCount }}</span></p>
                </div>
                <div class="text-5xl sm:text-8xl md:text-9xl bg-ronda-orange/30 hover:bg-ronda-orange/70 duration-300 p-2 lg:p-4 rounded-xl cursor-pointer">
                    <span>
                        😃
                    </span>
                    <p class="text-xs text-center mt-4">Result: <span class="font-bold text-lg">{{ $goodCount }}</span></p>
                </div>
            </div>
        </div>
    </div>

</section>