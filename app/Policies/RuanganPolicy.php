<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Ruangan;

class RuanganPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'mahasiswa']);
    }

    public function view(User $user, Ruangan $pemesanan): bool
    {
        return in_array($user->role, ['admin', 'staff', 'mahasiswa']);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function update(User $user, Ruangan $pemesanan): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function delete(User $user, Ruangan $pemesanan): bool
    {
        return $user->role === 'admin';
    }
}