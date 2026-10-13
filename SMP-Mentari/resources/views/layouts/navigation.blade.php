<nav x-data="{ open: false }" class="bg-white/90 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-50 text-slate-800">
    <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">

        <!-- Logo Brand -->
        <a href="{{ url('/') }}" class="flex items-center gap-3 group">
            <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center font-extrabold text-white text-xl shadow-md shadow-blue-600/20 group-hover:scale-105 transition-transform">
                M
            </div>
            <span class="text-xl font-extrabold tracking-tight text-slate-900 group-hover:text-blue-600 transition-colors">
                SMP <span class="text-blue-600">Mentari</span>
            </span>
        </a>

        <!-- Navigation Links (Desktop) -->
        <div class="hidden md:flex items-center gap-8 text-sm font-semibold">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-blue-600 font-bold' : 'text-slate-600 hover:text-blue-600' }} transition-colors">
                Berita & Kegiatan
            </a>
            <a href="{{ url('/bukutamu') }}" class="{{ request()->is('bukutamu*') ? 'text-blue-600 font-bold' : 'text-slate-600 hover:text-blue-600' }} transition-colors">
                Buku Tamu
            </a>
            @auth
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard*') ? 'text-blue-600 font-bold' : 'text-slate-600 hover:text-blue-600' }} transition-colors">
                    Dashboard Admin
                </a>
            @endauth
        </div>

        <!-- Auth Action Buttons (Desktop) -->
        <div class="hidden md:flex items-center gap-3">
            @auth
                <div class="relative" x-data="{ openDropdown: false }">
                    <button @click="openDropdown = !openDropdown" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 text-xs font-bold text-slate-700 hover:border-blue-300 hover:text-slate-900 transition-all">
                        <span>👤 {{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="openDropdown" @click.outside="openDropdown = false" x-transition class="absolute right-0 mt-2 w-48 rounded-xl bg-white border border-slate-200 shadow-xl py-2 z-50">
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-xs font-semibold text-slate-700 hover:bg-slate-50 hover:text-blue-600">Dashboard Admin</a>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-xs font-semibold text-slate-700 hover:bg-slate-50 hover:text-blue-600">Pengaturan Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left block px-4 py-2 text-xs font-semibold text-rose-600 hover:bg-rose-50">Log Out</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 rounded-lg text-xs font-semibold text-slate-600 hover:text-slate-900 transition-colors">
                    Log in
                </a>
                <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs shadow-md shadow-blue-600/20 transition-all hover:-translate-y-0.5">
                    Register
                </a>
            @endauth
        </div>

        <!-- Mobile Hamburger Button -->
        <div class="md:hidden">
            <button @click="open = !open" class="p-2 rounded-lg bg-slate-100 border border-slate-200 text-slate-600 hover:text-slate-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>

    </div>

    <!-- Mobile Menu Drawer -->
    <div x-show="open" x-transition class="md:hidden border-t border-slate-200 bg-white px-6 py-4 space-y-3">
        <a href="{{ url('/') }}" class="block text-sm font-semibold text-slate-700 hover:text-blue-600">Berita & Kegiatan</a>
        <a href="{{ url('/bukutamu') }}" class="block text-sm font-semibold text-slate-700 hover:text-blue-600">Buku Tamu</a>
        @auth
            <a href="{{ route('dashboard') }}" class="block text-sm font-semibold text-slate-700 hover:text-blue-600">Dashboard Admin</a>
            <a href="{{ route('profile.edit') }}" class="block text-sm font-semibold text-slate-700 hover:text-blue-600">Pengaturan Profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left text-sm font-semibold text-rose-600">Log Out</button>
            </form>
        @else
            <div class="pt-2 border-t border-slate-100 flex items-center gap-3">
                <a href="{{ route('login') }}" class="block text-sm font-semibold text-slate-700">Log in</a>
                <a href="{{ route('register') }}" class="px-4 py-2 rounded-xl bg-blue-600 text-white font-bold text-xs">Register</a>
            </div>
        @endauth
    </div>
</nav>