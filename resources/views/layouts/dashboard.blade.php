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

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            pointer-events: none;
            z-index: 1;
        }

        main {
            position: relative;
            z-index: 2;
        }

        /* Tambahan grid kotak putih transparan */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(90deg, rgba(255, 255, 255, 0.15) 1px, transparent 1px),
                linear-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px);
            background-size: 60px 60px; /* ukuran kotaknya */
            pointer-events: none;
            z-index: 0;
        }

        /* Exhibition 3D cards */
        .exhibition-card {
            transform-style: preserve-3d;
            transform-origin: center;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .exhibition-card.active {
            transform: translateX(0) translateZ(200px) rotateY(0deg) !important;
            z-index: 5;
        }

        .exhibition-card:not(.active) {
            opacity: 0.6;
        }

        /* FAQ accordion */
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
        }

        .faq-arrow {
            transition: transform 0.3s;
        }

        .faq-item.active .faq-arrow {
            transform: rotate(180deg);
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
    </style>
</head>

<body class="min-h-screen text-white font-sans overflow-x-hidden">
    <!-- Header -->
    @include('auth.utils.header')

    <!-- Main Content -->
    <main class="mt-6 px-12">

        @if (request()->is('search'))
            @include('auth.utils.search.search')
        
        @elseif (request()->is('leaderboard'))
            @include('auth.utils.leaderboard.leaderboard')

        @elseif (request()->is('profile'))
            @include('auth.utils.profile.profile')
        @elseif (request()->is('gallery'))
            @include('auth.utils.karya.gallery')
        @else
            <!-- Hero -->
            @include('auth.utils.main.hero')
            <!-- Gallery -->
            @include('auth.utils.main.gallery')
            <!-- Leaderboard -->
            @include('auth.utils.main.leaderboard')
        @endif
    </main>

    <!-- Footer -->
    @include('auth.utils.footer')
</body>
</html>
