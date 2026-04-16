<x-layout>
    <x-slot:title>Contact - Abiyyuza</x-slot:title>

    <div class="max-w-6xl mx-auto pt-6">
        
        <div class="mb-12 animate-enter">
            <h1 class="text-4xl font-bold text-white mb-4">Get in <span class="text-purple-500">Touch</span></h1>
            <p class="text-gray-400 max-w-2xl text-lg">
                Punya pertanyaan, tawaran project, atau sekadar ingin menyapa? 
                Saya selalu terbuka untuk diskusi baru.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <div class="lg:col-span-5 space-y-8 animate-enter" style="animation-delay: 0.1s;">
                
                <div class="bg-[#0a0a0a] border border-white/5 rounded-2xl p-6 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center text-purple-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold mb-1">Email</h3>
                            <a href="mailto:contact@abiyyuza.dev" class="text-gray-400 hover:text-purple-400 transition">contactabiyyuza@gmail.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-500/10 rounded-xl flex items-center justify-center text-green-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold mb-1">WhatsApp</h3>
                            <a href="https://wa.me/6283116084432" target="_blank" class="text-gray-400 hover:text-green-400 transition">+62 831-1608-4432</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center text-blue-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold mb-1">Location</h3>
                            <p class="text-gray-400">Surabaya, Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-purple-900/20 to-blue-900/20 border border-purple-500/20 rounded-2xl p-6 flex items-center gap-4">
                    <span class="relative flex h-3 w-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <div>
                        <p class="text-white font-bold text-sm">Available for Freelance</p>
                        <p class="text-gray-400 text-xs">Siap mengerjakan project baru.</p>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-7 animate-enter" style="animation-delay: 0.2s;">
                <livewire:contact-form />
            </div>

        </div>
    </div>
</x-layout>