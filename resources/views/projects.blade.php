<x-layout>
    <x-slot:title>Activity & Contributions — Abiyyuza</x-slot:title>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-16">
        
        <!-- EDITORIAL HEADER -->
        <header class="mb-12 animate-enter" style="animation-delay: 0.1s;">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-pill border text-[11px] font-bold tracking-widest uppercase text-amber-700 dark:text-amber-300 mb-4">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Open Source Contributions
            </div>

            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-normal tracking-tight uppercase text-stone-900 dark:text-white leading-tight mb-4">
                Coding Activity <br>
                <span class="italic font-light opacity-80 text-stone-600 dark:text-stone-300">— Consistency, Commitment, Craft</span>
            </h1>

            <p class="font-sans text-sm sm:text-base text-stone-600 dark:text-stone-400 max-w-2xl leading-relaxed">
                Jejak digital dan riwayat penulisan kode saya di dunia open source melalui GitHub. Setiap blok merefleksikan proses belajar dan iterasi tiada henti.
            </p>
        </header>

        <!-- MAIN GITHUB CONTRIBUTION CHART & ACTIVITY SUITE -->
        <div class="animate-enter relative" style="animation-delay: 0.2s;">
            <div class="glass-card rounded-3xl p-6 sm:p-10 border shadow-2xl relative overflow-hidden">
                
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
                                <h2 class="font-serif text-xl sm:text-2xl font-bold uppercase text-stone-900 dark:text-white">
                                    GitHub Contributions &amp; Live Tracks
                                </h2>
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
                                <h3 class="font-serif text-base sm:text-lg font-bold uppercase text-stone-900 dark:text-white">
                                    Recent Git Activity Stream
                                </h3>
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
                            <h3 class="font-serif text-base sm:text-lg font-bold uppercase text-stone-900 dark:text-white">
                                Tech Breakdown &amp; Velocity
                            </h3>
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
        </div>

        <!-- 3 PILLARS / WORK TRAITS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10 animate-enter" style="animation-delay: 0.3s;">
            
            <div class="glass-card p-7 rounded-3xl border flex flex-col justify-between group">
                <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center mb-6 text-amber-700 dark:text-amber-300 border group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div>
                    <h3 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">
                        Relentless Consistency
                    </h3>
                    <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Mendedikasikan waktu secara rutin untuk mengasah pemahaman algoritma dan arsitektur web modern.
                    </p>
                </div>
            </div>

            <div class="glass-card p-7 rounded-3xl border flex flex-col justify-between group">
                <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center mb-6 text-amber-700 dark:text-amber-300 border group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div>
                    <h3 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">
                        Production Focused
                    </h3>
                    <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Fokus pada stabilitas sistem nyata, optimasi query database, dan kesiapan rilis produksi.
                    </p>
                </div>
            </div>

            <div class="glass-card p-7 rounded-3xl border flex flex-col justify-between group">
                <div class="w-12 h-12 rounded-2xl glass-pill flex items-center justify-center mb-6 text-amber-700 dark:text-amber-300 border group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div>
                    <h3 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">
                        Continuous Growth
                    </h3>
                    <p class="font-sans text-xs sm:text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Selalu memperbarui pengetahuan dengan framework dan standar keamanan industri termutakhir.
                    </p>
                </div>
            </div>

        </div>

    </div>
</x-layout>