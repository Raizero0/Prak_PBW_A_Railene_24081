<nav x-data="{ open: false }" class="border-b border-slate-800/80 backdrop-blur-md sticky top-0 z-50 bg-slate-950/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center gap-8">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-indigo-500 flex items-center justify-center font-extrabold text-white text-xl shadow-lg shadow-cyan-500/20 group-hover:scale-105 transition-transform">
                        L
                    </div>
                    <span class="text-xl font-bold tracking-tight text-white group-hover:text-cyan-400 transition-colors">
                        Lara<span class="text-cyan-400">Press</span>
                    </span>
                </a>

                <!-- Navigation Links -->
                <div class="hidden sm:flex items-center gap-6 text-sm font-semibold">
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-cyan-400 border-b-2 border-cyan-400 py-6' : 'text-slate-300 hover:text-cyan-400 transition-colors py-6' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-cyan-400 border-b-2 border-cyan-400 py-6' : 'text-slate-300 hover:text-cyan-400 transition-colors py-6' }}">
                        Tentang Kami
                    </a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-cyan-400 border-b-2 border-cyan-400 py-6' : 'text-slate-300 hover:text-cyan-400 transition-colors py-6' }}">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            <!-- User Dropdown Menu -->
            <div class="hidden sm:flex sm:items-center">
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 border border-slate-800 text-sm font-semibold text-slate-200 hover:border-cyan-500/50 hover:text-white transition-all">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 text-slate-400 fill-current" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open" @click.outside="open = false" x-transition class="absolute right-0 mt-2 w-48 rounded-xl bg-slate-900 border border-slate-800 shadow-2xl py-2 z-50">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-xs font-semibold text-slate-300 hover:bg-slate-800 hover:text-cyan-400 transition-colors">
                            Pengaturan Profil
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left block px-4 py-2 text-xs font-semibold text-rose-400 hover:bg-slate-800 transition-colors">
                                Keluar (Log Out)
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="p-2 rounded-lg bg-slate-900 border border-slate-800 text-slate-400 hover:text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Responsive Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-slate-800 bg-slate-950 px-4 pt-2 pb-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="block py-2 text-sm font-semibold text-slate-300 hover:text-cyan-400">Dashboard</a>
        <a href="{{ route('about') }}" class="block py-2 text-sm font-semibold text-slate-300 hover:text-cyan-400">Tentang Kami</a>
        <a href="{{ route('contact') }}" class="block py-2 text-sm font-semibold text-slate-300 hover:text-cyan-400">Hubungi Kami</a>
        <a href="{{ route('profile.edit') }}" class="block py-2 text-sm font-semibold text-slate-300 hover:text-cyan-400">Pengaturan Profil</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left py-2 text-sm font-semibold text-rose-400">Log Out</button>
        </form>
    </div>
</nav>