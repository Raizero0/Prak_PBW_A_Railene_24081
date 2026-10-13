@extends('layouts.app')

@section('title', 'Kegiatan Sekolah - SMP Mentari')

@section('content')

    <div class="min-h-screen bg-slate-50">

        {{-- HERO SECTION --}}
        <section class="relative overflow-hidden border-b border-blue-100 bg-gradient-to-br from-blue-50 via-white to-indigo-50">

            {{-- Dekorasi background --}}
            <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-blue-200/30 blur-3xl"></div>
            <div class="absolute -bottom-24 left-1/4 h-64 w-64 rounded-full bg-indigo-200/30 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-14 sm:px-6 md:py-20 lg:px-8">

                <div class="grid items-center gap-10 md:grid-cols-12">

                    {{-- Teks Hero --}}
                    <div class="md:col-span-8 lg:col-span-7">

                        <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white px-4 py-2 text-sm font-semibold text-blue-700 shadow-sm">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-50"></span>
                                <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-blue-600"></span>
                            </span>
                            Website Resmi SMP Mentari
                        </div>

                        <h1 class="max-w-3xl text-3xl font-extrabold leading-tight tracking-tight text-slate-800 sm:text-4xl lg:text-5xl">
                            Mengenal Lebih Dekat
                            <span class="mt-1 block bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                Kegiatan SMP Mentari
                            </span>
                        </h1>

                        <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                            Temukan berbagai kegiatan, pengalaman belajar, dan momen berharga yang menjadi bagian dari perjalanan siswa SMP Mentari.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-3">
                            <a href="#daftar-kegiatan"
                               class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-200 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-blue-200">

                                Jelajahi Kegiatan

                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>

                            <span class="inline-flex items-center gap-2 px-3 py-3 text-sm font-medium text-slate-600">
                                <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>
                                Informasi kegiatan sekolah
                            </span>
                        </div>
                    </div>

                    {{-- Ilustrasi tanpa gambar eksternal --}}
                    <div class="hidden md:col-span-4 md:flex md:justify-center lg:col-span-5">
                        <div class="relative flex h-64 w-64 items-center justify-center rounded-[2rem] border border-white bg-white/70 shadow-2xl shadow-blue-100/80 backdrop-blur sm:h-72 sm:w-72">

                            <div class="absolute inset-5 rounded-[1.5rem] bg-gradient-to-br from-blue-100 to-indigo-100"></div>

                            <div class="relative flex h-36 w-36 items-center justify-center rounded-3xl bg-gradient-to-br from-blue-500 to-indigo-600 shadow-xl shadow-blue-200">
                                <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M12 6.5l8 4.5-8 4.5-8-4.5 8-4.5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M8 13v4c2.5 2 5.5 2 8 0v-4M20 11v5"/>
                                </svg>
                            </div>

                            <div class="absolute -right-4 top-7 flex h-14 w-14 items-center justify-center rounded-2xl border border-blue-50 bg-white text-blue-600 shadow-lg">
                                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m5-4.5V12a8 8 0 11-16 0V5.5l8-3 8 3z"/>
                                </svg>
                            </div>

                            <div class="absolute -bottom-3 -left-5 rounded-2xl border border-slate-100 bg-white px-4 py-3 shadow-lg">
                                <p class="text-xs font-medium text-slate-500">Semangat belajar</p>
                                <p class="mt-1 text-sm font-bold text-blue-700">Raih Prestasi!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- DAFTAR KEGIATAN --}}
        <section id="daftar-kegiatan" class="scroll-mt-8">
            <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">

                {{-- Judul Section --}}
                <div class="mb-9 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

                    <div>
                        <div class="mb-3 flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-blue-600">
                            <span class="h-1 w-8 rounded-full bg-blue-600"></span>
                            Aktivitas Sekolah
                        </div>

                        <h2 class="text-2xl font-extrabold tracking-tight text-slate-800 sm:text-3xl">
                            Kegiatan Terbaru
                        </h2>

                        <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
                            Berbagai cerita dan aktivitas yang menjadi bagian dari kehidupan di SMP Mentari.
                        </p>
                    </div>

                    <div class="inline-flex w-fit items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-600 shadow-sm">
                        <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v13H4V6a1 1 0 011-1z"/>
                        </svg>
                        Informasi Sekolah
                    </div>

                </div>


                {{-- GRID CARD --}}
                <div class="grid grid-cols-1 items-stretch gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">

                    @forelse ($kegiatan_terbaru as $kegiatan)

                        <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-100/60">

                            {{-- Aksen atas --}}
                            <div class="h-1.5 bg-gradient-to-r from-blue-500 via-indigo-500 to-violet-500"></div>

                            {{-- Area ikon --}}
                            <div class="relative px-6 pt-6">
                                <div class="flex items-center justify-between">

                                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-600 transition duration-300 group-hover:bg-blue-600 group-hover:text-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                  d="M12 6.5l8 4.5-8 4.5-8-4.5 8-4.5z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                  d="M8 13v4c2.5 2 5.5 2 8 0v-4M20 11v5"/>
                                        </svg>
                                    </div>

                                    <span class="rounded-lg bg-slate-50 px-3 py-1.5 text-xs font-bold tracking-wide text-slate-500">
                                        KEGIATAN {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                            </div>

                            {{-- Isi card --}}
                            <div class="flex flex-1 flex-col px-6 pb-6 pt-5">

                                <h3 class="text-xl font-bold leading-snug text-slate-800 transition-colors duration-300 group-hover:text-blue-700">
                                    {{ $kegiatan->judul }}
                                </h3>

                                <div class="mb-4 mt-3 h-1 w-12 rounded-full bg-blue-100 transition-all duration-300 group-hover:w-20 group-hover:bg-blue-500"></div>

                                <p class="flex-1 whitespace-pre-line break-words text-sm leading-7 text-slate-600">
                                    {{ $kegiatan->deskripsi }}
                                </p>

                                {{-- Footer card --}}
                                <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
                                    <span class="inline-flex items-center gap-2 text-xs font-medium text-slate-500">
                                        <svg class="h-4 w-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 6.5l8 4.5-8 4.5-8-4.5 8-4.5z"/>
                                        </svg>
                                        SMP Mentari
                                    </span>

                                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-50 text-slate-400 transition duration-300 group-hover:translate-x-1 group-hover:bg-blue-50 group-hover:text-blue-600">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M5 12h14m-6-6l6 6-6 6"/>
                                        </svg>
                                    </span>
                                </div>

                            </div>
                        </article>

                    @empty

                        {{-- EMPTY STATE --}}
                        <div class="col-span-full overflow-hidden rounded-3xl border border-dashed border-blue-200 bg-white px-6 py-14 text-center shadow-sm sm:px-12">

                            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl bg-blue-50 text-blue-500">
                                <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v13H4V6a1 1 0 011-1z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M9 15h6"/>
                                </svg>
                            </div>

                            <h3 class="mt-6 text-xl font-bold text-slate-800">
                                Belum Ada Kegiatan
                            </h3>

                            <p class="mx-auto mt-3 max-w-md text-sm leading-7 text-slate-500">
                                Saat ini belum ada kegiatan yang ditampilkan. Silakan kunjungi halaman ini kembali untuk melihat informasi terbaru dari SMP Mentari.
                            </p>

                            <div class="mx-auto mt-6 h-1 w-16 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500"></div>

                        </div>

                    @endforelse

                </div>


                {{-- PENUTUP --}}
                <div class="mt-12 overflow-hidden rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 p-6 shadow-lg shadow-blue-100 sm:p-8">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/15 text-white ring-1 ring-white/20">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-lg font-bold text-white sm:text-xl">
                                    Terus Ikuti Kegiatan Kami
                                </h3>
                                <p class="mt-2 max-w-xl text-sm leading-6 text-blue-100">
                                    Dapatkan informasi mengenai berbagai aktivitas dan pengalaman menarik di SMP Mentari.
                                </p>
                            </div>
                        </div>

                        <a href="#daftar-kegiatan"
                           class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-blue-700 shadow-sm transition hover:bg-blue-50 focus:outline-none focus:ring-4 focus:ring-white/30">
                            Lihat Kegiatan
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h14m-6-6l6 6-6 6"/>
                            </svg>
                        </a>

                    </div>
                </div>

            </div>
        </section>

    </div>

@endsection