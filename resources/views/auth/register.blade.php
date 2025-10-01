<div
    class="w-full max-w-sm sm:max-w-md lg:max-w-lg 
         bg-white/10 backdrop-blur-md rounded-2xl shadow-lg 
         p-5 sm:p-8 text-center text-white border border-white/20 mx-auto">

    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-2">Welcome to Infinia</h2>
    <p class="text-white/70 text-xs sm:text-sm mb-6">Let’s get started with Infinia</p>

    <form id="signupForm" class="space-y-4 sm:space-y-5 text-left">
        <div>
            <label for="name" class="block text-xs sm:text-sm mb-1">Name</label>
            <input type="text" id="name" placeholder="Name"
                class="w-full px-3 sm:px-4 py-2 rounded-xl bg-white text-gray-800 
               focus:ring-2 focus:ring-blue-400 outline-none shadow text-sm sm:text-base">
        </div>

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
                <button type="button" id="togglePassword"
                    class="absolute inset-y-0 right-3 flex items-center text-gray-500 text-sm sm:text-base">
                    👁
                </button>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" id="terms"
                class="w-4 h-4 rounded border-gray-300 text-blue-500 focus:ring-blue-400">
            <label for="terms" class="text-xs sm:text-sm text-white/80">
                I agree to All Term, Privacy Policy
            </label>
        </div>

        <p id="errorMsg" class="text-red-400 text-sm hidden">Please fill all fields and accept terms</p>

        <button type="submit"
            class="w-full py-2 sm:py-3 mt-5 rounded-xl bg-gradient-to-r from-blue-400 to-indigo-500 
             hover:from-blue-500 hover:to-indigo-600 transition shadow font-semibold text-sm sm:text-base">
            SIGN UP
        </button>

        <p class="text-center text-xs sm:text-sm text-white/80 mt-3">
            Sudah punya akun? <a href="/login" class="font-semibold underline">Log in</a>
        </p>
    </form>
</div>

<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", () => {
        const type = passwordInput.type === "password" ? "text" : "password";
        passwordInput.type = type;
    });

    const signupForm = document.getElementById("signupForm");
    const errorMsg = document.getElementById("errorMsg");

    signupForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const terms = document.getElementById("terms").checked;

        if (name && email && password && terms) {
            errorMsg.classList.add("hidden");
            window.location.href = "/dashboard";
        } else {
            errorMsg.classList.remove("hidden");
        }
    });
</script>
