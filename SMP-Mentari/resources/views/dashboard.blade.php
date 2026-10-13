@extends('layouts.admin')

@section('admin_title', 'Dashboard Overview')

@section('admin_content')
    <div class="space-y-6">
        
        <!-- Welcome Card -->
        <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm relative overflow-hidden">
            <div class="max-w-xl space-y-2 relative z-10">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Selamat Datang Kembali, <span class="text-blue-600">{{ Auth::user()->name }}</span>! 👋
                </h2>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                    Ini adalah pusat kendali administrator untuk website SMP Mentari. Kelola kegiatan sekolah, tinjau pesan dari buku tamu pengunjung, dan atur konfigurasi dinamis website.
                </p>
            </div>
        </div>

        <!-- Metric Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Metric 1: Total Kegiatan -->
            <div class="p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm flex items-center justify-between hover:shadow-md transition-all">
                <div>
                    <p class="text-xs font-bold text-slate-400 mb-1">Total Kegiatan</p>
                    <p class="text-3xl font-extrabold text-slate-900">{{ $jumlahKegiatan ?? 0 }}</p>
                    <p class="text-xs font-semibold text-blue-600 mt-1">Kegiatan Terpublikasi</p>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-2xl font-bold">
                    📌
                </div>
            </div>

            <!-- Metric 2: Pesan Masuk -->
            <div class="p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm flex items-center justify-between hover:shadow-md transition-all">
                <div>
                    <p class="text-xs font-bold text-slate-400 mb-1">Pesan Masuk</p>
                    <p class="text-3xl font-extrabold text-slate-900">{{ $jumlahPesan ?? 0 }}</p>
                    <p class="text-xs font-semibold text-indigo-600 mt-1">Pesan Buku Tamu</p>
                </div>
                <div class="w-14 h-14 rounded-2xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 text-2xl font-bold">
                    💬
                </div>
            </div>
        </div>

        <!-- Recent Messages Preview -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm">
            <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-100">
                <h3 class="text-base font-bold text-slate-900">Pesan Terbaru dari Pengunjung</h3>
                <a href="{{ route('bukutamu.admin.index') }}" class="text-xs font-bold text-blue-600 hover:underline">
                    Lihat Semua →
                </a>
            </div>

            @if(isset($daftarPesanTamu) && $daftarPesanTamu->count() > 0)
                <div class="space-y-3">
                    @foreach($daftarPesanTamu as $pesan)
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 flex items-start justify-between gap-4">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="text-xs font-bold text-slate-900">{{ $pesan->nama }}</span>
                                    <span class="text-[11px] text-slate-400">&bull; {{ $pesan->email }}</span>
                                </div>
                                <p class="text-xs text-slate-600 leading-relaxed">{{ $pesan->pesan }}</p>
                            </div>
                            <span class="text-[10px] font-semibold text-slate-400 bg-white px-2.5 py-1 rounded-lg border border-slate-200/60 whitespace-nowrap">
                                {{ $pesan->created_at->diffForHumans() }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="p-8 text-center rounded-2xl bg-slate-50 border border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 text-lg font-bold flex items-center justify-center mx-auto mb-2">
                        💬
                    </div>
                    <p class="text-xs text-slate-500 font-semibold">Belum ada pesan yang masuk dari buku tamu.</p>
                </div>
            @endif
        </div>

    </div>
@endsection