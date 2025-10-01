<section class="relative w-full min-h-screen py-12 text-white">

    <div class="relative max-w-5xl mx-auto">
        <!-- Title -->
        <h2 class="text-3xl font-bold text-center mb-12">Leaderboard</h2>

        <!-- Top 3 (hilang di mobile, tampil di sm ke atas) -->
        <div class="hidden sm:grid grid-cols-3 gap-6 items-end mb-24">
            @foreach ($top3 as $i => $user)
                <div class="flex flex-col items-center">
                    <!-- Profile placeholder -->
                    <div class="w-16 h-16 rounded-lg shadow-lg shadow-[#FFE38A]/60">
                        <img src="{{ $user['profile_picture'] }}" class="w-full rounded-lg" alt="">
                    </div>

                    <span class="mt-2 font-semibold">{{ $user['username'] }}</span>

                    <!-- Podium pakai gambar -->
                    <div class="relative mt-4 @if($i == 1) w-42 @elseif($i == 0) w-36 @else w-32 @endif">
                        <img src="{{ asset('podium.webp') }}" alt="Podium"
                            class="
                                w-full object-cover
                                @if ($i == 1) h-40 z-10
                                @elseif($i == 0) h-32 z-5
                                @else h-28 z-2 @endif
                            ">
                        <div class="absolute inset-x-0 
                            @if ($i == 1) bottom-14 left-14
                            @elseif ($i == 0) bottom-9 left-10
                            @else bottom-7 left-9 @endif
                            text-left text-sm space-y-1">
                            <div>❤️ {{ $user['likes'] }}</div>
                            <div>📄 {{ $user['posts'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Table -->
        <div class="overflow-x-auto rounded-xl drop-shadow-lg shadow-white/30">
            <table class="w-full min-w-[500px] text-left text-black border-separate border-spacing-y-4">
                <thead class="text-white">
                    <tr>
                        <th class="py-3 px-4 text-center">Rank</th>
                        <th class="py-3 px-4 text-left">Username</th>
                        <th class="py-3 px-4 text-center">Liked</th>
                        <th class="py-3 px-4 text-center">Posts</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($others as $row)
                        <tr class="bg-white rounded-xl shadow-md">
                            <td class="py-3 px-4 text-center rounded-l-xl">{{ $row['rank'] }}</td>
                            <td class="py-3 px-4 text-left flex items-center gap-2">
                                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                                {{ $row['username'] }}
                            </td>
                            <td class="py-3 px-4 text-center">{{ $row['likes'] }}</td>
                            <td class="py-3 px-4  text-center rounded-r-xl">{{ $row['posts'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
