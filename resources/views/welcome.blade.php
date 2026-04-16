<x-layout>
    <x-slot:title>Dashboard - Abiyyuza</x-slot:title>

    <header class="mb-12 animate-enter" style="animation-delay: 0.1s;">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight leading-tight">
            Creative Developer <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">
                & UI/UX Enthusiast
            </span>
        </h1>
        <p class="text-gray-400 max-w-2xl text-lg leading-relaxed">
            I build accessible, pixel-perfect, secure, and performant web applications. 
            Currently focused on the Laravel & Tailwind ecosystem.
        </p>
    </header>

    <style>
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 30s linear infinite;
        }
        .group:hover .animate-marquee {
            animation-play-state: paused;
        }
    </style>

    <div class="relative w-full overflow-hidden mb-16 group">
        <div class="absolute z-10 top-0 left-0 h-full w-24 bg-gradient-to-r from-[#0a0a0a] to-transparent"></div>
        <div class="absolute z-10 top-0 right-0 h-full w-24 bg-gradient-to-l from-[#0a0a0a] to-transparent"></div>

        <div class="animate-marquee flex gap-12 items-center opacity-60 hover:opacity-100 transition duration-500">
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-8 h-8"><span class="font-bold text-xl text-gray-300">Laravel</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-8 h-8"><span class="font-bold text-xl text-gray-300">Tailwind</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/php/777BB4" class="w-10 h-10"><span class="font-bold text-xl text-gray-300">PHP</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/javascript/F7DF1E" class="w-8 h-8 rounded-md"><span class="font-bold text-xl text-gray-300">JavaScript</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-10 h-10"><span class="font-bold text-xl text-gray-300">MySQL</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/git/F05032" class="w-8 h-8"><span class="font-bold text-xl text-gray-300">Git</span></div>
            
            <div class="flex items-center gap-3 pl-12"><img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-8 h-8"><span class="font-bold text-xl text-gray-300">Laravel</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-8 h-8"><span class="font-bold text-xl text-gray-300">Tailwind</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/php/777BB4" class="w-10 h-10"><span class="font-bold text-xl text-gray-300">PHP</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/javascript/F7DF1E" class="w-8 h-8 rounded-md"><span class="font-bold text-xl text-gray-300">JavaScript</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-10 h-10"><span class="font-bold text-xl text-gray-300">MySQL</span></div>
            <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/git/F05032" class="w-8 h-8"><span class="font-bold text-xl text-gray-300">Git</span></div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <div class="animate-enter bg-[#0a0a0a] border border-white/5 p-6 rounded-2xl hover:border-white/10 hover:bg-[#111] transition duration-300 group">
            <p class="text-sm font-medium text-blue-400 mb-1">Public Repositories</p>
            <h3 class="text-3xl font-bold text-white">{{ $github['public_repos'] ?? 0 }}</h3>
        </div>
        <div class="animate-enter bg-[#0a0a0a] border border-white/5 p-6 rounded-2xl hover:border-white/10 hover:bg-[#111] transition duration-300 group">
            <p class="text-sm font-medium text-purple-400 mb-1">Community</p>
            <h3 class="text-3xl font-bold text-white">{{ $github['followers'] ?? 0 }}</h3>
        </div>
        <div class="animate-enter bg-[#0a0a0a] border border-white/5 p-6 rounded-2xl hover:border-white/10 hover:bg-[#111] transition duration-300 group">
            <p class="text-sm font-medium text-green-400 mb-1">Experience</p>
            <h3 class="text-3xl font-bold text-white">2+</h3>
        </div>
        <div class="animate-enter bg-[#0a0a0a] border border-white/5 p-6 rounded-2xl hover:border-white/10 hover:bg-[#111] transition duration-300 group">
            <p class="text-sm font-medium text-pink-400 mb-1">Total Projects</p>
            <h3 class="text-3xl font-bold text-white">10+</h3>
        </div>
    </div>
    

    <section class="animate-enter" style="animation-delay: 0.6s;">
        <livewire:project-list />
    </section>

</x-layout>