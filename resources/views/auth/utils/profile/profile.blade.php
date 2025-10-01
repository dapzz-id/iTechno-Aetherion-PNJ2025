<section class="min-h-screen">
    <div
        class="mx-auto bg-gradient-to-r from-[#FBebc1] to-[#67C2DE] rounded-2xl shadow-lg shadow-white/30 lg:p-6 p-8 relative">
        <div class="flex flex-col py-12 px-10 sm:flex-row items-center sm:items-start gap-6">
            <div
                class="w-32 relative h-32 -mt-4 ml-0.5 lg:mr-5 bg-[#1D4ED8] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                <img id="imgProfile" src="https://i.pravatar.cc/?img=4" class="w-full object-cover rounded-full">
            </div>

            <div class="flex-1 flex-col text-center justify-center items-center sm:text-left">
                <h2 id="nama" class="text-2xl font-bold text-[#1D4ED8]">Ataya</h2>
                <p id="email" class="lg:text-sm text-xs text-[#1D4ED8]/80">atayanafisrizqulah@gmail.com</p>
                <button onclick="openModal()"
                    class="mt-4 px-5 pt-3.5 pb-4 text-xs lg:text-base bg-[#3676DE] rounded-full text-white font-medium shadow hover:bg-[#3676DE]/80 transition">
                    <i class="fa-solid fa-pen-to-square mr-1"></i> Edit Profile
                </button>
            </div>
        </div>
    </div>

    <!-- My Posts -->
    <div class="max-w-6xl mx-auto mt-12">
        <h3 class="text-white text-lg font-semibold mb-6">My Posts</h3>

        <div id="cardGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($searchResults as $result)
                <div class="card rounded-xl overflow-hidden shadow-lg cursor-pointer bg-white/10 shadow-white/30 hover:scale-105 transition"
                    onclick="window.location.href='/detail-karya'">
                    <div class="w-full aspect-video">
                        <img src="{{ $result['image'] }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex items-center justify-between px-4 py-3 text-white text-sm">
                        <span class="username">Ataya</span>
                        <span><i class="fa-solid fa-heart mr-1 text-red-500"></i> {{ $result['likes'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <button
        class="fixed bottom-6 right-6 w-14 h-14 cursor-pointer rounded-full bg-[#67C2DE] shadow-lg shadow-white/30 flex items-center justify-center text-white hover:bg-[#D2F4FF]/80 transition"
        onclick="window.location.href='/add-karya'">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
    </button>
</section>

<!-- Modal Edit Profile -->
<div id="editModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-6 relative animate-fadeIn">
        <button onclick="closeModal()"
            class="absolute top-3 right-3 text-gray-600 hover:text-red-500 text-xl font-bold">&times;</button>

        <h2 class="text-xl font-semibold text-[#1D4ED8] mb-4">Edit Profile</h2>

        <form id="editProfileForm" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input id="inputName" type="text"
                    class="mt-1 block w-full border border-gray-300 text-gray-700 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500"
                    value="Ataya">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input id="inputEmail" type="email"
                    class="mt-1 block w-full border border-gray-300 text-gray-700 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500"
                    value="atayanafisrizqulah@gmail.com">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Avatar</label>
                <input id="inputAvatar" type="file" accept="image/*"
                    class="mt-1 block w-full border text-gray-700 border-gray-300 rounded-lg p-2.5">
            </div>

            <div class="flex justify-end gap-3 mt-6">
                <button type="button" onclick="closeModal()"
                    class="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition">Cancel</button>
                <button type="submit"
                    class="px-4 py-2 rounded-lg bg-[#1D4ED8] text-white hover:bg-[#1D4ED8]/80 transition">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById("editModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("editModal").classList.add("hidden");
    }

    document.getElementById("editProfileForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const newName = document.getElementById("inputName").value;
        const newEmail = document.getElementById("inputEmail").value;
        const avatarInput = document.getElementById("inputAvatar");

        document.getElementById("nama").innerText = newName;
        document.getElementById("email").innerText = newEmail;

        if (avatarInput.files && avatarInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("imgProfile").src = e.target.result;
            };
            reader.readAsDataURL(avatarInput.files[0]);
        }

        alert("Profile updated successfully!");
        closeModal();
    });
</script>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out;
    }
</style>