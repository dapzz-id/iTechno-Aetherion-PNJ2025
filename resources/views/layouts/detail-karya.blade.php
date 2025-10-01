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

    <header class="top-0 lg:px-10 px-8 text-sm py-6 lg:text-lg flex flex-row items-center text-black cursor-pointer" onclick="window.history.back()">
        <i class="fas fa-arrow-left "></i>
        <span class="ml-3 mb-0.5">Back</span>
    </header>

    <main class="px-12 relative z-[2]">
        @include('auth.utils.karya.detail-karya')
    </main>

    <!-- Footer -->
    @include('auth.utils.footer')
</body>
</html>