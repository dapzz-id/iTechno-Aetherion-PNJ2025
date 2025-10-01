<style>
  .faq-section {
  padding-left: 1rem;
  padding-right: 1rem;
  background: transparent;
}

.faq-section > div {
  width: 100%;
  margin: 0;
  padding: 0;
}

.faq-item {
  background: white;
  width: 100%;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border-radius: 0.75rem;
  overflow: hidden;
}

/* Pertanyaan */
.faq-question {
  background: white;
  padding: 1rem;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: background 0.2s ease;
}

.faq-question:hover {
  background: #f9fafb; /* abu tipis */
}

/* Jawaban */
.faq-answer {
  background: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease-in-out;
}

.faq-item.active .faq-answer {
  background: white;
}

.faq-item.active .faq-answer div {
  color: #374151;
}

.faq-answer div {
  color: #143072;
  opacity: 0.7;
  font-weight: 500;
  padding: 0 1rem 1rem 1rem;
}

/* Judul */
.faq-section h2 {
  text-align: left;
  font-size: 1rem;
  font-weight: bold;
  color: #143072;
  margin-bottom: 2rem;
}

/* Responsive Design */
@media (min-width: 640px) {
  .faq-question {
    padding: 1.5rem;
  }

  .faq-section h2 {
    font-size: 2.5rem;
  }
}

@media (min-width: 1024px) {
  .faq-section {
    padding-left: 3rem;
    padding-right: 3rem;
  }

  .faq-section h2 {
    font-size: 3rem;
  }
}

</style>

<section class="faq-section py-20" style="padding-left: 4px; padding-right: 4px;">
  <div class="w-full" style="margin: 0; padding: 0; width: 100%;">
    <h2 class="font-bold mb-10">
        <img src="{{ asset('faq.webp') }}" alt="FAQ" style="height: 100px; display: inline-block;">
    </h2>

    <!-- FAQ item 1 -->
    <div class="faq-item mb-4 rounded-xl overflow-hidden w-full">
      <div
        class="faq-question bg-white p-3 md:p-8 cursor-pointer flex justify-between items-center hover:bg-gray-100 transition-colors"
      >
        <span class="font-medium" style="color: #143072;">
          Apakah platform ini bisa diakses di mobile dan desktop?
        </span>
        <span
          class="faq-arrow flex items-center justify-center w-6 h-6 md:w-8 md:h-8 aspect-square shrink-0 rounded-full bg-blue-600 text-white transition-transform ml-3 md:ml-0"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 md:w-4 md:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>
      </div>
      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="px-3 md:px-8 pb-5">Ya, platform kami responsif di semua device.</div>
      </div>
    </div>

    <!-- FAQ item 2 -->
    <div class="faq-item mb-4 rounded-xl overflow-hidden w-full">
      <div
        class="faq-question bg-white p-3 md:p-8 cursor-pointer flex justify-between items-center hover:bg-gray-100 transition-colors"
      >
        <span class="font-medium" style="color: #143072;">
          Apakah platform ini cocok buat tech enthusiast saja?
        </span>
        <span
          class="faq-arrow flex items-center justify-center w-6 h-6 md:w-8 md:h-8 aspect-square shrink-0 rounded-full bg-blue-600 text-white transition-transform ml-3 md:ml-0"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 md:w-4 md:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>
      </div>
      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="px-3 md:px-8 pb-5">Tidak, cocok untuk semua kalangan.</div>
      </div>
    </div>

    <!-- FAQ item 3 -->
    <div class="faq-item mb-4 rounded-xl overflow-hidden w-full">
      <div
        class="faq-question bg-white p-3 md:p-8 cursor-pointer flex justify-between items-center hover:bg-gray-100 transition-colors"
      >
        <span class="font-medium" style="color: #143072;">
          Apa yang ditampilkan dalam fitur Exhibition?
        </span>
        <span
          class="faq-arrow flex items-center justify-center w-6 h-6 md:w-8 md:h-8 aspect-square shrink-0 rounded-full bg-blue-600 text-white transition-transform ml-3 md:ml-0"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 md:w-4 md:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>
      </div>
      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="px-3 md:px-8 pb-5">Karya digital pilihan pengguna.</div>
      </div>
    </div>

    <!-- FAQ item 4 -->
    <div class="faq-item mb-4 rounded-xl overflow-hidden w-full">
      <div
        class="faq-question bg-white p-3 md:p-8 cursor-pointer flex justify-between items-center hover:bg-gray-100 transition-colors"
      >
        <span class="font-medium" style="color: #143072;">
          Apakah fitur ini redirect ke halaman lain?
        </span>
        <span
          class="faq-arrow flex items-center justify-center w-6 h-6 md:w-8 md:h-8 aspect-square shrink-0 rounded-full bg-blue-600 text-white transition-transform ml-3 md:ml-0"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 md:w-4 md:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>
      </div>
      <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="px-3 md:px-8 pb-5">Sebagian fitur redirect ke halaman khusus.</div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll(".faq-question").forEach((q) => {
    q.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      
      const parent = q.parentElement;
      const answer = parent.querySelector(".faq-answer");
      const arrow = q.querySelector(".faq-arrow");

      // Tutup semua FAQ lainnya
      document.querySelectorAll(".faq-item").forEach((item) => {
        if (item !== parent) {
          item.classList.remove("active");
          const otherAnswer = item.querySelector(".faq-answer");
          const otherArrow = item.querySelector(".faq-arrow");
          if (otherAnswer) {
            otherAnswer.style.maxHeight = null;
          }
          if (otherArrow) {
            otherArrow.classList.remove("rotate-180");
          }
        }
      });

      // Toggle FAQ yang diklik
      if (parent.classList.contains("active")) {
        // Tutup FAQ
        parent.classList.remove("active");
        if (answer) answer.style.maxHeight = null;
        if (arrow) arrow.classList.remove("rotate-180");
      } else {
        // Buka FAQ
        parent.classList.add("active");
        if (answer) {
          answer.style.maxHeight = answer.scrollHeight + "px";
        }
        if (arrow) {
          arrow.classList.add("rotate-180");
        }
      }
    });
  });
</script>
