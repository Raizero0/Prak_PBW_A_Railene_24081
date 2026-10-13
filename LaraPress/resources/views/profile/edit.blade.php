<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-white tracking-tight">
            Pengaturan Profil Akun
        </h2>
    </x-slot>

    <div class="space-y-8">
        <!-- Update Profile Information Form -->
        <div class="p-8 rounded-2xl bg-slate-900/80 border border-slate-800/80 shadow-xl backdrop-blur-xl">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Update Password Form -->
        <div class="p-8 rounded-2xl bg-slate-900/80 border border-slate-800/80 shadow-xl backdrop-blur-xl">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Delete User Form -->
        <div class="p-8 rounded-2xl bg-slate-900/80 border border-slate-800/80 shadow-xl backdrop-blur-xl">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>