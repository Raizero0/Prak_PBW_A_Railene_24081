<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LaraPress') }} — Dashboard</title>

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
        <!-- AlpineJS -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-cyan-500 selection:text-white relative overflow-x-hidden">

        <!-- Background Glow -->
        <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-gradient-to-br from-cyan-600/15 via-indigo-600/10 to-transparent blur-3xl -z-10 pointer-events-none"></div>

        <!-- Navigation Bar -->
        @include('layouts.navigation')

        <!-- Page Header -->
        @if (isset($header))
            <header class="border-b border-slate-800/60 bg-slate-950/40 backdrop-blur-sm">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Main Content -->
        <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="border-t border-slate-900 py-6 bg-slate-950/90 text-center text-xs text-slate-500">
            <p>&copy; 2026 LaraPress. Dibuat untuk Praktikum Pemrograman Berbasis Web.</p>
        </footer>

    </body>
</html>