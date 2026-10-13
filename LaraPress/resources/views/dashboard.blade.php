<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-extrabold text-2xl text-white tracking-tight">
                Dashboard Panel
            </h2>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-semibold">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span> Sesi Aktif
            </div>
        </div>
    </x-slot>

    <div class="space-y-8">
        <!-- Welcome Hero Card -->
        <div class="p-8 rounded-2xl bg-gradient-to-r from-slate-900 via-slate-900/90 to-cyan-950/40 border border-slate-800/80 shadow-2xl relative overflow-hidden">
            <div class="relative z-10">
                <h3 class="text-2xl md:text-3xl font-extrabold text-white mb-2">
                    Selamat Datang Kembali, <span class="bg-gradient-to-r from-cyan-400 to-indigo-400 bg-clip-text text-transparent">{{ Auth::user()->name }}</span>! 👋
                </h3>
                <p class="text-slate-400 text-sm max-w-2xl leading-relaxed">
                    Anda telah berhasil masuk ke portal administrator LaraPress. Sistem autentikasi berbasis Laravel Breeze dan Session Cookies berjalan dengan aman.
                </p>
            </div>
        </div>

        <!-- Info Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl bg-slate-900/80 border border-slate-800/80 backdrop-blur-xl">
                <div class="text-xs font-semibold text-slate-400 mb-1">Status Pengguna</div>
                <div class="text-xl font-bold text-white mb-1">Administrator</div>
                <div class="text-xs text-cyan-400 font-medium">Terverifikasi via Session</div>
            </div>

            <div class="p-6 rounded-2xl bg-slate-900/80 border border-slate-800/80 backdrop-blur-xl">
                <div class="text-xs font-semibold text-slate-400 mb-1">Email Terdaftar</div>
                <div class="text-lg font-bold text-white mb-1 truncate">{{ Auth::user()->email }}</div>
                <div class="text-xs text-indigo-400 font-medium">Akun Pengguna Utama</div>
            </div>

            <div class="p-6 rounded-2xl bg-slate-900/80 border border-slate-800/80 backdrop-blur-xl">
                <div class="text-xs font-semibold text-slate-400 mb-1">Stack Modul</div>
                <div class="text-xl font-bold text-emerald-400 mb-1">Laravel 12 + Breeze</div>
                <div class="text-xs text-emerald-400 font-medium">Pertemuan 4 Completed</div>
            </div>
        </div>

        <!-- Quick Actions Panel -->
        <div class="p-8 rounded-2xl bg-slate-900/80 border border-slate-800/80 backdrop-blur-xl">
            <h4 class="text-lg font-bold text-white mb-4">Akses Navigasi Cepat</h4>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <a href="{{ route('home') }}" class="p-4 rounded-xl bg-slate-950 border border-slate-800 hover:border-cyan-500/50 text-slate-200 hover:text-cyan-400 font-semibold text-sm transition-all flex items-center justify-between group">
                    <span>Halaman Utama Public</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
                <a href="{{ route('profile.edit') }}" class="p-4 rounded-xl bg-slate-950 border border-slate-800 hover:border-cyan-500/50 text-slate-200 hover:text-cyan-400 font-semibold text-sm transition-all flex items-center justify-between group">
                    <span>Pengaturan Profil</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
                <a href="https://github.com/Raizero0/Prak_PBW_A_Railene_24081" target="_blank" class="p-4 rounded-xl bg-slate-950 border border-slate-800 hover:border-cyan-500/50 text-slate-200 hover:text-cyan-400 font-semibold text-sm transition-all flex items-center justify-between group">
                    <span>Repository GitHub</span>
                    <span class="group-hover:translate-x-1 transition-transform">↗</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>