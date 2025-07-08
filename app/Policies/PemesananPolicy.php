<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pemesanan;

class PemesananPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff','mahasiswa']);
    }

    public function view(User $user, Pemesanan $pemesanan): bool
    {
        return in_array($user->role, ['admin', 'staff', 'mahasiswa']);
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function update(User $user, Pemesanan $pemesanan): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function delete(User $user, Pemesanan $pemesanan): bool
    {
        return $user->role === 'admin';
    }
}