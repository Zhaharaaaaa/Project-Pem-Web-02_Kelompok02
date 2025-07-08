<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pengguna;

class PenggunaPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa','staff']);
    }

    public function view(User $user, Pengguna $pengguna): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa', 'staff']);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa']);
    }

    public function update(User $user, Pengguna $pengguna): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa']);
    }

    public function delete(User $user, Pengguna $pengguna): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa']);
    }
}
