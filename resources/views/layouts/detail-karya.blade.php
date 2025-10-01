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
            background: white;
            position: relative;
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

    <header class="top-0 lg:px-10 px-8 text-sm py-6 lg:text-lg flex flex-row items-center text-black cursor-pointer" onclick="window.history.back()">
        <i class="fas fa-arrow-left "></i>
        <span class="ml-3 mb-0.5">Back</span>
    </header>

    <!-- Main Content -->
    <main class="px-12">
        <!-- Add Karya -->
        @include('auth.utils.karya.detail')
    </main>

    <!-- Footer -->
    @include('auth.utils.footer')
</body>
</html>
