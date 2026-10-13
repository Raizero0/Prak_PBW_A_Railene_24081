<x-guest-layout>
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-white tracking-tight">Buat Akun Baru</h2>
        <p class="text-xs text-slate-400 mt-1">Daftarkan diri Anda untuk mengakses portal LaraPress.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-xs font-semibold text-slate-300 mb-1.5">Nama Lengkap</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error :messages="$errors->get('name')" class="mt-1.5 text-xs text-rose-400" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-semibold text-slate-300 mb-1.5">Alamat Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs text-rose-400" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-semibold text-slate-300 mb-1.5">Kata Sandi</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs text-rose-400" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-xs font-semibold text-slate-300 mb-1.5">Konfirmasi Kata Sandi</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5 text-xs text-rose-400" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-500 text-white font-bold text-sm hover:opacity-95 shadow-lg shadow-cyan-500/20 transition-all hover:scale-[1.01]">
                Daftar Akun
            </button>
        </div>

        <!-- Login Redirect Link -->
        <div class="text-center pt-3 border-t border-slate-800/80">
            <p class="text-xs text-slate-400">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-cyan-400 font-bold hover:underline ms-1">
                    Masuk di sini
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>