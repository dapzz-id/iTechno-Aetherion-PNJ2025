<footer class="@if(request()->is('detail-karya'))bg-gradient-to-bl from-blue-800 to-blue-600/70 @else bg-gradient-to-r from-blue-800/70 to-blue-600/45 @endif text-white py-10 px-6 mt-16 relative">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        <div>
            <h3 class="text-4xl font-bold mb-3">Infinia</h3>
            <hr class="border-white/50 mb-4">
            <div class="flex flex-col lg:flex-row items-start gap-3">
                <img src="{{ asset('ikonn.webp') }}" alt="icon" class="w-16 h-16">
                <p class="text-sm leading-relaxed text-white/80 text-justify mx-3 lg:ml-0 lg:mr-6">
                    Platform modern untuk terhubung dan saling menginspirasi, memberi ruang sederhana
                    namun hangat untuk berekspresi bebas.
                </p>
            </div>
        </div>

        <div>
            <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
            <ul class="space-y-2 text-white/80">
                <li><a href="/dashboard" class="hover:text-white">Dashboard</a></li>
                <li><a href="/gallery" class="hover:text-white">Gallery</a></li>
                <li><a href="/leaderboard" class="hover:text-white">Leaderboard</a></li>
                <li><a href="/profile" class="hover:text-white">Profile</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-lg font-semibold mb-4">Contact</h4>
            <ul class="space-y-2 text-white/80">
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-at"></i>
                    <a href="mailto:info@infinia.my.id" class="hover:text-white">info@infinia.my.id</a>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+6285183262007" class="hover:text-white">+62 851-8326-2007</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="text-center text-white/70 text-sm mt-10">
        &copy;{{ date('Y') }} Infinia | All rights reserved.
    </div>
</footer>
