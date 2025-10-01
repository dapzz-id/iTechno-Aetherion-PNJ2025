<section class="relative bg-cover bg-no-repeat bg-center py-24 lg:py-8 mt-30 lg:mt-50 lg:mb-20"
    style="background-image: url('{{ asset('subtract.webp') }}');">
    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div
            class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-8 lg:mb-20 text-center sm:text-left mt-20 sm:bg-transparent rounded-lg px-4 py-2">
            <h2 class="text-2xl lg:text-4xl font-bold text-blue-800 sm:text-blue-800 drop-shadow mb-2 sm:mb-0">
                Gallery
            </h2>
            <a href="/gallery"
                class="text-blue-700 text-base lg:text-xl sm:text-blue-600 font-medium flex justify-center sm:justify-end items-center space-x-1 hover:underline">
                <span>See all Gallery</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-30">
            <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3]">
                <img src="{{ asset('gallery1.webp') }}" alt="Gallery 1" class="w-full h-full object-cover">
            </div>
            <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3]">
                <img src="{{ asset('gallery2.webp') }}" alt="Gallery 2" class="w-full h-full object-cover">
            </div>
            <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3]">
                <img src="{{ asset('gallery3.webp') }}" alt="Gallery 3" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>
