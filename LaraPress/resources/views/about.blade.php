<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami — LaraPress</title>
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
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-cyan-500 selection:text-white">

    <!-- Background Decorative Glow -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-gradient-to-br from-indigo-600/20 via-cyan-600/10 to-transparent blur-3xl -z-10 pointer-events-none"></div>

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
                <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors">Utama</a>
                <a href="{{ route('about') }}" class="text-cyan-400 font-semibold">Tentang Kami</a>
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

    <!-- MAIN CONTENT -->
    <main class="max-w-6xl mx-auto px-6 py-16 flex-1 w-full">
        
        <!-- Header Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h1 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight mb-4">
                Tentang <span class="bg-gradient-to-r from-cyan-400 to-indigo-400 bg-clip-text text-transparent">LaraPress</span>
            </h1>
            <p class="text-slate-400 text-base md:text-lg leading-relaxed">
                Proyek aplikasi web yang dikembangkan sebagai media pembelajaran praktikum Pemrograman Berbasis Web untuk menguasai fondasi framework Laravel.
            </p>
        </div>

        <!-- Section 1: Overview Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            
            <!-- Card 1: Visi & Tujuan -->
            <div class="p-8 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 mb-6 font-bold text-xl">
                        🎯
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Tujuan Pengembangan</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        Aplikasi ini dirancang untuk mendemonstrasikan implementasi arsitektur Model-View-Controller (MVC), konsep HTTP Request Life Cycle, pendefinisian rute di Laravel 13, serta mekanisme Autentikasi pengguna menggunakan Laravel Breeze.
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-800/60 flex items-center gap-2 text-xs text-cyan-400 font-semibold">
                    <span>Praktikum Pemrograman Berbasis Web</span>
                </div>
            </div>

            <!-- Card 2: Tech Stack -->
            <div class="p-8 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 mb-6 font-bold text-xl">
                        ⚡
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Teknologi yang Digunakan</h3>
                    <div class="grid grid-cols-2 gap-3 text-xs font-medium text-slate-300">
                        <div class="p-3 rounded-lg bg-slate-950 border border-slate-800 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-red-500"></span> Laravel 12
                        </div>
                        <div class="p-3 rounded-lg bg-slate-950 border border-slate-800 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-blue-500"></span> PHP 8.3+
                        </div>
                        <div class="p-3 rounded-lg bg-slate-950 border border-slate-800 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-cyan-400"></span> Tailwind CSS
                        </div>
                        <div class="p-3 rounded-lg bg-slate-950 border border-slate-800 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-purple-400"></span> Laravel Breeze
                        </div>
                    </div>
                </div>
                <div class="pt-4 border-t border-slate-800/60 flex items-center gap-2 text-xs text-slate-400">
                    <span>Environment: Laragon / XAMPP Server</span>
                </div>
            </div>

        </div>

        <!-- Section 2: Profil Singkat Pengembang -->
        <div class="p-8 rounded-2xl bg-gradient-to-r from-slate-900 via-slate-900/80 to-slate-900/40 border border-slate-800/80 mb-12 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-cyan-500 to-indigo-500 flex items-center justify-center font-extrabold text-slate-950 text-2xl shadow-lg shadow-cyan-500/20 shrink-0">
                    RA
                </div>
                <div>
                    <h4 class="text-lg font-bold text-white">Railene Akbillah Ramadhan Haryanto</h4>
                    <p class="text-sm text-cyan-400 font-medium">NPM: 4524210081</p>
                    <p class="text-xs text-slate-400 mt-1">Program Studi Teknik Informatika — Universitas Pancasila</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 border border-slate-700 hover:border-slate-600 text-white text-xs font-semibold transition-all">
                    Hubungi Saya
                </a>
            </div>
        </div>

        <!-- Navigation Action Buttons -->
        <div class="flex items-center justify-between pt-6 border-t border-slate-800/80">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-cyan-400 transition-colors">
                ← Kembali ke Halaman Utama
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-cyan-400 hover:underline">
                Halaman Kontak →
            </a>
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