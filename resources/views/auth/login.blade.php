<div
    class="w-full max-w-sm sm:max-w-md lg:max-w-lg 
         bg-white/10 backdrop-blur-md rounded-2xl shadow-lg 
         p-5 sm:p-8 text-center text-white border border-white/20 mx-auto">

    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-2">Welcome back!</h2>
    <p class="text-white/70 text-xs sm:text-sm mb-6">Please enter your details</p>

    <form id="loginForm" class="space-y-4 sm:space-y-5 text-left">
        <div>
            <label for="email" class="block text-xs sm:text-sm mb-1">Email</label>
            <input type="email" id="email" placeholder="Email"
                class="w-full px-3 sm:px-4 py-2 rounded-xl bg-white text-gray-800 
               focus:ring-2 focus:ring-blue-400 outline-none shadow text-sm sm:text-base">
        </div>

        <div>
            <label for="password" class="block text-xs sm:text-sm mb-1">Password</label>
            <div class="relative">
                <input type="password" id="password" placeholder="Password"
                    class="w-full px-3 sm:px-4 py-2 rounded-xl bg-white text-gray-800 
                 focus:ring-2 focus:ring-blue-400 outline-none shadow text-sm sm:text-base">
                <button type="button"
                    class="absolute inset-y-0 right-3 flex items-center text-gray-500 text-sm sm:text-base">
                    👁
                </button>
            </div>
        </div>

        <p id="errorMsg" class="text-red-400 text-sm hidden">Invalid email or password</p>

        <button type="submit"
            class="w-full py-2 sm:py-3 mt-5 rounded-xl bg-gradient-to-r from-blue-400 to-indigo-500 
             hover:from-blue-500 hover:to-indigo-600 transition shadow font-semibold text-sm sm:text-base">
            LOG IN
        </button>

        <!-- Google Login -->
        <button type="button" id="googleBtn"
            class="w-full flex items-center justify-center gap-2 py-2 sm:py-3 rounded-xl 
             bg-white text-gray-800 font-medium shadow hover:bg-gray-100 text-sm sm:text-base">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google"
                class="w-4 h-4 sm:w-5 sm:h-5">
            Log in with Google
        </button>

        <p class="text-center text-xs sm:text-sm text-white/80">
            Belum punya akun? <a href="/register" class="font-semibold underline">Sign Up</a>
        </p>
    </form>
</div>

<!-- Modal Google -->
<div id="googleModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white w-80 rounded-xl shadow-lg overflow-hidden">
        <div class="px-4 py-3 border-b">
            <h3 class="text-gray-800 font-medium text-center">Choose an account</h3>
            <p class="text-xs text-gray-500 text-center">to continue to Infinia</p>
        </div>

        <!-- Account List (Dummy) -->
        <div class="divide-y">
            <button class="flex items-center gap-3 px-4 py-3 w-full hover:bg-gray-100"
                onclick="window.location.href = '/dashboard'">
                <img src="https://i.pravatar.cc/40?img=4" class="w-8 h-8 rounded-full">
                <div class="text-left">
                    <p class="text-sm font-medium text-gray-800">atayanafisrizqulah@gmail.com</p>
                    <p class="text-xs text-gray-500">Ataya Nafis Rizqulah</p>
                </div>
            </button>
            <button class="flex items-center gap-3 px-4 py-3 w-full hover:bg-gray-100"
                onclick="window.location.href = '/dashboard'">
                <img src="https://i.pravatar.cc/40?img=7" class="w-8 h-8 rounded-full">
                <div class="text-left">
                    <p class="text-sm font-medium text-gray-800">kadaviradityaa@gmail.com</p>
                    <p class="text-xs text-gray-500">Kadavi Raditya Alvino</p>
                </div>
            </button>
        </div>

        <div class="px-4 py-3">
            <button class="flex items-center gap-2 text-blue-600 hover:underline text-sm">
                ➕ Add another account
            </button>
        </div>

        <div class="px-4 py-2 border-t text-right mb-2 mr-2">
            <button id="closeModal" class="text-sm text-gray-600 hover:text-gray-900">Cancel</button>
        </div>
    </div>
</div>

<script>
    const googleBtn = document.getElementById("googleBtn");
    const googleModal = document.getElementById("googleModal");
    const closeModal = document.getElementById("closeModal");

    googleBtn.addEventListener("click", () => {
        googleModal.classList.remove("hidden");
    });

    closeModal.addEventListener("click", () => {
        googleModal.classList.add("hidden");
    });

    googleModal.addEventListener("click", (e) => {
        if (e.target === googleModal) {
            googleModal.classList.add("hidden");
        }
    });

    const loginForm = document.getElementById("loginForm");
    const errorMsg = document.getElementById("errorMsg");

    loginForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();

        if (email === "aetherion@example.com" && password === "12345678") {
            errorMsg.classList.add("hidden");
            window.location.href = "/dashboard";
        } else {
            errorMsg.classList.remove("hidden");
        }
    });
</script>
