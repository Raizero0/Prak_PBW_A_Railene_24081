<?php

namespace App\Policies;

use App\Models\Author;
use App\Models\User;

class AuthorPolicy
{
    // Semua role boleh lihat list
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    // Semua role boleh lihat detail
    public function view(User $user, Author $author): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer']);
    }

    // Admin & staff boleh create
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    // Admin & staff boleh edit
    public function update(User $user, Author $author): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    // Hanya admin boleh hapus
    public function delete(User $user, Author $author): bool
    {
        return $user->role === 'admin';
    }

    // Hanya admin boleh bulk delete
    public function deleteAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Author $author): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Author $author): bool
    {
        return $user->role === 'admin';
    }
}