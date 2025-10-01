<section id="contact" class="contact-section py-16 px-8 text-center max-w-2xl mx-auto my-10">
    <h2 class="text-3xl mb-12 font-semibold">
        Is there anything on your mind?<br>
        Drop it here 👇
    </h2>
    
    <form class="max-w-lg mx-auto flex flex-col gap-6">
        <input 
            type="text" 
            placeholder="Name" 
            required
            class="w-full px-6 py-4 bg-white/10 border-2 border-white/30 rounded-2xl text-white placeholder:text-white/70 text-lg focus:outline-none focus:border-white/50 transition-colors" 
        />
        
        <input 
            type="email" 
            placeholder="Email" 
            required
            class="w-full px-6 py-4 bg-white/10 border-2 border-white/30 rounded-2xl text-white placeholder:text-white/70 text-lg focus:outline-none focus:border-white/50 transition-colors" 
        />
        
        <input 
            type="tel" 
            placeholder="Phone" 
            required
            class="w-full px-6 py-4 bg-white/10 border-2 border-white/30 rounded-2xl text-white placeholder:text-white/70 text-lg focus:outline-none focus:border-white/50 transition-colors" 
        />
        
        <textarea 
            placeholder="Message" 
            rows="6" 
            required
            class="w-full px-6 py-4 bg-white/10 border-2 border-white/30 rounded-2xl text-white placeholder:text-white/70 text-lg resize-none focus:outline-none focus:border-white/50 transition-colors"
        ></textarea>
        
        <button 
            type="submit"
            class="w-full px-8 py-4 bg-white text-blue-600 rounded-2xl mt-4 text-lg font-semibold hover:bg-opacity-90 transition-all hover:-translate-y-1 hover:shadow-lg"
        >
            Send Message
        </button>
    </form>
</section>
