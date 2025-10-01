<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Infinia') }}</title>
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

<body class="min-h-screen text-white font-sans overflow-hidden">

    <main class="mt-6 px-12 flex justify-center items-center h-screen relative z-[2]">
        @if (request()->is('register'))
            @include('auth.register')
        @else
            @include('auth.login')
        @endif
    </main>
</body>

</html>
