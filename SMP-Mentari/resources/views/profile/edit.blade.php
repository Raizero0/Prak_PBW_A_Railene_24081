@extends('layouts.app')

@section('title', 'Pengaturan Profil - SMP Mentari')

@section('content')
<div class="min-h-screen bg-slate-50 text-slate-800 font-sans antialiased py-10 selection:bg-blue-600 selection:text-white">
    <div class="max-w-4xl mx-auto px-6 space-y-8">

        <!-- Header Title Banner -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-semibold mb-2">
                    👤 Akun Pengurus
                </span>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Pengaturan Profil
                </h1>
            </div>
            <div class="text-xs font-semibold text-slate-500 bg-slate-50 px-3.5 py-2 rounded-xl border border-slate-100 self-start sm:self-auto">
                {{ Auth::user()->email }}
            </div>
        </div>

        <!-- 1. Form Update Informasi Profil -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-lg font-bold">
                    📝
                </div>
                <div>
                    <h2 class="text-lg font-bold text-slate-900">Informasi Profil</h2>
                    <p class="text-xs text-slate-500">Perbarui nama dan alamat email akun Anda</p>
                </div>
            </div>

            @include('profile.partials.update-profile-information-form')
        </div>

        <!-- 2. Form Update Password -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-slate-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-lg font-bold">
                    🔑
                </div>
                <div>
                    <h2 class="text-lg font-bold text-slate-900">Perbarui Kata Sandi</h2>
                    <p class="text-xs text-slate-500">Gunakan kata sandi yang kuat untuk menjaga keamanan akun</p>
                </div>
            </div>

            @include('profile.partials.update-password-form')
        </div>

        <!-- 3. Form Hapus Akun -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white border border-rose-200 shadow-sm space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-rose-100">
                <div class="w-10 h-10 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-600 text-lg font-bold">
                    ⚠️
                </div>
                <div>
                    <h2 class="text-lg font-bold text-slate-900">Hapus Akun</h2>
                    <p class="text-xs text-rose-500 font-medium">Tindakan ini permanen dan tidak dapat dibatalkan</p>
                </div>
            </div>

            @include('profile.partials.delete-user-form')
        </div>

    </div>
</div>
@endsection