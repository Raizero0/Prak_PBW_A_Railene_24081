@extends('layouts.app')

@section('title', 'Buku Tamu - SMP Mentari')

@section('content')
<div class="min-h-screen bg-slate-50 text-slate-800 font-sans antialiased py-12 selection:bg-blue-600 selection:text-white">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Header Section -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-semibold mb-4">
                <span>💬 Layanan Informasi Publik</span>
            </div>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-3">
                Buku Tamu Pengunjung
            </h1>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                Silakan tinggalkan pesan, saran, atau pertanyaan Anda untuk SMP Mentari Ceria. Pesan Anda sangat berharga bagi peningkatan mutu sekolah kami.
            </p>
        </div>

        <!-- Alert Success -->
        @if (session('success'))
            <div class="max-w-4xl mx-auto mb-8 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-semibold flex items-center gap-3 shadow-sm">
                <span class="w-8 h-8 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600 text-lg font-bold">✓</span>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left Column: Form Tulis Pesan -->
            <div class="lg:col-span-5 bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-lg font-bold">
                        ✏️
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-slate-900">Tulis Pesan Baru</h2>
                        <p class="text-xs text-slate-500">Lengkapi formulir di bawah ini</p>
                    </div>
                </div>

                <form action="{{ route('bukutamu.store') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div>
                        <label for="nama" class="block text-xs font-bold text-slate-700 mb-1.5">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required
                            placeholder="Masukkan nama Anda"
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('nama') border-rose-500 @enderror">
                        @error('nama')
                            <p class="text-xs text-rose-500 mt-1 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-bold text-slate-700 mb-1.5">Alamat Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            placeholder="contoh@email.com"
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('email') border-rose-500 @enderror">
                        @error('email')
                            <p class="text-xs text-rose-500 mt-1 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="pesan" class="block text-xs font-bold text-slate-700 mb-1.5">Pesan atau Tanggapan</label>
                        <textarea id="pesan" name="pesan" rows="4" required
                            placeholder="Tuliskan pesan atau masukan Anda di sini..."
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('pesan') border-rose-500 @enderror">{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <p class="text-xs text-rose-500 mt-1 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" 
                        class="w-full py-3.5 px-6 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm shadow-md shadow-blue-600/20 transition-all hover:-translate-y-0.5">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>

            <!-- Right Column: Daftar Pesan Pengunjung -->
            <div class="lg:col-span-7 space-y-4">
                <div class="flex items-center justify-between pb-3 border-b border-slate-200">
                    <h2 class="text-lg font-bold text-slate-900">Pesan Pengunjung</h2>
                    <span class="text-xs font-semibold text-slate-500">
                        Total: {{ isset($daftar_pesan) ? $daftar_pesan->count() : 0 }} Pesan
                    </span>
                </div>

                @if(isset($daftar_pesan) && $daftar_pesan->count() > 0)
                    <div class="space-y-4">
                        @foreach($daftar_pesan as $pesan)
                            <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all">
                                <div class="flex items-start justify-between gap-4 mb-2">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-xl bg-blue-100 text-blue-700 font-bold text-xs flex items-center justify-center">
                                            {{ strtoupper(substr($pesan->nama, 0, 2)) }}
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-bold text-slate-900 leading-none">{{ $pesan->nama }}</h3>
                                            <span class="text-[11px] text-slate-400 font-medium">{{ $pesan->email }}</span>
                                        </div>
                                    </div>
                                    <span class="text-[11px] text-slate-400 font-medium whitespace-nowrap bg-slate-50 px-2.5 py-1 rounded-lg border border-slate-100">
                                        {{ $pesan->created_at->format('d M Y, H:i') }}
                                    </span>
                                </div>
                                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed pt-2 border-t border-slate-100 mt-3">
                                    {{ $pesan->pesan }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="p-8 rounded-2xl bg-white border border-slate-200 text-center shadow-sm">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 text-xl font-bold flex items-center justify-center mx-auto mb-3">
                            💬
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1">Belum Ada Pesan</h3>
                        <p class="text-xs text-slate-500">Jadilah pengunjung pertama yang mengirimkan pesan untuk SMP Mentari.</p>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection