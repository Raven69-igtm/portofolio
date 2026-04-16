<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portfolio' }}</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none;  scrollbar-width: none; }
        
        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-enter {
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }
    </style>

    @livewireStyles
</head>
<body class="bg-[#050505] text-gray-300 h-screen overflow-hidden flex" x-data="{ sidebarOpen: false }">

    

    <div class="fixed top-0 left-0 right-0 h-16 bg-[#0a0a0a]/80 backdrop-blur-md border-b border-white/5 flex items-center justify-between px-4 z-50 md:hidden">
        <div class="font-bold text-white tracking-tight">Abiyyuza<span class="text-blue-500">.</span>dev</div>
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-400 hover:text-white p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>

    <div x-show="sidebarOpen" @click="sidebarOpen = false" x-transition.opacity 
         class="fixed inset-0 bg-black/80 z-40 md:hidden backdrop-blur-sm"></div>

    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
           class="fixed md:static inset-y-0 left-0 z-50 w-64 bg-[#0a0a0a] border-r border-white/5 flex flex-col justify-between p-6 transition-transform duration-300 md:translate-x-0 shadow-2xl md:shadow-none">
        
        <div>
            <div class="flex items-center gap-3 mb-10 mt-2">
                <div class="relative group cursor-pointer">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full blur opacity-50 group-hover:opacity-100 transition duration-500"></div>
                    <img src="https://github.com/mrafiabi123-crypto.png" class="relative w-10 h-10 rounded-full border border-gray-800 bg-black object-cover">
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-[#0a0a0a] rounded-full"></span>
                </div>
                <div>
                    <h2 class="text-white font-bold text-sm tracking-wide group-hover:text-blue-400 transition">Abiyyuza</h2>
                    <p class="text-[10px] text-gray-500 font-mono">Fullstack Dev</p>
                </div>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" wire:navigate
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-white/5 text-white shadow-inner border border-white/5' : 'text-gray-500 hover:text-gray-200 hover:bg-white/5' }}">
                    <svg class="w-5 h-5 transition-colors {{ request()->routeIs('dashboard') ? 'text-blue-500' : 'group-hover:text-blue-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>

               <a href="{{ route('projects') }}" wire:navigate
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('projects') ? 'bg-white/5 text-white shadow-inner border border-white/5' : 'text-gray-500 hover:text-gray-200 hover:bg-white/5' }}">
                   <svg class="w-5 h-5 transition-colors {{ request()->routeIs('projects') ? 'text-green-500' : 'group-hover:text-green-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                   <span class="text-sm font-medium">Activity</span>
                </a>

                <a href="{{ route('certificates') }}" wire:navigate
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('certificates') ? 'bg-white/5 text-white shadow-inner border border-white/5' : 'text-gray-500 hover:text-gray-200 hover:bg-white/5' }}">
                   <svg class="w-5 h-5 transition-colors {{ request()->routeIs('certificates') ? 'text-yellow-500' : 'group-hover:text-yellow-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                   <span class="text-sm font-medium">Certificates</span>
                </a>

                <a href="{{ route('about') }}" wire:navigate
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('about') ? 'bg-white/5 text-white shadow-inner border border-white/5' : 'text-gray-500 hover:text-gray-200 hover:bg-white/5' }}">
                   <svg class="w-5 h-5 transition-colors {{ request()->routeIs('about') ? 'text-pink-500' : 'group-hover:text-pink-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                   <span class="text-sm font-medium">About</span>
                </a>

                <a href="{{ route('contact') }}" wire:navigate
                   class="group flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-white/5 text-white shadow-inner border border-white/5' : 'text-gray-500 hover:text-gray-200 hover:bg-white/5' }}">
                   <svg class="w-5 h-5 transition-colors {{ request()->routeIs('contact') ? 'text-purple-500' : 'group-hover:text-purple-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                   <span class="text-sm font-medium">Contact</span>
                </a>
            </nav>
        </div>

        <div class="space-y-4">
            <div class="bg-gradient-to-br from-gray-900 to-black p-4 rounded-xl border border-white/5 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-10 h-10 bg-green-500 rounded-full blur-2xl opacity-10 group-hover:opacity-20 transition"></div>
                <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-1">Status</p>
                <div class="flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    <span class="text-xs font-bold text-gray-200 group-hover:text-white transition">Open to Work</span>
                </div>
            </div>
            
            <a href="https://wa.me/6283116084432" target="_blank" class="w-full bg-white text-black hover:bg-gray-200 border border-transparent font-semibold py-3 rounded-xl transition flex justify-center items-center gap-2 text-xs transform active:scale-95 duration-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                Let's Talk
            </a>
            
            <p class="text-[10px] text-center text-gray-600 font-mono">© 2025 Abiyyuza</p>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto no-scrollbar p-6 md:p-10 pt-20 md:pt-10 bg-[#050505]">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>