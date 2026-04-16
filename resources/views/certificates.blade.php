<x-layout>
    <x-slot:title>Achievements - Abiyyuza</x-slot:title>

    <div x-data="{ 
            modalOpen: false, 
            modalImage: '', 
            modalTitle: '' 
        }" 
        class="relative">

        <header class="mb-12 text-center md:text-left animate-enter" style="animation-delay: 0.1s;">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                    My Certificates
                </span>
            </h1>
            <p class="text-gray-400 max-w-2xl text-lg">
                Bukti dedikasi saya dalam mempelajari teknologi terbaru. Klik sertifikat untuk melihat detail.
            </p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @foreach($certificates as $index => $cert)
            <div class="group relative animate-enter" style="animation-delay: {{ ($index + 1) * 0.15 }}s;">
                
                <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-purple-600 rounded-2xl blur opacity-20 group-hover:opacity-75 transition duration-500"></div>
                
                <div class="relative bg-[#0a0a0a] rounded-2xl border border-white/10 overflow-hidden h-full flex flex-col hover:-translate-y-2 transition-transform duration-300">
                    
                    <div 
                        class="h-52 overflow-hidden cursor-pointer relative"
                        @click="modalOpen = true; modalImage = '{{ asset($cert['image']) }}'; modalTitle = '{{ $cert['name'] }}'"
                    >
                        <img src="{{ asset($cert['image']) }}" alt="{{ $cert['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                        
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center backdrop-blur-sm">
                            <span class="bg-white/10 border border-white/20 text-white px-4 py-2 rounded-full backdrop-blur-md font-medium text-sm flex items-center gap-2 transform scale-90 group-hover:scale-100 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Zoom View
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex justify-between items-center mb-3">
                            <div class="flex gap-1">
                                @foreach($cert['tags'] ?? [] as $tag)
                                    <span class="text-[10px] font-bold text-gray-300 bg-gray-800 px-2 py-1 rounded border border-gray-700">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <span class="text-xs text-gray-500 font-mono">{{ $cert['date'] }}</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-white mb-2 leading-tight group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 transition">
                            {{ $cert['name'] }}
                        </h3>
                        
                        <div class="mt-auto pt-4 border-t border-white/5 flex items-center gap-2 text-sm text-gray-400">
                            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{ $cert['issuer'] }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div 
            x-show="modalOpen" 
            style="display: none;"
            class="fixed inset-0 z-50 flex items-center justify-center p-4"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
            <div class="absolute inset-0 bg-black/90 backdrop-blur-sm" @click="modalOpen = false"></div>

            <div class="relative bg-[#111] rounded-2xl overflow-hidden max-w-4xl w-full border border-gray-700 shadow-2xl transform transition-all"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90 translate-y-10"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            >
                <button @click="modalOpen = false" class="absolute top-4 right-4 text-white bg-black/50 hover:bg-red-500/80 p-2 rounded-full transition z-10 backdrop-blur-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <div class="p-1">
                    <img :src="modalImage" class="w-full h-auto max-h-[80vh] object-contain rounded-xl bg-gray-900">
                </div>
                
                <div class="p-6 bg-[#1a1a1a] flex justify-between items-center border-t border-gray-800">
                    <h3 class="text-lg font-bold text-white" x-text="modalTitle"></h3>
                    <button class="text-sm text-gray-400 hover:text-white flex items-center gap-2" @click="window.open(modalImage, '_blank')">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Download
                    </button>
                </div>
            </div>
        </div>

    </div>
</x-layout>