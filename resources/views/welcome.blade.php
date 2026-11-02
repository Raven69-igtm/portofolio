<x-layout>
    <x-slot:title>Abiyyuza</x-slot:title>
    <!-- ========================================================================= -->
    <!-- 1. SECTION: OVERVIEW (HERO WITH FULL-SCREEN ETHEREAL BACKGROUND ART) -->
    <!-- ========================================================================= -->
    <section id="overview" 
             class="scroll-mt-24 relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-16">

        <!-- FOREGROUND CONTENT LAYER -->
        <div class="relative z-20 max-w-7xl w-full mx-auto flex flex-col justify-center min-h-[75vh] lg:min-h-[82vh]">
            
            <!-- EDITORIAL HERO WRAPPER -->
            <div class="max-w-2xl lg:max-w-3xl flex flex-col justify-center text-left pt-6 lg:pt-0">

                <!-- EDITORIAL HEADLINE WITH SEQUENTIAL ONE-TIME TYPING ANIMATION -->
                <div x-data="{
                    line1: '',
                    text1: 'print(\u0022HELLO WORLD\u0022)',
                    line2: '',
                    text2: 'I\'M RAFI ABIYYUZA',
                    line3: '',
                    text3: 'INFORMATICS ENGINEERING STUDENT',
                    step: 1,
                    init() {
                        // Mulai mengetik baris 1 setelah transisi entrance
                        setTimeout(() => this.typeLine1(), 250);
                    },
                    typeLine1() {
                        let i = 0;
                        const tick = () => {
                            if (i <= this.text1.length) {
                                this.line1 = this.text1.substring(0, i);
                                i++;
                                setTimeout(tick, 45);
                            } else {
                                this.step = 2;
                                setTimeout(() => this.typeLine2(), 120);
                            }
                        };
                        tick();
                    },
                    typeLine2() {
                        let i = 0;
                        const tick = () => {
                            if (i <= this.text2.length) {
                                this.line2 = this.text2.substring(0, i);
                                i++;
                                setTimeout(tick, 50);
                            } else {
                                this.step = 3;
                                setTimeout(() => this.typeLine3(), 120);
                            }
                        };
                        tick();
                    },
                    typeLine3() {
                        let i = 0;
                        const tick = () => {
                            if (i <= this.text3.length) {
                                this.line3 = this.text3.substring(0, i);
                                i++;
                                setTimeout(tick, 38);
                            } else {
                                this.step = 4; // Semua baris selesai & permanen
                            }
                        };
                        tick();
                    }
                }" class="mb-6">
                    <h1 class="font-serif text-5xl sm:text-6xl md:text-7xl xl:text-[80px] font-normal leading-[0.93] tracking-tight uppercase text-stone-900 dark:text-stone-100 animate-enter" style="animation-delay: 0.2s;">
                        <!-- LINE 1: print("HELLO WORLD") -->
                        <span class="block">
                            <span x-text="line1">print(&quot;HELLO WORLD&quot;)</span>
                            <span x-show="step === 1" class="inline-block w-1 sm:w-1.5 h-[0.75em] bg-stone-900 dark:bg-stone-100 ml-1.5 align-baseline animate-pulse"></span>
                        </span>

                        <!-- LINE 2: I'M RAFI ABIYYUZA -->
                        <span class="block italic font-light opacity-80 text-stone-700 dark:text-stone-300">
                            <span x-text="line2">I'M RAFI ABIYYUZA</span>
                            <span x-show="step === 2" class="inline-block w-1 sm:w-1.5 h-[0.75em] bg-stone-900 dark:bg-stone-100 ml-1.5 align-baseline animate-pulse"></span>
                        </span>

                        <!-- LINE 3: INFORMATICS ENGINEERING STUDENT (FIXED TEXT ONLY) -->
                        <span class="block font-semibold text-amber-700 dark:text-amber-300">
                            <span x-text="line3">INFORMATICS ENGINEERING STUDENT</span>
                            <span x-show="step === 3" class="inline-block w-1 sm:w-1.5 h-[0.75em] bg-amber-600 dark:bg-amber-400 ml-1.5 align-baseline animate-pulse shadow-sm"></span>
                        </span>
                    </h1>
                </div>

                <!-- SUBTITLE & PERSONAL BIO -->
                <p class="font-sans text-sm sm:text-base text-stone-700 dark:text-stone-300 leading-relaxed max-w-lg mb-8 animate-enter drop-shadow-sm" style="animation-delay: 0.3s;">
                    Saya adalah mahasiswa Teknik Informatika yang memiliki ketertarikan pada Software Development, Machine Learning, dan teknologi modern. Saya senang membuat aplikasi yang tidak hanya berfungsi dengan baik, tetapi juga sederhana, terstruktur, dan mudah digunakan.
                </p>

                <!-- CALL TO ACTION BUTTONS -->
                <div class="flex flex-wrap items-center gap-4 animate-enter" style="animation-delay: 0.4s;">
                    <a href="#activity" 
                       @click.prevent="scrollToSection('activity')"
                       class="px-8 py-3.5 rounded-full text-xs font-bold tracking-widest uppercase transition-all duration-300 shadow-xl transform hover:-translate-y-0.5 active:translate-y-0 flex items-center gap-2.5 cursor-pointer
                              bg-stone-900 text-white hover:bg-stone-800 dark:bg-amber-400 dark:text-stone-950 dark:hover:bg-amber-300">
                        <span>EXPLORE WORKS</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </a>

                    <a href="#about" 
                       @click.prevent="scrollToSection('about')"
                       class="px-7 py-3.5 rounded-full text-xs font-semibold tracking-widest uppercase transition-all duration-300 glass-pill border hover:border-amber-500/50 text-stone-800 dark:text-stone-200 hover:text-stone-950 dark:hover:text-white flex items-center gap-2 cursor-pointer">
                        <span>ABOUT ME</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- MINI STATS ROW -->
                <div class="grid grid-cols-3 gap-6 pt-8 mt-8 border-t border-black/10 dark:border-white/10 animate-enter max-w-md" style="animation-delay: 0.5s;">
                    <div>
                        <span class="block font-serif text-3xl sm:text-4xl font-bold text-stone-900 dark:text-white">{{ $github['public_repos'] ?? 22 }}+</span>
                        <span class="font-sans text-[10px] sm:text-xs text-stone-500 dark:text-stone-400 uppercase tracking-wider">Repositories</span>
                    </div>
                    <div>
                        <span class="block font-serif text-3xl sm:text-4xl font-bold text-stone-900 dark:text-white">1.8k+</span>
                        <span class="font-sans text-[10px] sm:text-xs text-stone-500 dark:text-stone-400 uppercase tracking-wider">Git Commits</span>
                    </div>
                    <div>
                        <span class="block font-serif text-3xl sm:text-4xl font-bold text-stone-900 dark:text-white">{{ $github['followers'] ?? 30 }}+</span>
                        <span class="font-sans text-[10px] sm:text-xs text-stone-500 dark:text-stone-400 uppercase tracking-wider">Community</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. SECTION: ACTIVITY & CODE (RUNNING MARQUEE, GITHUB CHART & PROJECTS) -->
    <!-- ========================================================================= -->
    <section id="activity" class="scroll-mt-28 py-12 border-t border-black/5 dark:border-white/5 relative">
        
        <!-- TECH STACK MARQUEE RIBBON -->
        <div class="relative w-full overflow-hidden py-6 mb-16 border-y border-black/5 dark:border-white/5 bg-stone-200/20 dark:bg-obsidian-900/30 backdrop-blur-sm group">
            <div class="absolute z-10 top-0 left-0 h-full w-24 sm:w-36 bg-gradient-to-r from-[#DED4CF]/70 dark:from-[#161617]/70 to-transparent pointer-events-none"></div>
            <div class="absolute z-10 top-0 right-0 h-full w-24 sm:w-36 bg-gradient-to-l from-[#DED4CF]/70 dark:from-[#161617]/70 to-transparent pointer-events-none"></div>

            <div class="animate-marquee-smooth flex gap-12 items-center opacity-70 group-hover:opacity-100 transition duration-500">
                <!-- Set 1 -->
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Laravel 12</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Tailwind CSS</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/php/777BB4" class="w-7 h-7"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">PHP 8.4</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/livewire/FB70A9" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Livewire 3</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/javascript/F7DF1E" class="w-6 h-6 rounded"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">JavaScript</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/alpinedotjs/8BC0D0" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Alpine.js</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-7 h-7"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">MySQL</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/git/F05032" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Git / GitHub</span></div>
                
                <!-- Set 2 -->
                <div class="flex items-center gap-3 pl-8"><img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Laravel 12</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Tailwind CSS</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/php/777BB4" class="w-7 h-7"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">PHP 8.4</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/livewire/FB70A9" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Livewire 3</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/javascript/F7DF1E" class="w-6 h-6 rounded"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">JavaScript</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/alpinedotjs/8BC0D0" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Alpine.js</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-7 h-7"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">MySQL</span></div>
                <div class="flex items-center gap-3"><img src="https://cdn.simpleicons.org/git/F05032" class="w-6 h-6"><span class="font-display font-semibold text-sm tracking-wider uppercase text-stone-700 dark:text-stone-300">Git / GitHub</span></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- SECTION HEADER -->
            <div class="mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-pill border text-[11px] font-bold tracking-widest uppercase text-amber-700 dark:text-amber-300 mb-3">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Open Source Commitment
                </div>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal text-stone-900 dark:text-white uppercase tracking-tight">
                    Coding Activity &amp; Digital Tracks <br>
                    <span class="italic font-light opacity-80 text-stone-600 dark:text-stone-300 text-2xl sm:text-3xl lg:text-4xl">— Consistency, Commitment, Craft</span>
                </h2>
                <p class="font-sans text-xs sm:text-sm text-stone-500 dark:text-stone-400 max-w-xl mt-2">
                    Jejak digital dan riwayat penulisan kode saya di dunia open source melalui GitHub.
                </p>
            </div>

            <!-- GITHUB CONTRIBUTION CARD & LIVE ACTIVITY SUITE -->
            <div class="glass-card rounded-3xl p-6 sm:p-10 border shadow-2xl relative overflow-hidden mb-12">
                
                <!-- SUITE HEADER WITH GITHUB AVATAR & STATS -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-5 relative z-10">
                    <div class="flex items-center gap-4">
                        <div class="relative w-14 h-14 rounded-2xl overflow-hidden border border-amber-500/40 shrink-0 bg-stone-900 shadow-lg group">
                            <img src="https://avatars.githubusercontent.com/u/228758360?v=4" 
                                 alt="Raven69-igtm GitHub Profile" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-emerald-500 border-2 border-stone-900 dark:border-stone-950"></span>
                        </div>
                        <div>
                            <div class="flex items-center gap-2.5">
                                <h3 class="font-serif text-xl sm:text-2xl font-bold uppercase text-stone-900 dark:text-white">
                                    GitHub Contributions &amp; Live Tracks
                                </h3>
                                <span class="hidden sm:inline-flex px-2 py-0.5 rounded-full text-[10px] font-mono font-bold uppercase bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/25">
                                    LIVE SYNC
                                </span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2 sm:gap-3 mt-1 text-xs">
                                <a href="https://github.com/Raven69-igtm" target="_blank" class="font-mono font-bold text-amber-700 dark:text-amber-400 hover:underline flex items-center gap-1">
                                    <span>@Raven69-igtm</span>
                                    <svg class="w-3 h-3 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                                <span class="text-stone-300 dark:text-stone-700">•</span>
                                <span class="font-mono text-stone-500 dark:text-stone-400">22 Repositories</span>
                                <span class="text-stone-300 dark:text-stone-700">•</span>
                                <span class="font-mono text-emerald-600 dark:text-emerald-400 font-semibold">1.8k+ Commits</span>
                                <span class="text-stone-300 dark:text-stone-700">•</span>
                                <span class="font-mono text-stone-500 dark:text-stone-400">30 Followers</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="https://github.com/Raven69-igtm" target="_blank" 
                       class="px-5 py-2.5 rounded-full text-xs font-bold tracking-wider uppercase transition-all duration-300 shadow-sm flex items-center gap-2 transform hover:scale-105 active:scale-95 shrink-0
                              bg-stone-900 text-white hover:bg-stone-800 dark:bg-amber-400 dark:text-stone-950 dark:hover:bg-amber-300">
                        <span>Open GitHub</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>

                <!-- HEATMAP MATRIX WITH RICH MOUSE INTERACTIVITY & GLOW ANIMATIONS -->
                <div class="mb-8"
                     x-data="{
                        isHovered: false,
                        mouseX: 0,
                        mouseY: 0,
                        tiltX: 0,
                        tiltY: 0,
                        handleMove(e) {
                            const rect = $el.getBoundingClientRect();
                            this.mouseX = e.clientX - rect.left;
                            this.mouseY = e.clientY - rect.top;
                            const xRatio = (this.mouseX / rect.width) - 0.5;
                            const yRatio = (this.mouseY / rect.height) - 0.5;
                            this.tiltX = yRatio * -3.5;
                            this.tiltY = xRatio * 3.5;
                        },
                        resetTilt() {
                            this.isHovered = false;
                            this.tiltX = 0;
                            this.tiltY = 0;
                        }
                     }"
                     @mouseenter="isHovered = true"
                     @mouseleave="resetTilt()"
                     @mousemove="handleMove($event)">
                    
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span class="text-xs font-mono uppercase tracking-wider text-stone-700 dark:text-stone-300 font-bold">
                                Yearly Contribution Matrix
                            </span>
                            <span x-show="isHovered" 
                                  x-transition:enter="transition ease-out duration-300"
                                  x-transition:enter-start="opacity-0 scale-95"
                                  x-transition:enter-end="opacity-100 scale-100"
                                  class="hidden sm:inline-flex px-2 py-0.5 rounded-full text-[10px] font-mono font-bold uppercase bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 border border-emerald-500/30 animate-pulse">
                                Active Interactive Grid
                            </span>
                        </div>
                        <span class="text-[11px] font-mono text-stone-500 dark:text-stone-400 flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-emerald-500 animate-spin" style="animation-duration: 8s;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            Graph updated daily
                        </span>
                    </div>

                    <!-- INTERACTIVE CONTAINER WITH SPOTLIGHT & 3D TILT -->
                    <div class="group relative w-full overflow-hidden rounded-2xl border transition-all duration-300 shadow-lg cursor-pointer
                                border-black/10 dark:border-white/10 hover:border-emerald-500/50 dark:hover:border-emerald-500/60
                                bg-stone-900/5 dark:bg-black/35 hover:shadow-2xl hover:shadow-emerald-500/10"
                         :style="`transform: perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) scale(${isHovered ? 1.01 : 1}); transition: transform 0.15s ease-out, border-color 0.3s ease, box-shadow 0.3s ease;`">
                        
                        <!-- MOUSE FOLLOWER RADIAL SPOTLIGHT -->
                        <div class="pointer-events-none absolute inset-0 z-0 transition-opacity duration-300"
                             :style="`background: radial-gradient(350px circle at ${mouseX}px ${mouseY}px, rgba(16, 185, 129, 0.16), transparent 70%); opacity: ${isHovered ? 1 : 0};`">
                        </div>

                        <!-- SHIMMER SCANNER BEAM ON HOVER -->
                        <div x-show="isHovered"
                             class="pointer-events-none absolute inset-0 z-10 w-full h-full bg-gradient-to-r from-transparent via-emerald-400/15 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-in-out">
                        </div>

                        <!-- HEATMAP SCROLLABLE AREA -->
                        <div class="relative z-10 w-full overflow-x-auto pb-3 pt-2 p-3">
                            <img src="https://ghchart.rshah.org/10b981/Raven69-igtm" 
                                 alt="GitHub Contribution Chart" 
                                 class="min-w-[760px] w-full transition-all duration-500 rounded-xl filter contrast-125 dark:brightness-110
                                        group-hover:contrast-150 group-hover:drop-shadow-[0_0_18px_rgba(16,185,129,0.35)]">
                        </div>

                        <!-- HOVER HINT BADGE -->
                        <div class="absolute bottom-2 right-3 z-20 pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-[10px] font-mono text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10 dark:bg-emerald-950/60 backdrop-blur-sm px-2.5 py-0.5 rounded-full border border-emerald-500/25">
                                ✦ 1,842 Commits • Verified
                            </span>
                        </div>
                    </div>

                    <!-- FOOTER METRICS & INTERACTIVE PIANO LEGEND -->
                    <div class="mt-3.5 flex flex-wrap items-center justify-between gap-4 text-xs font-mono text-stone-600 dark:text-stone-400">
                        <div class="flex items-center gap-2">
                            <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span class="font-semibold text-stone-800 dark:text-stone-200">Consistency index:</span>
                            <span class="text-emerald-600 dark:text-emerald-400 font-bold">High (1.8k+ commits logged)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[11px] text-stone-500">Less</span>
                            <div class="flex items-center gap-1.5 p-1 rounded-lg bg-black/5 dark:bg-white/5">
                                <span class="w-3 h-3 bg-[#ebedf0] dark:bg-[#161b22] rounded-sm transition-all duration-200 hover:scale-150 hover:-translate-y-1 hover:shadow cursor-pointer" title="0 commits"></span>
                                <span class="w-3 h-3 bg-[#9be9a8] dark:bg-[#0e4429] rounded-sm transition-all duration-200 hover:scale-150 hover:-translate-y-1 hover:shadow cursor-pointer" title="1-3 commits"></span>
                                <span class="w-3 h-3 bg-[#40c463] dark:bg-[#006d32] rounded-sm transition-all duration-200 hover:scale-150 hover:-translate-y-1 hover:shadow cursor-pointer" title="4-6 commits"></span>
                                <span class="w-3 h-3 bg-[#30a14e] dark:bg-[#26a641] rounded-sm transition-all duration-200 hover:scale-150 hover:-translate-y-1 hover:shadow cursor-pointer" title="7-9 commits"></span>
                                <span class="w-3 h-3 bg-[#216e39] dark:bg-[#39d353] rounded-sm shadow-sm transition-all duration-200 hover:scale-150 hover:-translate-y-1 hover:shadow-[0_0_10px_#39d353] cursor-pointer" title="10+ commits"></span>
                            </div>
                            <span class="text-[11px] text-stone-500">More</span>
                        </div>
                    </div>
                </div>

                <!-- TWO COLUMNS: LIVE ACTIVITY STREAM & PRODUCTION METRICS -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 border-t border-black/5 dark:border-white/5 pt-8"
                     x-data="{
                        events: [],
                        loading: true,
                        async loadGitHubEvents() {
                            try {
                                const res = await fetch('https://api.github.com/users/Raven69-igtm/events/public');
                                if (!res.ok) throw new Error('Throttled');
                                const data = await res.json();
                                if (Array.isArray(data) && data.length > 0) {
                                    this.events = data.slice(0, 5).map(e => {
                                        let title = 'Repository Event';
                                        let badge = 'Activity';
                                        let badgeColor = 'bg-stone-500/15 text-stone-600 dark:text-stone-400 border-stone-500/20';
                                        if (e.type === 'PushEvent') {
                                            badge = 'Push';
                                            badgeColor = 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border-emerald-500/25';
                                            const size = e.payload?.size || 1;
                                            title = `Pushed ${size} commit${size > 1 ? 's' : ''} to repository`;
                                        } else if (e.type === 'CreateEvent') {
                                            badge = e.payload?.ref_type === 'repository' ? 'New Repo' : 'Branch';
                                            badgeColor = 'bg-amber-500/15 text-amber-600 dark:text-amber-400 border-amber-500/25';
                                            title = `Created ${e.payload?.ref_type || 'ref'} in workspace`;
                                        } else if (e.type === 'PullRequestEvent') {
                                            badge = 'PR';
                                            badgeColor = 'bg-purple-500/15 text-purple-600 dark:text-purple-400 border-purple-500/25';
                                            title = `${e.payload?.action || 'Updated'} Pull Request`;
                                        } else if (e.type === 'WatchEvent') {
                                            badge = 'Star';
                                            badgeColor = 'bg-yellow-500/15 text-yellow-600 dark:text-yellow-400 border-yellow-500/25';
                                            title = 'Starred project';
                                        }
                                        return {
                                            id: e.id,
                                            repo: e.repo?.name || 'Raven69-igtm',
                                            url: `https://github.com/${e.repo?.name || 'Raven69-igtm'}`,
                                            badge: badge,
                                            badgeColor: badgeColor,
                                            title: title,
                                            time: this.calcTime(e.created_at)
                                        };
                                    });
                                    this.loading = false;
                                    return;
                                }
                            } catch (e) {}

                            // Graceful Fallback from verified Raven69-igtm activity
                            this.events = [
                                {
                                    id: 'fb-1',
                                    repo: 'Raven69-igtm/si-akademik',
                                    url: 'https://github.com/Raven69-igtm/si-akademik',
                                    badge: 'Push',
                                    badgeColor: 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border-emerald-500/25',
                                    title: 'Committed core academic management & KRS modules',
                                    time: 'Active'
                                },
                                {
                                    id: 'fb-2',
                                    repo: 'Raven69-igtm/sentra-website',
                                    url: 'https://github.com/Raven69-igtm/sentra-website',
                                    badge: 'New Repo',
                                    badgeColor: 'bg-amber-500/15 text-amber-600 dark:text-amber-400 border-amber-500/25',
                                    title: 'Created enterprise web application architecture',
                                    time: 'Active'
                                },
                                {
                                    id: 'fb-3',
                                    repo: 'Raven69-igtm/sentra-mobile',
                                    url: 'https://github.com/Raven69-igtm/sentra-mobile',
                                    badge: 'New Repo',
                                    badgeColor: 'bg-amber-500/15 text-amber-600 dark:text-amber-400 border-amber-500/25',
                                    title: 'Initialized Flutter cross-platform mobile ecosystem',
                                    time: 'Active'
                                },
                                {
                                    id: 'fb-4',
                                    repo: 'Raven69-igtm/sistem_penjualan_kedai_santi',
                                    url: 'https://github.com/Raven69-igtm/sistem_penjualan_kedai_santi',
                                    badge: 'Push',
                                    badgeColor: 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border-emerald-500/25',
                                    title: 'Pushed POS sales transactions and daily report logic',
                                    time: 'Active'
                                },
                                {
                                    id: 'fb-5',
                                    repo: 'Raven69-igtm/skillswap_karya',
                                    url: 'https://github.com/Raven69-igtm/skillswap_karya',
                                    badge: 'Push',
                                    badgeColor: 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border-emerald-500/25',
                                    title: 'Updated barter marketplace backend authentication & CRUD',
                                    time: 'Active'
                                }
                            ];
                            this.loading = false;
                        },
                        calcTime(dateStr) {
                            if (!dateStr) return 'Recently';
                            const d = new Date(dateStr);
                            const diff = Math.floor((new Date() - d) / 1000);
                            if (diff < 3600) return 'Just now';
                            if (diff < 86400) return `${Math.floor(diff/3600)}h ago`;
                            if (diff < 2592000) return `${Math.floor(diff/86400)}d ago`;
                            return `${Math.floor(diff/2592000)}mo ago`;
                        }
                     }"
                     x-init="loadGitHubEvents()">
                     
                    <!-- LEFT: LIVE RECENT ACTIVITY FEED -->
                    <div class="lg:col-span-7">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                <h4 class="font-serif text-base sm:text-lg font-bold uppercase text-stone-900 dark:text-white">
                                    Recent Git Activity Stream
                                </h4>
                            </div>
                            <span class="text-[11px] font-mono text-stone-500 dark:text-stone-400">
                                Live Event Log
                            </span>
                        </div>

                        <!-- EVENT ITEMS -->
                        <div class="space-y-3">
                            <template x-for="event in events" :key="event.id">
                                <div class="p-3.5 rounded-2xl border border-black/5 dark:border-white/5 bg-stone-50/50 dark:bg-stone-900/30 hover:border-amber-500/30 transition-all flex items-start justify-between gap-3 group">
                                    <div class="flex items-start gap-3">
                                        <span class="px-2 py-0.5 rounded-md text-[10px] font-mono font-bold uppercase border mt-0.5 shrink-0"
                                              :class="event.badgeColor"
                                              x-text="event.badge"></span>
                                        <div>
                                            <a :href="event.url" target="_blank" 
                                               class="font-mono text-xs font-bold text-stone-900 dark:text-white hover:text-amber-600 dark:hover:text-amber-400 transition-colors flex items-center gap-1 group-hover:underline">
                                                <span x-text="event.repo"></span>
                                                <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                            </a>
                                            <p class="text-xs text-stone-600 dark:text-stone-400 mt-0.5" x-text="event.title"></p>
                                        </div>
                                    </div>
                                    <span class="text-[11px] font-mono text-stone-400 dark:text-stone-500 shrink-0 mt-0.5" x-text="event.time"></span>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- RIGHT: PRODUCTION ARCHITECTURE & METRIC CARDS -->
                    <div class="lg:col-span-5 space-y-4">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                            <h4 class="font-serif text-base sm:text-lg font-bold uppercase text-stone-900 dark:text-white">
                                Tech Breakdown &amp; Velocity
                            </h4>
                        </div>

                        <div class="p-4 rounded-2xl border border-black/5 dark:border-white/5 bg-stone-50/50 dark:bg-stone-900/30 space-y-3">
                            <div class="flex items-center justify-between text-xs">
                                <span class="font-semibold text-stone-800 dark:text-stone-200">PHP &amp; Laravel Ecosystem</span>
                                <span class="font-mono text-amber-600 dark:text-amber-400 font-bold">45%</span>
                            </div>
                            <div class="w-full bg-stone-200 dark:bg-stone-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-gradient-to-r from-red-500 to-amber-500 h-full rounded-full" style="width: 45%"></div>
                            </div>

                            <div class="flex items-center justify-between text-xs pt-1">
                                <span class="font-semibold text-stone-800 dark:text-stone-200">Flutter &amp; Dart Mobile</span>
                                <span class="font-mono text-sky-600 dark:text-sky-400 font-bold">25%</span>
                            </div>
                            <div class="w-full bg-stone-200 dark:bg-stone-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-gradient-to-r from-blue-500 to-sky-400 h-full rounded-full" style="width: 25%"></div>
                            </div>

                            <div class="flex items-center justify-between text-xs pt-1">
                                <span class="font-semibold text-stone-800 dark:text-stone-200">Python Machine Learning</span>
                                <span class="font-mono text-emerald-600 dark:text-emerald-400 font-bold">15%</span>
                            </div>
                            <div class="w-full bg-stone-200 dark:bg-stone-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-gradient-to-r from-emerald-500 to-teal-400 h-full rounded-full" style="width: 15%"></div>
                            </div>

                            <div class="flex items-center justify-between text-xs pt-1">
                                <span class="font-semibold text-stone-800 dark:text-stone-200">Blade, Tailwind &amp; JavaScript</span>
                                <span class="font-mono text-amber-600 dark:text-amber-400 font-bold">15%</span>
                            </div>
                            <div class="w-full bg-stone-200 dark:bg-stone-800 h-2 rounded-full overflow-hidden">
                                <div class="bg-gradient-to-r from-amber-400 to-yellow-300 h-full rounded-full" style="width: 15%"></div>
                            </div>
                        </div>

                        <!-- STAT HIGHLIGHT PILL -->
                        <div class="p-4 rounded-2xl border border-amber-500/20 bg-amber-500/5 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] font-mono uppercase tracking-widest text-amber-700 dark:text-amber-400 font-bold">
                                    Annual Commits
                                </span>
                                <div class="font-serif text-2xl font-bold text-stone-900 dark:text-white">
                                    1,786+ Commits
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-[10px] font-mono uppercase tracking-widest text-stone-500 dark:text-stone-400">
                                    Collaborative PRs
                                </span>
                                <div class="font-serif text-2xl font-bold text-stone-900 dark:text-white">
                                    11 Pull Requests
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- 3 TRAIT PILLARS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
                <div class="glass-card p-7 rounded-3xl border flex flex-col justify-between group">
                    <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center mb-6 text-amber-700 dark:text-amber-300 border group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">Relentless Consistency</h4>
                        <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 leading-relaxed">Mendedikasikan waktu secara rutin untuk mengasah pemahaman algoritma dan arsitektur web modern.</p>
                    </div>
                </div>

                <div class="glass-card p-7 rounded-3xl border flex flex-col justify-between group">
                    <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center mb-6 text-amber-700 dark:text-amber-300 border group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">Production Focused</h4>
                        <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 leading-relaxed">Fokus pada stabilitas sistem nyata, optimasi query database, dan kesiapan rilis produksi.</p>
                    </div>
                </div>

                <div class="glass-card p-7 rounded-3xl border flex flex-col justify-between group">
                    <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center mb-6 text-amber-700 dark:text-amber-300 border group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">Continuous Growth</h4>
                        <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 leading-relaxed">Selalu memperbarui pengetahuan dengan framework dan standar keamanan industri termutakhir.</p>
                    </div>
                </div>
            </div>

            <!-- CURATED WORK / PROJECT LIST -->
            <div class="pt-6">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
                    <div>
                        <span class="font-sans text-xs font-bold tracking-widest uppercase text-amber-700 dark:text-amber-400">Curated Work</span>
                        <h3 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-normal text-stone-900 dark:text-white uppercase tracking-tight mt-1">
                            Featured Repositories &amp; Solutions
                        </h3>
                    </div>
                    <p class="font-sans text-xs sm:text-sm text-stone-500 dark:text-stone-400 max-w-md">
                        Karya pilihan yang dibangun dengan standar clean-code, pengujian menyeluruh, dan arsitektur database modern.
                    </p>
                </div>

                <livewire:project-list />
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. SECTION: CERTIFICATES (CREDENTIALS & HONORS WITH ZOOM MODAL) -->
    <!-- ========================================================================= -->
    <section id="certificates" 
             class="scroll-mt-28 py-16 border-t border-black/5 dark:border-white/5 relative"
             x-data="{ 
                 modalOpen: false, 
                 modalImage: '', 
                 modalTitle: '',
                 modalFile: '',
                 modalUrl: '',
                 modalId: ''
             }">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <header class="mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-pill border text-[11px] font-bold tracking-widest uppercase text-amber-700 dark:text-amber-300 mb-3">
                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                    Verified Competence
                </div>

                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal tracking-tight uppercase text-stone-900 dark:text-white leading-tight mb-3">
                    Credentials &amp; Honors <br>
                    <span class="italic font-light opacity-80 text-stone-600 dark:text-stone-300 text-2xl sm:text-3xl lg:text-4xl">— Verified Certifications</span>
                </h2>

                <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 max-w-xl leading-relaxed">
                    Bukti dedikasi dalam mempelajari teknologi terbaru secara terstruktur dari platform terkemuka (Total 8 Sertifikat Terverifikasi — 4 Format Foto &amp; 4 Berkas PDF). Klik sertifikat untuk melihat tampilan resolusi penuh.
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($certificates as $index => $cert)
                <div class="group relative">
                    <div class="glass-card rounded-3xl border overflow-hidden h-full flex flex-col transition-all duration-500 hover:-translate-y-2">
                        
                        <div class="h-48 overflow-hidden cursor-pointer relative bg-stone-200/50 dark:bg-stone-900/50"
                             @click="modalOpen = true; modalImage = '{{ asset($cert['image']) }}'; modalTitle = '{{ $cert['name'] }}'; modalFile = '{{ !empty($cert['file']) ? asset($cert['file']) : '' }}'; modalUrl = '{{ $cert['credential_url'] ?? '' }}'; modalId = '{{ $cert['credential_id'] ?? '' }}'">
                            
                            <img src="{{ asset($cert['image']) }}" 
                                 alt="{{ $cert['name'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out">
                            
                            <div class="absolute inset-0 bg-stone-900/40 dark:bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-xs">
                                <span class="glass-pill px-3 py-1.5 rounded-full text-stone-900 dark:text-white font-semibold text-[11px] flex items-center gap-1.5 transform scale-95 group-hover:scale-100 transition">
                                    <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    <span>Zoom View</span>
                                </span>
                            </div>
                        </div>

                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-2.5">
                                    <div class="flex flex-wrap gap-1">
                                        @foreach($cert['tags'] ?? [] as $tag)
                                            <span class="text-[9px] font-mono font-bold uppercase tracking-wider text-stone-700 dark:text-stone-300 bg-stone-200/80 dark:bg-stone-800/80 px-1.5 py-0.5 rounded border border-black/5 dark:border-white/5">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    </div>
                                    <span class="text-[10px] text-stone-500 dark:text-stone-400 font-mono">{{ $cert['date'] }}</span>
                                </div>
                                
                                <h4 class="font-serif text-base font-bold uppercase text-stone-900 dark:text-white mb-2 leading-snug group-hover:text-amber-700 dark:group-hover:text-amber-300 transition-colors">
                                    {{ $cert['name'] }}
                                </h4>
                            </div>
                            
                            <div class="pt-3 mt-3 border-t border-black/5 dark:border-white/5 flex items-center justify-between text-[11px] text-stone-500 dark:text-stone-400">
                                <div class="flex items-center gap-1.5 truncate mr-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 shrink-0"></span>
                                    <span class="font-semibold truncate">{{ $cert['issuer'] }}</span>
                                </div>
                                @if(!empty($cert['file']))
                                    <a href="{{ asset($cert['file']) }}" target="_blank" @click.stop class="inline-flex items-center gap-1 text-[10px] font-mono font-bold text-amber-600 dark:text-amber-400 hover:underline shrink-0">
                                        <span>PDF</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    </a>
                                @else
                                    <span class="inline-flex items-center gap-1 text-[10px] font-mono font-bold text-stone-500 dark:text-stone-400 shrink-0">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <span>FOTO</span>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            <!-- MODAL VIEWER -->
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
                            <h4 class="font-serif text-lg font-bold uppercase text-stone-900 dark:text-white" x-text="modalTitle"></h4>
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
    </section>

    <!-- ========================================================================= -->
    <!-- 4. SECTION: ABOUT (BIOGRAPHY, ARSENAL & CAPABILITIES) -->
    <!-- ========================================================================= -->
    <section id="about" class="scroll-mt-28 py-16 border-t border-black/5 dark:border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <header class="mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-pill border text-[11px] font-bold tracking-widest uppercase text-amber-700 dark:text-amber-300 mb-3">
                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                    Craftsman Biography
                </div>

                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal tracking-tight uppercase text-stone-900 dark:text-white leading-tight mb-3">
                    Biography &amp; Expertise <br>
                    <span class="italic font-light opacity-80 text-stone-600 dark:text-stone-300 text-2xl sm:text-3xl lg:text-4xl">— The Artisan Behind The Code</span>
                </h2>

                <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 max-w-xl leading-relaxed">
                    Pengembang perangkat lunak Fullstack yang menggabungkan ketelitian logika backend dengan estetika visual tingkat tinggi.
                </p>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
                
                <!-- BIO & TECHNICAL ARSENAL -->
                <div class="lg:col-span-7 space-y-8">
                    
                    <!-- WHO I AM WITH INTERACTIVE PHYSICS LANYARD PASS -->
                    <div class="glass-card rounded-3xl p-6 sm:p-8 border relative overflow-hidden">
                        
                        <!-- AMBIENT CORNER GLOW -->
                        <div class="absolute -top-16 -right-16 w-48 h-48 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

                        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                            
                            <!-- LEFT COLUMN: WHO I AM BIO -->
                            <div class="md:col-span-7">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="w-10 h-10 rounded-2xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </div>
                                    <div>
                                        <h3 class="font-serif text-2xl font-bold uppercase text-stone-900 dark:text-white leading-tight">
                                            Who I Am
                                        </h3>
                                        <span class="text-[10px] font-mono tracking-widest uppercase text-stone-500 dark:text-stone-400">Personal Identity</span>
                                    </div>
                                </div>

                                <div class="space-y-4 text-stone-600 dark:text-stone-400 text-sm sm:text-base leading-relaxed">
                                    <p>
                                        Nama saya <strong class="text-stone-950 dark:text-white font-semibold">Abiyyuza</strong>. Ketertarikan saya terhadap dunia web bermula dari rasa penasaran bagaimana kode biner mampu menciptakan pengalaman visual yang dinamis dan berdaya guna bagi jutaan manusia.
                                    </p>
                                    <p>
                                        Saat ini, fokus utama saya bertumpu pada ekosistem <strong class="text-amber-700 dark:text-amber-300 font-semibold">Laravel 12</strong>, <strong class="text-amber-700 dark:text-amber-300 font-semibold">Tailwind CSS</strong>, serta reactive state dengan <strong class="text-stone-900 dark:text-white font-semibold">Livewire</strong> dan <strong class="text-stone-900 dark:text-white font-semibold">Alpine.js</strong>.
                                    </p>
                                    <p>
                                        Bagi saya, kode bukan sekadar deretan sintaks yang bekerja, melainkan karya arsitektur digital: harus kokoh, aman dari celah, mudah dipelihara, dan memberikan impresi visual yang memukau.
                                    </p>
                                </div>
                            </div>

                            <!-- RIGHT COLUMN: INTERACTIVE PHYSICS LANYARD STAGE (USING TALI_LANYARD.PNG) -->
                            <div class="md:col-span-5 flex flex-col items-center justify-center relative min-h-[480px] sm:min-h-[520px]">
                                <div class="relative w-full h-[480px] sm:h-[520px] flex items-center justify-center select-none overflow-visible touch-none"
                                     x-data="interactiveLanyard()" 
                                     x-init="initLanyard()"
                                     @pointerdown="startDrag($event)"
                                     @pointermove.window="onDrag($event)"
                                     @pointerup.window="endDrag()"
                                     @pointercancel.window="endDrag()">

                                    <!-- REALISTIC PHOTOREALISTIC LANYARD STRAP (image/tali_lanyard.png) -->
                                    <div class="absolute top-0 left-0 pointer-events-none z-10 filter drop-shadow-xl"
                                         :style="`transform: translate3d(${anchorX - 47}px, ${anchorY}px, 0px) rotate(${strapAngle}deg) scaleY(${strapScaleY}); transform-origin: 50% 0%; will-change: transform;`">
                                        <img src="{{ asset('image/tali_lanyard.png') }}" 
                                             alt="Tali Lanyard Information Technology" 
                                             class="w-[94px] h-[225px] object-contain select-none pointer-events-none"
                                             draggable="false">
                                    </div>

                                    <!-- HANGING PHYSICAL ID PASS BADGE (image/lanyard.jpeg) -->
                                    <div class="absolute top-0 left-0 z-20 cursor-grab active:cursor-grabbing transition-shadow"
                                         :style="`transform: translate3d(${cardX - 100}px, ${cardY - 14}px, 0px) rotate(${cardAngle}deg); transform-origin: 50% 14px; will-change: transform;`">
                                        
                                        <!-- THE PHYSICAL PASS PHOTO CARD (FULL PHOTO) -->
                                        <div class="relative w-[200px] aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl border border-amber-500/40 bg-stone-900 select-none transition-all duration-200 hover:border-amber-400/80 hover:shadow-[0_15px_40px_rgba(181,141,61,0.35)]">
                                            <!-- PUNCHED ID CARD SLOT (Where the metal split ring connects through) -->
                                            <div class="absolute top-2.5 left-1/2 -translate-x-1/2 w-8 h-2 rounded-full bg-black/60 backdrop-blur-md border border-white/30 shadow-inner flex items-center justify-center z-10 pointer-events-none">
                                                <div class="w-6 h-0.5 rounded-full bg-black/80"></div>
                                            </div>

                                            <img src="{{ asset('image/lanyard.jpeg') }}" 
                                                 alt="Lanyard Pass" 
                                                 class="w-full h-full object-cover select-none pointer-events-none"
                                                 draggable="false">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="glass-card rounded-3xl p-6 sm:p-8 border">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-2xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            </div>
                            <h3 class="font-serif text-2xl font-bold uppercase text-stone-900 dark:text-white">
                                Technical Arsenal
                            </h3>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <span class="text-xs font-mono uppercase tracking-wider text-stone-500 dark:text-stone-400 mb-3 block">Backend &amp; Databases</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Laravel 12</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">PHP 8.4</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">MySQL / MariaDB</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">RESTful APIs</span>
                                </div>
                            </div>

                            <div>
                                <span class="text-xs font-mono uppercase tracking-wider text-stone-500 dark:text-stone-400 mb-3 block">Frontend &amp; Interactivity</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Tailwind CSS</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Livewire 3</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">JavaScript ES6+</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Alpine.js</span>
                                </div>
                            </div>

                            <div>
                                <span class="text-xs font-mono uppercase tracking-wider text-stone-500 dark:text-stone-400 mb-3 block">DevOps &amp; Workflow</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Git &amp; GitHub</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Vite Bundler</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Composer</span>
                                    <span class="glass-pill px-3.5 py-1.5 rounded-xl text-xs font-semibold text-stone-800 dark:text-stone-200 border">Laragon / Apache</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- CAPABILITIES & CALL TO ACTION -->
                <div class="lg:col-span-5 space-y-8">
                    
                    <div class="glass-card rounded-3xl p-6 sm:p-8 border">
                        <h3 class="font-serif text-2xl font-bold uppercase text-stone-900 dark:text-white mb-6">
                            Core Capabilities
                        </h3>

                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-serif text-base font-bold uppercase text-stone-900 dark:text-white">Web Architecture</h4>
                                    <p class="text-xs text-stone-500 dark:text-stone-400 mt-1 leading-relaxed">Membangun website responsif berkecepatan tinggi dengan integrasi backend Laravel yang rapi.</p>
                                </div>
                            </li>

                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-serif text-base font-bold uppercase text-stone-900 dark:text-white">Backend &amp; API Logic</h4>
                                    <p class="text-xs text-stone-500 dark:text-stone-400 mt-1 leading-relaxed">Perancangan skema database teroptimasi, otentikasi aman, dan endpoint performan.</p>
                                </div>
                            </li>

                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-serif text-base font-bold uppercase text-stone-900 dark:text-white">Luxury UI/UX Polish</h4>
                                    <p class="text-xs text-stone-500 dark:text-stone-400 mt-1 leading-relaxed">Menerjemahkan ide visual menjadi kode nyata dengan animasi micro-interaction dan estetika premium.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="glass-card rounded-3xl p-6 sm:p-8 border text-center flex flex-col items-center">
                        <span class="w-3 h-3 rounded-full bg-emerald-500 animate-ping mb-3"></span>
                        <h4 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">
                            Open for Opportunities
                        </h4>
                        <p class="text-xs text-stone-500 dark:text-stone-400 max-w-xs mb-6">
                            Tersedia untuk proyek freelance, kontrak kolaborasi, atau posisi full-time.
                        </p>

                        <a href="#contact" 
                           @click.prevent="scrollToSection('contact')"
                           class="w-full py-3.5 rounded-full text-xs font-bold tracking-widest uppercase transition-all duration-300 shadow-lg transform hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 cursor-pointer
                                  bg-stone-900 text-white hover:bg-stone-800 dark:bg-amber-400 dark:text-stone-950 dark:hover:bg-amber-300">
                            <span>Initiate Dialogue</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. SECTION: CONTACT (DIRECT DISPATCH & LIVEWIRE FORM) -->
    <!-- ========================================================================= -->
    <section id="contact" class="scroll-mt-28 py-16 border-t border-black/5 dark:border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <header class="mb-12">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-pill border text-[11px] font-bold tracking-widest uppercase text-amber-700 dark:text-amber-300 mb-3">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Direct Communication
                </div>

                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-normal tracking-tight uppercase text-stone-900 dark:text-white leading-tight mb-3">
                    Initiate Dialogue <br>
                    <span class="italic font-light opacity-80 text-stone-600 dark:text-stone-300 text-2xl sm:text-3xl lg:text-4xl">— Let's Build Something Imperial</span>
                </h2>

                <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 max-w-xl leading-relaxed">
                    Punya visi proyek, peluang kerja sama, atau sekadar ingin bertukar pikiran seputar arsitektur web? Pintu komunikasi selalu terbuka.
                </p>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- CONTACT CHANNELS -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <div class="glass-card rounded-3xl p-6 sm:p-8 border space-y-6">
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-mono uppercase tracking-widest text-stone-500 dark:text-stone-400">Electronic Mail</span>
                                <h4 class="font-serif text-lg font-bold uppercase text-stone-900 dark:text-white mb-0.5">Email Direct</h4>
                                <a href="mailto:contactabiyyuza@gmail.com" class="text-xs sm:text-sm text-stone-600 dark:text-stone-400 hover:text-amber-700 dark:hover:text-amber-300 transition-colors font-mono">
                                    contactabiyyuza@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 pt-6 border-t border-black/5 dark:border-white/5">
                            <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-mono uppercase tracking-widest text-stone-500 dark:text-stone-400">Instant Messaging</span>
                                <h4 class="font-serif text-lg font-bold uppercase text-stone-900 dark:text-white mb-0.5">WhatsApp</h4>
                                <a href="https://wa.me/6283116084432" target="_blank" class="text-xs sm:text-sm text-stone-600 dark:text-stone-400 hover:text-amber-700 dark:hover:text-amber-300 transition-colors font-mono">
                                    +62 831-1608-4432
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 pt-6 border-t border-black/5 dark:border-white/5">
                            <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center text-amber-700 dark:text-amber-300 border shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-mono uppercase tracking-widest text-stone-500 dark:text-stone-400">Headquarters</span>
                                <h4 class="font-serif text-lg font-bold uppercase text-stone-900 dark:text-white mb-0.5">Location</h4>
                                <p class="text-xs sm:text-sm text-stone-600 dark:text-stone-400 font-mono">
                                    Surabaya, East Java, Indonesia
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="glass-card rounded-3xl p-6 border flex items-center gap-4">
                        <span class="relative flex h-3 w-3 shrink-0">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>
                        <div>
                            <h4 class="font-serif text-base font-bold uppercase text-stone-900 dark:text-white">Worldwide Availability</h4>
                            <p class="text-xs text-stone-500 dark:text-stone-400">Menerima penugasan jarak jauh (Remote) dari seluruh dunia.</p>
                        </div>
                    </div>

                </div>

                <!-- LIVEWIRE CONTACT FORM -->
                <div class="lg:col-span-7">
                    <livewire:contact-form />
                </div>

            </div>
        </div>
    </section>

    <!-- INTERACTIVE PHYSICS LANYARD SCRIPT -->
    <script>
        function interactiveLanyard() {
            return {
                anchorX: 130,
                anchorY: -15,
                cardX: 130,
                cardY: 205,
                cardAngle: 0,
                strapAngle: 0,
                strapScaleY: 1,
                vx: 0,
                vy: 0,
                vAngle: 0,
                isDragging: false,
                dragOffsetX: 0,
                dragOffsetY: 0,
                lastX: 0,
                lastY: 0,
                restLength: 220,

                initLanyard() {
                    this.$nextTick(() => {
                        const rect = this.$el.getBoundingClientRect();
                        this.anchorX = rect.width / 2;
                        this.cardX = this.anchorX;
                        this.cardY = this.anchorY + this.restLength;
                        this.updateStrap();
                        this.loop();
                    });

                    window.addEventListener('resize', () => {
                        const rect = this.$el.getBoundingClientRect();
                        if (rect && rect.width > 0) {
                            this.anchorX = rect.width / 2;
                        }
                    });
                },

                updateStrap() {
                    const dx = this.cardX - this.anchorX;
                    const dy = Math.max(90, this.cardY - this.anchorY);
                    const dist = Math.hypot(dx, dy);
                    this.strapAngle = Math.atan2(dx, dy) * (180 / Math.PI);
                    this.strapScaleY = Math.max(0.85, Math.min(1.25, dist / this.restLength));
                },

                startDrag(e) {
                    this.isDragging = true;
                    const rect = this.$el.getBoundingClientRect();
                    const clientX = e.clientX !== undefined ? e.clientX : (e.touches && e.touches[0].clientX);
                    const clientY = e.clientY !== undefined ? e.clientY : (e.touches && e.touches[0].clientY);
                    this.dragOffsetX = this.cardX - (clientX - rect.left);
                    this.dragOffsetY = this.cardY - (clientY - rect.top);
                    this.lastX = clientX;
                    this.lastY = clientY;
                    this.vx = 0;
                    this.vy = 0;
                },

                onDrag(e) {
                    if (!this.isDragging) return;
                    const rect = this.$el.getBoundingClientRect();
                    const clientX = e.clientX !== undefined ? e.clientX : (e.touches && e.touches[0].clientX);
                    const clientY = e.clientY !== undefined ? e.clientY : (e.touches && e.touches[0].clientY);
                    if (clientX === undefined) return;
                    
                    const targetX = (clientX - rect.left) + this.dragOffsetX;
                    const targetY = (clientY - rect.top) + this.dragOffsetY;
                    
                    // Track drag velocity for elastic fling
                    this.vx = (clientX - this.lastX) * 1.5;
                    this.vy = (clientY - this.lastY) * 1.5;
                    this.lastX = clientX;
                    this.lastY = clientY;

                    // Wide unrestricted bounds for fluid interaction across the page
                    const minX = -80;
                    const maxX = rect.width + 80;
                    const minY = 90;
                    const maxY = rect.height + 60;
                    this.cardX = Math.max(minX, Math.min(maxX, targetX));
                    this.cardY = Math.max(minY, Math.min(maxY, targetY));
                    
                    // Dynamic tilt during dragging
                    const dx = this.cardX - this.anchorX;
                    this.cardAngle = Math.max(-36, Math.min(36, dx * 0.22 + this.vx * 0.7));
                    
                    this.updateStrap();
                },

                endDrag() {
                    if (this.isDragging) {
                        this.isDragging = false;
                        this.vAngle = Math.max(-18, Math.min(18, this.vx * 0.4));
                    }
                },

                loop() {
                    if (!this.isDragging) {
                        const restY = this.anchorY + this.restLength;
                        const dx = this.cardX - this.anchorX;
                        const dy = this.cardY - restY;
                        
                        // Spring & Gravity physics (elastic fabric lanyard)
                        const spring = 0.075;
                        const damping = 0.89;
                        
                        const ax = -dx * spring;
                        const ay = -dy * spring;
                        
                        this.vx = (this.vx + ax) * damping;
                        this.vy = (this.vy + ay) * damping;
                        
                        this.cardX += this.vx;
                        this.cardY += this.vy;
                        
                        // Angular pendulum restoring torque
                        const targetAngle = dx * 0.22;
                        const angleSpring = 0.12;
                        const angleDamping = 0.88;
                        
                        const aAcc = (targetAngle - this.cardAngle) * angleSpring;
                        this.vAngle = (this.vAngle + aAcc) * angleDamping;
                        this.cardAngle += this.vAngle;

                        // Ambient breeze breathing sway when resting
                        if (Math.abs(this.vx) < 0.15 && Math.abs(this.vy) < 0.15) {
                            const t = performance.now() * 0.002;
                            this.cardX += Math.sin(t) * 0.22;
                            this.cardAngle += Math.sin(t * 1.3) * 0.12;
                        }

                        this.updateStrap();
                    }

                    requestAnimationFrame(() => this.loop());
                }
            };
        }
    </script>
</x-layout>