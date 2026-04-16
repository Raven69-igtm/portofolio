<x-layout>
    <x-slot:title>About Me - Abiyyuza</x-slot:title>

    <header class="mb-10 animate-enter" style="animation-delay: 0.1s;">
        <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-4 tracking-tight flex items-center gap-3">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">
                About Me
            </span>
            <div class="h-px bg-white/10 flex-1 ml-4"></div>
        </h1>
        <p class="text-gray-400 max-w-3xl text-lg leading-relaxed">
            A passionate Fullstack Developer based in Indonesia. I transform complex problems into beautiful, accessible, and user-friendly digital solutions.
        </p>
    </header>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
        <div class="lg:col-span-2 space-y-8">
            
            <div class="bg-[#0a0a0a] border border-white/5 p-8 rounded-2xl animate-enter hover:border-white/10 transition duration-300" style="animation-delay: 0.2s;">
                <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Who I Am
                </h3>
                <div class="space-y-4 text-gray-400 leading-relaxed text-sm md:text-base">
                    <p>
                        My name is <strong class="text-white">Abiyyuza</strong>. I started my journey as a developer with a curiosity for how things work on the web. Fast forward to today, I've worked with various technologies to build robust applications.
                    </p>
                    <p>
                        Currently, I am deeply focused on the <strong class="text-blue-400">Laravel 12</strong> ecosystem and <strong class="text-teal-400">Tailwind CSS</strong>. I believe in writing clean, maintainable code and designing interfaces that feel intuitive to users.
                    </p>
                    <p>
                        When I'm not coding, you can find me exploring new open-source tools, contributing to community projects, or learning about system architecture.
                    </p>
                </div>
            </div>

            <div class="animate-enter" style="animation-delay: 0.3s;">
                <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    Technical Proficiency
                </h3>
                
                <div class="space-y-4">
                    <div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Backend & Database</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-red-500"></span> Laravel 12
                            </span>
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-purple-500"></span> PHP 8.3
                            </span>
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-blue-600"></span> MySQL
                            </span>
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-green-500"></span> Node.js
                            </span>
                        </div>
                    </div>

                    <div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Frontend & UI</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-cyan-400"></span> Tailwind CSS
                            </span>
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-yellow-400"></span> JavaScript (ES6+)
                            </span>
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-blue-400"></span> Alpine.js
                            </span>
                        </div>
                    </div>
                    
                    <div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Tools & Version Control</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-orange-500"></span> Git
                            </span>
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-white"></span> GitHub
                            </span>
                            <span class="px-3 py-1.5 bg-[#111] border border-white/10 rounded-lg text-sm text-gray-300 flex items-center gap-2 hover:bg-[#1a1a1a] transition">
                                <span class="w-2 h-2 rounded-full bg-blue-500"></span> VS Code
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="space-y-6 lg:mt-0 animate-enter" style="animation-delay: 0.4s;">
            <div class="bg-gradient-to-br from-gray-900 to-black p-6 rounded-2xl border border-white/5 relative overflow-hidden">
                <h3 class="text-lg font-bold text-white mb-4">What I Do</h3>
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="mt-1 min-w-[24px]">
                            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500/10 text-blue-500">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </span>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white">Web Development</h4>
                            <p class="text-xs text-gray-500 mt-1">Building responsive, high-performance websites using modern frameworks.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 min-w-[24px]">
                            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-purple-500/10 text-purple-500">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                            </span>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white">Backend Systems</h4>
                            <p class="text-xs text-gray-500 mt-1">Designing efficient database schemas and secure RESTful APIs.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 min-w-[24px]">
                            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500/10 text-pink-500">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                            </span>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white">UI/UX Implementation</h4>
                            <p class="text-xs text-gray-500 mt-1">Translating designs into pixel-perfect, interactive code.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <a href="#" class="block w-full bg-white text-black hover:bg-gray-200 py-3 rounded-xl font-bold text-center text-sm transition transform active:scale-95">
                Download Resume / CV
            </a>
        </div>
    </div>

</x-layout>