<section id="gallery" class="exhibition-section py-10 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8">
    <div class="relative flex flex-col items-center mb-8 sm:mb-10 lg:mb-12">
        <!-- Star Icon - Responsive sizes -->
        <div class="absolute left-2 sm:left-0 top-1/2 -translate-y-1/2">
            <img src="{{ asset('Star.webp') }}" alt="Star" class="w-16 h-16 sm:w-24 sm:h-24 md:w-32 md:h-32 lg:w-40 lg:h-40 object-contain">
        </div>

        <!-- Title -->
        <div class="text-center">
            <img src="{{ asset('exhibition.webp') }}" alt="Exhibition" class="h-16 sm:h-20 lg:h-24 inline-block drop-shadow-md">
            <p class="text-sm sm:text-base lg:text-lg mt-2">A collection of digital artworks</p>
        </div>
    </div>

    <!-- Desktop 3D Carousel -->
    <div class="flex justify-center items-center perspective-2000 mx-auto h-64 sm:h-80 md:h-96 relative transform-style-3d overflow-hidden">
        <div class="exhibition-card absolute w-28 h-40 sm:w-40 sm:h-56 md:w-56 md:h-72 lg:w-72 lg:h-80 rounded-xl overflow-hidden shadow-lg cursor-pointer card-1">
            <img src="{{ asset('exhibition1.webp') }}" alt="Artwork 1" class="w-full h-full object-cover">
        </div>
        <div class="exhibition-card absolute w-28 h-40 sm:w-40 sm:h-56 md:w-56 md:h-72 lg:w-72 lg:h-80 rounded-xl overflow-hidden shadow-lg cursor-pointer card-2">
            <img src="{{ asset('exhibition2.webp') }}" alt="Artwork 2" class="w-full h-full object-cover">
        </div>
        <div class="exhibition-card absolute w-28 h-40 sm:w-40 sm:h-56 md:w-56 md:h-72 lg:w-72 lg:h-80 rounded-xl overflow-hidden shadow-lg cursor-pointer card-3">
            <img src="{{ asset('exhibition3.webp') }}" alt="Artwork 3" class="w-full h-full object-cover">
        </div>
        <div class="exhibition-card absolute w-28 h-40 sm:w-40 sm:h-56 md:w-56 md:h-72 lg:w-72 lg:h-80 rounded-xl overflow-hidden shadow-lg cursor-pointer card-4">
            <img src="{{ asset('exhibition4.webp') }}" alt="Artwork 4" class="w-full h-full object-cover">
        </div>
        <div class="exhibition-card absolute w-28 h-40 sm:w-40 sm:h-56 md:w-56 md:h-72 lg:w-72 lg:h-80 rounded-xl overflow-hidden shadow-lg cursor-pointer card-5">
            <img src="{{ asset('exhibition5.webp') }}" alt="Artwork 5" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Navigation -->
    <div class="exhibition-nav mt-6 flex justify-center gap-2 flex-wrap">
        <button class="active px-3 py-1 sm:px-4 sm:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">1</button>
        <button class="px-3 py-1 sm:px-4 sm:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">2</button>
        <button class="px-3 py-1 sm:px-4 sm:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">3</button>
        <button class="px-3 py-1 sm:px-4 sm:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">4</button>
        <button class="px-3 py-1 sm:px-4 sm:py-2 bg-white/10 border border-white rounded-full text-white cursor-pointer hover:bg-white/20 hover:-translate-y-1 text-sm sm:text-base transition-all duration-200">5</button>
    </div>
</section>

<style>
    .perspective-2000 { perspective: 2000px; }
    .transform-style-3d { transform-style: preserve-3d; }

    /* Mobile default (kecil) */
    .card-1 { transform: rotateY(0deg) translateZ(100px); }
    .card-2 { transform: rotateY(72deg) translateZ(100px); }
    .card-3 { transform: rotateY(144deg) translateZ(100px); }
    .card-4 { transform: rotateY(216deg) translateZ(100px); }
    .card-5 { transform: rotateY(288deg) translateZ(100px); }

    /* Tablet */
    @media (min-width: 640px) {
      .card-1 { transform: rotateY(0deg) translateZ(180px); }
      .card-2 { transform: rotateY(72deg) translateZ(180px); }
      .card-3 { transform: rotateY(144deg) translateZ(180px); }
      .card-4 { transform: rotateY(216deg) translateZ(180px); }
      .card-5 { transform: rotateY(288deg) translateZ(180px); }
    }

    /* Desktop */
    @media (min-width: 1024px) {
      .card-1 { transform: rotateY(0deg) translateZ(260px); }
      .card-2 { transform: rotateY(72deg) translateZ(260px); }
      .card-3 { transform: rotateY(144deg) translateZ(260px); }
      .card-4 { transform: rotateY(216deg) translateZ(260px); }
      .card-5 { transform: rotateY(288deg) translateZ(260px); }
    }
</style>