<x-layout>
    <x-slot:title>Credentials & Certificates — Abiyyuza</x-slot:title>

    <div x-data="{ 
            modalOpen: false, 
            modalImage: '', 
            modalTitle: '',
            modalFile: '',
            modalUrl: '',
            modalId: ''
        }" 
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-16">

        <!-- EDITORIAL HEADER -->
        <header class="mb-12 animate-enter" style="animation-delay: 0.1s;">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-pill border text-[11px] font-bold tracking-widest uppercase text-amber-700 dark:text-amber-300 mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                Verified Competence
            </div>

            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-normal tracking-tight uppercase text-stone-900 dark:text-white leading-tight mb-4">
                Credentials &amp; Honors <br>
                <span class="italic font-light opacity-80 text-stone-600 dark:text-stone-300">— Verified Certifications</span>
            </h1>

            <p class="font-sans text-sm sm:text-base text-stone-600 dark:text-stone-400 max-w-2xl leading-relaxed">
                Bukti dedikasi dalam mempelajari teknologi terbaru secara terstruktur dari platform terkemuka (Total 8 Sertifikat Terverifikasi — 4 Format Foto &amp; 4 Berkas PDF). Klik sertifikat untuk melihat tampilan resolusi penuh.
            </p>
        </header>

        <!-- CERTIFICATES GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            @foreach($certificates as $index => $cert)
            <div class="group relative animate-enter" style="animation-delay: {{ ($index + 1) * 0.12 }}s;">
                
                <div class="glass-card rounded-3xl border overflow-hidden h-full flex flex-col transition-all duration-500 hover:-translate-y-2">
                    
                    <!-- IMAGE THUMBNAIL WITH ZOOM OVERLAY -->
                    <div class="h-52 overflow-hidden cursor-pointer relative bg-stone-200/50 dark:bg-stone-900/50"
                         @click="modalOpen = true; modalImage = '{{ asset($cert['image']) }}'; modalTitle = '{{ $cert['name'] }}'; modalFile = '{{ !empty($cert['file']) ? asset($cert['file']) : '' }}'; modalUrl = '{{ $cert['credential_url'] ?? '' }}'; modalId = '{{ $cert['credential_id'] ?? '' }}'">
                        
                        <img src="{{ asset($cert['image']) }}" 
                             alt="{{ $cert['name'] }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out">
                        
                        <div class="absolute inset-0 bg-stone-900/40 dark:bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-xs">
                            <span class="glass-pill px-4 py-2 rounded-full text-stone-900 dark:text-white font-semibold text-xs flex items-center gap-2 transform scale-95 group-hover:scale-100 transition">
                                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                <span>Preview Full</span>
                            </span>
                        </div>
                    </div>

                    <!-- CARD BODY -->
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-3">
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach($cert['tags'] ?? [] as $tag)
                                        <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-stone-700 dark:text-stone-300 bg-stone-200/80 dark:bg-stone-800/80 px-2 py-0.5 rounded-md border border-black/5 dark:border-white/5">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                                <span class="text-[11px] text-stone-500 dark:text-stone-400 font-mono">{{ $cert['date'] }}</span>
                            </div>
                            
                            <h3 class="font-serif text-lg font-bold uppercase text-stone-900 dark:text-white mb-2 leading-snug group-hover:text-amber-700 dark:group-hover:text-amber-300 transition-colors">
                                {{ $cert['name'] }}
                            </h3>
                        </div>
                        
                        <div class="pt-4 mt-4 border-t border-black/5 dark:border-white/5 flex items-center justify-between text-xs text-stone-500 dark:text-stone-400">
                            <div class="flex items-center gap-2 truncate mr-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 shrink-0"></span>
                                <span class="font-semibold truncate">{{ $cert['issuer'] }}</span>
                            </div>
                            @if(!empty($cert['file']))
                                <a href="{{ asset($cert['file']) }}" target="_blank" @click.stop class="inline-flex items-center gap-1 text-[11px] font-mono font-bold text-amber-600 dark:text-amber-400 hover:underline shrink-0">
                                    <span>PDF</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                            @else
                                <span class="inline-flex items-center gap-1 text-[11px] font-mono font-bold text-stone-500 dark:text-stone-400 shrink-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span>FOTO</span>
                                </span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

        <!-- FULL RESOLUTION MODAL -->
        <div x-show="modalOpen" 
             style="display: none;"
             class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            
            <div class="absolute inset-0 bg-stone-950/80 backdrop-blur-md" @click="modalOpen = false"></div>

            <div class="relative glass-card rounded-3xl overflow-hidden max-w-4xl w-full border shadow-2xl z-10"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-8"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0">
                
                <button @click="modalOpen = false" 
                        class="absolute top-4 right-4 text-stone-900 dark:text-white glass-pill p-2 rounded-full transition z-20 hover:scale-110">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <div class="p-2 sm:p-4 flex items-center justify-center bg-stone-100 dark:bg-obsidian-950">
                    <img :src="modalImage" class="w-full h-auto max-h-[75vh] object-contain rounded-2xl shadow-inner">
                </div>
                
                <div class="p-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-t border-black/5 dark:border-white/5">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-[10px] font-mono uppercase tracking-widest text-amber-700 dark:text-amber-400">Verified Credential</span>
                            <template x-if="modalId">
                                <span class="text-[9px] font-mono font-bold px-2 py-0.5 rounded bg-amber-500/10 text-amber-700 dark:text-amber-300 border border-amber-500/20" x-text="'ID: ' + modalId"></span>
                            </template>
                        </div>
                        <h3 class="font-serif text-lg font-bold uppercase text-stone-900 dark:text-white" x-text="modalTitle"></h3>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <template x-if="modalFile">
                            <a :href="modalFile" target="_blank" 
                               class="px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase glass-pill border hover:border-amber-500/50 flex items-center gap-2 text-stone-800 dark:text-stone-200 transition">
                                <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span>Unduh PDF</span>
                            </a>
                        </template>
                        <template x-if="modalUrl">
                            <a :href="modalUrl" target="_blank" 
                               class="px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase bg-amber-600 hover:bg-amber-500 text-white flex items-center gap-2 transition shadow-md">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Verifikasi Dicoding</span>
                            </a>
                        </template>
                        <button class="px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase glass-pill border hover:border-amber-500/50 flex items-center gap-2 text-stone-800 dark:text-stone-200" 
                                @click="window.open(modalImage, '_blank')">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <span>Buka Gambar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>