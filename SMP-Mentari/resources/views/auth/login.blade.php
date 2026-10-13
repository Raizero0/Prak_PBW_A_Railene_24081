<x-guest-layout>
    <div class="min-h-screen bg-slate-50 flex flex-col justify-center items-center py-12 px-6 font-sans antialiased selection:bg-blue-600 selection:text-white">
        
        <!-- Header Brand Logo -->
        <div class="mb-8 text-center">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center font-extrabold text-white text-2xl shadow-lg shadow-blue-600/20 group-hover:scale-105 transition-transform">
                    M
                </div>
                <span class="text-2xl font-extrabold tracking-tight text-slate-900 group-hover:text-blue-600 transition-colors">
                    SMP <span class="text-blue-600">Mentari</span>
                </span>
            </a>
        </div>

        <!-- Login Card -->
        <div class="w-full max-w-md bg-white border border-slate-200/80 rounded-3xl p-8 shadow-xl shadow-slate-200/60">
            
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Masuk ke Akun</h1>
                <p class="text-xs text-slate-500 mt-1">Masukkan kredensial Anda untuk mengakses panel pengurus</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-xs font-semibold text-emerald-600 bg-emerald-50 p-3 rounded-xl border border-emerald-200" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-xs font-bold text-slate-700 mb-1.5">Alamat Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        placeholder="nama@email.com"
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('email') border-rose-500 @enderror">
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-rose-500 font-semibold" />
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-xs font-bold text-slate-700">Kata Sandi</label>
                        @if (Route::has('password.request'))
                            <a class="text-xs font-bold text-blue-600 hover:underline" href="{{ route('password.request') }}">
                                Lupa sandi?
                            </a>
                        @endif
                    </div>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('password') border-rose-500 @enderror">
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-rose-500 font-semibold" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input id="remember_me" type="checkbox" name="remember" class="rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500">
                        <span class="ms-2 text-xs font-semibold text-slate-600">Ingat saya di perangkat ini</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm shadow-md shadow-blue-600/20 transition-all hover:-translate-y-0.5">
                    Masuk Sekarang
                </button>
            </form>

            <!-- Footer Link -->
            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-xs text-slate-500 font-semibold">
                    Belum memiliki akun?
                    <a href="{{ route('register') }}" class="text-blue-600 font-bold hover:underline ms-1">
                        Daftar Akun Baru
                    </a>
                </p>
            </div>

        </div>

        <!-- Back to Home Link -->
        <a href="{{ url('/') }}" class="mt-6 text-xs font-bold text-slate-500 hover:text-blue-600 transition-colors">
            ← Kembali ke Halaman Utama
        </a>

    </div>
</x-guest-layout>