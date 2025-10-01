<section class="relative py-16">

    <div class="relative mx-auto px-6">
        <!-- Hero -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <!-- Left Text -->
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight drop-shadow-lg">
                    Discover <br />
                    artworks <br />
                    that inspire
                </h1>
            </div>

            <!-- Right Image Strips -->
            <div class="lg:flex hidden flex-col md:flex-row h-72 md:h-96 justify-center md:ml-36 space-y-4 md:space-y-0 md:space-x-4">
                <div class="relative w-2/3 md:w-1/6 bg-contain bg-no-repeat bg-center rounded-lg overflow-hidden mx-auto md:mx-0"
                    style="background-image: url('{{ asset('gallery-asset1.webp') }}')">
                </div>
                <div class="relative w-2/3 md:w-1/6 bg-contain bg-no-repeat bg-center rounded-lg overflow-hidden mx-auto md:mx-0"
                    style="background-image: url('{{ asset('gallery-asset2.webp') }}')">
                </div>
                <div class="relative w-2/3 md:w-1/6 bg-contain bg-no-repeat bg-center rounded-lg overflow-hidden mx-auto md:mx-0"
                    style="background-image: url('{{ asset('gallery-asset3.webp') }}')">
                </div>
            </div>
        </div>

        <!-- My Posts -->
        <div class="max-w-6xl mx-auto mt-16">
            <h3 class="text-white text-lg font-semibold mb-6">Posts</h3>

            <!-- Grid images -->
            <div id="cardGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($searchResults as $result)
                    <div class="card rounded-xl overflow-hidden shadow-lg cursor-pointer bg-white/10 shadow-white/30 hover:scale-105 transition"
                        onclick="window.location.href='/detail-karya'">
                        <div class="w-full aspect-video">
                            <img src="{{ $result['image'] }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex items-center justify-between px-4 py-3 text-white text-sm">
                            <span class="username">{{ $result['username'] }}</span>
                            <span>❤️ {{ $result['likes'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
