<!DOCTYPE html>
<html lang="en" 
      x-data="{ 
          theme: localStorage.getItem('portfolio_theme') || 'light',
          mobileMenu: false,
          activeSection: 'overview',
          mouseX: 0,
          mouseY: 0,
          calcParallax(e) {
              this.mouseX = ((e.clientX / window.innerWidth) - 0.5) * 8;
              this.mouseY = ((e.clientY / window.innerHeight) - 0.5) * 8;
          },
          resetParallax() {
              this.mouseX = 0;
              this.mouseY = 0;
          },
          toggleTheme() {
              this.theme = this.theme === 'dark' ? 'light' : 'dark';
              localStorage.setItem('portfolio_theme', this.theme);
              document.documentElement.classList.toggle('dark', this.theme === 'dark');
              document.documentElement.classList.toggle('light', this.theme !== 'dark');
          },
          scrollToSection(id) {
              this.activeSection = id;
              const el = document.getElementById(id);
              if (el) {
                  const offset = 80;
                  const bodyRect = document.body.getBoundingClientRect().top;
                  const elementRect = el.getBoundingClientRect().top;
                  const elementPosition = elementRect - bodyRect;
                  const offsetPosition = elementPosition - offset;
                  window.scrollTo({
                      top: offsetPosition,
                      behavior: 'smooth'
                  });
              } else {
                  window.location.href = '/#' + id;
              }
          },
          initScrollSpy() {
              const sections = ['overview', 'activity', 'certificates', 'about', 'contact'];
              const updateActive = () => {
                  const scrollPosition = window.scrollY + 220;
                  for (let i = sections.length - 1; i >= 0; i--) {
                      const el = document.getElementById(sections[i]);
                      if (el && el.offsetTop <= scrollPosition) {
                          this.activeSection = sections[i];
                          break;
                      }
                  }
              };
              window.addEventListener('scroll', updateActive, { passive: true });
              setTimeout(updateActive, 100);
          }
      }" 
      x-init="initScrollSpy()"
      :class="theme === 'dark' ? 'dark' : 'light'" 
      class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Abiyyuza' }}</title>
    
    <!-- Inline script to eliminate theme flash -->
    <script>
        (function() {
            var saved = localStorage.getItem('portfolio_theme') || 'light';
            document.documentElement.classList.toggle('dark', saved === 'dark');
            document.documentElement.classList.toggle('light', saved !== 'dark');
        })();
    </script>

    <!-- Google Fonts: Cormorant Garamond, Cinzel, Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        display: ['"Cinzel"', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        imperial: {
                            50: '#FAF8F5',
                            100: '#F5F1E9',
                            200: '#EAE1D2',
                            300: '#DCB862',
                            400: '#C5A059',
                            500: '#B58D3D',
                            600: '#98732E',
                            700: '#7B5B24',
                            800: '#543D17',
                            900: '#2A1D0B',
                        },
                        obsidian: {
                            950: '#07080A',
                            900: '#0B0D12',
                            850: '#111319',
                            800: '#171A23',
                            700: '#232736',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Base typography & aesthetics */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        /* Light Mode Theme */
        html.light body {
            background-color: #DED4CF;
            background-image: 
                radial-gradient(circle at 50% 12%, rgba(212, 175, 55, 0.12) 0%, transparent 45%),
                radial-gradient(circle at 15% 45%, rgba(197, 160, 89, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 85% 65%, rgba(212, 175, 55, 0.08) 0%, transparent 40%);
            color: #171719;
        }

        /* Dark Mode Theme */
        html.dark body {
            background-color: #161617;
            background-image: 
                radial-gradient(circle at 50% 12%, rgba(197, 160, 89, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 10% 50%, rgba(30, 36, 50, 0.4) 0%, transparent 45%),
                radial-gradient(circle at 90% 70%, rgba(197, 160, 89, 0.08) 0%, transparent 45%);
            color: #EDEDED;
        }

        /* Scrollbar aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        html.light ::-webkit-scrollbar-track {
            background: #EFECE6;
        }
        html.light ::-webkit-scrollbar-thumb {
            background: #D2C8B5;
            border-radius: 9999px;
        }
        html.dark ::-webkit-scrollbar-track {
            background: #0B0D12;
        }
        html.dark ::-webkit-scrollbar-thumb {
            background: #232736;
            border-radius: 9999px;
        }

        /* Keyframes & Animations */
        @keyframes floatLevitate {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-12px) rotate(0.4deg);
            }
        }
        .animate-levitate {
            animation: floatLevitate 7s ease-in-out infinite;
        }

        @keyframes haloPulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.75;
                filter: drop-shadow(0 0 25px rgba(212, 175, 55, 0.6));
            }
            50% {
                transform: scale(1.05);
                opacity: 1;
                filter: drop-shadow(0 0 45px rgba(212, 175, 55, 0.95));
            }
        }
        .animate-halo {
            animation: haloPulse 5s ease-in-out infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee-smooth {
            display: flex;
            width: max-content;
            animation: marquee 35s linear infinite;
        }
        .animate-marquee-smooth:hover {
            animation-play-state: paused;
        }

        /* Fade-in-up staggered entrance */
        @keyframes fadeInUpImperial {
            from {
                opacity: 0;
                transform: translateY(24px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-enter {
            animation: fadeInUpImperial 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }

        /* Glassmorphism helpers */
        .glass-pill {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        html.light .glass-pill {
            background: rgba(255, 255, 255, 0.65);
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
        }
        html.dark .glass-pill {
            background: rgba(15, 17, 23, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 15px 35px -10px rgba(0, 0, 0, 0.6);
        }

        .glass-card {
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        html.light .glass-card {
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.07);
            box-shadow: 0 20px 40px -15px rgba(181, 141, 61, 0.08), 0 1px 3px rgba(0, 0, 0, 0.04);
        }
        html.dark .glass-card {
            background: rgba(14, 16, 22, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.09);
            box-shadow: 0 25px 50px -15px rgba(0, 0, 0, 0.8), 0 0 20px rgba(197, 160, 89, 0.04);
        }
        .glass-card:hover {
            transform: translateY(-4px);
        }
        html.light .glass-card:hover {
            border-color: rgba(197, 160, 89, 0.35);
            box-shadow: 0 25px 45px -15px rgba(181, 141, 61, 0.2);
        }
        html.dark .glass-card:hover {
            border-color: rgba(197, 160, 89, 0.4);
            box-shadow: 0 25px 55px -15px rgba(0, 0, 0, 0.9), 0 0 30px rgba(197, 160, 89, 0.12);
        }

        /* Hero Art Dual Mode Rules */
        .hero-art-light {
            opacity: 1;
            transform: scale(1);
            transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
        }
        html.dark .hero-art-light {
            opacity: 0;
            transform: scale(0.98);
            pointer-events: none;
        }
        .hero-art-dark {
            opacity: 0;
            transform: scale(0.98);
            pointer-events: none;
            transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
        }
        html.dark .hero-art-dark {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }
    </style>

    @livewireStyles
</head>
<body class="min-h-screen flex flex-col relative selection:bg-amber-400/30 selection:text-amber-800 dark:selection:text-amber-200"
      @mousemove="calcParallax($event)" 
      @mouseleave="resetParallax()">

    <!-- GLOBAL ETHEREAL LUXURY BACKGROUND (ENTIRE WEBSITE - DUAL LIGHT/DARK) -->
    <div class="fixed inset-0 w-full h-full overflow-hidden pointer-events-none z-0">
        
        <!-- CELESTIAL BACKLIGHT AURA -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="w-[600px] sm:w-[900px] h-[600px] sm:h-[900px] rounded-full 
                        bg-amber-400/20 dark:bg-amber-300/10 blur-[130px] animate-halo"></div>
        </div>

        <!-- THE GLOBAL VISUAL CANVAS (100% COVER NO BARS) -->
        <div class="relative w-full h-full flex items-center justify-center transition-transform duration-700 ease-out animate-levitate"
             :style="`transform: perspective(1200px) rotateY(${mouseX}deg) rotateX(${-mouseY}deg) scale(1.03)`">
            
            <!-- LIGHT MODE BACKGROUND (ANGEL DENGAN SAYAP BESAR SPREADING OUT) -->
            <img src="{{ asset('image/light_mode.png') }}" 
                 alt="Imperial Celestial Angel Light Mode" 
                 class="hero-art-light absolute inset-0 w-full h-full object-cover object-center pointer-events-none select-none drop-shadow-2xl">

            <!-- DARK MODE BACKGROUND (OBSIDIAN QUEEN) -->
            <img src="{{ asset('image/dark_mode.png') }}" 
                 alt="Imperial Shadow Queen Dark Mode" 
                 class="hero-art-dark absolute inset-0 w-full h-full object-cover object-center pointer-events-none select-none drop-shadow-2xl">
        </div>

        <!-- ETHEREAL LUXURY TINT OVERLAY FOR MAXIMUM LEGIBILITY & ELEGANCE -->
        <div class="fixed inset-0 bg-[#DED4CF]/15 dark:bg-[#161617]/35 pointer-events-none"></div>
    </div>

    <!-- TOP FLOATING HEADER / NAVBAR -->
    <header class="fixed top-0 left-0 right-0 z-50 pt-4 sm:pt-6 px-4 sm:px-6 pointer-events-none">
        <div class="max-w-7xl mx-auto flex items-center justify-between pointer-events-auto">
            
            <!-- BRAND LOGO -->
            <a href="{{ route('dashboard') }}" wire:navigate class="group flex items-center gap-3">
                <div class="w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-300
                            bg-white/80 dark:bg-obsidian-900/80 border-black/10 dark:border-white/10 group-hover:border-amber-500/50 shadow-sm">
                    <!-- Imperial Wing / Crown Monogram -->
                    <svg class="w-5 h-5 text-stone-900 dark:text-amber-200 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L15 8L21 9L16.5 13.5L18 20L12 16.5L6 20L7.5 13.5L3 9L9 8L12 2Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="12" cy="12" r="2" fill="currentColor" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-extrabold text-sm tracking-[0.25em] text-stone-900 dark:text-white uppercase transition-colors group-hover:text-amber-600 dark:group-hover:text-amber-400">
                        ABIYYUZA
                    </span>
                    <span class="font-sans text-[9px] tracking-[0.3em] font-semibold text-stone-500 dark:text-stone-400 uppercase -mt-0.5">
                    </span>
                </div>
            </a>

            <!-- FLOATING PILL NAVIGATION (CENTER - SCROLLSPY AWARE) -->
            <nav class="hidden md:flex items-center gap-1.5 px-3 py-1.5 rounded-full glass-pill border transition-all duration-300">
                <a href="#overview" 
                   @click.prevent="scrollToSection('overview')"
                   class="px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase transition-all duration-300 cursor-pointer"
                   :class="activeSection === 'overview' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 shadow-sm' : 'text-stone-600 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/5'">
                    OVERVIEW
                </a>
                <a href="#activity" 
                   @click.prevent="scrollToSection('activity')"
                   class="px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase transition-all duration-300 cursor-pointer"
                   :class="activeSection === 'activity' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 shadow-sm' : 'text-stone-600 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/5'">
                    ACTIVITY
                </a>
                <a href="#certificates" 
                   @click.prevent="scrollToSection('certificates')"
                   class="px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase transition-all duration-300 cursor-pointer"
                   :class="activeSection === 'certificates' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 shadow-sm' : 'text-stone-600 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/5'">
                    CERTIFICATES
                </a>
                <a href="#about" 
                   @click.prevent="scrollToSection('about')"
                   class="px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase transition-all duration-300 cursor-pointer"
                   :class="activeSection === 'about' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 shadow-sm' : 'text-stone-600 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/5'">
                    ABOUT
                </a>
                <a href="#contact" 
                   @click.prevent="scrollToSection('contact')"
                   class="px-4 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase transition-all duration-300 cursor-pointer"
                   :class="activeSection === 'contact' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 shadow-sm' : 'text-stone-600 dark:text-stone-300 hover:text-stone-900 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/5'">
                    CONTACT
                </a>
            </nav>

            <!-- RIGHT ACTIONS: THEME TOGGLE + CONTACT BUTTON -->
            <div class="flex items-center gap-3">
                
                <!-- DUAL THEME TOGGLE BUTTON -->
                <button @click="toggleTheme()" 
                        type="button"
                        aria-label="Toggle Theme"
                        title="Toggle Light / Dark Imperial Theme"
                        class="w-10 h-10 rounded-full flex items-center justify-center glass-pill border transition-all duration-500 hover:scale-105 active:scale-95 group">
                    <!-- Sun Icon (shown in dark mode) -->
                    <template x-if="theme === 'dark'">
                        <svg class="w-4 h-4 text-amber-300 group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </template>
                    <!-- Moon Icon (shown in light mode) -->
                    <template x-if="theme !== 'dark'">
                        <svg class="w-4 h-4 text-stone-700 group-hover:-rotate-45 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </template>
                </button>

                <!-- ARROW ACTION ICON -->
                <a href="#contact" 
                   @click.prevent="scrollToSection('contact')"
                   class="hidden sm:flex w-10 h-10 rounded-full items-center justify-center glass-pill border transition-all duration-300 hover:scale-105 active:scale-95 group text-stone-800 dark:text-stone-200 cursor-pointer">
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17" />
                    </svg>
                </a>

                <!-- CONTACT US PILL BUTTON -->
                <a href="#contact" 
                   @click.prevent="scrollToSection('contact')"
                   class="px-5 py-2.5 rounded-full text-xs font-bold tracking-wider uppercase transition-all duration-300 shadow-md transform hover:scale-105 active:scale-95 flex items-center gap-2 cursor-pointer
                          bg-stone-900 text-white hover:bg-stone-800 dark:bg-white dark:text-stone-950 dark:hover:bg-stone-200">
                    <span>LET'S TALK</span>
                </a>

                <!-- MOBILE HAMBURGER BUTTON -->
                <button @click="mobileMenu = !mobileMenu" 
                        class="md:hidden w-10 h-10 rounded-full flex items-center justify-center glass-pill border text-stone-800 dark:text-stone-200">
                    <svg x-show="!mobileMenu" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg x-show="mobileMenu" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

            </div>
        </div>

        <!-- MOBILE MENU OVERLAY & DRAWER -->
        <div x-show="mobileMenu" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden mt-3 max-w-7xl mx-auto pointer-events-auto">
            <div class="rounded-3xl glass-card p-6 flex flex-col gap-3 border shadow-2xl">
                <a href="#overview" @click.prevent="scrollToSection('overview'); mobileMenu = false" class="px-4 py-2.5 rounded-xl font-display text-sm tracking-wider uppercase cursor-pointer" :class="activeSection === 'overview' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 font-bold' : 'text-stone-700 dark:text-stone-300'">Overview</a>
                <a href="#activity" @click.prevent="scrollToSection('activity'); mobileMenu = false" class="px-4 py-2.5 rounded-xl font-display text-sm tracking-wider uppercase cursor-pointer" :class="activeSection === 'activity' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 font-bold' : 'text-stone-700 dark:text-stone-300'">Activity & Code</a>
                <a href="#certificates" @click.prevent="scrollToSection('certificates'); mobileMenu = false" class="px-4 py-2.5 rounded-xl font-display text-sm tracking-wider uppercase cursor-pointer" :class="activeSection === 'certificates' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 font-bold' : 'text-stone-700 dark:text-stone-300'">Certificates</a>
                <a href="#about" @click.prevent="scrollToSection('about'); mobileMenu = false" class="px-4 py-2.5 rounded-xl font-display text-sm tracking-wider uppercase cursor-pointer" :class="activeSection === 'about' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 font-bold' : 'text-stone-700 dark:text-stone-300'">About Me</a>
                <a href="#contact" @click.prevent="scrollToSection('contact'); mobileMenu = false" class="px-4 py-2.5 rounded-xl font-display text-sm tracking-wider uppercase cursor-pointer" :class="activeSection === 'contact' ? 'bg-stone-900 text-white dark:bg-white dark:text-stone-900 font-bold' : 'text-stone-700 dark:text-stone-300'">Contact</a>
            </div>
        </div>
    </header>

    <!-- MAIN PAGE CONTENT -->
    <main class="flex-1 w-full relative z-10">
        {{ $slot }}
    </main>

    <!-- ELEGANT IMPERIAL FOOTER -->
    <footer class="mt-20 border-t border-black/5 dark:border-white/5 py-12 px-6 relative z-10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <span class="font-display tracking-[0.25em] text-xs font-bold uppercase text-stone-900 dark:text-white">ABIYYUZA</span>
                <span class="text-stone-400 dark:text-stone-600">/</span>
                <span class="text-xs text-stone-500 dark:text-stone-400">Neoclassical Fullstack Architecture</span>
            </div>

            <div class="flex items-center gap-6 text-xs text-stone-500 dark:text-stone-400">
                <a href="https://github.com/Raven69-igtm" target="_blank" class="hover:text-amber-600 dark:hover:text-amber-400 transition-colors">GitHub</a>
                <a href="https://wa.me/6283116084432" target="_blank" class="hover:text-amber-600 dark:hover:text-amber-400 transition-colors">WhatsApp</a>
                <a href="mailto:contactabiyyuza@gmail.com" class="hover:text-amber-600 dark:hover:text-amber-400 transition-colors">Email</a>
            </div>

            <p class="text-[11px] text-stone-400 dark:text-stone-600 font-mono">
                © {{ date('Y') }} Abiyyuza. Crafted with Laravel 12 & Livewire.
            </p>
        </div>
    </footer>

    @livewireScripts
</body>
</html>