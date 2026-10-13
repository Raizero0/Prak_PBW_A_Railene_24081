@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-slate-50 text-slate-800 font-sans antialiased py-8 selection:bg-blue-600 selection:text-white">
        <div class="max-w-6xl mx-auto px-6">
            
            <!-- Header Banner Admin -->
            <div class="mb-8 p-6 sm:p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-semibold mb-3">
                        <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span> Panel Kontrol Admin
                    </span>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        @yield('admin_title', 'Area Administrator')
                    </h1>
                </div>
                <div class="text-xs font-semibold text-slate-400 bg-slate-50 px-3.5 py-2 rounded-xl border border-slate-100 self-start md:self-auto">
                    SMP Mentari Management System
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Sidebar Navigation -->
                <aside class="lg:col-span-3">
                    <div class="bg-white border border-slate-200/80 rounded-3xl p-5 shadow-sm sticky top-24 space-y-6">
                        
                        <!-- Nav Section: Master -->
                        <div>
                            <h3 class="text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-3 px-3">Section Master</h3>
                            <nav class="space-y-1">
                                <a href="{{ route('dashboard') }}" 
                                   class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}">
                                    <span>📊</span> Dashboard
                                </a>
                                <a href="{{ route('kegiatan.index') }}" 
                                   class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('kegiatan.*') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}">
                                    <span>📌</span> Kelola Kegiatan
                                </a>
                                <a href="{{ route('bukutamu.admin.index') }}" 
                                   class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('bukutamu.admin.*') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}">
                                    <span>✉️</span> Buku Tamu
                                </a>
                            </nav>
                        </div>

                        <!-- Nav Section: Settings -->
                        <div class="border-t border-slate-100 pt-4">
                            <h3 class="text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-3 px-3">Pengaturan</h3>
                            <nav class="space-y-1">
                                <a href="{{ route('settings.index') }}" 
                                   class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('settings.*') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/20' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}">
                                    <span>⚙️</span> Konfigurasi Website
                                </a>
                            </nav>
                        </div>

                    </div>
                </aside>

                <!-- Main Admin Content Area -->
                <main class="lg:col-span-9 space-y-6">
                    @yield('admin_content')
                </main>

            </div>
        </div>
    </div>
@endsection