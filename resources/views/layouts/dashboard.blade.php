<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Infinia | Aetherion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="{{ asset('ikonn.webp') }}" type="image/png">
    @vite('resources/css/app.css')

    <style>
        body {
            background: linear-gradient(135deg, #1D4ED8 0%, #488EF8 50%, #255DE0 100%);
            position: relative;
        }

        /* Untuk menghasilkan grid */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(90deg, rgba(255, 255, 255, 0.15) 1px, transparent 1px),
                linear-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none;
            z-index: 0;
        }

        /* Running text animation */
        @keyframes runText {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-runText {
            animation: runText 15s linear infinite;
        }

        /* Scrollbar custom untuk Chromium (Edge, Chrome) */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
            background: transparent;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0);
        }

        ::-webkit-scrollbar-corner {
            background: rgba(0, 0, 0, 0);
        }

        ::-webkit-scrollbar-thumb {
            background-color: #1D4ED8;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #2563EB;
        }

        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #1D4ED8 transparent;
        }
    </style>
</head>

<body class="min-h-screen text-white font-sans overflow-x-hidden">
    @include('auth.utils.header')

    <main class="mt-6 @if (request()->is('dashboard')) px-0 @else px-12 @endif relative z-[2]">

        @if (request()->is('search'))
            @include('auth.utils.search.search')
        @elseif (request()->is('leaderboard'))
            @include('auth.utils.leaderboard.leaderboard')
        @elseif (request()->is('profile'))
            @include('auth.utils.profile.profile')
        @elseif (request()->is('gallery'))
            @include('auth.utils.karya.gallery')
        @else
            <div class="px-6">
                @include('auth.utils.main.hero')
            </div>
            @include('auth.utils.main.gallery')
            <div class="bg-cover bg-center bg-no-repeat inset-0"
                style="background-image: url('{{ asset('bg_features.webp') }}');">
                @include('auth.utils.main.leaderboard')
            </div>
        @endif
    </main>

    @include('auth.utils.footer')
</body>

</html>
