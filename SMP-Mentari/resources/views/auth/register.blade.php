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

        <!-- Register Card -->
        <div class="w-full max-w-md bg-white border border-slate-200/80 rounded-3xl p-8 shadow-xl shadow-slate-200/60">
            
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Daftar Akun Baru</h1>
                <p class="text-xs text-slate-500 mt-1">Lengkapi data di bawah ini untuk pendaftaran akun pengurus</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-xs font-bold text-slate-700 mb-1.5">Nama Lengkap</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                        placeholder="Nama lengkap Anda"
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('name') border-rose-500 @enderror">
                    <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs text-rose-500 font-semibold" />
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-xs font-bold text-slate-700 mb-1.5">Alamat Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                        placeholder="nama@email.com"
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('email') border-rose-500 @enderror">
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-rose-500 font-semibold" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-xs font-bold text-slate-700 mb-1.5">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        placeholder="Minimal 8 karakter"
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('password') border-rose-500 @enderror">
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-rose-500 font-semibold" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-xs font-bold text-slate-700 mb-1.5">Konfirmasi Kata Sandi</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                        placeholder="Ulangi kata sandi"
                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-600 focus:bg-white transition-all @error('password_confirmation') border-rose-500 @enderror">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs text-rose-500 font-semibold" />
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm shadow-md shadow-blue-600/20 transition-all hover:-translate-y-0.5 mt-2">
                    Daftar Akun Sekarang
                </button>
            </form>

            <!-- Footer Link -->
            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-xs text-slate-500 font-semibold">
                    Sudah memiliki akun?
                    <a href="{{ route('login') }}" class="text-blue-600 font-bold hover:underline ms-1">
                        Masuk di Sini
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