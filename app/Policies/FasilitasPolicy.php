<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Fasilitas;

class FasilitasPolicy
{
   
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'mahasiswa']);
    }

    public function view(User $user, Fasilitas $fasilitas): bool
    {
        return in_array($user->role, ['admin', 'staff', 'mahasiswa']);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function update(User $user, Fasilitas $fasilitas): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function delete(User $user, Fasilitas $fasilitas): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function restore(User $user, Fasilitas $fasilitas): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Fasilitas $fasilitas): bool
    {
        return $user->role === 'admin';
    }
}
