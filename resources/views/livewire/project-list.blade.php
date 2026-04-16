<div>
    <div class="flex flex-col md:flex-row items-end md:items-center justify-between mb-6 gap-4">
        
        <h2 class="text-xl font-bold text-white flex items-center gap-2">
            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
            Latest Projects
        </h2>

        <div class="relative w-full md:w-72">
            <input 
                wire:model.live="search" 
                type="text" 
                placeholder="Cari project..." 
                class="w-full bg-[#0a0a0a] border border-white/10 rounded-xl px-4 py-2 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition"
            >
            <div wire:loading class="absolute right-3 top-2.5">
                <svg class="animate-spin h-4 w-4 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @forelse($projects as $repo)
            <a href="{{ $repo['html_url'] }}" target="_blank" class="group bg-[#0a0a0a] border {{ isset($repo['manual']) ? 'border-blue-500/50 shadow-lg shadow-blue-500/10' : 'border-white/5' }} p-6 rounded-2xl hover:border-white/20 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                
                @if(isset($repo['manual']) && $repo['manual'])
                <div class="absolute inset-0 bg-blue-500/5 pointer-events-none"></div>
                <div class="absolute top-0 right-0 p-2">
                    <span class="bg-blue-500 text-white text-[10px] font-bold px-2 py-1 rounded-full shadow-lg">FEATURED</span>
                </div>
                @endif

                <div class="flex justify-between items-start mb-4 relative z-10">
                    <div class="p-2 rounded-lg {{ isset($repo['manual']) ? 'bg-blue-500/20 text-blue-400' : 'bg-white/5 text-gray-400' }} border border-white/5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <div class="flex items-center gap-1 text-xs font-mono text-gray-500 bg-black/50 px-2 py-1 rounded-full border border-white/5">
                        <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        {{ $repo['stargazers_count'] }}
                    </div>
                </div>

                <h3 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition relative z-10">{{ $repo['name'] }}</h3>
                <p class="text-sm text-gray-400 line-clamp-2 relative z-10">
                    {{ $repo['description'] ?? 'No description provided.' }}
                </p>
            </a>
        @empty
            <div class="col-span-1 md:col-span-2 text-gray-500 text-center py-10 bg-[#0a0a0a] rounded-2xl border border-white/5">
                Project tidak ditemukan. Coba kata kunci lain.
            </div>
        @endforelse
    </div>
</div>