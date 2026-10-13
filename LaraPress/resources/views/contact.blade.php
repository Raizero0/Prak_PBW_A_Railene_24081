<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami — LaraPress</title>
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
                <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors">Utama</a>
                <a href="{{ route('about') }}" class="hover:text-cyan-400 transition-colors">Tentang Kami</a>
                <a href="{{ route('contact') }}" class="text-cyan-400 font-semibold">Hubungi Kami</a>
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
            <h1 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight mb-4">
                Hubungi <span class="bg-gradient-to-r from-cyan-400 to-indigo-400 bg-clip-text text-transparent">LaraPress</span>
            </h1>
            <p class="text-slate-400 text-base md:text-lg leading-relaxed">
                Punya pertanyaan mengenai proyek LaraPress atau diskusi seputar praktikum? Hubungi pengembang secara langsung lewat kontak di bawah.
            </p>
        </div>

        <!-- Contact Section Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            
            <!-- Sidebar: Information Cards -->
            <div class="space-y-6">
                
                <!-- Email Card -->
                <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-cyan-400 font-bold text-xl shrink-0">
                        ✉️
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white mb-1">Email Support</h4>
                        <p class="text-xs text-slate-400 mb-2">Pesan & Informasi</p>
                        <a href="mailto:support@larapress.local" class="text-sm font-semibold text-cyan-400 hover:underline">
                            railene01111@gmail.com
                        </a>
                    </div>
                </div>

                <!-- Location Card -->
                <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-sm flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 font-bold text-xl shrink-0">
                        📍
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white mb-1">Lokasi Kampus</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Program Studi Teknik Informatika<br>Universitas Pancasila, Jakarta
                        </p>
                    </div>
                </div>

            </div>

            <!-- Main WhatsApp Call-to-Action Card -->
            <div class="lg:col-span-2 p-8 rounded-2xl bg-gradient-to-br from-slate-900/90 via-slate-900/70 to-emerald-950/20 border border-slate-800/80 backdrop-blur-sm flex flex-col justify-between">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold mb-6">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Respons Cepat via WhatsApp
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Tanya & Diskusi Langsung</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">
                        Klik tombol di bawah untuk terhubung langsung ke WhatsApp pengembang. Pesan pembuka sudah disiapkan otomatis.
                    </p>
                </div>

                <div class="p-6 rounded-xl bg-slate-950/80 border border-slate-800/80 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400 text-2xl font-bold shrink-0">
                            💬
                        </div>
                        <div>
                            <p class="text-xs text-slate-400">Nomor WhatsApp</p>
                            <p class="text-base font-bold text-white">+62 896-5630-2791</p>
                        </div>
                    </div>

                    <a href="https://wa.me/6289656302791?text=Halo%20Railene,%20saya%20ingin%20bertanya%20seputar%20aplikasi%20LaraPress" target="_blank" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-extrabold text-sm shadow-lg shadow-emerald-500/25 transition-all hover:scale-[1.02] flex items-center justify-center gap-2">
                        <span>Chat via WhatsApp</span>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Navigation Action Buttons -->
        <div class="flex items-center justify-between pt-6 border-t border-slate-800/80">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-cyan-400 transition-colors">
                ← Kembali ke Halaman Utama
            </a>
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-cyan-400 hover:underline">
                Lihat Tentang Kami →
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