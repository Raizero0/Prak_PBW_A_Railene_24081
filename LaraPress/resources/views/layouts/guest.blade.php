<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LaraPress') }} — Autentikasi</title>

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
    <body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-center items-center py-10 selection:bg-cyan-500 selection:text-white relative overflow-x-hidden">

        <!-- Background Glow -->
        <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-gradient-to-br from-cyan-600/20 via-indigo-600/10 to-transparent blur-3xl -z-10 pointer-events-none"></div>

        <!-- Logo LaraPress -->
        <div class="mb-6 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-cyan-500 to-indigo-500 flex items-center justify-center font-extrabold text-white text-2xl shadow-lg shadow-cyan-500/20 group-hover:scale-105 transition-transform">
                    L
                </div>
                <span class="text-2xl font-extrabold tracking-tight text-white group-hover:text-cyan-400 transition-colors">
                    Lara<span class="text-cyan-400">Press</span>
                </span>
            </a>
        </div>

        <!-- Container Card Glassmorphism -->
        <div class="w-full sm:max-w-md px-8 py-8 bg-slate-900/80 border border-slate-800/80 shadow-2xl backdrop-blur-xl rounded-2xl">
            {{ $slot }}
        </div>

        <!-- Link Kembali -->
        <div class="mt-6">
            <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-cyan-400 font-semibold transition-colors">
                Kembali ke Halaman Utama
            </a>
        </div>

    </body>
</html>