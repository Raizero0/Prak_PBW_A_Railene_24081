@extends('layouts.app')

@section('title', 'Portal Resmi SMP Mentari')

@section('content')
<div class="min-h-screen bg-slate-50 text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white">

    <!-- HERO SECTION -->
    <section class="py-16 bg-white border-b border-slate-200/80">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Headline & Description -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    Portal Resmi SMP Mentari Ceria
                </div>

                <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Pendidikan Unggul, <br>
                    <span class="text-blue-600">Masa Depan Cerah</span>
                </h1>

                <p class="text-slate-600 text-base sm:text-lg leading-relaxed max-w-xl">
                    Selamat datang di situs portal resmi SMP Mentari. Wadah transparansi informasi sekolah, publikasi kegiatan siswa, dan layanan interaksi buku tamu digital.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ route('bukutamu.index') }}" class="px-6 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm shadow-md shadow-blue-600/20 transition-all hover:-translate-y-0.5 flex items-center gap-2">
                        <span>✏️ Tulis Buku Tamu</span>
                        <span>→</span>
                    </a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="px-6 py-3.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-sm transition-all border border-slate-200">
                            ⚙️ Dashboard Admin
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-6 py-3.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-sm transition-all border border-slate-200">
                            🔑 Login Pengurus
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Right Column: Minimalist Layered 3D Card -->
            <div class="lg:col-span-5 relative">
                <!-- 3D Layer Backdrop Shadow -->
                <div class="absolute inset-0 bg-blue-100/80 rounded-3xl transform rotate-2 scale-95 transition-all"></div>
                
                <div class="relative p-8 rounded-3xl bg-white border border-slate-200 shadow-xl shadow-slate-200/60 hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center text-white text-xl font-black shadow-md shadow-blue-600/30">
                            M
                        </div>
                        <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-bold">
                            Akreditasi A
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-2">
                        SMP Mentari Ceria
                    </h3>
                    <p class="text-slate-500 text-xs leading-relaxed mb-6">
                        Menyelenggarakan pendidikan berbasis karakter, pengembangan potensi siswa, serta pembentukan akhlak mulia di lingkungan belajar yang nyaman.
                    </p>

                    <div class="grid grid-cols-2 gap-3 pt-4 border-t border-slate-100 text-left">
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                            <span class="text-[10px] text-slate-400 font-bold uppercase block">Kurikulum</span>
                            <span class="text-xs font-bold text-slate-800">Merdeka Belajar</span>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                            <span class="text-[10px] text-slate-400 font-bold uppercase block">Status Portal</span>
                            <span class="text-xs font-bold text-emerald-600">Aktif & Terhubung</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- QUICK STATS SECTION -->
    <section class="max-w-6xl mx-auto px-6 -mt-6 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="p-5 rounded-2xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <p class="text-xs font-medium text-slate-500">Standar Mutu</p>
                <p class="text-lg font-bold text-slate-900 mt-0.5">Akreditasi Unggul</p>
            </div>
            <div class="p-5 rounded-2xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <p class="text-xs font-medium text-slate-500">Total Kegiatan</p>
                <p class="text-lg font-bold text-blue-600 mt-0.5">{{ isset($kegiatan_terbaru) ? $kegiatan_terbaru->total() : 0 }} Berita</p>
            </div>
            <div class="p-5 rounded-2xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <p class="text-xs font-medium text-slate-500">Sistem Belajar</p>
                <p class="text-lg font-bold text-slate-900 mt-0.5">Kurikulum Merdeka</p>
            </div>
            <div class="p-5 rounded-2xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <p class="text-xs font-medium text-slate-500">Layanan Publik</p>
                <p class="text-lg font-bold text-emerald-600 mt-0.5">Buku Tamu Aktif</p>
            </div>
        </div>
    </section>

    <!-- KEGIATAN TERBARU SECTION -->
    <section class="max-w-6xl mx-auto px-6 py-16">
        <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-200">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider block mb-1">Informasi Publik</span>
                <h2 class="text-2xl font-bold text-slate-900">Kegiatan Terbaru Sekolah</h2>
            </div>
            <a href="{{ route('bukutamu.index') }}" class="text-xs font-bold text-blue-600 hover:underline">
                Lihat Buku Tamu →
            </a>
        </div>

        @if(isset($kegiatan_terbaru) && $kegiatan_terbaru->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                @foreach ($kegiatan_terbaru as $kegiatan)
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-lg hover:shadow-slate-200/60 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="w-10 h-10 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-base font-bold">
                                    📌
                                </span>
                                <span class="text-xs text-slate-400 font-medium">
                                    {{ $kegiatan->created_at->format('d M Y') }}
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors leading-snug">
                                {{ $kegiatan->judul }}
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6">
                                {{ Str::limit($kegiatan->deskripsi, 120) }}
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-slate-400">
                            <span>SMP Mentari</span>
                            <span class="text-blue-600 group-hover:translate-x-1 transition-transform">Detail →</span>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($kegiatan_terbaru->hasPages())
                <div class="mt-8 flex justify-center">
                    {{ $kegiatan_terbaru->links() }}
                </div>
            @endif
        @else
            <!-- Clean Empty State -->
            <div class="p-12 rounded-3xl bg-white border border-slate-200 text-center max-w-xl mx-auto shadow-sm">
                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 text-2xl font-bold flex items-center justify-center mx-auto mb-4">
                    📋
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-1">Belum Ada Kegiatan Terpublikasi</h3>
                <p class="text-slate-500 text-xs leading-relaxed max-w-md mx-auto mb-6">
                    Pengurus dapat masuk ke Panel Admin untuk menambahkan agenda kegiatan sekolah terbaru.
                </p>
                @auth
                    <a href="{{ route('kegiatan.create') }}" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs shadow-md transition-all inline-block">
                        + Tambah Kegiatan Baru
                    </a>
                @else
                    <a href="{{ route('bukutamu.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs border border-slate-200 transition-all inline-block">
                        Isi Buku Tamu
                    </a>
                @endauth
            </div>
        @endif
    </section>

</div>
@endsection