<div class="bg-[#0a0a0a] border border-white/10 rounded-2xl p-6 md:p-8 shadow-2xl relative overflow-hidden">
    
    <div class="absolute top-0 right-0 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl -z-10"></div>

    <div class="mb-8">
        <h2 class="text-2xl font-bold text-white mb-2">Let's Work <span class="text-purple-500">Together</span></h2>
        <p class="text-gray-400 text-sm">Punya ide project atau ingin merekrut saya? Kirim pesan di bawah ini.</p>
    </div>

    @if (session()->has('success'))
        <div class="mb-6 bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-xl flex items-center gap-3 animate-enter">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="text-sm font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <form wire:submit="submit" class="space-y-5">
        
        <div>
            <label class="block text-xs font-medium text-gray-400 mb-1">Nama Lengkap</label>
            <input wire:model="name" type="text" class="w-full bg-[#111] border {{ $errors->has('name') ? 'border-red-500' : 'border-white/10' }} rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition text-sm placeholder-gray-600" placeholder="Contoh: John Doe">
            @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-xs font-medium text-gray-400 mb-1">Email Address</label>
            <input wire:model="email" type="email" class="w-full bg-[#111] border {{ $errors->has('email') ? 'border-red-500' : 'border-white/10' }} rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition text-sm placeholder-gray-600" placeholder="nama@email.com">
            @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-xs font-medium text-gray-400 mb-1">Pesan Anda</label>
            <textarea wire:model="message" rows="4" class="w-full bg-[#111] border {{ $errors->has('message') ? 'border-red-500' : 'border-white/10' }} rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition text-sm placeholder-gray-600" placeholder="Ceritakan detail project Anda..."></textarea>
            @error('message') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-500 text-white font-bold py-3 rounded-xl transition flex justify-center items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
            
            <svg wire:loading wire:target="submit" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
            
            <span wire:loading.remove wire:target="submit">Kirim Pesan</span>
            <span wire:loading wire:target="submit">Sending...</span>
        </button>

    </form>
</div>