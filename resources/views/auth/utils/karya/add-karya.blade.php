<section class="w-full min-h-screen py-6">
    <!-- Cancel -->
    <button
        onclick="window.history.back()" 
        class="lg:mb-12 mb-10 px-12 py-2 border border-white rounded-full text-white text-sm hover:bg-white/10 transition block mx-auto sm:mx-0">
        Cancel
    </button>

    <div class="max-w-4xl mt-4 mx-auto bg-transparent">
        <!-- Title -->
        <input 
            id="titleInput"
            type="text" 
            placeholder="Enter your title..." 
            class="w-full rounded-lg px-4 py-3 mb-6 bg-white/90 text-[#1D4ED8] focus:outline-none focus:ring-2 focus:ring-[#67C2DE] placeholder:text-[#1D4ED8]/60"
        />

        <!-- Upload Box -->
        <div class="w-full mb-6">
            <label for="fileInput" 
                class="block w-full h-40 sm:h-48 border-2 border-dashed border-black rounded-xl flex flex-col items-center justify-center cursor-pointer bg-white/90 hover:bg-[#D2F4FF]/50 transition overflow-hidden">
                <span id="uploadText" class="text-sm text-[#1D4ED8]">Drag and drop an Image, or Browse</span>
                <span id="keteranganUpload" class="text-xs text-gray-500">Max 10mb each (20mb for videos)</span>
                <img id="previewImage" class="hidden w-full h-full object-cover" />
            </label>
            <input id="fileInput" type="file" accept="image/*" class="hidden" />
        </div>

        <!-- Description -->
        <label class="block text-white font-medium mb-2">Description</label>
        <textarea 
            id="descInput"
            rows="5" 
            placeholder="Write your description..." 
            class="w-full rounded-lg px-4 py-3 mb-6 bg-white text-[#1D4ED8] focus:outline-none focus:ring-2 focus:ring-[#67C2DE] placeholder:text-[#1D4ED8]/60"
        ></textarea>

        <!-- Submit Button -->
        <button id="submitBtn" 
            class="w-full py-3 bg-[#1D4ED8] rounded-lg text-white font-semibold shadow-lg shadow-white/20 hover:bg-[#67C2DE] transition">
            Submit
        </button>
    </div>
</section>

<script>
    const fileInput = document.getElementById("fileInput");
    const previewImage = document.getElementById("previewImage");
    const uploadText = document.getElementById("uploadText");
    const keteranganUpload = document.getElementById("keteranganUpload");
    const submitBtn = document.getElementById("submitBtn");

    // Preview image setelah pilih file
    fileInput.addEventListener("change", (e) => {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (event) => {
                previewImage.src = event.target.result;
                previewImage.classList.remove("hidden");
                uploadText.classList.add("hidden");
                keteranganUpload.classList.add("hidden");
            };
            reader.readAsDataURL(file);
        }
    });

    // Fake submit
    submitBtn.addEventListener("click", () => {
        const title = document.getElementById("titleInput").value.trim();
        const desc = document.getElementById("descInput").value.trim();
        const file = fileInput.files[0];

        if (!title || !desc || !file) {
            alert("Please fill all fields and upload an image!");
            return;
        }

        alert("✅ Data berhasil ditambahkan!");
        window.location.href = "/dashboard";
    });
</script>