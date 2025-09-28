<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }

        nav a:hover {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .sign-in-btn {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 20px;
            border: 1px solid white;
            color: white;
            cursor: pointer;
            transition: all 0.3s;
        }

        .sign-in-btn:hover {
            background: white;
            color: #764ba2;
        }

        /* Main Content */
        main {
            margin-top: 100px;
            padding: 0 50px;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 80px 0;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in;
        }

        .hero-image-placeholder {
            width: 200px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            margin: 0 auto 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
        }

        .hero p {
            font-size: 20px;
            opacity: 0.9;
        }

        .cta-buttons {
            margin-top: 40px;
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .cta-buttons button {
            padding: 12px 30px;
            font-size: 16px;
            border: 2px solid white;
            background: transparent;
            color: white;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .cta-buttons button:hover {
            background: white;
            color: #764ba2;
            transform: translateY(-2px);
        }

        /* Interactive Features Section */
        .features-section {
            padding: 80px 0;
        }

        .features-header {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }

        .features-header h2 {
            font-size: 36px;
            margin-right: 20px;
        }

        .features-header h2 span {
            font-style: italic;
        }

        .features-bg-placeholder {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            opacity: 0.5;
        }

        .features-carousel {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid white;
            border-radius: 15px;
            padding: 30px;
            overflow: hidden;
        }

        .carousel-container {
            display: flex;
            gap: 20px;
            transition: transform 0.3s ease;
        }

        .feature-card {
            min-width: 200px;
            height: 250px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }

        /* Exhibition Section */
        .exhibition-section {
            padding: 80px 0;
            text-align: center;
        }

        .exhibition-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 50px;
        }

        .exhibition-header h2 {
            font-size: 36px;
            text-stroke: 1px white;
            -webkit-text-stroke: 1px white;
            margin-left: 20px;
        }

        .exhibition-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        .exhibition-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .exhibition-card {
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .exhibition-card:hover {
            transform: translateY(-10px);
        }

        /* About Section */
        .about-section {
            padding: 80px 0;
            text-align: center;
        }

        .about-section h2 {
            font-size: 36px;
            -webkit-text-stroke: 1px white;
            margin-bottom: 40px;
        }

        .about-image-placeholder {
            width: 80%;
            max-width: 600px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            margin: 0 auto;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
        }

        .faq-section h2 {
            font-size: 36px;
            -webkit-text-stroke: 1px white;
            margin-bottom: 40px;
        }

        .faq-item {
            background: rgba(255, 255, 255, 0.1);
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid transparent;
            transition: all 0.3s;
        }

        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .faq-arrow {
            transition: transform 0.3s;
        }

        .faq-item.active {
            border-color: white;
        }

        .faq-item.active .faq-arrow {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            padding: 0 20px 20px;
        }

        /* Running Text */
        .running-text-container {
            position: relative;
            height: 200px;
            overflow: hidden;
            margin: 80px 0;
        }

        .running-text {
            position: absolute;
            white-space: nowrap;
            font-size: 24px;
            font-weight: bold;
            opacity: 0.3;
        }

        .running-text-1 {
            animation: scroll1 20s linear infinite;
            top: 50px;
            transform: rotate(-20deg);
        }

        .running-text-2 {
            animation: scroll2 20s linear infinite;
            top: 100px;
            transform: rotate(20deg);
        }

        @keyframes scroll1 {
            0% { left: 100%; }
            100% { left: -100%; }
        }

        @keyframes scroll2 {
            0% { right: 100%; }
            100% { right: -100%; }
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 50px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid white;
            border-radius: 10px;
            color: white;
            font-size: 16px;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .submit-btn {
            padding: 15px 50px;
            background: white;
            color: #764ba2;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        .footer-section {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 40px 50px;
        }

        .footer-content {
            text-align: left;
        }

        .footer-content h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .footer-contact {
            font-size: 16px;
            line-height: 1.8;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Logo</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <button class="sign-in-btn">Sign In</button>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-image-placeholder">[Hero Image Here]</div>
            <h1>Infinite Ideas Take Flight</h1>
            <p>Unleash your creativity with our platform</p>
            <div class="cta-buttons">
                <button>Challenges</button>
                <button>Productivity</button>
                <button>Development</button>
                <button>Graphic</button>
                <button>Skill Building</button>
                <button>Team</button>
            </div>
        </section>

        <!-- Interactive Features -->
        <section class="features-section">
            <div class="features-header">
                <h2>Our <span>Interactive</span> Features</h2>
                <div class="features-bg-placeholder"></div>
            </div>
            <div class="features-carousel">
                <div class="carousel-container">
                    <div class="feature-card">[Feature 1]</div>
                    <div class="feature-card">[Feature 2]</div>
                    <div class="feature-card">[Feature 3]</div>
                    <div class="feature-card">[Feature 4]</div>
                    <div class="feature-card">[Feature 5]</div>
                    <div class="feature-card">[Feature 6]</div>
                    <div class="feature-card">[Feature 7]</div>
                </div>
            </div>
        </section>

        <!-- Exhibition Section -->
        <section class="exhibition-section">
            <div class="exhibition-header">
                <div class="exhibition-icon"></div>
                <h2>Exhibition</h2>
            </div>
            <p style="margin-bottom: 30px;">A collection of digital artworks</p>
            <div class="exhibition-grid">
                <div class="exhibition-card">[Artwork 1]</div>
                <div class="exhibition-card">[Artwork 2]</div>
                <div class="exhibition-card">[Artwork 3]</div>
                <div class="exhibition-card">[Artwork 4]</div>
                <div class="exhibition-card">[Artwork 5]</div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <h2>About</h2>
            <div class="about-image-placeholder">
                <a href="#" style="color: white; text-decoration: none;">[About Image - Click to Learn More]</a>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <h2>FAQ</h2>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah platform ini bisa diakses di mobile dan desktop?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Ya, platform kami dapat diakses melalui berbagai perangkat termasuk mobile, tablet, dan desktop dengan tampilan yang responsif.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah platform ini cocok buat tech enthusiast saja?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Tidak, platform kami dirancang untuk semua kalangan, baik pemula maupun profesional di berbagai bidang.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apa yang ditampilkan dalam fitur Exhibition?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Exhibition menampilkan karya-karya digital terpilih dari pengguna kami yang telah dikurasi dengan baik.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>Apakah fitur ini pengguna dipindah ke halaman redirect?</span>
                    <span class="faq-arrow">▼</span>
                </div>
                <div class="faq-answer">
                    Sebagian besar fitur dapat diakses langsung di platform, namun beberapa konten khusus mungkin memerlukan redirect ke halaman khusus.
                </div>
            </div>
        </section>

        <!-- Running Text -->
        <div class="running-text-container">
            <div class="running-text running-text-1">
                HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊
            </div>
            <div class="running-text running-text-2">
                CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊ CONTACT ◊ HELP ◊
            </div>
        </div>

        <!-- Contact Section -->
        <section class="contact-section">
            <h2>It's easy anything on your mind. Drop it here 👇</h2>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="footer-content">
            <h3>Stay Connected<br>with Web Name</h3>
            <div class="footer-contact">
                <p>📧 info@webname.com</p>
                <p>📞 +62 812 3456 7890</p>
            </div>
        </div>
    </footer>

    <script>
        // FAQ Functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                faqItem.classList.toggle('active');
                
                // Close other items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        item.classList.remove('active');
                  z  }
                });
            });
        });

        // Carousel functionality (basic)
        const carousel = document.querySelector('.carousel-container');
        let scrollAmount = 0;
        
        function scrollCarousel() {
            scrollAmount += 1;
            if (scrollAmount > carousel.scrollWidth - carousel.clientWidth) {
                scrollAmount = 0;
            }
            carousel.style.transform = `translateX(-${scrollAmount}px)`;
        }
        
        // Auto scroll carousel
        setInterval(scrollCarousel, 50);
    </script>
</body>
</html>