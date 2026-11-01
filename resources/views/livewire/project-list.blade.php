<div>
    <!-- FILTER & SEARCH BAR -->
    <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between mb-8 gap-4">
        
        <div class="flex items-center gap-3">
            <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-pulse"></span>
            <span class="font-display text-sm font-bold tracking-wider uppercase text-stone-800 dark:text-stone-200">
                All Projects
            </span>
            <span class="text-xs font-mono px-2 py-0.5 rounded-full bg-stone-200/60 dark:bg-stone-800/80 text-stone-600 dark:text-stone-400">
                {{ count($projects) }}
            </span>
        </div>

        <div class="relative w-full md:w-80">
            <input 
                wire:model.live="search" 
                type="text" 
                placeholder="Cari repositori / teknologi..." 
                class="w-full glass-pill border rounded-2xl px-4 py-2.5 text-stone-900 dark:text-white text-xs sm:text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition placeholder:text-stone-400 dark:placeholder:text-stone-500"
            >
            <div wire:loading class="absolute right-3.5 top-3">
                <svg class="animate-spin h-4 w-4 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </div>
            <div wire:loading.remove class="absolute right-3.5 top-3 pointer-events-none text-stone-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
        </div>
    </div>

    <!-- PROJECTS GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($projects as $repo)
            <a href="{{ $repo['html_url'] }}" 
               target="_blank" 
               class="group glass-card p-6 sm:p-7 rounded-3xl border relative overflow-hidden flex flex-col justify-between transition-all duration-300">
                
                @if(isset($repo['manual']) && $repo['manual'])
                <div class="absolute -top-12 -right-12 w-28 h-28 bg-amber-400/15 dark:bg-amber-400/10 rounded-full blur-xl pointer-events-none"></div>
                <div class="absolute top-4 right-4">
                    <span class="bg-amber-500/15 border border-amber-500/30 text-amber-800 dark:text-amber-300 text-[10px] font-bold tracking-widest uppercase px-2.5 py-1 rounded-full shadow-sm">
                        FEATURED
                    </span>
                </div>
                @endif

                <div>
                    <!-- TOP META: LANGUAGE BADGE & STARS -->
                    <div class="flex items-center gap-3 mb-4">
                        <span class="px-2.5 py-1 rounded-lg text-[10px] font-mono font-bold uppercase tracking-wider
                                     bg-stone-200/80 dark:bg-stone-800/80 text-stone-700 dark:text-stone-300 border border-black/5 dark:border-white/5">
                            {{ $repo['language'] ?? 'Code' }}
                        </span>

                        <div class="flex items-center gap-1 text-[11px] font-mono text-stone-500 dark:text-stone-400">
                            <svg class="w-3.5 h-3.5 text-amber-500 fill-amber-500" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span>{{ $repo['stargazers_count'] ?? 0 }}</span>
                        </div>
                    </div>

                    <!-- PROJECT NAME -->
                    <h3 class="font-serif text-xl sm:text-2xl font-bold uppercase tracking-tight text-stone-900 dark:text-white mb-2.5 group-hover:text-amber-700 dark:group-hover:text-amber-300 transition-colors">
                        {{ $repo['name'] }}
                    </h3>

                    <!-- DESCRIPTION -->
                    <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 line-clamp-2 leading-relaxed mb-6">
                        {{ $repo['description'] ?? 'No description provided.' }}
                    </p>
                </div>

                <!-- FOOTER LINK -->
                <div class="pt-4 border-t border-black/5 dark:border-white/5 flex items-center justify-between text-xs font-semibold text-stone-500 dark:text-stone-400 group-hover:text-stone-900 dark:group-hover:text-white transition-colors">
                    <span class="tracking-wider uppercase text-[10px]">Explore Repository</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </div>
            </a>
        @empty
            <div class="col-span-1 md:col-span-2 text-stone-500 dark:text-stone-400 text-center py-12 glass-card rounded-3xl border">
                Project tidak ditemukan. Coba kata kunci pencarian lain.
            </div>
        @endforelse
    </div>
</div>