<section>
    <header class="mb-6">
        <h3 class="text-xl font-bold text-white">Informasi Profil</h3>
        <p class="text-xs text-slate-400 mt-1">Perbarui data profil akun dan alamat email Anda.</p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-5">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="block text-xs font-semibold text-slate-300 mb-2">Nama Lengkap</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"
                class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error class="mt-2 text-xs text-rose-400" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block text-xs font-semibold text-slate-300 mb-2">Alamat Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username"
                class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
            <x-input-error class="mt-2 text-xs text-rose-400" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-6 py-3 rounded-xl bg-cyan-500 text-slate-950 font-bold text-sm hover:bg-cyan-400 shadow-md transition-all">
                Simpan Perubahan
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-xs text-emerald-400 font-semibold">
                    Tersimpan!
                </p>
            @endif
        </div>
    </form>
</section>