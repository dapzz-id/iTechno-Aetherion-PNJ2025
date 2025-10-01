<section class="relative w-full py-10 px-6 bg-transparent">
    <div class="relative max-w-6xl mx-auto">
        <div class="flex items-center bg-white text-black rounded-full px-4 py-2 mb-12 shadow w-full max-w-md mx-auto">
            <input id="searchInput" type="text" placeholder="Search..."
                class="w-full flex-1 outline-none bg-transparent px-2" onkeyup="filterCards()" />

            <button class="flex items-center justify-center text-blue-600 flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
            </button>
        </div>

    <div class="max-w-6xl mx-auto mt-12">
        <h3 class="text-white text-lg font-semibold mb-6">All Posts</h3>

        <div id="cardGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($searchResults as $result)
                <div class="card rounded-xl overflow-hidden shadow-lg cursor-pointer bg-white/10 shadow-white/30 hover:scale-105 transition" onclick="window.location.href='/detail-karya'">
                    <div class="w-full aspect-video">
                        <img src="{{ $result['image'] }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex items-center justify-between px-4 py-3 text-white text-sm">
                        <span class="username">{{ $result['username'] }}</span>
                        <span><i class="fa-solid fa-heart text-red-500 mr-1"></i> {{ $result['likes'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>

<script>
    function filterCards() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const cards = document.querySelectorAll("#cardGrid .card");

        cards.forEach(card => {
            const username = card.querySelector(".username").textContent.toLowerCase();
            card.style.display = username.includes(input) ? "block" : "none";
        });
    }
</script>