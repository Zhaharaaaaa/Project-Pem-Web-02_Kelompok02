<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Peminjaman;

class PeminjamanPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'mahasiswa']);
    }

    public function view(User $user, Peminjaman $peminjaman): bool
    {
        return in_array($user->role, ['admin', 'staff', 'mahasiswa']);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa']);
    }

    public function update(User $user, Peminjaman $peminjaman): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa']);
    }

    public function delete(User $user, Peminjaman $peminjaman): bool
    {
        return in_array($user->role, ['admin', 'mahasiswa']);
    }
}
