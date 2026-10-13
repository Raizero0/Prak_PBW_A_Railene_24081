<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraPress — Modern Web App</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            500: '#06b6d4',
                            600: '#0284c7',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-cyan-500 selection:text-white">

    <!-- Background Decorative Glow -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-gradient-to-br from-cyan-600/20 via-indigo-600/10 to-transparent blur-3xl -z-10 pointer-events-none"></div>

    <!-- NAVBAR -->
    <header class="border-b border-slate-800/80 backdrop-blur-md sticky top-0 z-50 bg-slate-950/80">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-indigo-500 flex items-center justify-center font-extrabold text-white text-xl shadow-lg shadow-cyan-500/20 group-hover:scale-105 transition-transform">
                    L
                </div>
                <span class="text-xl font-bold tracking-tight text-white group-hover:text-cyan-400 transition-colors">
                    Lara<span class="text-cyan-400">Press</span>
                </span>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="{{ route('about') }}" class="hover:text-cyan-400 transition-colors">Tentang Kami</a>
                <a href="{{ route('contact') }}" class="hover:text-cyan-400 transition-colors">Hubungi Kami</a>
            </nav>

            <!-- Auth Buttons -->
            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 rounded-xl bg-cyan-500 text-slate-950 font-semibold text-sm hover:bg-cyan-400 shadow-md shadow-cyan-500/20 transition-all hover:scale-[1.02]">
                            Dashboard Admin
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-300 hover:text-white transition-colors">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-500 text-white font-semibold text-sm hover:opacity-95 shadow-md shadow-cyan-500/20 transition-all hover:scale-[1.02]">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <main class="max-w-6xl mx-auto px-6 py-20 flex-1 flex flex-col justify-center items-center text-center">
        
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-semibold mb-8">
            <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
            Praktikum Pemrograman Berbasis Web
        </div>

        <!-- Heading -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight leading-tight max-w-4xl mb-6">
            Selamat Datang di Portal <br>
            <span class="bg-gradient-to-r from-cyan-400 via-teal-300 to-indigo-400 bg-clip-text text-transparent">
                Blog LaraPress
            </span>
        </h1>

        <p class="text-slate-400 text-lg md:text-xl max-w-2xl mb-10 leading-relaxed">
            Platform blog modern yang dibangun menggunakan framework Laravel 12 dengan arsitektur MVC yang bersih, fleksibel, dan terintegrasi dengan autentikasi Breeze.
        </p>

        <!-- CTA Action Buttons -->
        <div class="flex flex-col items-center gap-4">
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('about') }}" class="px-6 py-3.5 rounded-xl bg-cyan-500 text-slate-950 font-bold text-sm hover:bg-cyan-400 shadow-lg shadow-cyan-500/25 transition-all hover:-translate-y-0.5">
                    Jelajahi tentang Kami
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-200 font-semibold text-sm hover:border-slate-700 hover:text-white transition-all hover:-translate-y-0.5">
                    Hubungi Pengembang
                </a>
            </div>

            <!-- GitHub Link -->
            <a href="https://github.com/Raizero0/Prak_PBW_A_Railene_24081" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 px-6 py-3 rounded-xl bg-slate-900/90 border border-slate-800 hover:border-cyan-500/50 text-slate-300 hover:text-cyan-400 text-sm font-semibold transition-all hover:-translate-y-0.5 shadow-md">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                </svg>
                <span>GitHub Repository: Prak_PBW_A_Railene_24081</span>
            </a>
        </div>

        <!-- Highlight Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-20 w-full text-left">
            <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm">
                <div class="w-10 h-10 rounded-lg bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-4 font-bold">
                    01
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Arsitektur MVC</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Pemisahan logika backend, manajemen rute, dan tampilan antarmuka yang rapi.</p>
            </div>

            <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm">
                <div class="w-10 h-10 rounded-lg bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 mb-4 font-bold">
                    02
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Autentikasi Breeze</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Keamanan login, registrasi, password hashing, dan manajemen sesi pengguna.</p>
            </div>

            <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm">
                <div class="w-10 h-10 rounded-lg bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 mb-4 font-bold">
                    03
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Blade Templating</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Penyajian halaman web responsif dengan struktur template Blade yang modular.</p>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="border-t border-slate-900 py-8 bg-slate-950/90">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>&copy; 2026 LaraPress. Dibuat untuk Praktikum Pemrograman Berbasis Web.</p>
            <div class="flex items-center gap-6">
                <a href="{{ route('home') }}" class="hover:text-slate-300 transition-colors">Utama</a>
                <a href="{{ route('about') }}" class="hover:text-slate-300 transition-colors">Tentang</a>
                <a href="{{ route('contact') }}" class="hover:text-slate-300 transition-colors">Kontak</a>
            </div>
        </div>
    </footer>

</body>
</html>