<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Infinia | Aetherion</title>
    <link rel="icon" href="{{ asset('ikonn.webp') }}" type="image/png">
    @vite('resources/css/app.css')

    <style>
        body {
            background: linear-gradient(135deg, #1D4ED8 0%, #488EF8 50%, #255DE0 100%);
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
    <!-- Header -->
    @include('utils.header')

    <!-- Main Content -->
    <main class="mt-6 px-12">
        <!-- Hero -->
        @include('utils.main.hero')

        <!-- Features Carousel -->
        @include('utils.main.features')

        <!-- Exhibition -->
        @include('utils.main.exhibition')

        <!-- About -->
        @include('utils.main.about')

        <!-- FAQ -->
        @include('utils.main.faq')

        <!-- Running Text -->
        <div class="relative h-24 overflow-hidden -mx-12 my-20 flex flex-col gap-5 w-[calc(100%+100px)]">
            <div class="relative h-10 overflow-hidden bg-white/5 w-full">
                <div class="absolute text-2xl font-bold opacity-30 whitespace-nowrap animate-runText w-max px-5">
                    HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊
                </div>
            </div>
        </div>

        <!-- Contact -->
        @include('utils.main.contact')
    </main>

    <!-- Footer -->
    @include('utils.footer')

    <script>
        // FAQ
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', () => {
                const item = q.parentElement;
                item.classList.toggle('active');
                document.querySelectorAll('.faq-item').forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });
            });
        });

        // Carousel
        const carousel = document.querySelector('.carousel-container');
        const cards = carousel.children;

        let cardWidth = 0,
            index = 0,
            autoScroll,
            visibleCards = 1;

        // Hitung jumlah card yang tampil sesuai ukuran layar
        function getVisibleCards() {
            if (window.innerWidth >= 1024) return 3; // lg
            if (window.innerWidth >= 640) return 2;  // sm
            return 1; // default mobile
        }

        // Hitung ulang lebar card
        function updateCardWidth() {
            if (!cards.length) return;
            const gap = parseInt(getComputedStyle(carousel).gap) || 0;
            cardWidth = cards[0].offsetWidth + gap;
            visibleCards = getVisibleCards();
        }

        // Update posisi carousel
        function updateCarousel() {
            carousel.style.transform = `translateX(-${index * cardWidth}px)`;
        }

        // Slide ke kanan
        function nextSlide() {
            const maxIndex = cards.length - visibleCards;
            index = (index + 1 > maxIndex) ? 0 : index + 1;
            updateCarousel();
        }

        // Slide ke kiri
        function prevSlide() {
            const maxIndex = cards.length - visibleCards;
            index = (index - 1 < 0) ? maxIndex : index - 1;
            updateCarousel();
        }

        // Tombol Next
        // document.querySelector('.carousel-next').onclick = () => {
        //     clearInterval(autoScroll);
        //     nextSlide();
        //     startAuto();
        // };

        // // Tombol Prev
        // document.querySelector('.carousel-prev').onclick = () => {
        //     clearInterval(autoScroll);
        //     prevSlide();
        //     startAuto();
        // };

        // Auto slide
        function startAuto() {
            autoScroll = setInterval(nextSlide, 3000);
        }

        // --- FIX BUG RESIZE ---
        let lastVisibleCards = getVisibleCards();

        window.addEventListener('resize', () => {
            clearTimeout(window._resizeTimer);
            window._resizeTimer = setTimeout(() => {
                const newVisibleCards = getVisibleCards();

                updateCardWidth();

                // Reset index jika jumlah visible cards berubah
                if (newVisibleCards !== lastVisibleCards) {
                    index = 0;
                    lastVisibleCards = newVisibleCards;
                }

                updateCarousel();
            }, 200); // delay kecil agar ukuran sudah stabil
        });

        // Init pertama
        updateCardWidth();
        updateCarousel();
        startAuto();


        // Exhibition 3D
        const exCards = document.querySelectorAll('.exhibition-card');
        const exBtns = document.querySelectorAll('.exhibition-nav button');
        const total = exCards.length,
            theta = 2 * Math.PI / total,
            radius = 400;

        function showCard(idx) {
            exCards.forEach((c, i) => {
                c.classList.toggle('active', i === idx);
                const rot = -idx * theta,
                    ang = theta * i + rot;
                const x = radius * Math.sin(ang),
                    z = radius * Math.cos(ang) - radius;
                c.style.transform = `translateX(${x}px) translateZ(${z}px) rotateY(${ang}rad)`;
                c.style.zIndex = i === idx ? 5 : Math.round(z);
            });
            exBtns.forEach((b, i) => b.classList.toggle('active', i === idx));
        }
        exBtns.forEach((b, i) => b.addEventListener('click', () => showCard(i)));
        showCard(0);
    </script>

</body>
</html>
