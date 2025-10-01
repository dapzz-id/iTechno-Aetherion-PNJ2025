<header class="flex top-0 sticky justify-between items-center border-b-2 border-white/10 py-5 px-6 sm:px-12 bg-[#1D4ED8] backdrop-blur w-full z-50">
  <!-- Logo -->
  <div class="text-2xl font-bold text-white">
    <img src="{{ asset('ikonn.webp') }}" alt="" onclick="window.location.href ='/'">
  </div>

  <!-- Hamburger (mobile only) -->
  <button id="menu-btn" class="sm:hidden text-white text-3xl focus:outline-none transition-transform duration-300">
    ☰
  </button>

  <!-- Nav Menu -->
  <nav id="menu" class="hidden sm:flex absolute sm:static top-full left-0 w-full sm:w-auto bg-[#1D4ED8] sm:bg-transparent shadow sm:shadow-none transition-all duration-500 ease-in-out">
    <ul class="flex flex-col sm:flex-row gap-6 sm:gap-8 p-6 sm:p-0 list-none text-center sm:text-left">
      <li><a href="/dashboard" class="text-white {{ request()->is('dashboard') ? 'font-bold' : 'font-normal' }} transition hover:text-white/80">Home</a></li>
      <li><a href="/gallery" class="text-white {{ request()->is('gallery') ? 'font-bold' : 'font-normal' }} transition hover:text-white/80">Gallery</a></li>
      <li><a href="/leaderboard" class="text-white {{ request()->is('leaderboard') ? 'font-bold' : 'font-normal' }} no-underline transition hover:text-white/80">Leaderboard</a></li>
      <li><a href="/profile" class="text-white {{ request()->is('profile') ? 'font-bold' : 'font-normal' }} transition hover:text-white/80">Profile</a></li>
    </ul>
  </nav>

  <!-- Button -->
  <button class="hidden sm:block text-white cursor-pointer transition" onclick="window.location.href = '/search'">
    <i class="fas fa-search"></i>
  </button>
</header>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');
  let menuOpen = false;

  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    menu.classList.toggle('animate-slide-down');
    
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
