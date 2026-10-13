<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-6">
        <h2 class="text-2xl font-bold text-white tracking-tight">Selamat Datang Kembali</h2>
        <p class="text-xs text-slate-400 mt-1">Masukkan kredensial Anda untuk masuk ke portal LaraPress.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-semibold text-slate-300 mb-2">Alamat Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-rose-400" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-semibold text-slate-300 mb-2">Kata Sandi</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-rose-400" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between text-xs">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember" class="rounded bg-slate-950 border-slate-800 text-cyan-500 focus:ring-cyan-500 focus:ring-offset-slate-900">
                <span class="ms-2 text-slate-400">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-cyan-400 hover:underline font-medium">
                    Lupa kata sandi?
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-500 text-white font-bold text-sm hover:opacity-95 shadow-lg shadow-cyan-500/20 transition-all hover:scale-[1.01]">
                Masuk Sekarang
            </button>
        </div>

        <!-- Register Redirect Link -->
        <div class="text-center pt-4 border-t border-slate-800/80">
            <p class="text-xs text-slate-400">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-cyan-400 font-bold hover:underline ms-1">
                    Daftar di sini
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>