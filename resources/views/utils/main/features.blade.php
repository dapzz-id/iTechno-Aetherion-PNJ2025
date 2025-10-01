<section id="features" class="features-section py-16 sm:py-20 mt-12 px-4 sm:px-8 lg:px-16">
    <!-- Header -->
    <div class="relative flex flex-col lg:flex-row justify-start items-center mb-12 lg:h-40 text-center lg:text-left gap-4 lg:gap-12">
        <!-- Jupiter Image -->
        <div class="relative flex-shrink-0">
            <img src="{{ asset('3D Planet.webp') }}" alt="Globe"
                class="w-32 h-32 sm:w-40 sm:h-40 lg:w-56 lg:h-56 object-contain opacity-100 mx-auto lg:mx-0">
            <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-lg -z-10"></div>
        </div>

        <!-- Title -->
        <div>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                Our <span class="text-blue-200 italic">interactive</span>
            </h2>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                Features
            </h2>
        </div>
    </div>

    <!-- Carousel Wrapper -->
  <div class="mx-4 sm:mx-6 md:mx-10">
        <div class="features-carousel bg-white/10 border border-white/20 sm:border-2 rounded-lg sm:rounded-xl p-4 sm:p-6 md:p-8 overflow-hidden relative w-full">
            <!-- Carousel Container -->
            <div class="carousel-container flex gap-3 sm:gap-4 md:gap-6 lg:gap-8 transition-transform duration-500 ease-in-out">
                <!-- Feature Cards -->
                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_dash.webp') }}" alt="Dashboard Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_detail.webp') }}" alt="Detail Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_profil.webp') }}" alt="Profile Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('card_submit.webp') }}" alt="Submit Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>

                <div class="feature-card flex-shrink-0 w-full xs:w-80 sm:w-[calc(50%-8px)] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] xl:w-[calc(33.333%-21px)] 2xl:w-[calc(25%-18px)] h-60 sm:h-72 md:h-80 lg:h-80 xl:h-84 rounded-lg sm:rounded-xl bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-sm border border-white/10 flex items-center justify-center cursor-pointer transition-all duration-300 hover:scale-105 hover:bg-white/15 overflow-hidden group">
                    <div class="w-3/4 h-3/4 sm:w-full sm:h-full p-2 sm:p-3 md:p-4">
                        <img src="{{ asset('cd_karya.webp') }}" alt="Portfolio Feature" 
                            class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                </div>
            </div>
        </div>
</section>