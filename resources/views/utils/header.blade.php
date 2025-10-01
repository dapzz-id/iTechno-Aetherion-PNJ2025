<header class="flex top-0 sticky justify-between items-center border-b-2 border-white/10 py-5 px-6 sm:px-12 bg-[#1D4ED8] backdrop-blur w-full z-50">
  <!-- Logo -->
  <div class="text-2xl font-bold text-white">
    <img src="{{ asset('ikonn.webp') }}" alt="">
  </div>

  <!-- Hamburger (mobile only) -->
  <button id="menu-btn" class="sm:hidden text-white text-3xl focus:outline-none transition-transform duration-300">
    ☰
  </button>

  <!-- Nav Menu -->
  <nav id="menu" class="hidden sm:flex absolute sm:static top-full left-0 w-full sm:w-auto bg-[#1D4ED8] sm:bg-transparent shadow sm:shadow-none transition-all duration-500 ease-in-out">
    <ul class="flex flex-col sm:flex-row gap-6 sm:gap-8 p-6 sm:p-0 list-none text-center sm:text-left">
      <li><a href="#home" class="text-white no-underline transition hover:text-white/80">Home</a></li>
      <li><a href="#features" class="text-white no-underline transition hover:text-white/80">Features</a></li>
      <li><a href="#gallery" class="text-white no-underline transition hover:text-white/80">Gallery</a></li>
      <li><a href="#about" class="text-white no-underline transition hover:text-white/80">About</a></li>
      <li><a href="#contact" class="text-white no-underline transition hover:text-white/80">Contact</a></li>

      <!-- Spark In (Mobile Only) -->
      <li class="block sm:hidden mt-4">
        <button class="w-full bg-white/20 px-5 py-2 rounded-full border border-white text-white cursor-pointer transition hover:bg-white hover:text-purple-700" onclick="window.location.href='/login'">
          Spark In
        </button>
      </li>
    </ul>
  </nav>

  <!-- Spark In (Desktop Only) -->
  <button class="hidden sm:block bg-white/20 px-5 py-2 rounded-full border border-white text-white cursor-pointer transition hover:bg-white hover:text-purple-700" onclick="window.location.href='/login'">
    Spark In
  </button>
</header>


<script>
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');
  let menuOpen = false;

  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    menu.classList.toggle('animate-slide-down');
    
    // Ganti icon ☰ ↔ ✖
    if (!menuOpen) {
      menuBtn.textContent = '✖';
      menuOpen = true;
    } else {
      menuBtn.textContent = '☰';
      menuOpen = false;
    }
  });
</script>

<style>
  @keyframes slideDown {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .animate-slide-down {
    animation: slideDown 0.3s ease-out;
  }
</style>
