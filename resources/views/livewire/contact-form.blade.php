<div class="glass-card rounded-3xl p-6 sm:p-10 border shadow-2xl relative overflow-hidden">
    
    <div class="mb-8">
        <span class="text-[10px] font-mono uppercase tracking-widest text-amber-700 dark:text-amber-400">Direct Dispatch</span>
        <h2 class="font-serif text-2xl sm:text-3xl font-bold uppercase text-stone-900 dark:text-white mt-1 mb-2">
            Send an Imperial Dispatch
        </h2>
        <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400">
            Deskripsikan kebutuhan proyek atau pertanyaan Anda melalui formulir terenkripsi di bawah ini.
        </p>
    </div>

    @if (session()->has('success'))
        <div class="mb-6 bg-emerald-500/10 border border-emerald-500/30 text-emerald-700 dark:text-emerald-300 p-4 rounded-2xl flex items-center gap-3 animate-enter">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="text-xs sm:text-sm font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        
        <div>
            <label class="block text-xs font-mono uppercase tracking-wider text-stone-700 dark:text-stone-300 mb-2">
                Full Name / Organization
            </label>
            <input wire:model="name" 
                   type="text" 
                   class="w-full glass-pill border rounded-2xl px-4 py-3 text-stone-900 dark:text-white text-xs sm:text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition placeholder:text-stone-400 dark:placeholder:text-stone-600 {{ $errors->has('name') ? 'border-red-500' : '' }}" 
                   placeholder="e.g. Marcus Aurelius">
            @error('name') <span class="text-red-500 text-xs mt-1.5 block font-mono">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-xs font-mono uppercase tracking-wider text-stone-700 dark:text-stone-300 mb-2">
                Email Address
            </label>
            <input wire:model="email" 
                   type="email" 
                   class="w-full glass-pill border rounded-2xl px-4 py-3 text-stone-900 dark:text-white text-xs sm:text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition placeholder:text-stone-400 dark:placeholder:text-stone-600 {{ $errors->has('email') ? 'border-red-500' : '' }}" 
                   placeholder="e.g. client@empire.org">
            @error('email') <span class="text-red-500 text-xs mt-1.5 block font-mono">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-xs font-mono uppercase tracking-wider text-stone-700 dark:text-stone-300 mb-2">
                Project Scope &amp; Message
            </label>
            <textarea wire:model="message" 
                      rows="4" 
                      class="w-full glass-pill border rounded-2xl px-4 py-3 text-stone-900 dark:text-white text-xs sm:text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition placeholder:text-stone-400 dark:placeholder:text-stone-600 {{ $errors->has('message') ? 'border-red-500' : '' }}" 
                      placeholder="Jelaskan kebutuhan proyek, tenggat waktu, atau tujuan kolaborasi..."></textarea>
            @error('message') <span class="text-red-500 text-xs mt-1.5 block font-mono">{{ $message }}</span> @enderror
        </div>

        <button type="submit" 
                class="w-full py-4 rounded-full text-xs font-bold tracking-widest uppercase transition-all duration-300 shadow-xl flex justify-center items-center gap-2 transform hover:scale-[1.01] active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed
                       bg-stone-900 text-white hover:bg-stone-800 dark:bg-amber-400 dark:text-stone-950 dark:hover:bg-amber-300">
            
            <svg wire:loading wire:target="submit" class="animate-spin -ml-1 mr-2 h-4 w-4 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            
            <span wire:loading.remove wire:target="submit">Transmit Message</span>
            <span wire:loading wire:target="submit">Transmitting Dispatch...</span>
        </button>

    </form>
</div>