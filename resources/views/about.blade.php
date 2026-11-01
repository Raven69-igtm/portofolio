<x-layout>
    <x-slot:title>About Me — Abiyyuza</x-slot:title>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 sm:pt-32 pb-16">
        
        <!-- EDITORIAL HEADER -->
        <header class="mb-12 animate-enter" style="animation-delay: 0.1s;">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full glass-pill border text-[11px] font-bold tracking-widest uppercase text-amber-700 dark:text-amber-300 mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                Craftsman Biography
            </div>

            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-normal tracking-tight uppercase text-stone-900 dark:text-white leading-tight mb-4">
                Biography &amp; Expertise <br>
                <span class="italic font-light opacity-80 text-stone-600 dark:text-stone-300">— The Artisan Behind The Code</span>
            </h1>

            <p class="font-sans text-sm sm:text-base text-stone-600 dark:text-stone-400 max-w-2xl leading-relaxed">
                Pengembang perangkat lunak Fullstack yang menggabungkan ketelitian logika backend dengan estetika visual tingkat tinggi.
            </p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
            
            <!-- LEFT 7 COLUMNS: BIO & TECHNICAL PROFICIENCY -->
            <div class="lg:col-span-7 space-y-8">
                
                <!-- BIO CARD WITH INTERACTIVE PHYSICS LANYARD PASS -->
                <div class="glass-card rounded-3xl p-6 sm:p-8 border animate-enter relative overflow-hidden" style="animation-delay: 0.2s;">
                    
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

                <!-- PROFICIENCY CARD -->
                <div class="glass-card rounded-3xl p-6 sm:p-8 border animate-enter" style="animation-delay: 0.3s;">
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

            <!-- RIGHT 5 COLUMNS: SERVICES & ACTION CARD -->
            <div class="lg:col-span-5 space-y-8 animate-enter" style="animation-delay: 0.3s;">
                
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

                <!-- CTA CARD -->
                <div class="glass-card rounded-3xl p-6 sm:p-8 border text-center flex flex-col items-center">
                    <span class="w-3 h-3 rounded-full bg-emerald-500 animate-ping mb-3"></span>
                    <h4 class="font-serif text-xl font-bold uppercase text-stone-900 dark:text-white mb-2">
                        Open for Opportunities
                    </h4>
                    <p class="text-xs text-stone-500 dark:text-stone-400 max-w-xs mb-6">
                        Tersedia untuk proyek freelance, kontrak kolaborasi, atau posisi full-time.
                    </p>

                    <a href="https://wa.me/6283116084432" target="_blank"
                       class="w-full py-3.5 rounded-full text-xs font-bold tracking-widest uppercase transition-all duration-300 shadow-lg transform hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2
                              bg-stone-900 text-white hover:bg-stone-800 dark:bg-amber-400 dark:text-stone-950 dark:hover:bg-amber-300">
                        <span>Initiate Dialogue</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>

        </div>

    </div>

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